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
        <li><a href="{{ url('/items') }}">Items</a></li>
        <li><a href="{{ url('/items/hardware') }}">Hardware</a></li>
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
            <li class="list-group-item"><strong>Supplier Contact</strong> - {{ $item->supplier_contact }} </li>
            <li class="list-group-item"><strong>IP Address</strong> - {{ $item->ip_address }} </li>
            <li class="list-group-item"><strong>Notes</strong> - {{ $item->notes }} </li>   
          </ul>    

          <a class="btn btn-info" href="{{ $item->id }}/edit" role="button">Edit</a>     


          @if(count($installedSoftware) > 0)
            <hr />
            <h4>Installed Software</h4>
            @foreach($installedSoftware as $software)
              <a class="btn btn-default" href="../software/{{ $software->id }}">{{ $software->name }}</a>
            @endforeach
          @endif

          @if(count($belongsTo) > 0)
              <hr />
              <h4>Belongs to</h4>
              @foreach($belongsTo as $kit)
                <a class="btn btn-primary" href="../../kits/{{ $kit->id }}" role="button">{{ $kit->name }} - {{ $kit->status }}</a>
              @endforeach
          @endif

          <hr />

          <!-- <button type="button" class="btn btn-danger delete-item" data-type="hardware" data-id="{{ $item->id }}" data-target=".bs-example-modal-sm">Delete this item</button> -->

          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete this item?</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  <button type="button" class="btn btn-primary delete-yes">Yes</button>
                </div>
              </div>
            </div>
          </div>


      </div>

    </div>
  </div>
</div>
@endsection
