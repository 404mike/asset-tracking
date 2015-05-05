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
        <li><a href="{{ url('/items')}}">Items</a></li>
        <li class="active">Create Software Item</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Create New Software Item</div>

        <div class="panel-body">


        <form class="form-horizontal" role="form" method="POST" action="{{ url('items/create_software_item') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Manufacturer</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="manufacturer" value="{{ old('manufacturer') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Version</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="version" value="{{ old('version') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Inventory Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="inventory_number" value="{{ old('inventory_number') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Serial Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="serial_number" value="{{ old('serial_number') }}">
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
            <label class="col-md-4 control-label">Notes</label>
            <div class="col-md-6">
              <textarea class="form-control" name="notes" value="{{ old('notes') }}"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Installed On</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="installed_on" value="{{ old('installed_on') }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Licence</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="licence" value="{{ old('licence') }}">
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