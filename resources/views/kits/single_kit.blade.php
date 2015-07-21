@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      @if(Session::has('message'))
        <p class="bg-success flash-message">{{ Session::get('message') }}</p>
      @endif  

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/kits') }}">Kits</a></li>
        <li class="active">{{ $kit->name }}</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">{{ $kit->name }} - {{ $kit->status }}</div>

        <div class="panel-body">

          @foreach ($kitItems as $item)
            <div class="all_items_list"><a href="../items/hardware/{{ $item->physical_item }}">{{ $item->name }} - {{ $item->inventory_number }}</a></div>
          @endforeach

          <hr />

          <a href="../loans/{{ $kit->id }}" class="btn btn-warning">See loan history</a>
          <a class="btn btn-info" href="<?php echo $kit['id']; ?>/edit" role="button">Edit</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
