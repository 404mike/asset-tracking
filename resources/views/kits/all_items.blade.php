@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">


      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/kits') }}">Kit</a></li>
        <li class="active">All Kits</li>
      </ol>


      <div class="panel panel-default">
        <div class="panel-heading">All Kits</div>

        <div class="panel-body">
          
          All Kits

        </div>
      </div>
    </div>
  </div>
</div>
@endsection