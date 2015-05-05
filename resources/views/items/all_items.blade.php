@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">


      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/items')}}">Create Item</a></li>
        <li class="active">All Items</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">All Items</div>

        <div class="panel-body">

          @foreach ($items as $item)
            <p> {{ $item->name }} </p>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection