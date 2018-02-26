@extends('layouts.app')

@section('content')
<div class="container no-gap">
    <div class="row no-gap">
        <div class="col-md-6 col-md-offset-3 no-gap">
           <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-md-8 col-md-offset-2 form-group">
                          

                          
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="col-md-8 col-md-offset-2 form-group">
                          

                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                       
                        </div>

                        <center><div class="form-group row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div></center>

                        <div class="col-md-8 col-md-offset-2">
                          
                                <button type="submit" class="btn btn-primary" style="width: 100%; background: #FA511C; margin-top: 10px; margin-bottom: 10px;">
                                    Login
                                </button>


                                    <div class="col-md-8 col-md-offset-2">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>

                             <div class="col-md-8 col-md-offset-2">
                            <p style="text-align: center; margin-top:30px;">atau masuk dengan</p>
                        <a style="width: 100%; margin-bottom: 10px;" href="{{ url('auth/facebook') }}" class="btn btn-primary">Facebook <i class="fa fa-facebook-square" aria-hidden="true"></i> </a>
                        
                            
                     <a style="width: 100%" href="{{ url('auth/google') }}" class="btn btn-danger"> Google <i class="fa fa-google" aria-hidden="true"></i></a>
                        <br>
                        <br>    
                        </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
