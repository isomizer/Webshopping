@extends('layouts.register')

@section('content')

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                        <div class="form-row ">
                            <div class="name">Name</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                        </div>   
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" id="password" type="password" name="password" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password Confirm</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
