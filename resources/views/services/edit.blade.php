@extends('layouts.master')

@section('content')
<div class='container'>
<form method="POST" action="/services/{{$serv->id}}">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="{{$serv->title}}"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea name="description" id="description" placeholder="{{$serv->description}}" ></textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" value="{{$serv->image}}" >
    </div>
   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>  
</form>

@include('layouts.errors')
</div>
@endsection
