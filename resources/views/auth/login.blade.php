@extends('layouts.app')

@section('template_title', 'Login')

@section('navbar')
    <section class="vh-100 bg-coral">
        <div class="container h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 py-3 py-md-0">
                    <div class="card shadow-lg">
                        <div class="card-body row">
                            <div class="col-md-6 d-none d-md-block">
                                
                                <img class="img-fluid" src="{{ asset('img/teamwork.png') }}" alt="">
                            </div>
                            <div class="col-md-6 d-flex p-4  justify-content-center flex-column">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text border-0 rounded-5 rounded-end bg-primary text-white" id="basic-addon1"><i class="fa-solid fa-user fa-xs"></i></span>
                                        <input id="email" type="email"
                                            class="form-control rounded-start rounded-5 shadow-md @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            aria-describedby="basic-addon1" placeholder="Correo electrónico">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text border-0 rounded-5 rounded-end bg-primary text-white" id="basic-addon2"><i class="fa-solid fa-lock fa-xs"></i></span>
                                        <input id="password" type="password"
                                            class="form-control rounded-start rounded-5 shadow-md @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" aria-describedby="basic-addon2" placeholder="Contraseña">
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-primary" for="remember">
                                            {{ __('Recordarme') }}
                                        </label>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary  w-100  rounded-5">
                                                {{ __('Entrar') }}
                                            </button>

                                            {{-- @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
