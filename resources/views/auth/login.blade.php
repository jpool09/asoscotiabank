@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <span> <img style="height: 500px; margin-bottom: -80px; margin-left: 125px; margin-top: -50px;" class="img" src="{{ asset('img/Asociación.png') }}" alt="AsoScotiabank"> </span>

                            <div class="form-group row">
                                <label style= "color: #fff;" for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style= "color: #fff;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label style= "color: #fff;" class="form-check-label" for="remember">
                                            {{ __('Recordar contraseña') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button style= "background-color: #black;" type="submit" class="btn btn-light">
                                        {{ __('Ingresar') }}
                                    </button>

                                <!-- @if (Route::has('password.request'))
                                    <a style= "color: #fff;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidó su contraseña?') }}
                                        </a>
@endif -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

