
@extends('layouts.appmaterial')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="card-header card-header-primary text-center">
                        <h4 class="card-title">Registate</h4>               
                    </div>
                    <p class="description text-center">Ingresa tus datos</p>
                    
                    <div class="card-body">                    
                        <div class="input-group" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                </span>
                            </div>
                            <input id="name" type="text" class="form-control" placeholder="Nombre..." name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif                        
                        </div>
                        <div class="input-group" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">mail</i>
                                </span>
                            </div>
                            <input id="email" type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                            </div>
                            <input id="password" type="password" class="form-control" placeholder="Contrasenha..." name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-group" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Contrasenha..." name="password_confirmation" required>   
                        </div>
                    </div>
<br><br><br>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary">
                                    Register
                        </button>
                        <a href="#k" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
