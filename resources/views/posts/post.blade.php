<div class="vide">

    <div class="tch-img">
        <a href="/posts/{{$post->id}}"><img src="{{asset('upload/images/'.$post->image)}}" class="img-responsive" alt=""/></a>
    </div>
    <a class="blog1" href="/category">{{$post->category->name}}</a>
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <p>{!!  str_limit($post->body,200) !!}
        <a style="color: red" href="/posts/{{$post->id}}"><strong><i>Read More</i></strong></a>
    </p>
    <div class="blog-poast-info">
        <ul>
            <li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="/profile/{{$post->user->id}}"> {{ $post->user->name }} </a></li>
            <li><i class="glyphicon glyphicon-calendar"> </i>{{ $post->created_at->toFormattedDateString() }}</li>
            <li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="/posts/{{$post->id}}">{{$post->comments->count()}} </a></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<br>

<style>
    a.blog1{
        position: relative;
        top: -80px;
        background: deeppink;
        padding: 0.3em 1.8em;
        color: #fff;
    }
</style>