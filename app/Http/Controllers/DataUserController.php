<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\dataUser;
use Validator;
use App\type_jobs; 
use App\roles;
use App\experience;
use App\language;
use App\educational;
use App\cvlang;
use App\User;

class DataUserController extends Controller
{
      public function __construct(){
        $this->middleware('user');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    public function experience()
    {
        return view('yourData.experience')->with('languagesFrom',language::all())
                                          ->with('languagesTake',cvlang::all()->where('user_id',Auth::id()));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'salary' => 'numeric|required',
            'level' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_day' => 'numeric|required',
            'birth_month' => 'numeric|required',
            'birth_year' => 'numeric|required',
            'gender' => 'required',
            'nationality' => 'required',
            'marital_status' => 'required',
            'military_status' => 'required',
            'driving_license' => 'required',
            'country' => 'required',
            'city' => 'required',
            'area' => 'required',
            'mobile_number' => 'required|string|max:11',
            "typeJobs"=>"required"
        ]);

        if ($validator->passes()) {

            $user = dataUser::where('user_id',Auth::id())->first();
            if ($user) {

                    $user->update([
                        'salary' => $request->salary,
                        'level' => $request->level,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'birth_day' => $request->birth_day,
                        'birth_month' => $request->birth_month,
                        'birth_year' => $request->birth_year,
                        'gender' => $request->gender,
                        'nationality' => $request->nationality,
                        'marital_status' => $request->marital_status,
                        'military_status' => $request->military_status,
                        'driving_license' => $request->driving_license,
                        'country' => $request->country,
                        'city' => $request->city,
                        'area' => $request->area,
                        'mobile_number' => $request->mobile_number,
                        'user_id' =>  Auth::id()
                     ]);

                     $user->type_jobs()->sync($request->typeJobs);
                     $user->roles()->sync($request->roles);

                     return response()->json(['success'=>'update new records.']);

            } else {

            $dataUser = dataUser::create([
                'salary' => $request->salary,
                'level' => $request->level,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'birth_day' => $request->birth_day,
                'birth_month' => $request->birth_month,
                'birth_year' => $request->birth_year,
                'gender' => $request->gender,
                'nationality' => $request->nationality,
                'marital_status' => $request->marital_status,
                'military_status' => $request->military_status,
                'driving_license' => $request->driving_license,
                'country' => $request->country,
                'city' => $request->city,
                'area' => $request->area,
                'mobile_number' => $request->mobile_number,
                'user_id' =>  Auth::id()
        ]);
            $dataUser->type_jobs()->attach($request->typeJobs);
            $dataUser->roles()->attach($request->roles);
            return response()->json(['success'=>'Added new records.']);
        }
        }

    	return response()->json(['error'=>$validator->errors()->all()]);
         
        
    }


    function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       'years_of_experience'  => 'required',
       'job_title.*'  => 'required',
       'company.*'  => 'required',
       'job_role.*'  => 'required',
       'experience_type.*'  => 'required',
       'starting_m.*'  => 'numeric|required',
       'starting_y.*'  => 'numeric|required',
       'ending_m.*'  => 'required',
       'ending_y.*'  => 'required',
      );
      $customMessages = [
        'required' => 'The field is required.',
      ];
      $error = Validator::make($request->all(), $rules, $customMessages);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }
      $years_of_experience = $request->years_of_experience;
      $job_title = $request->job_title;
      $company = $request->company;
      $job_role = $request->job_role;
      $experience_type = $request->experience_type;
      $starting_m = $request->starting_m;
      $starting_y = $request->starting_y;
      $ending_m = $request->ending_m;
      $ending_y = $request->ending_y;
      for($count = 0; $count < count($job_title); $count++)
      {
       $data = array(
        'years_of_experience'  => $years_of_experience,
        'job_title' => $job_title[$count],
        'company'  => $company[$count],
        'job_role' => $job_role[$count],
        'experience_type'  => $experience_type[$count],
        'starting_m'  => $starting_m[$count],
        'starting_y'  => $starting_y[$count],
        'ending_m'  => $ending_m[$count],
        'ending_y'  => $ending_y[$count],
        'user_id'  =>  Auth::id()
       );
       $insert_data[] = $data; 
      }

      experience::insert($insert_data);
      return response()->json([
       'success'  => 'your Experiences Added successfully.'
      ]);
     }
    }

    public function storeEducational(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'educational_level' => 'required',
            'degree_details' => 'required',
            'university_institution' => 'required',
            'your_degree' => 'required',
            'grade' => 'required',
            'skills' => 'required',
            'featrued' => "required|mimes:pdf,doc,docx|max:2048",
        ]);

        if ($validator->passes()) {

            $userineducational = educational::where('user_id',Auth::id())->first();
            if ($userineducational) {

                    if($request->hasFile('featrued')){
                        $featrued = $request->featrued; 
                        $featrued_new_name = time().$featrued->getClientOriginalName(); 
                        $featrued->move('uploads/',$featrued_new_name); 
                        $userineducational->featrued = 'uploads/'.$featrued_new_name;   
                    }

                    $userineducational->update([
                        'educational_level' => $request->educational_level,
                        'degree_details' => $request->degree_details,
                        'university_institution' => $request->university_institution,
                        'your_degree' => $request->your_degree,
                        'grade' => $request->grade,
                        'skills' => $request->skills,
                        'user_id' =>  Auth::id()
                     ]);
                     
                     $id = Auth::id();
                     $user = User::find($id); 
                     $user->user = 1; 
                     $user->save(); 
                    
                     return response()->json(['success'=>'update new records.']);

            } else {

                $featrued = $request->featrued; 
                $featrued_new_name = time().$featrued->getClientOriginalName(); 
                $featrued->move('uploads/',$featrued_new_name); 
                $educational = educational::create([
                    'educational_level' => $request->educational_level,
                    'degree_details' => $request->degree_details,
                    'university_institution' => $request->university_institution,
                    'your_degree' => $request->your_degree,
                    'grade' => $request->grade,
                    'skills' => $request->skills,
                    "featrued"   => 'uploads/'.$featrued_new_name,
                    'user_id' =>  Auth::id()
                ]);
            
            $id = Auth::id();
            $user = User::find($id); 
            $user->user = 1; 
            $user->save(); 
            
            return response()->json(['success'=>'Added new records.']);
        }
        }

    	return response()->json(['error'=>$validator->errors()->all()]);     
    }

    function fetch_lang(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('cvlangs')->where('user_id',Auth::id())->get();
            echo json_encode($data);
        }
    }

    public function storelang(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'proficiency' => 'required',
        ]);

        if ($validator->passes()) {

            $cvlang = cvlang::create([
                'name' => $request->name,
                'proficiency' => $request->proficiency,
                'user_id' =>  Auth::id()
            ]);
            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);  
    }
    
}
