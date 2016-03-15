@extends('layouts.default')

@section('content')
    <h1>Register</h1>

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <!-- Username Form Input -->
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
        </div>

        <!-- Email Form Input -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>

        <!-- Password Form Input -->
        <div class="form-group">
        	<label for="password">Password:</label>
        	<input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
        </div>

        <!-- Password_confirmation Form Input -->
        <div class="form-group">
        	<label for="password_confirmation">Password Confirmation:</label>
        	<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
        </div>

        <!-- Form Submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
    </form>
@stop