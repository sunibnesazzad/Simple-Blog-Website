@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="col-md-12">
            <h1 class="text-center"> Register</h1>
            <hr>

            <!-- Reg From input -->
            <div class="well">
                <form method="POST" action="/register">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>

                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Select Role</label>
                        <select class="form-control" id="category" name="role">
                            @foreach($roles as $role)
                                <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>

                </form>
                @include('includes.errors')
            </div>

        </div>
    </div>
@endsection