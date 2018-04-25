@extends('layouts.dash1')
@section('content')

    <!-- Page Content Start -->
    <!-- ================== -->
    <div class="main-grid">
        <div class="agile-grids">

            <div class="table-heading">
                <h2>My Blogs</h2>
            </div>
            {{--table Start--}}
            <div class="agile-tables">
                {{--table Start--}}
                <div class="agile-tables">
                    <table id="table-two-axis" class="two-axis">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Comments</th>
                            <th>Created at</th>
                            <th>Details</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{!! $post->id !!}</td>
                                <td>{!! $post->title !!}</td>
                                <td>
                                    @foreach($post->category as $category)
                                        <p>{{$category->name}}</p><br>
                                    @endforeach
                                </td>
                                <td><img src="{{asset('upload/images/'.$post->image)}}" class="img-responsive" alt=""height="100" width="150"/></td>
                                <td>{!! $post->comments->count() !!}</td>
                                <td>{{ $post->created_at->toFormattedDateString() }}</td>
                                <td><button type="submit" class="btn btn-hover btn-primary btn-xs" data-toggle="modal" data-target="#myModal_{{$post->id}}">Detail</button></td>
                                <td><a href="/update/{{$post->id}}"><button type="submit" class="btn btn-hover btn-success btn-xs">Update</button></a></td>
                                <td><a href="/delete/{{$post->id}}"><button type="submit" class="btn btn-hover btn-danger btn-xs" >Delete</button></a></td>
                            </tr>

                            <!-- begin:modal Post Detail -->
                            <div id="myModal_{{$post->id}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content" >
                                        <center>
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title">{{ $post->title}}</h3><br>
                                                <img src="{{asset('upload/images/'.$post->image)}}" class="img-responsive" alt=""height="400" width="600"/>
                                            </div>
                                        </center>
                                        <div class="modal-body" >
                                            <p><b>Category: </b>
                                                @foreach($post->category as $category)
                                                    {{$category->name}},
                                                @endforeach
                                            </p>
                                            <p><b>Id: </b>{{ $post->id}}</p>
                                            <p><b>Created at: </b>{{ $post->created_at->toFormattedDateString() }}</p>
                                            <br>
                                            <p><b>Details: </b>{!! $post->body !!}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-hover btn-primary btn-sm" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:modal Post Detail -->
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        {{-- modal Script--}}
        <script>

            $('.modal').on('shown.bs.modal', function () {
                var curModal = this;
                $('.modal').each(function(){
                    if(this != curModal){
                        $(this).modal('hide');
                    }
                });
            });

        </script>


@endsection




