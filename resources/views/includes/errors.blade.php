<div class="col-md-12 ">
    @if(session('info'))
        <div class="row">
            <div class="alert alert-info">
                {{session('info')}}
            </div>
        </div>
    @elseif(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @elseif(session('warning'))
        <div class="alert alert-warning">
            {{session('warning')}}
        </div>
    @else
        @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endif
</div><br>