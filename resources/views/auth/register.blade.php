@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 my-2 col-form-label text-md-end">Umur</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}">

                                @error('umur')
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Alamat</label>

                            <div class="col-md-6">
                                <textarea name="alamat" class="form-control" id=""></textarea>

                            </div>
                            @error('alamat')
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Penyakit</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('penyakit') is-invalid @enderror" name="penyakit" value="{{ old('penyakit') }}">

                                @error('penyakit')
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="row mb-0 my-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0 my-2">
                            <div class="col-md-6 offset-md-4">
                                <p class="mb-0">
                                    Have An Account? <a href="{{route('login')}}" class="text-center">Sign In!</a>
                                  </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
