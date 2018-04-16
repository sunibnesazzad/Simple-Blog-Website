<div class="col-md-4" >
    <div class="panel panel-default" style="width:85%">
        {{--<div class="panel-heading text-center"><i><h3>{!! $category->name !!}</h3></i></div>--}}
        <div class="panel-body">
            <h3 class="text-danger text-center"><i><strong>{!! $category->name !!}</strong></i></h3>
            <br>
            <p class="text-danger text-center">Number of posts : {!! $category->post->count() !!}</p>
        </div>
        @if(auth()->check())
            @if(auth()->user()->hasRole('writer'))
        <div class="panel-footer">
            <div class="row">
                <div class="col-md-6 text-center"><a href="{{ url("/update/{$category->id}") }}" title="Update Category"><i class="fas fa-edit"></i></a></div>
                <div class="col-md-6 text-center"><a href="{{ url("/delete/{$category->id}") }}" title="Delete Category"><i class="fas fa-trash-alt"></i></a></div>
            </div>
        </div>
            @endif
        @endif
    </div>
</div>



