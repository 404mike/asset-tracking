@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      
      <!-- Errors -->
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/items')}}">Create Item</a></li>
        <li class="active">Create Hardware Item</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Create New Hardware Item</div>

        <div class="panel-body">


        <form class="form-horizontal" role="form" method="POST" action="{{ url('items/create_hardware_item') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Model</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="model" value="{{ old('model') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Manufacturer</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="manufacturer" value="{{ old('manufacturer') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Cost Price (£)</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="cost_price" value="{{ old('cost_price') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Location</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="location" value="{{ old('location') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Admin Username</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="admin_username" value="{{ old('admin_username') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Alternate Username</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="alternate_username" value="{{ old('alternate_username') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Inventory Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="inventory_number" value="{{ old('inventory_number') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Operating System</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="operating_system" value="{{ old('operating_system') }}">
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
              <input type="date" class="form-control" name="last_update" value="{{ old('last_update') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Serial Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="serial_number" value="{{ old('serial_number') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Insurance</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="insurance" value="{{ old('insurance') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Service Level Agreement</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="service_level_agreement" value="{{ old('service_level_agreement') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Active Directory</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="active_directory" value="{{ old('active_directory') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Date of Purchase</label>
            <div class="col-md-6">
              <input type="date" class="form-control" name="date_of_purchase" value="{{ old('date_of_purchase') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Supplier Contact</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="supplier_contact" value="{{ old('supplier_contact') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label"><abbr title="Internet Protocol">IP</abbr> Address</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="ip_address" value="{{ old('ip_address') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Notes</label>
            <div class="col-md-6">
              <textarea class="form-control" name="notes" value="{{ old('notes') }}"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Picture</label>
            <div class="col-md-6">
              <input type="file" class="form-control" name="ip_address" value="{{ old('ip_address') }}">
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