@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">


      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li class="active">Create Item</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Items index</div>

        <div class="panel-body">

          <a href="items/create_hardware_item" type="button" class="btn btn-default">Create new hardware item</a>
          <a href="items/create_software_item" type="button" class="btn btn-default">Create new software item</a>


          <a href="items/all" class="btn btn-primary" type="button">Show all Items</a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection