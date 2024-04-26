<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" id="fname" name="fname" value="{{ $profile->fname }}" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <input type="text" id="lname" name="lname" value="{{ $profile->lname }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" value="{{ $profile->email }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="telephone">Telephone Number:</label>
                            <input type="text" id="telephone" name="telephone" value="{{ $profile->telephone }}" class="form-control">
                        </div>

                        
                    
                        <div class="form-group">
    <label for="location">Location:</label>
    <select name="location" id="location" class="form-control">
        <optgroup label="English">
            <option value="Aleppo" @if(isset($profile) && $profile->location == 'Aleppo') selected @endif>Aleppo</option>
            <option value="Damascus" @if(isset($profile) && $profile->location == 'Damascus') selected @endif>Damascus</option>
            <option value="Homs" @if(isset($profile) && $profile->location == 'Homs') selected @endif>Homs</option>
            <option value="Hama" @if(isset($profile) && $profile->location == 'Hama') selected @endif>Hama</option>
            <option value="Latakia" @if(isset($profile) && $profile->location == 'Latakia') selected @endif>Latakia</option>
            <option value="Tartus" @if(isset($profile) && $profile->location == 'Tartus') selected @endif>Tartus</option>
            <option value="Raqqa" @if(isset($profile) && $profile->location == 'Raqqa') selected @endif>Raqqa</option>
            <option value="Deir ez-Zor" @if(isset($profile) && $profile->location == 'Deir ez-Zor') selected @endif>Deir ez-Zor</option>
            <option value="Idlib" @if(isset($profile) && $profile->location == 'Idlib') selected @endif>Idlib</option>
            <option value="Daraa" @if(isset($profile) && $profile->location == 'Daraa') selected @endif>Daraa</option>
            <option value="As-Suwayda" @if(isset($profile) && $profile->location == 'As-Suwayda') selected @endif>As-Suwayda</option>
            <option value="Al-Hasakah" @if(isset($profile) && $profile->location == 'Al-Hasakah') selected @endif>Al-Hasakah</option>
            <option value="Qamishli" @if(isset($profile) && $profile->location == 'Qamishli') selected @endif>Qamishli</option>
            <option value="Salamiyah" @if(isset($profile) && $profile->location == 'Salamiyah') selected @endif>Salamiyah</option>
        </optgroup>
        <optgroup label="Arabic">
            <option value="حلب" @if(isset($profile) && $profile->location == 'حلب') selected @endif>حلب</option>
            <option value="دمشق" @if(isset($profile) && $profile->location == 'دمشق') selected @endif>دمشق</option>
            <option value="حمص" @if(isset($profile) && $profile->location == 'حمص') selected @endif>حمص</option>
            <option value="حماة" @if(isset($profile) && $profile->location == 'حماة') selected @endif>حماة</option>
            <option value="اللاذقية" @if(isset($profile) && $profile->location == 'اللاذقية') selected @endif>اللاذقية</option>
            <option value="طرطوس" @if(isset($profile) && $profile->location == 'طرطوس') selected @endif>طرطوس</option>
            <option value="الرقة" @if(isset($profile) && $profile->location == 'الرقة') selected @endif>الرقة</option>
            <option value="دير الزور" @if(isset($profile) && $profile->location == 'دير الزور') selected @endif>دير الزور</option>
            <option value="إدلب" @if(isset($profile) && $profile->location == 'إدلب') selected @endif>إدلب</option>
            <option value="درعا" @if(isset($profile) && $profile->location == 'درعا') selected @endif>درعا</option>
            <option value="السويداء" @if(isset($profile) && $profile->location == 'السويداء') selected @endif>السويداء</option>
            <option value="الحسكة" @if(isset($profile) && $profile->location == 'الحسكة') selected @endif>الحسكة</option>
            <option value="القامشلي" @if(isset($profile) && $profile->location == 'القامشلي') selected @endif>القامشلي</option>
            <option value="سلمية" @if(isset($profile) && $profile->location == 'سلمية') selected @endif>سلمية</option>
        </optgroup>
    </select>
</div>





                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <a href="{{ route('profile.show') }}" class="btn btn-secondary">Cancel</a>
                           
                        </div>
                       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

