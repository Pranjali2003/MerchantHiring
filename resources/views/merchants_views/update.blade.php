@extends('welcome')
@section('update-merchant') 
<div class="container py-2">

<form method="POST" action="{{route('merchants.update',$merchant->id)}}">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" value="{{old('name',$merchant->name)}}" name="name" placeholder="Enter Name">
    @error('name')
    <small style="color:red;">{{$message}}</small>
    @enderror
    
  </div>
  <div class="form-group">

    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$merchant->email}}" readonly placeholder="Enter email">
    @error('email')
    <small style="color:red;">{{$message}}</small>
    @enderror
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input type="text" class="form-control" id="phone_number" value="{{old('phone_number',$merchant->phone_number)}}" name="phone_number" placeholder="444-123-3333">
    @error('phone_number')
    <small style="color:red;">{{$message}}</small>
    @enderror
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="address" class="form-control" name="address">{{old('address',$merchant->address)}}</textarea>
    @error('address')
    <small style="color:red;">{{$message}}</small>
    @enderror
  </div>
  <div class="row">
  <div class="col-sm-2">
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
  <div class="col-sm-3"> <a class="btn btn-primary px-3" href="{{route('merchants.index')}}" role="button">Back</a></div>
  </div>
  
</form>
</div>
@endsection
