@extends('layouts.auth')

@section('title', '| Login')

@section('content')
    <section class="hero is-fullheight is-light">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-one-third is-offset-one-third">
                        <div class="box">
                            {{--<div class="logo">--}}
                                {{--<figure class="image is-3by2">--}}
                                    {{--<img src="{{ url('images/logo.png') }}">--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            <div class="logo">
                              <span class="title" id="title">E DO'A</span>
                            </div>
                            <br>
                            <p class="block has-text-left">Sign in to start your session</p>

                            <form class="login-form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" id="email"
                                        type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                        <span class="icon is-small is-left"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                                    </p>
                                    @includeWhen($errors->has('email'), 'components.form.help', ['msg' => $errors->first('email')])
                                </div>

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" id="password"
                                        type="password" name="password" placeholder="Password" required>
                                        <span class="icon is-small is-left"><i class="fas fa-lock" aria-hidden="true"></i></span>
                                    </p>
                                    @includeWhen($errors->has('password'), 'components.form.help', ['msg' => $errors->first('password')])
                                </div>

                                <div class="buttons is-right">
                                  <button class="button is-link is-rounded" type="submit" name="submit"><i class="fas fa-sign-in-alt"></i>&nbspLogin</button>
                                  <button class="button is-link is-outlined is-rounded"><i class="fas fa-arrow-left"></i>&nbspBack</button>
                                </div>

                                <div class="field is-clearfix">
                                    <p class="control is-pulled-left is-size-7">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                    </p>
                                    <p class="control is-pulled-right is-size-7">
                                        <a class="is-pulled-right has-text-info" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <p>New user? Register <a class="has-text-primary" href="{{ route('register') }}" title="Register">here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
