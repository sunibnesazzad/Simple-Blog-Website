@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1><i>Create New Category</i></h1>
    </div>
    <hr>

    <hr>
    <div style="margin:0 auto;width:50%;text-align:left">
        <div class="well">
            <form method="POST" action="/category">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Title">Category Name</label>
                    <input type="text" class="form-control" name="category" id="category"   placeholder="Category" required>

                </div>



                <button type="submit" class="btn btn-primary">Create</button>



            </form>

            @include('includes.errors')

        </div>
    </div>





@endsection