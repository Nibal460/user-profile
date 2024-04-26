@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <h2>Welcome, {{ $profile->fname }}</h2>
                        @if($profile)
                            <p>Your username is: {{ $profile->username ?? 'N/A' }}</p>
                            <h5>First Name: {{ $user->fname }}</h5>
                            <h5>Last Name: {{ $profile->lname ?? 'N/A' }}</h5>
                            <p>Email: {{ $profile->email ?? 'N/A' }}</p>
                            <p>Telephone: {{ $profile->telephone ?? 'N/A' }}</p>
                            <p>Location: {{ $profile->location ?? 'N/A' }}</p>
                        @else
                            <p>No profile found for this user.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
