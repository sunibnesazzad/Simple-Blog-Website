@extends('layouts.master')
@section('content')
    <div>
        <h1 class="text-center text-danger"><strong><i>Categories</i></strong></h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="col-md-12">
                    @foreach($categorys as $category)
                        @include('category.category')
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center">
            {!! $categorys->links() !!}
        </div>
    </div>
@endsection