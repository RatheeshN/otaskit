@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Task management system</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success mb-2" href="{{ route('task.create') }}"> Create New Task</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach ($task as $tt)
        <tr>
            <td>{{ $tt->title }}</td>
            <td>{{ $tt->description }}</td>
            <td>{{ $tt->status }}</td>
            <td>
                <form action="{{ route('task.destroy',$tt->id) }}" method="POST">
                    <a class="btn btn-success" href="#">Assign tasks</a>
                    <a class="btn btn-primary" href="{{ route('task.edit',$tt->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection