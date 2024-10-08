@extends('layouts.auth')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(255, 255, 255, 0.8);">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>{{ __('BPKAD') }}<b><br>{{ __('SIM ARSIP') }}</h1>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger border-left-danger" role="alert">
                                    <ul class="pl-4 my-2">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}" class="user">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <input type="text" class="form-control " name="username"
                                        placeholder="{{ __('NIP') }}" value="{{ old('username') }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control " name="password"
                                        placeholder="{{ __('Password') }}" required>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
