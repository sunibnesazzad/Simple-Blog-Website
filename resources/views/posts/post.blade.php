{{--

<div class="panel-group">
    <div class="panel panel-success">
        <div class="panel-heading">  {{$post->title}}</div>
        <div class="panel-body">
            <p><strong>Author : </strong><i>{{ $post->user->name }}</i></p>
            <strong>Category :</strong>   {{$post->category->name}} <br>
            <p class="card-text">{{$post->body}}</p>
            {{ $post->created_at->toFormattedDateString() }} <br>
            <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
--}}


<div class="soci">
    <ul>
        <li><a href="#" class="facebook-1"> </a></li>
        <li><a href="#" class="facebook-1 twitter"> </a></li>
        <li><a href="#" class="facebook-1 chrome"> </a></li>
        <li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
        <li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
        <li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
    </ul>
</div>
<div class="tc-ch">

    <div class="tch-img">
        <a href="/posts/{{$post->id}}"><img src="{{asset('upload/images/'.$post->image)}}" class="img-responsive" alt=""/></a>
    </div>
    <a class="blog pink" href="/caegory">{{$post->category->name}}</a>
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <p>{{ str_limit($post->body,200)}}</p>
    <a class="btn btn-primary" href="/posts/{{$post->id}}">Read More</a>

    <div class="blog-poast-info">
        <ul>
            <li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="/profile/{{$post->user->id}}"> {{ $post->user->name }} </a></li>
            <li><i class="glyphicon glyphicon-calendar"> </i>{{ $post->created_at->toFormattedDateString() }}</li>
            <li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="/posts/{{$post->id}}">{{$post->comments->count()}} </a></li>
            <li><i class="glyphicon glyphicon-heart"></i><a class="admin" href="#">5 favourites </a></li>
            <li><i class="glyphicon glyphicon-eye-open"> </i>1.128 views</li>
        </ul>
    </div>
</div>
