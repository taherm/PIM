@extends('layouts.master')

@section('content')
<div class='container'>
<form method="POST" action="/editmenu">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Menu Item</label>
      <input type="text" class="form-control" name="title"  >
    </div>
    
    <div class="form-group">
            <label for="exampleInputEmail1">Url</label>
            <input type="text" class="form-control" name="url"  >
          </div>

   <b>Submenu Item</b>
          <select name="submenu" class="form-control">
                <option value="None">None</option>
                @foreach($cate as $item)
               
                    <option value="{{$item->title}}">{{ $item->title }}</option>
                   
                    @endforeach
               
            </select>

    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
   
   <a href="del" class="button">Delete</a>
</form>

@include('layouts.errors')
</div>
@endsection
