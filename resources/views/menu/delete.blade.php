   @extends('layouts.master')

   @section('content')
   <div class='container'>
        <form method="POST" action="deletemenu">
       {{ csrf_field() }}
       <input name="_method" value="delete" type="hidden">
      
   
      <b>Menu Item</b>
             <select name="submenu" class="form-control">
                   <option value="None">None</option>
                   @foreach($cate as $item)
                  
                       <option value="{{$item->title}}">{{ $item->title }}</option>
                      
                       @endforeach
                  
               </select>
   
       <div>
       <button type="submit" class="btn btn-danger">Delete</button>
      </div>  
   </form>
   
   @include('layouts.errors')
   </div>
   @endsection
   
   