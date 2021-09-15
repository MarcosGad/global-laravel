@include('include.header')
@include('include.nav')

<div class="body-web">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
            <div class="row">
            <div class="col-md-7">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                        
                        <a href="/Company/register">Create an Employer Account.</a>

                        <!--
                           <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="advertise" type="checkbox">
                            <label for="advertise" class="custom-control-label">
                             Looking to Advertise jobs ?
                            </label>
                            </div>
                        -->
                        </div>
                        </div>
                    </div>
                 
                    <form method="POST" action="{{ route('register') }}" class="needs-validation mb-5" novalidate id="AddPassport">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-3">
                                <input id="name" placeholder="first" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <div class="invalid-feedback">
                                     Please type a first name.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <input id="lastname" placeholder="last" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                <div class="invalid-feedback">
                                     Please type a last name.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                           
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <div class="invalid-feedback">
                                     Please type a email.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                            <select name="Country" data-placeholder="Country" class="form-control @error('Country') is-invalid @enderror" required>
                                    <option value="egypt">Egypt</option>
                            </select>
                            <div class="invalid-feedback">
                                     Please type a Country.
                            </div>
                            <div class="valid-feedback">
                                    Looks good!
                            </div>
                                

                                @error('Country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <div class="invalid-feedback">
                                     Please type a password.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="invalid-feedback">
                                     Please type a password confirmation.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                     <!-- hide**********************hide -->
                     <div id="dvPassport" style="display: none">
                       Hide
                     </div>

                    </div>

            <div class="col-md-5">
                         info
            </div>
        </div>
    </div>
</div>
</div>
</div>

@include('include.footer')
<script>
$(function () {
        $("#advertise").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show('swing');
                $("#AddPassport").hide('swing');
            } else {
                $("#dvPassport").hide('swing');
                $("#AddPassport").show('swing');
            }
        });
    });
</script>