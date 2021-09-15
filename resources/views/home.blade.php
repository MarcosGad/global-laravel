@include('include.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                
                <form method="POST" action="">
                @csrf

        <h3>What is the minimum salary you would accept?</h3>  
        <div class="form-group row">
    
            <div class="col-md-4">
                    <input id="name" value="" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="name" class="col-md-8 col-form-label text-md-left">EGP/ Month</label>
                </div>
                </div>
                </div>


    <div class="card">
        <div class="card-body">
            <h3>What is your current career level?</h3>
        <div class="form-group row">
            <div class="col-md-4">
               <select id="my-select-one">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>
            
        </div>
    </div>
</div>

        <div class="card">
        <div class="card-body">
            <h3>What type(s) of job are you open to?</h3>
        <div class="form-group row">
            <div class="col-md-12">

            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Full Time</label>
            </div>

            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">Part Time</label>
            </div>

            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck3">
            <label class="custom-control-label" for="customCheck3">Freelance / Project</label>
            </div>
            </div> 
        </div>
    </div>
</div>
        
<div class="card">
        <div class="card-body">
            <h3>What job roles are you interested in?</h3>
        <div class="form-group row">
            <div class="col-md-4">
               <select multiple id="my-select">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>
            
        </div>
    </div>
</div>


<div class="card">
        <div class="card-body">
            <h3>Your Personal Info</h3>
        <div class="form-group row">
            <div class="col-md-6">
            <label for="name" class="col-md-8 col-form-label text-md-left">First Name</label>
            <input id="name" value="" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="col-md-6">
            <label for="name" class="col-md-8 col-form-label text-md-left">Last Name</label>
            <input id="name" value="" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>

        <div class="form-group row">

        <label for="Birthdate" class="col-md-12 col-form-label text-md-left">Birthdate</label>

            <div class="col-4">
            <span>
            <select id="Birthdate" name="birth_day" class="form-control @error('birth_day') is-invalid @enderror" required>
            <option>Day</option>
            <?php 
            $start_date = 1;
            $end_date   = 31;
            for( $j=$start_date; $j<=$end_date; $j++ ) {
                 echo '<option value='.$j.'>'.$j.'</option>';
                }
            ?>
             </select>
             @error('birth_day')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
            </span>
                </div>
                
            <div class="col-4">
            <span>
            <select id="Birthdate" name="birth_month" class="form-control @error('birth_month') is-invalid @enderror" required>
            <option>Month</option>
            <?php 
            $start_date = 1;
            $end_date   = 12;
            for( $j=$start_date; $j<=$end_date; $j++ ) {
                echo '<option value='.$j.'>'.$j.'</option>';
             }
            ?>
            </select>
            @error('birth_month')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
        </span>
            </div>

            <div class="col-4">
            <span>
            <select id="Birthdate" name="birth_year" class="form-control @error('birth_year') is-invalid @enderror" required>
            <option>Year</option>
            <?php 
            $year = date('Y');
            $min = $year - 60;
            $max = $year;
            for( $i=$max; $i>=$min; $i-- ) {
                echo '<option value='.$i.'>'.$i.'</option>';
           }
            ?>
           </select>
           @error('birth_year')
           <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            </span>
            </div>   
        </div> 
        
        <div class="form-group row">
        <label class="col-md-12 col-form-label text-md-left">Gender</label>
            <div class="col-md-6">
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Male</label>
            </div>
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Female</label>
            </div>
            </div>
        </div>


        <div class="form-group row">
        <label for="my-select" class="col-md-12 col-form-label text-md-left">Nationality</label>
            <div class="col-md-4">
               <select id="my-select-one">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>   
        </div>

        <div class="form-group row">
        <label class="col-md-12 col-form-label text-md-left">Marital Status</label>
            <div class="col-md-6">
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Unspecified</label>
            </div>
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Single</label>
            </div>
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio3">Married</label>
            </div>
            </div>
        </div>

        <div class="form-group row">
        <label for="my-select" class="col-md-12 col-form-label text-md-left">Military Status</label>
            <div class="col-md-4">
               <select id="my-select-one">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>   
        </div>

        <div class="form-group row">
        <label class="col-md-12 col-form-label text-md-left">Do you have a driving license?</label>
            <div class="col-md-6">
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Yes</label>
            </div>
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">No</label>
            </div>
            </div>
        </div>

        
    </div>
</div>

<div class="card">
        <div class="card-body">
            <h3>Your Location</h3>
            <label for="my-select" class="col-md-12 col-form-label text-md-left">Country</label>
        <div class="form-group row">
            <div class="col-md-4">
               <select id="my-select-one">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>
            
        </div>

        <label for="my-select" class="col-md-12 col-form-label text-md-left">City</label>
        <div class="form-group row">
            <div class="col-md-4">
               <select id="my-select-one">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>
            
        </div>

        <label for="my-select" class="col-md-12 col-form-label text-md-left">Area</label>
        <div class="form-group row">
            <div class="col-md-4">
               <select id="my-select-one">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div> 
        </div>

    </div>
</div>

<div class="card">
        <div class="card-body">
            <h3>Contact Info</h3>
        <div class="form-group row">
            <div class="col-md-6">
            <label for="name" class="col-md-12 col-form-label text-md-left">Mobile Number</label> 
            <input id="name" value="" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>   
        </div>
    </div>
</div>

<div class="card">
        <div class="card-body">
            <h3>How many years of experience do you have?</h3>
        <div class="form-group row">
            <div class="col-md-4">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
      </select>
            </div>
            
        </div>
    </div>
</div>

<div class="card">
        <div class="card-body">
            <h3>What is your current educational level?</h3>
        <div class="form-group row">
            <div class="col-md-12">

            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Bachelor's Degree</label>
            </div>

            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">Master's Degree</label>
            </div>

            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck3">
            <label class="custom-control-label" for="customCheck3">Doctorate Degree</label>
            </div>
            </div> 
        </div>

        <h3>Degree Details</h3>
        <input type="text" data-role="tagsinput" value="jQuery,Script,Net">

        <div class="form-group row">
        <div class="col-md-6">  
        <label for="name" class="col-md-8 col-form-label text-md-left">University/Institution</label>
        <input id="name" value="" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
    </div>

        <div class="form-group row">
            <div class="col-md-4">
            <label for="my-select" class="col-md-12 col-form-label text-md-left">When did you get your degree?</label>
            <select multiple id="my-select">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div> 
        </div>

        <div class="form-group row">
            <div class="col-md-4">
            <label for="my-select" class="col-md-12 col-form-label text-md-left">Grade</label>
            <select multiple id="my-select">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div> 
        </div>

    </div>
</div>

<div class="card">
        <div class="card-body">
            <h3>What languages do you know?</h3>
        <div class="form-group row">
            <div class="col-md-5">
            <label for="my-select" class="col-md-8 col-form-label text-md-left">Language</label>
               <select multiple id="my-select">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>
        
            <div class="col-md-5">
            <label for="my-select" class="col-md-8 col-form-label text-md-left">Proficiency</label>
               <select multiple id="my-select">
                    <option>One</option>
                    <option>Two</option>
                    <option>Three</option>
                    <option>Four</option>
                    <option>Five</option>
                    <option>Six</option>
               </select>
               <div class="move-container mt-2"></div>
            </div>
            
            <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>

    </div>
</div>

<div class="card">
        <div class="card-body">
            <h3>What Skills do you have?</h3>
        <div class="form-group row">
            <div class="col-md-4">
            <input type="text" data-role="tagsinput" value="jQuery,Script,Net">
            </div>
        </div>

    </div>
</div>

<div class="card">
        <div class="card-body">
            <h3>Upload Your CV</h3>
        <div class="form-group row">
            <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Upload Your CV</button>

            </div>
        </div>
        
    </div>
</div>

            </form>
                
            
        </div>
    </div>
</div>

@include('include.footer')
<script>
tail.select('#my-select-one' ,{
    search: true,
});
tail.select('#my-select' ,{
    search: true,
    multiLimit: 2,
    multiShowCount: false,
    multiContainer: '.move-container',
});
</script>
