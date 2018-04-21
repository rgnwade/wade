@extends('layouts.app')

@section('content')
<div class="container no-gap">
    <div class="row no-gap">
        <div class="col-md-6 col-md-offset-3 no-gap">
            <div class="panel panel-default">
                <div class="panel-heading">DAFTAR <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
            </div>
                <div class="panel-body">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-md-8 col-md-offset-2 form-group">
                           

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                         
                        </div>

                        <div class="col-md-8 col-md-offset-2 form-group">
                         
                           
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                         
                        </div>

                        <div class="col-md-8 col-md-offset-2 form-group">
                         

                         
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

                       <!--  <div class="col-md-8 col-md-offset-2 form-group">
                          

                                <input id="password-confirm" type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required>
                           
                        </div> -->

                                <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            

                            <div class="col-md-8 col-md-offset-2">
                
                             <label class="radio-inline">
                                 You are a
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="priority" id="priority" value="supplier" {{ (old('priority')=='guide') ? 'checked' : '' }} > Supplier
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="priority" id="priority" value="customer" {{ (old('priority')=='traveler') ? 'checked' : '' }}> Customer
                                </label>
                                  @if ($errors->has('priority'))
                                 
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }} </strong>
                                    </span>
                                @endif
                                
                                
                                
                            </div>
                        </div>


                         <div class="col-md-8 col-md-offset-2">
                        <p style="color:#b0b1a8; font-size: 11px;">Dengan membuat akun, saya setuju untuk memproses data pribadi sesuai dengan Syarat Ketentuan Penggunaan. .</p>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                           
                                <button type="submit" class="btn btn-primary" style="width: 100%; background: #FA511C; margin-top: 10px; margin-bottom: 10px;">
                                    DAFTAR
                                </button>
                           
                        </div>

                         <div class="col-md-8 col-md-offset-2">
                            <p style="text-align: center; margin-top:30px;">atau masuk dengan</p>
                        <a style="width: 100%; margin-bottom: 10px;" href="{{ url('auth/facebook') }}" class="btn btn-primary">Facebook <i class="fa fa-facebook-square" aria-hidden="true"></i> </a>
                        
                            
                     <a style="width: 100%" href="{{ url('auth/google') }}" class="btn btn-danger"> Google <i class="fa fa-google" aria-hidden="true"></i></a>
                        <br>
                        <br>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
