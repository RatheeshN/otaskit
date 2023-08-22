@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Task</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('task.index') }}"> Back</a>
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
   
<form action="{{ route('task.update',$task->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title" value="<?=$task->title?>">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <strong>Description:</strong>
                <textarea name="description" class="form-control"><?=$task->description?></textarea>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection