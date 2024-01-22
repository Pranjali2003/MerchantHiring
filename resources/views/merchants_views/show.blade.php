@extends('welcome')
@section('merchantDetail')
<div class="container">
    <div class="jumbotron">
    <h1 class="display-4">{{($merchant->name)?$merchant->name:''}}</h1>
    <p class="lead">{{($merchant->email)?$merchant->email:''}}</p>
    <p class="lead">{{($merchant->phone)?$merchant->phone:''}}</p>
    <hr class="my-4">
    <p>{{($merchant->address)?$merchant->address:''}}</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{route('merchants.index')}}" role="button">Back</a>
    </p>
    </div>
</div>
@endsection
