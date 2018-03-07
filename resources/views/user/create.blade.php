@extends('layouts.app')

@section('content')
<div class="container">
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div><br>
@endif
<div class="row">
    <form method="POST" action="{{url('/create/ticket')}}">
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Ticket Description:</label>
            <textarea class="form-control" cols="5" rows="5" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</div>
@endsection