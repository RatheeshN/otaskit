<?php

use App\Models\Employee;
?>
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
   
<form action="{{ route('employee.update',$employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?=$employee->name?>">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="E-Mail" value="<?=$employee->email?>">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Mobile No:</strong>
                <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No" value="<?=$employee->mobile_no?>">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Department</strong>
                <select class="form-control" name="department">
                    <option value="">Please Select</option>
                    <option value="Sales" {{ $employee->department == "Sales" ? 'selected' : '' }}>Sales</option>
                    <option value="Marketing" {{ $employee->department == "Marketing" ? 'selected' : '' }}>Marketing</option>
                    <option value="IT" {{ $employee->department == "IT" ? 'selected' : '' }}>IT</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Status</strong>
                <select class="form-control" name="status">
                    <option value="">Please Select</option>
                    <option value="Active" {{ $employee->status == "Active" ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $employee->status == "Inactive" ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
        
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection