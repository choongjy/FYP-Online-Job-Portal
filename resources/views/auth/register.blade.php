@extends('layouts.main')

@section('content')
    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <h1 class="col-12">Seeker Registration</h1>
                <div class="site-section bg-light col-12">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-8 mb-5">
                                <div class="card-header">{{ __('Register') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <input type="hidden" name="user_type" id="" value="seeker">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-12">{{ __('Name') }}</label>

                                            <div class="col-md-12">
                                                <input id="name" type="text"
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-12">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-12">
                                                <input id="email" type="email"
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-12">{{ __('Date of Brith') }}</label>

                                            <div class="col-md-12">
                                                <input id="dob" type="date"
                                                    class="form-control @error('dob') is-invalid @enderror" name="dob"
                                                    value="{{ old('dob') }}" required autocomplete="email">

                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-12 ">{{ __('Gender') }}</label>
{{ old('gender') }}
                                            <div class="col-md-12">
                                                <input type="radio" name="gender" value="male"
                                                    required>&nbsp;Male&nbsp;&nbsp;
                                                <input type="radio" name="gender" value="female" required>&nbsp;Female

                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-12">{{ __('Address') }}</label>

                                            <div class="col-md-12">
                                                <input id="adress" type="tesxt"
                                                    class="form-control @error('adress') is-invalid @enderror"
                                                    name="address" value="{{ old('address') }}" required
                                                    autocomplete="address">

                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="password" class="col-md-12">{{ __('Password') }}</label>

                                            <div class="col-md-12">
                                                <input id="password" type="password"
                                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                class="col-md-12">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-12">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-md-12 ">
                                                <input type="submit" value="Register AS Seeker"
                                                    class="btn btn-primary py-2 px-5" name="" id="">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
