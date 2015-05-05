@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/kits') }}">Kit</a></li>
        <li class="active">{{ $kit->name }}</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">{{ $kit->name }} - {{ $kit->status }}</div>

        <div class="panel-body">

          @foreach ($kitItems as $item)
            <div class="all_items_list"><a href="../items/{{ $item->physical_item }}">{{ $item->name }} - {{ $item->inventory_number }}</a></div>
          @endforeach

          <hr />
          <a href="../loans/{{ $kit->id }}" class="btn btn-warning">See loan history</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
