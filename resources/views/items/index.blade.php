@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li class="active">Items</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Items index</div>

        <div class="panel-body">
          <p>
            <a href="items/create_hardware_item" type="button" class="btn btn-default">Create new Hardware Item</a>
            <a href="items/all" class="btn btn-primary" type="button">Show all Hardware Items</a>
          </p>
          <p>
            <a href="items/create_software_item" type="button" class="btn btn-default">Create new Software Item</a>
            <a href="items/all" class="btn btn-primary" type="button">Show all Hardware Items</a>
          </p>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection