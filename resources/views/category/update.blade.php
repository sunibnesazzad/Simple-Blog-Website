@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1><i>Updating Existing Category</i></h1>
    </div>
    <hr>

    <hr>
    <div style="margin:0 auto;width:50%;text-align:left">
        <div class="well">
            <form method="POST" action="/update/{{$category->id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Title">Category Name</label>
                    <input type="text" class="form-control" name="category" id="category" value="<?php echo $category->name; ?>"  placeholder="Category" required>

                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>

            @include('includes.errors')

        </div>
    </div>





@endsection