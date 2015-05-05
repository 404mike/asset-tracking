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
        <div class="panel-heading">Choose Hardware or Software Items</div>

        <div class="panel-body">
          <a href="items/hardware" class="btn btn-primary" type="button">Hardware Items</a>
          <a href="items/software" class="btn btn-primary" type="button">Software Items</a>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection