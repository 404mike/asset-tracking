@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/items') }}">Items</a></li>
        <li class="active">{{ $item->name }}</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">{{ $item->name }}</div>

        <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item"><strong>Name</strong> - {{ $item->name }} </li>
            <li class="list-group-item"><strong>Type</strong> - {{ $item->type }} </li>
            <li class="list-group-item"><strong>Model</strong> - {{ $item->model }} </li>
            <li class="list-group-item"><strong>Manufacturer</strong> - {{ $item->manufacturer }} </li>
            <li class="list-group-item"><strong>Cost Price</strong> - {{ $item->cost_price }} </li>
            <li class="list-group-item"><strong>Location</strong> - {{ $item->location }} </li>
            <li class="list-group-item"><strong>Admin Username</strong> - {{ $item->admin_username }} </li>
            <li class="list-group-item"><strong>Alternate Username</strong> - {{ $item->alternate_username }} </li>
            <li class="list-group-item"><strong>Inventory Number</strong> - {{ $item->inventory_number }} </li>
            <li class="list-group-item"><strong>Operating System</strong> - {{ $item->operating_system }} </li>
            <li class="list-group-item"><strong>Status</strong> - {{ $item->status }} </li>
            <li class="list-group-item"><strong>Last Update</strong> - {{ $item->last_update }} </li>
            <li class="list-group-item"><strong>Serial Number</strong> - {{ $item->serial_number }} </li>
            <li class="list-group-item"><strong>Insurance</strong> - {{ $item->insurance }} </li>
            <li class="list-group-item"><strong>Service Level Agreement</strong> - {{ $item->service_level_agreement }} </li>
            <li class="list-group-item"><strong>Active Directory</strong> - {{ $item->active_directory }} </li>
            <li class="list-group-item"><strong>Date of Purchase</strong> - {{ $item->date_of_purchase }} </li>
            <li class="list-group-item"><strong>Supplier Contact - {{ $item->supplier_contact }} </li>
            <li class="list-group-item"><strong>IP Address</strong> - {{ $item->ip_address }} </li>
            <li class="list-group-item"><strong>Notes</strong> - {{ $item->notes }} </li>   
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
