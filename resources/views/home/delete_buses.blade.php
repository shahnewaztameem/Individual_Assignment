
@extends('welcome')
@section('contain')
<div class="container">
    <div class="row">
        <a href="{{route('edit')}}" class="btn btn-danger">Edit buses</a>
        <a href="{{route('delete')}}" class="btn btn-danger">delete buses</a>
        <a href="{{route('view')}}" class="btn btn-info">View-buses</a>
      <div  class="col-lg-8 col-md-10 mx-auto">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Operator</label>
              <input type="text" class="form-control" placeholder="Operator" id="operator" required data-validation-required-message="Please enter the operator name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>location</label>
              <input type="text" class="form-control" placeholder="Location" id="location" required data-validation-required-message="Please enter the location.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Seat_Row</label>
              <input type="text" class="form-control" placeholder="Seat_row" id="Seat_row" required data-validation-required-message="Please enter Seat_row.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Seat_column</label>
              <input type="text" class="form-control" placeholder="Seat_column" id="Seat_column" required data-validation-required-message="Please enter Seat_column.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection