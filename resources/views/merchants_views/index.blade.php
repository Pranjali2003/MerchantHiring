@extends('welcome')
@section('merchantTable')
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    @if(empty($merchants))
    <p>No Merchant Employee Found!</p>
    @else
   @foreach($merchants as $merchant)
    <tr>
      <th scope="row">{{$merchant->id}}</th>
      <td>{{$merchant->name}}</td>
      <td>{{$merchant->email}}</td>
      <td>{{$merchant->phone_number}}</td>
      <td>{{$merchant->address}}</td>
    </tr>
   @endforeach 
   @endif
  </tbody>
</table>
</div>
@endsection
