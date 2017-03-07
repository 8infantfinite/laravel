@extends("layouts.app")



@section("content")

<div class="as">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$cat->name}}</div>

                <div class="panel-body">
                   @foreach($all as $one)
<div class = "products">
<h2> {{$one->name}}</h2>
</div>

@if($one->picture)
<img src = "{{asset('uploads/thumb/'.$one->picture)}}" />
@else
	<img src = "{{asset('no_photo.png')}}"/>
@endif
<a href = "#" class = "addCart" id = "good-{{$one->id}}-{{$one->price}}"> Положить в корзину</a>
@endforeach
<div align = "center"> {!!$all->links()!!}</div> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection