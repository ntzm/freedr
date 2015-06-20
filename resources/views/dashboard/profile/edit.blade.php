@extends('dashboard.master')

@section('content')
    <h2>Edit profile</h2>
    <form method="post" action="/dashboard/profile/edit">
        {!! csrf_field() !!}
        <div class="input-field">
            <input type="text" name="title" id="title" value="{{ $profile->title or '' }}">
            <label for="title">Title</label>
        </div>
        <div class="input-field">
            <textarea class="materialize-textarea" name="description" id="description">{{ $profile->description or '' }}</textarea>
            <label for="description">Description</label>
        </div>
        <div class="input-field">
            <input type="text" name="hourly_rate" id="hourly_rate" value="{{ $profile->hourly_rate or '' }}">
            <label for="hourly_rate">Hourly rate</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">
            Update
        </button>
    </form>
@endsection