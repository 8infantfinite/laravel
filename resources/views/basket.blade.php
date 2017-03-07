@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

<form method = "post" action = "{{asset('order')}}"> 
	{{csrf_field()}}
  <div class="form-group">
    <label for="fio">fio</label>
    <input name="fio" type="text" class="form-control" id="fio" placeholder="fio">
  </div>
  <div class="form-group">
    <label for="phone">phone</label>
    <input name="phone" type="text" class="form-control" id="phone" placeholder="phone">
  </div>
   <div class="form-group">
    <label for="more_contacts">more_contacts</label>
    <input name="more_contacts" type="text" class="form-control" id="more_contacts" placeholder="more_contacts">
  </div>
  <table class = 'table table-bordered'> 
  <tr>
	<th width = "200px"> Фото </th>
	<th> Название </th>
	<th> Цена </th>
	<th> Количество </th>
	<th> Сумма </th>
	<th  width = "200px"> Действие </th>
	</tr>	
	<? $itogo = 0?>
	@foreach($tovars as $key =>$value) 
	<? $count = $tovs[$value->id]?>
	<? $summa = $count*$value->price?>
	<? $itogo += $summa?>

		 <tr>
	<td> Фото </td>
	<td> {{$value->name}} </td>
	<td> {{$value->price}} </td>
	<td> <input name = "{{$value->id}}" min = 0 type = "number" value = "{{$count}}"/></td>

	<td> {{$summa}} </td>
	<td> Действие </td>
	</tr> 
	@endforeach
	<tr>
	<td colspan = 5> Итого: {{$itogo}}</td>
	<td> Удалить</td>
	</tr>
	
  </table>
  <button type="submit" class="btn btn-default">Подтвердить</button>
</form>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
