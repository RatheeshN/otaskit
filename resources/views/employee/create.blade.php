@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('employee.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="E-Mail">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Mobile No:</strong>
                <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Department</strong>
                <select class="form-control" name="department">
                    <option value="">Please Select</option>
                    <option value="Sales">Sales</option>
                    <option value="Marketing">Marketing</option>
                    <option value="IT">IT</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Status</strong>
                <select class="form-control" name="status">
                    <option value="">Please Select</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
        </div>
        
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection