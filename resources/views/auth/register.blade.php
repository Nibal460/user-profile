<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <!-- Other meta tags, stylesheets, etc. -->
</head>

<body>

@extends('layouts.app')

@section('content')


<style>
    /* Ensure select and options are displayed inline */
    select {
        display: inline-block;
        width: auto; /* Set width to auto to allow for dynamic sizing */
        vertical-align: top;
    }
    option {
        display: inline-block;
        margin-right: 10px; /* Adjust spacing between options */
    }
    /* Align Arabic options to the right */
    optgroup[label="Arabic"] {
        direction: rtl;
    }
</style>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                                        <div class="row mb-3">
                    <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                    <div class="col-md-6">
                        <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="first_name" autofocus>

                        @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                    <div class="row mb-3">
                        <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                        <div class="col-md-6">
                            <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="last_name" autofocus>

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
</div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                                <div class="row mb-3">
                                
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Telephone') }}</label>
                            <div class="col-md-6">
                            <input type="text" name="telephone" id="telephone" class="form-control" value="{{ old('telephone') }}">
                        </div>
</div>
                        
                  <div class="row mb-3">
                <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                <div class="col-md-6">
                    <select name="location" id="location" class="form-control">
                        <optgroup label="English">
                            <option value="Aleppo">Aleppo</option>
                            <option value="Damascus">Damascus</option>
                            <option value="Homs">Homs</option>
                            <option value="Hama">Hama</option>
                            <option value="Latakia">Latakia</option>
                            <option value="Tartus">Tartus</option>
                            <option value="Raqqa">Raqqa</option>
                            <option value="Deir ez-Zor">Deir ez-Zor</option>
                            <option value="Idlib">Idlib</option>
                            <option value="Daraa">Daraa</option>
                            <option value="As-Suwayda">As-Suwayda</option>
                            <option value="Al-Hasakah">Al-Hasakah</option>
                            <option value="Qamishli">Qamishli</option>
                            <option value="Salamiyah">Salamiyah</option>
                        </optgroup>
                        <optgroup label="Arabic">
                            <option value="حلب">حلب</option>
                            <option value="دمشق">دمشق</option>
                            <option value="حمص">حمص</option>
                            <option value="حماة">حماة</option>
                            <option value="اللاذقية">اللاذقية</option>
                            <option value="طرطوس">طرطوس</option>
                            <option value="الرقة">الرقة</option>
                            <option value="دير الزور">دير الزور</option>
                            <option value="إدلب">إدلب</option>
                            <option value="درعا">درعا</option>
                            <option value="السويداء">السويداء</option>
                            <option value="الحسكة">الحسكة</option>
                            <option value="القامشلي">القامشلي</option>
                            <option value="سلمية">سلمية</option>
                        </optgroup>
                        
                    </select>
                </div>
</div>
</div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
