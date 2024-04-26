@extends('layouts.app')

@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (Auth::check())
                        <div class="alert alert-success" role="alert">
                            You are logged in!
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                            Welcome to Nibal Company
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="icon-container">
    <a href="{{ route('profile.show') }}">
        <i class="fas fa-user"></i> <!-- Font Awesome user icon -->
        View Profile
    </a>
</div>
@endsection
