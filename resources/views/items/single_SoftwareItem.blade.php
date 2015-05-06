@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/items') }}">Items</a></li>
        <li><a href="{{ url('/items/software') }}">Software</a></li>
        <li class="active">{{ $item->name }}</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">{{ $item->name }}</div>

        <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item"><strong>Name</strong> - {{ $item->name }} </li>
            <li class="list-group-item"><strong>Manufacturer</strong> - {{ $item->manufacturer }} </li>
            <li class="list-group-item"><strong>Version</strong> - {{ $item->version }} </li>
            <li class="list-group-item"><strong>Inventory Number</strong> - {{ $item->inventory_number }} </li>
            <li class="list-group-item"><strong>Serial Number</strong> - {{ $item->serial_number }} </li>
            <li class="list-group-item"><strong>Date of Purchase</strong> - {{ $item->date_of_purchase }} </li>
            <li class="list-group-item"><strong>Supplier Contact</strong> - {{ $item->supplier_contact }} </li>
            <li class="list-group-item"><strong>notes</strong> - {{ $item->notes }} </li>
            <li class="list-group-item"><strong>Installed On</strong> - <a href="../hardware/{{ $installed_on->id }}">{{ $installed_on->name }}</a></li>
            <li class="list-group-item"><strong>Licence</strong> - {{ $item->licence }} </li>
          </ul>    

          <a class="btn btn-info" href="{{ $item->id }}/edit" role="button">Edit</a>     

        @if(count($belongsTo) > 0)
            <hr />
            <h4>Belongs to</h4>
            @foreach($belongsTo as $kit)
              <a class="btn btn-primary" href="../kits/{{ $kit->id }}" role="button">{{ $kit->name }} - {{ $kit->status }}</a>
            @endforeach
          <!-- </div> -->
        @endif
<!--         <hr />
         <a class="btn btn-warning" href="../loans/{{ $item->id }}" role="button">Loan History</a>
 -->
      </div>

    </div>
  </div>
</div>
@endsection
