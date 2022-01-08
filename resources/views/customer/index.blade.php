@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All Customers
                    <a href="{{route('customer.create')}}"><button class="btn btn-success" style="float: right;">Add Customer</button></a>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message')}}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Faculty</th>
                            <th scope="col">Category</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($customers)>0)
                            @foreach ($customers as $key => $customer)
                            <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td><img src="{{Storage::url($customer->image)}}" width="80" height="80"></td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->faculty}}</td>
                            <td>{{$customer->category}}</td>
                            <td><a href="{{route('customer.edit', $customer->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                            <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$customer->id}}">Delete</button></td>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$customer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form action="{{route('customer.destroy', $customer->id)}}" method="post">@csrf
                                @method('DELETE')
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this customer?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </div>
                            </div>
                            </form>
                            </div>
                            </tr>
                            @endforeach

                            @else
                            <p>No Customers to Show</p>
                            @endif

                        </tbody>
                    </table>
                    {{$customers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
