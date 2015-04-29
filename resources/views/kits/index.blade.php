@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">


      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li class="active">Kit</li>
      </ol>


      <div class="panel panel-default">
        <div class="panel-heading">Kits index</div>

        <div class="panel-body">
          
          <a href="kits/create" type="button" class="btn btn-default">Create new Kit</a>
          <a href="kits/all" type="button" class="btn btn-default">View all Kits</a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection