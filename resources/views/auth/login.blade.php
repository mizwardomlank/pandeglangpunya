@extends('layouts.app')

@section('content')

<section style="background: transparent;display: flex;justify-content: center; margin-top:100px;">
    <form class="box tw-py-8 tw-px-10 tw-rounded" role="form" method="POST" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="tw-text-lg tw-font-bold tw-text-black">
            Login
        </h1>
        <div class="tw-py-4">
            <div class="control">
                <input type="email" id="email" name="email" class="input is-minimal is-material" placeholder="Email Address" value="{{ old('email') }}" required>
                {{-- <input id="email" type="email" class="input is-minimal is-material form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus> --}}
                
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <input type="password" id="password" name="password" class="input is-minimal is-material" placeholder="Password" value="" required>
                {{-- <input id="password" type="password" class="input is-minimal is-material form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> --}}
                
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="control tw-my-6">
                <button type="submit" class="tw-button is-blue">
                    Login
                </button>
            </div>
        </div>
        <footer class="tw-text-left md:tw-text-right">
            <a href="/register" class="tw-text-grey-dark tw-text-xs tw-font-bold">
                Or Sign Up
            </a>
        </footer>
    </form>
</section>
@endsection
