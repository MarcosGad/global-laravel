@include('include.header')
<style>
 body{
    background-color: #f2f2f2;
 }
</style>
<div class="container start-pages">

<ul class="step-progressbar">
  <li class="step-progressbar__item step-progressbar__item--complete">General</li>
  <li class="step-progressbar__item step-progressbar__item--active">Professional</li>
</ul>

<form method="post" name="dynamic_form" id="dynamic_form" class="needs-validation" novalidate>
<div class="card">
        <div class="card-body">
            <h3>YHow many years of experience do you have??</h3>
        <div class="form-group row">
            <div class="col-md-4">
               <select name="years_of_experience" class="form-control" id="experience" autocomplete="experience">
                    <option>no experience</option>
                    <option data-show="show">less than 1 year</option>
                    <option data-show="show">1 year</option>
                    <option data-show="show">2 year</option>
                    <option data-show="show">3 year</option>
                    <option data-show="show">4 year</option>
                    <option data-show="show">5 year</option>
                    <option data-show="show">6 year</option>
                    <option data-show="show">7 year</option>
                    <option data-show="show">8 year</option>
                    <option data-show="show">more than 8 year</option>
               </select>
            </div>
            
        </div>
    </div>
</div>

<span id="result"></span>
<a id="show-agin" class="toggle btn btn-primary">Add More Experience</a>

<div class="hide" id="show">
        @csrf
        <span id="apend"></span>
        <input type="submit" name="dynamic_form" id="save" class="btn btn-primary" value="Save" />      
        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td></tr>
</div>
</form>


<div class="row justify-content-center">
        <div class="col-md-12">      

        <div class="alert alert-danger print-error-msg" style="display:none">
          <ul></ul>
        </div>

<form enctype="multipart/form-data" method="POST" id="educational" class="needs-validation" novalidate>
    {{ csrf_field() }}

        <div class="card">
                <div class="card-body">
                    <h3>Educational Level?</h3>
                <div class="form-group row">
                    <div class="col-md-4">
                    <select name="educational_level" id="educational_level" autocomplete="educational_level">
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                            <option>Four</option>
                            <option>Five</option>
                            <option>Six</option>
                    </select>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="card">
                    <div class="card-body">
                        <h3>Degree Details</h3>
                    <div class="form-group row">
                        <div class="col-md-12">
                        <input type="text" class="form-control" id="degree_details" name="degree_details" data-role="tagsinput" value="" autocomplete="degree_details">
                        </div> 
                        </div>
                    </div>
            </div>
            
            <div class="card">
                    <div class="card-body">
                        <h3>University Institution</h3>
                    <div class="form-group row">
                        <div class="col-md-12">
                        <input type="text" class="form-control" id="university_institution" name="university_institution" value="" autocomplete="university_institution">
                        </div> 
                        </div>
                    </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3>Your Degree?</h3>
                <div class="form-group row">
                    <div class="col-md-4">
                    <select name="your_degree" id="your_degree" autocomplete="your_degree">
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                            <option>Four</option>
                            <option>Five</option>
                            <option>Six</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
                <div class="card-body">
                    <h3>Grade?</h3>
                <div class="form-group row">
                    <div class="col-md-4">
                    <select name="grade" id="grade" autocomplete="grade">
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                            <option>Four</option>
                            <option>Five</option>
                            <option>Six</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>


          <div class="card">
                    <div class="card-body">
                        <h3>Skills</h3>
                    <div class="form-group row">
                        <div class="col-md-12">
                        <input type="text" id="skills" name="skills" data-role="tagsinput" value="" autocomplete="skills">
                        </div> 
                        </div>
                    </div>
            </div>

            <div class="card">
                    <div class="card-body">
                    <h3>What languages do you know?</h3>
                    <div class="input_fields_wrap">
                    <div class="form-group row">
                        
                            <div class="col-md-4">
                            <?php 
                                $languagesRemove = array();
                                foreach($languagesTake as $language){
                                    array_push($languagesRemove, $language['name']);
                                };
                                $langFrom = array();
                                foreach($languagesFrom as $language){
                                    array_push($langFrom, $language['language']);
                                };
                                $languages = $langFrom;
                                $languagesDone = \array_diff($languages, $languagesRemove);
                            ?>
                            <select class="form-control" id="name">
                                    <option value="" selected disabled>Please select</option>
                                        @foreach($languagesDone as $language)
                                        <option value="{{$language}}" class="languages">{{$language}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="col-md-4">
                                        <select id="proficiency" class="form-control">
                                            <option value="" selected disabled>Please select</option>
                                            <option value="good">Good</option>
                                            <option value="bad">Bad</option>
                                        </select>
                            </div> 

                        <div class="col-md-1">
                        <i class="btn btn-primary add-lang" id="butsave">Add Languages</i>
                        </div>
                        </div> 
                    </div>
                    <div class="yourLang"></div>
                </div>
            </div>

            <div class="card">
                    <div class="card-body">
                        <h3>Upload Your CV</h3>
                    <div class="form-group row">
                        <div class="col-md-12">
                        <input type="file" id="featrued" class="form-control-file" name="featrued">
                        </div> 
                        </div>
                    </div>
            </div>
            

            <div class="form-group row">
                <div class="col-md-4">
                    <i type="submit" class="btn btn-primary" id="educational_btn">Save And Next</i>
                </div>
            </div>
</form>
</div>
</div>
</div>
</div>



@include('include.footer')

<script>
$(document).ready(function(){

 $('#show-agin').hide();
 var count = 1;
 dynamic_field(count);
 function dynamic_field(number)
 {
  html = `
<span id="apend">
<div class="card">
        <div class="card-body">
        <div class="form-group row">
            <div class="col-md-6">
            <label for="job_title" class="col-md-8 col-form-label text-md-left">Job Title</label>
            <input id="job_title" value="" type="text" class="form-control" name="job_title[]" autocomplete="job_title" required>
        </div>
                
        <div class="col-md-6">
            <label for="company" class="col-md-8 col-form-label text-md-left">Company/Organization Name</label>
            <input id="company" value="" type="text" class="form-control" name="company[]" autocomplete="company" required>
        </div>
</div>
<div class="card">
        <div class="card-body">
        <div class="form-group row">
            <div class="col-md-6">
            <label for="job_role" class="col-md-8 col-form-label text-md-left">Job Role</label>
            <select name="job_role[]" class="form-control" id="job_role" autocomplete="job_role">
                    <option value="" selected disabled>Please select</option>
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
            </select>
        </div>
                
        <div class="col-md-6">
            <label for="experience_type" class="col-md-8 col-form-label text-md-left">Experience Type</label>
            <select name="experience_type[]" class="form-control" id="experience_type" autocomplete="experience_type">
                    <option value="" selected disabled>Please select</option>
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
            </select>
        </div>
</div>


        <div class="form-group row">
            <div class="col-md-6">
            <label class="col-md-8 col-form-label text-md-left">Starting From</label>
            <div class="row">
                <div class="col-md-6">
                <select name="starting_m[]" class="form-control" id="starting_m" autocomplete="starting_m">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                </select>
                </div>
                <div class="col-md-6">
                <select name="starting_y[]" class="form-control" id="starting_y" autocomplete="starting_y">
                        <option>2015</option>
                        <option>2014</option>
                        <option>2013</option>
                        <option>2012</option>
                        <option>2011</option>
                </select>
                </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="answer">        
            <label class="col-md-8 col-form-label text-md-left">Ending In</label>
            <div class="row">
                <div class="col-md-6">
                <select name="ending_m[]" class="form-control" id="ending_m" autocomplete="ending_m">
                       <option>Now</option>
                       <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                </select>
                </div>
                <div class="col-md-6">
                <select name="ending_y[]" class="form-control" id="ending_y" autocomplete="ending_y">
                        <option>Now</option>
                        <option>2015</option>
                        <option>2014</option>
                        <option>2013</option>
                        <option>2012</option>
                        <option>2011</option>
                </select>
                </div>
            </div>
        </div>
        </div>
</div>
`;
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Cancel</button></td></tr>';
            $('#apend').append(html);
        }
        else
        {   
            $('#apend').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("#apend").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        var starting_m = $('#starting_m').val();
        var ending_m = $('#ending_m').val();
        var starting_y = $('#starting_y').val();
        var ending_y = $('#ending_y').val();
        var years_of_experience = $('#years_of_experience').val(); 
        var job_title = $('#job_title').val(); 
        var company = $('#company').val(); 
        var job_role = $('#job_role').val(); 
        var experience_type = $('#experience_type').val(); 
      if(starting_m + starting_y < ending_m + ending_y && years_of_experience!="" && job_title!="" && company!="" && job_role!="" && years_of_experience!=""){
        $.ajax({
            url:'{{ route("yourData.experience") }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                        $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                    $('#result').show(0).delay(5000).hide(0);
                    $('#show').hide();
                    $('#show-agin').show();
                    $('#dynamic_form').removeClass("was-validated");

                }
            }
        }); 
        
    }else{
        alert('Please fill all the field !');
    }
 });

tail.select('#educational_level,#your_degree,#grade',{
    search: true,
    deselect:true
});

$('#experience').change(function () {
var select=$(this).find(':selected').data('show');        
 $(".hide").hide();
 $('#' + select).show();
	    }).change();

$('.toggle').click(function() {
    $('#show').toggle();
});

//educational form
$('#educational_btn').on('click', function() {
     event.preventDefault();
     var form = $('#educational')[0];
     var data = new FormData(form);

     var educational_level = $('#educational_level').val();
     var degree_details  = $("#degree_details").tagsinput('items');
     var university_institution = $('#university_institution').val();
     var your_degree  = $('#your_degree').val();
     var grade  = $('#grade').val();
     var skills  = $("#skills").tagsinput('items');
     var featrued  = $('#featrued').val();
     if(educational_level!="" && degree_details!="" && university_institution!="" && your_degree!="" && grade!="" && skills!=""){
        
        degree_details = degree_details.toString(); 
        skills = skills.toString(); 

         $.ajax({
             method: "POST",
             enctype: 'multipart/form-data',
             url: "{{ route('yourData.storeEducational') }}",
             data: data,
             processData: false,
             contentType: false,
             cache: false,
             success: function(data) {
                   if($.isEmptyObject(data.error)){
                       window.location = "/home";
                   }else{
                       printErrorMsg(data.error);
                   }
               }
         });       
     }

     else{
         alert('Please fill all the field !');
     }
 });
 

 function printErrorMsg (msg) {
   $(".print-error-msg").find("ul").html('');
   $(".print-error-msg").css('display','block');
   $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
   });
 }

//fetch_lang
 fetch_lang();
 function fetch_lang()
 {
  $.ajax({
   url:"/yourData/fetch_lang",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    for(var count=0; count < data.length; count++)
    {
     html +='<span data-column_name="name" data-id="'+data[count].id+'">'+data[count].name+'</span>';
     html += '<span data-column_name="proficiency" data-id="'+data[count].id+'">'+data[count].proficiency+'</span>';
     html +='</br>'
    }
    $('.yourLang').html(html);
   }
  });
 } 

//lang
$('#butsave').on('click', function() {
        var name = $('#name').val();
        var proficiency = $('#proficiency').val();
        $.ajax({
             url: "{{ route('yourData.storelang') }}",
             method: "POST",
             dataType:"json",
             data: {
                 _token : $("[name='_token']").val(),
                 name: name,
                 proficiency: proficiency,
             },
             success: function(data) {
                   if($.isEmptyObject(data.error)){
                       fetch_lang();
                       $("#name option:selected").remove();
                   }else{
                      alert(data.error);
                   }
               }
         });  
 });

});
 
</script>