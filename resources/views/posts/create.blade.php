@extends('layouts.master')

@section('content')
    <h1 class="text-center">Creare a post</h1>

    <hr>
    <div style="margin:0 auto;width:60%;text-align:left">
        <div class="well">
            <form method="POST" action="/posts" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"   placeholder="Title" required>

                </div>

                <div class="form-group">
                    <label for="category">Category select</label>
                    <select class="form-control" id="category" name="category">
                        @foreach($categorys as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="editor1" class="form-control" name="body" placeholder="Text" required></textarea>
                </div>
                <div>
                    <label for="file">Choose image to upload</label>
                    <input type="file" id="image" name="image" multiple>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


    @include('includes.errors')


@endsection
