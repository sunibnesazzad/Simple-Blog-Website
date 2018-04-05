@extends('layouts.dash1')
@section('content')

    <!-- Page Content Start -->
    <!-- ================== -->
    <div class="main-grid">
        <div class="agile-grids">
            <div class="table-heading">
                <h2>Create New Blog</h2>
            </div>
            <!-- Form start Start -->
            <div class="panel panel-widget forms-panel">
                <div class="forms" >
                    <div class=" form-grids form-grids-right">
                        <div class="widget-shadow " data-example-id="basic-forms">
                            <div class="form-body">
                                <form class="form-horizontal" method="POST" action="/posts" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <br>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Title Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Title Name" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Select Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="category" name="category">
                                                @foreach($categorys as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Detail </label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="body" class="form-control" id="editor1" placeholder="Type detail here." required></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Upload Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="image" name="image" multiple>
                                        </div>
                                    </div>

                                    <div class="col-sm-offset-2">
                                        <button type="submit" class="btn btn-default w3ls-button">CREATE </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection