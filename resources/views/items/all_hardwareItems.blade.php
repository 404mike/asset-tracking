@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/items')}}">Items</a></li>
        <li class="active">Hardware</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">All Items</div>

        <div class="panel-body">
          <a href="../items/hardware/create" type="button" class="btn btn-default">Create new Hardware Item</a>

          @foreach ($items as $item)
            <div class="all_items_list"><a href="hardware/{{ $item->id }}">{{ $item->name }} - {{ $item->inventory_number }}</a></div>
          @endforeach

          <?php echo $items->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection