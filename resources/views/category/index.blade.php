@extends('layouts.master')


@section('content')

    <div class="text-center">
        <h1><i>Post Categories</i></h1>
    </div>
    <hr>

    <!-- showing success message -->
    <div class="row">
        <div class="col-md-6 col-lg-6">
            @if(session('info'))
                <div class="alert alert-success">
                    {{session('info')}}
                </div>
            @endif
        </div>
    </div>



    <!-- category table -->

    <div class="container"  style="margin:0 auto;width:60%;text-align:left">
        <div class="well">
            <div class="row">
                <table class="table table-dark">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(count($categorys)>0)
                        @foreach($categorys->all() as $category)

                            <tr>
                                <th scope="row">{{ $category->id  }}</th>
                                <td>{{ $category->name  }}</td>
                                <td>
                                    @if(auth()->check())
                                    @if(auth()->user()->hasRole('writer'))
                                    <a href="{{ url("/update/{$category->id}") }}" class="label label-success"> Update </a> |
                                    <a href="{{ url("/delete/{$category->id}") }}" class="label label-danger"> Delete </a>
                                    @endif
                                    @endif
                                </td>
                            </tr>


                        @endforeach
                    @endif

                    </tbody>
                </table>

            </div>
        </div>
        <!-- create category button -->
        {{--<div class="row">
            <a href="/category/create" class="btn btn-primary btn-group-lg">Create New Category</a>
    </div>--}}

        @if(auth()->check())
    @if(auth()->user()->hasRole('writer'))
    <div class="row">
        <a href="/category/create" class="btn btn-primary btn-group-lg">Create New Category</a>
    </div>


    @endif
        @endif


</div>

    <!-- data showing part -->

@endsection