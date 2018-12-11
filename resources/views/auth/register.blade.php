@extends('layouts.auth')

@section('title', '| Register')

@section('content')
    <section class="hero is-fullheight is-light">
        <div class="hero-body">
            <div class="container has-text-centered-desktop">
                <div class="columns">
                    <div class="column is-one-third is-offset-one-third">
                        <div class="box">

                            <div class="logo">
                                <figure class="image is-3by2">
                                    <img src="{{ url('images/logo.png') }}">
                                </figure>
                            </div>
                            <p class="block has-text-left has-text-grey">Register a new membership</p>

                            <form class="register-form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" id="name"
                                        type="name" name="name" placeholder="User name" value="{{ old('name') }}" required autofocus>
                                        <span class="icon is-small is-left"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </p>
                                    @includeWhen($errors->has('name'), 'components.form.help', ['msg' => $errors->first('name')])
                                </div>

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" id="email"
                                        type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                                        <span class="icon is-small is-left"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </p>
                                    @includeWhen($errors->has('email'), 'components.form.help', ['msg' => $errors->first('email')])
                                </div>

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" id="password"
                                        type="password" name="password" placeholder="Password" required>
                                        <span class="icon is-small is-left"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    </p>
                                    @includeWhen($errors->has('password'), 'components.form.help', ['msg' => $errors->first('password')])
                                </div>

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" id="password-confirm"
                                        type="password" name="password_confirmation" placeholder="Confirm Password" required>
                                        <span class="icon is-small is-left"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    </p>
                                    @includeWhen($errors->has('password'), 'components.form.help', ['msg' => $errors->first('password')])
                                </div>

                                <div class="field">
                                    <div class="control has-text-right">
                                        <button type="submit" class="button is-primary">
                                            <span class="icon is-small"><i class="fa fa-check" aria-hidden="true"></i></span>
                                            <span>&nbsp;Register</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p>Already registered? Login <a class="has-text-primary" href="{{ route('login') }}" title="Register">here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
