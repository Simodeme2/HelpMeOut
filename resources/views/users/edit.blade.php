@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card create">
                <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    {{ method_field('PATCH') }}

                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label text-md-right">{{ __('Voornaam') }}</label>

                        <div class="col-md-4">
                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" autocomplete="firstname" autofocus>

                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="lastname" class="col-md-2 col-form-label text-md-right">{{ __('Achternaam') }}</label>

                        <div class="col-md-4">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <hr>

                    <br>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Adres') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <hr>

                    <br>
                    <div class="form-group row">
                        <label for="street" class="col-md-2 col-form-label text-md-right">{{ __('Straat') }}</label>

                        <div class="col-md-6">
                            <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ $user->street }}" required autocomplete="street" autofocus>

                            @error('street')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="street_number" class="col-md-2 col-form-label text-md-right">{{ __('Huisnummer') }}</label>

                        <div class="col-md-2">
                            <input id="street_number" type="text" class="form-control @error('street_number') is-invalid @enderror" name="street_number" value="{{ $user->street_number }}" required autocomplete="street_number" autofocus>

                            @error('street_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <br>
                        <br>
                        <br>
                        <label for="city" class="col-md-2 col-form-label text-md-right">{{ __('Stad') }}</label>

                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control @error('street') is-invalid @enderror" name="city" value="{{ $user->city }}" required autocomplete="city" autofocus>

                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="zipcode" class="col-md-2 col-form-label text-md-right">{{ __('Postcode') }}</label>

                        <div class="col-md-2">
                            <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ $user->zipcode }}" required autocomplete="zipcode" autofocus>

                            @error('zipcode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <br>
                        <br>
                        <br>
                        <label for="province" class="col-md-2 col-form-label text-md-right">{{ __('Provincie') }}</label>

                        <div class="col-md-4">
                            <input id="province" type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ $user->province }}" required autocomplete="province" autofocus>

                            @error('province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="country" class="col-md-2 col-form-label text-md-right">{{ __('Land') }}</label>

                        <div class="col-md-4">
                            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ $user->country }}" required autocomplete="country" autofocus>

                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <hr>

                    <br>
                    <div class="form-group row">
                        <label for="biography" class="col-md-2 col-form-label text-md-right">{{ __('Biografie') }}</label>

                        <div class="col-md-10">
                            <textarea rows="5" id="biography" class="form-control @error('biography') is-invalid @enderror" name="biography" placeholder="{{ $user->biography }}"></textarea>

                            @error('biography')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
