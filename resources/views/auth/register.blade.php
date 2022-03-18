@extends('them.master')

@push('head')
    <style>
        .required-field {
            color: red;
        }

    </style>
@endpush
@section('content')
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-name">Name <span class="required-field">*</span></label>
                                    <input type="text" id="frm-reg-name" name="name" placeholder="name"
                                        value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address <span class="required-field">*</span> </label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address"
                                        value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password <span class="required-field">*</span> </label>
                                    <input type="password" class="@error('passoword') is-invalid @enderror" id="frm-reg-pass" name="password" placeholder="Password">
                                    @error('password')
                                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                @enderror
                                </fieldset>

                                <fieldset class="wrap-input">
                                    <input type="submit" class="btn btn-sign" value="Register">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end main products area-->
            </div>
        </div>
        <!--end row-->

    </div>
    <!--end container-->
@endsection
