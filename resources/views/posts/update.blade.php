@extends('layouts.master')

@section('content')
    <h1 class="text-center">Update a post</h1>

    <hr>
    <div style="margin:0 auto;width:60%;text-align:left">
        <div class="well">
            <form method="POST" action="/updates/{{$post->id}}">

            </form>
        </div>
    </div>


    @include('includes.errors')


@endsection