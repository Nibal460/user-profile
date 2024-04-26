<!-- resources/views/profile.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.show') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" id="fname" name="fname" value="{{ auth()->user()->fname }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <input type="text" id="lname" name="lname" value="{{ auth()->user()->lname }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone:</label>
                            <input type="telephone" id="telephone" name="telephone" value="{{ auth()->user()->telephone }}" class="form-control">
                        </div>
                        
                    <div class="form-group">
                    <label for="location">Location:</label>
                    <select name="location" id="location" class="form-control">
                        <option value="">Select Location</option>
                        <option value="Aleppo" @if(isset($profile) && $profile->location == 'Aleppo') selected @endif>حلب</option>
                        <!-- Add other location options as needed -->
                    </select>
                </div>


                        <!-- Add other profile fields here -->

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
