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
        <li><a href="{{ url('/items/hardware/') }}/{{ $item->id}}">{{ $item->name }}</a></li>
        <li class="active">Edit</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Update details for {{ $item->name }}</div>

        <div class="panel-body">

        <form class="form-horizontal" role="form" method="POST" action="{{ url('items/hardware/') }}/{{ $item->id}}/edit">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="id" value="{{ $item->id }}">

          <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ $item->name }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Type</label>
            <div class="col-md-6">
              <select class="form-control" name="type" id="type">
                <option value="camera">Camera</option>
                <option value="case">Case</option>
                <option value="camera_tripod">Camera Tripod</option>
                <option value="laptop">Laptop</option>                
                <option value="microphone">Microphone</option>
                <option value="monitor">Monitor</option>
                <option value="pc">PC</option>     
                <option value="phone">Phone</option>           
                <option value="printer">Printer</option>                
                <option value="scanner">Scanner</option>                
              </select>
            </div>
          </div>          

          <div class="form-group">
            <label class="col-md-4 control-label">Model</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="model" value="{{ $item->model }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Manufacturer</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="manufacturer" value="{{ $item->manufacturer }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Cost Price (£)</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="cost_price" value="{{ $item->cost_price }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Location</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="location" value="{{ $item->location }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Admin Username</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="admin_username" value="{{ $item->admin_username }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Alternate Username</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="alternate_username" value="{{ $item->alternate_username }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Inventory Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="inventory_number" value="{{ $item->inventory_number }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Operating System</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="operating_system" value="{{ $item->operating_system }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Status</label>
            <div class="col-md-6">
              <select class="form-control" name="status" id="status">
                <option value="available">Available</option>
                <option value="on_loan">On Loan</option>
                <option value="maintenance">In for maintenance</option>
                <option value="broken">Broken</option>
                <option value="recylced">Recylced</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Last Update</label>
            <div class="col-md-6">
              <input type="date" class="form-control" name="last_update" value="{{ $item->last_update }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Serial Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="serial_number" value="{{ $item->serial_number }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Insurance</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="insurance" value="{{ $item->insurance }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Service Level Agreement</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="service_level_agreement" value="{{ $item->service_level_agreement }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Active Directory</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="active_directory" value="{{ $item->active_directory }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Date of Purchase</label>
            <div class="col-md-6">
              <input type="date" class="form-control" name="date_of_purchase" value="{{ $item->date_of_purchase }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Supplier Contact</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="supplier_contact" value="{{ $item->supplier_contact }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label"><abbr title="Internet Protocol">IP</abbr> Address</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="ip_address" value="{{ $item->ip_address }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Notes</label>
            <div class="col-md-6">
              <textarea class="form-control" name="notes" value="{{ $item->notes }}"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
