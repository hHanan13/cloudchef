@extends('app')

@section('content')
<div class="container">
<table>
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">amount</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $value)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{ $value->name}}</td>
      <td>{{ $value->email}}</td>
      <td>{{ $value->amount}}</td>
      <th><a href="{{ route('payment.refund',$value->tran_id)}}" class="btn">refund</a></th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection