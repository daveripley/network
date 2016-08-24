@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Sign Up</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>

        </div>
        <div class="col-md-6">
            <h2>Sign In</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>
@endsection