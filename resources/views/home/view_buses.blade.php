
@extends('welcome')
@section('contain')
<div class="container">
    <div class="row">
        <a href="{{route('view')}}" class="btn btn-info">View-buses</a>
    </div>
    <br>
    <br>
    <div> 
    <table class="table">
        <thead>
          <tr>
           <th scope="col">Id</th>
           <th scope="col">name</th>
           <th scope="col">operator</th>
           <th scope="col">location</th>
           <th scope="col">seat_row</th>
           <th scope="col">seat_column</th>
           <th scope="col">operations</th>
         </tr>
        </thead>
        @foreach($buses as $row)
        <tbody>
         <tr>
          <th scope="row">{{$row->id}}</th>
          <td>{{$row->name}}</td>
          <td>{{$row->operator}}</td>
          <td>{{$row->location}}</td>
          <td>{{$row->seat_row}}</td>
          <td>{{$row->seat_column}}</td>
          <td>
            <a href="{{URL::to('/edit_bus/'.$row->id)}}" class="btn btn-sm btn-success">Edit buses</a>
            <a href="{{URL::to('/delete_bus/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">delete buses</a>
          </td>

        </tr>
       </tbody>
       @endforeach
</table>
    </div>
  </div>
@endsection