@include('include.header')
<style>
 body{
    background-color: #f2f2f2;
 }
</style>
<div class="container start-pages">

<ul class="step-progressbar">
  <li class="step-progressbar__item step-progressbar__item--active">General</li>
  <li class="step-progressbar__item ">Professional</li>
</ul>

    <div class="row justify-content-center">
        <div class="col-md-10">      

        <div class="alert alert-danger print-error-msg" style="display:none">
          <ul></ul>
        </div>

<form method="post" id="student_form">
          {{csrf_field()}}
                    <div class="card">
                    <div class="card-body">
                    <h3>What is the minimum salary you would accept?</h3>  
                    <div class="form-group row">
                
                            <div class="col-md-4">
                                <input id="salary" value="@foreach($dataUser as $dataU){{$dataU->salary}}@endforeach" type="number" class="form-control" name="salary" autocomplete="salary" required>
                            </div>
                            <label for="salary"  class="col-md-8 col-form-label text-md-left">EGP/ Month</label>
                            </div>
                            </div>
                    </div>


            <div class="card">
                <div class="card-body">
                    <h3>What is your current career level?</h3>
                <div class="form-group row">
                    <div class="col-md-4">
                    <select name="level" id="level" autocomplete="level">
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
                    <h3>What type(s) of job are you open to?</h3>
                <div class="form-group row">
                    <div class="col-md-12">
                        @foreach($typeJobs as $typeJob)
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input typeJobs" id="{{$typeJob->type_job}}" name="typeJobs[]" type="checkbox" value="{{$typeJob->id}}" autocomplete="typeJobs">
                            <label for="{{$typeJob->type_job}}" class="custom-control-label">
                            {{$typeJob->type_job}}
                            </label>
                            </div>
                            @endforeach
                    </div> 
                </div>
            </div>
        </div>

        <div class="card">
                <div class="card-body">
                    <h3>What job roles are you interested in?</h3>
                <div class="form-group row">
                    <div class="col-md-4">
                    <select multiple id="my-select" name="roles[]">
                            @foreach($roles as $role)
                            <option value="{{$role->id}}" class="roles">{{$role->role}}</option>
                            @endforeach
                    </select>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="card">
                <div class="card-body">
                    <h3>Your Personal Info</h3>
                <div class="form-group row">
                    <div class="col-md-6">
                    <label for="first_name" class="col-md-8 col-form-label text-md-left">First Name</label>
                    <input id="first_name" value="{{ Auth::user()->name }}" type="text" class="form-control " name="first_name" autocomplete="first_name" required readonly>
                </div>
                        
                <div class="col-md-6">
                    <label for="last_name" class="col-md-8 col-form-label text-md-left">Last Name</label>
                    <input id="last_name" value="{{ Auth::user()->lastname }}" type="text" class="form-control" name="last_name" autocomplete="last_name" required readonly>
                </div>
                </div>

                <div class="form-group row">

                <label for="Birthdate" class="col-md-12 col-form-label text-md-left">Birthdate</label>

                    <div class="col-4">
                    <span>
                    <select id="birth_day" name="birth_day" autocomplete="birth_day">
                    <?php 
                    $start_date = 1;
                    $end_date   = 31;
                    for( $j=$start_date; $j<=$end_date; $j++ ) {
                        echo '<option value='.$j.'>'.$j.'</option>';
                        }
                    ?>
                    </select>
                    </span>
                        </div>
                        
                    <div class="col-4">
                    <span>
                    <select id="birth_month" name="birth_month" autocomplete="birth_month">
                    <?php 
                    $start_date = 1;
                    $end_date   = 12;
                    for( $j=$start_date; $j<=$end_date; $j++ ) {
                        echo '<option value='.$j.'>'.$j.'</option>';
                    }
                    ?>
                    </select>
                </span>
                    </div>

                    <div class="col-4">
                    <span>
                    <select id="birth_year" name="birth_year" autocomplete="birth_year">
                    <?php 
                    $year = date('Y');
                    $min = $year - 60;
                    $max = $year;
                    for( $i=$max; $i>=$min; $i-- ) {
                        echo '<option value='.$i.'>'.$i.'</option>';
                }
                    ?>
                </select>
                    </span>
                    </div>   
                </div> 
                
                <div class="form-group row">
                <label class="col-md-12 col-form-label text-md-left">Gender</label>
                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" value="male"  id="customRadio1" name="gender" class="custom-control-input gender" required autocomplete="gender">
                    <label class="custom-control-label" for="customRadio1">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio" value="female"  id="customRadio2" name="gender" class="custom-control-input gender" required autocomplete="gender">
                    <label class="custom-control-label" for="customRadio2">Female</label>
                    </div>
                    </div>
                </div>


                <div class="form-group row">
                <label for="my-select" class="col-md-12 col-form-label text-md-left">Nationality</label>
                    <div class="col-md-4">
                    <select name="nationality" id="nationality" autocomplete="nationality">
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
                <label class="col-md-12 col-form-label text-md-left">Marital Status</label>
                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" value="unspecified" name="marital_status" class="custom-control-input marital_status" required autocomplete="marital_status">
                    <label class="custom-control-label" for="customRadio3">Unspecified</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio4" value="single" name="marital_status" class="custom-control-input marital_status" required autocomplete="marital_status">
                    <label class="custom-control-label" for="customRadio4">Single</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio5" value="married" name="marital_status" class="custom-control-input marital_status" required autocomplete="marital_status">
                    <label class="custom-control-label" for="customRadio5">Married</label>
                    </div>
                    </div>
                </div>

                <div class="form-group row">
                <label for="my-select" class="col-md-12 col-form-label text-md-left">Military Status</label>
                    <div class="col-md-4">
                    <select name="military_status" id="military_status" autocomplete="military_status">
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
                <label class="col-md-12 col-form-label text-md-left">Do you have a driving license?</label>
                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio6" value="yes" name="driving_license" class="custom-control-input driving_license" required autocomplete="driving_license">
                    <label class="custom-control-label" for="customRadio6">Yes</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio7" value="no" name="driving_license" class="custom-control-input driving_license" required autocomplete="driving_license">
                    <label class="custom-control-label" for="customRadio7">No</label>
                    </div>
                    </div>
                </div>

                
            </div>
        </div>

        <div class="card">
                <div class="card-body">
                    <h3>Your Location</h3>
                <div class='row'>    
                    <div class="col-md-4">
                            <label for="my-select" class="col-md-4 col-form-label text-md-left">Country</label>
                            <div class="form-group row">
                                <div class="col-md-4">
                                <select name="country" id="country" autocomplete="country">
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

                    <div class="col-md-4">
                            <label for="my-select" class="col-md-4 col-form-label text-md-left">City</label>
                            <div class="form-group row">
                                <div class="col-md-4">
                                <select name="city" id="city" autocomplete="city">
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

                    <div class="col-md-4">
                        <label for="my-select" class="col-md-4 col-form-label text-md-left">Area</label>
                        <div class="form-group row">
                            <div class="col-md-4">
                            <select name="area" id="area" autocomplete="area">
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
            </div>
            </div>

        <div class="card">
                <div class="card-body">
                    <h3>Contact Info</h3>
                <div class="form-group row">
                    <div class="col-md-6">
                    <label for="mobile_number" class="col-md-12 col-form-label text-md-left">Mobile Number</label> 
                    <input id="mobile_number" value="" type="text" class="form-control" name="mobile_number" autocomplete="mobile_number" required>
                    </div>   
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" style="float:right" id="butsave">Save And Next</button>
            </div>
        </div>

</form>
                
            
</div>
</div>
</div>

@include('include.footer')

<script>
$(document).ready(function() {
    tail.select('#birth_day,#birth_month,#birth_year' ,{
        search: true,
        deselect:true
    });   
    tail.select('#level,#nationality,#military_status,#country,#city,#area' ,{
        search: true,
        deselect:true
    });
    tail.select('#my-select' ,{
        search: true,
        multiLimit: 2,
    });

    $('#student_form').on('submit', function(event){
      event.preventDefault();
      
      var salary  = $('#salary ').val();
      var level  = $('#level').val();
      var first_name = $('#first_name').val();
      var last_name = $('#last_name').val();
      var birth_day = $('#birth_day').val();
      var birth_month = $('#birth_month').val();
      var birth_year = $('#birth_year').val();
      var gender = $('.gender').val();
      var nationality = $('#nationality').val();
      var marital_status = $('.marital_status').val();
      var military_status = $('#military_status').val();
      var driving_license = $('.driving_license').val();
      var country = $('#country').val();
      var city = $('#city').val();
      var area = $('#area').val();
      var mobile_number = $('#mobile_number').val();
      ids = [];
      idss = [];
     $('.typeJobs:checked').each(function(){
          ids.push($(this).val());
       });
     $('.roles:checked').each(function(){
          idss.push($(this).val());
       });

      if(salary!="" && level!="" && first_name!="" && last_name!="" && birth_day!="" && birth_month!="" && birth_year!="" && gender!="" && nationality!="" && marital_status!="" && military_status!="" && driving_license!="" && country!="" && city!="" && area!="" && mobile_number!=""){
          $.ajax({
              url: "{{ route('yourData.store') }}",
              method: "POST",
              dataType:"json",
              data: {
                  _token : $("[name='_token']").val(),
                  salary: salary,
                  level: level,
                  first_name: first_name,
                  last_name: last_name,
                  birth_day: birth_day,
                  birth_month: birth_month,
                  birth_year: birth_year,
                  gender: gender,
                  nationality: nationality,
                  marital_status: marital_status,
                  military_status: military_status,
                  driving_license: driving_license,
                  country: country,
                  city: city,
                  area: area,
                  mobile_number: mobile_number,
                  typeJobs: ids,
                  roles: idss,
              },
              success: function(data) {
                    if($.isEmptyObject(data.error)){
                        window.location = "/yourData/experience";
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

});
</script>
