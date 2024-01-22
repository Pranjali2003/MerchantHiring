@extends('welcome')
@section('merchantTable')
<div class="container">
    <div class="row py-2 ">

    <div class="col-sm-12"><a class="btn btn-success px-4" href="{{route('merchants.create')}}" role="button">New Merchant</a></div>
    </div>
    

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
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
      <td><a href="{{route('merchants.view',$merchant->id)}}">View</a></td>
      <td><a href="{{route('merchants.edit',$merchant->id)}}">Edit</a></td>
      <td><button type="button" data-toggle="modal" data-target="#destroyMerchant{{$merchant->id}}" >Delete</button></td>

    </tr>
    <div class="modal fade" id="destroyMerchant{{$merchant->id}}" tabindex="-1" role="dialog" aria-labelledby="destroyLabel{{$merchant->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="destroyLabel{{$merchant->id}}">Are you sure?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Your data will not be recovered and you will no longer be able to access your account information.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <form action="{{ route('merchants.destroy', $merchant->id) }}" method="POST">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-primary">Remove</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
   @endforeach 
   @endif
  </tbody>
</table>
</div>


@endsection
