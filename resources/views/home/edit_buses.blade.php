
@extends('welcome')
@section('contain')
<div class="container">
    <div class="row">
      <div  class="col-lg-8 col-md-10 mx-auto">
      <a href="{{route('view')}}" class="btn btn-info">View-buses</a>

      <br>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif   
        <form action="{{URL::to('/edit_bus/'.$buses->id)}}" method="post">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name" value="{{$buses->name}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Operator</label>
              <input type="text" class="form-control" placeholder="Operator" name="operator" value="{{$buses->operator}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>location</label>
              <input type="text" class="form-control" placeholder="Location" name="location" value="{{$buses->location}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Seat_Row</label>
              <input type="text" class="form-control" placeholder="Seat_row" name="seat_row" value="{{$buses->seat_row}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Seat_column</label>
              <input type="text" class="form-control" placeholder="Seat_column" name="seat_column" value="{{$buses->seat_column}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection