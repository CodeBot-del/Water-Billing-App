@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-8">
            @if(count($errors)>0)
                <div class="card mt-5">
                    <div class="card-body">

                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>


                    </div>
                </div>
                @endif
            </div>
            <div class="card">
                <div class="card-header">{{ __('Edit Customer') }}</div>

                <form action="{{ route('customer.update', $customer->id)}}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of Customer</label>
                        <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$customer->email}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{$customer->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <input type="text" class="form-control" name="faculty" value="{{$customer->faculty}}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" value="{{$customer->category}}">
                            <option value=""></option>
                            <option value="student">Student</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="worker">Worker</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Profile Image</label>
                        <input type="file" class="form-control" name="image">
                        <img src="{{Storage::url($customer->image)}}" width="80" height="80">
                    </div>

                    <div class="form-group text-center" >
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

