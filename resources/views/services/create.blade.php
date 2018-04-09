@extends('layouts.master')

@section('content')
<div class='container'>
<form method="POST" action="/services">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea name="description" id="description" ></textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" >
    </div>
    
    <b>Add to Menu</b>
          <select name="submenu" class="form-control">
                <option value="None">None</option>
                @foreach($cate as $item)
               
                    <option value="{{$item->title}}">{{ $item->title }}</option>
                   
                    @endforeach
               
            </select>

            <div class="form-group">
            <label for="exampleInputEmail1">Url</label>
            <input type="text" class="form-control" name="url"  >
          </div>

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>  
</form>

@include('layouts.errors')
</div>
@endsection
