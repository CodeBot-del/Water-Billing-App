@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Actions') }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{route('customer.index')}}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{route('customer.create')}}" class="list-group-item list-group-item-action">Create</a>

                    </ul>
                </div>
            </div>
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

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Customers') }}</div>

                <form action="{{ route('customer.store')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of Customer</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" name="phone" >
                    </div>
                    <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <input type="text" class="form-control" name="faculty" >
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category">
                            <option value=""></option>
                            <option value="student">Student</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="worker">Worker</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Profile Image</label>
                        <input type="file" class="form-control" name="image">
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

