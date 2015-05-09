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

        <form class="form-horizontal" role="form" method="POST" action="{{ url('items/software/') }}/{{ $item->id}}/edit">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ $item->name }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Manufacturer</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="manufacturer" value="{{ $item->manufacturer }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Version</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="version" value="{{ $item->version }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Inventory Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="inventory_number" value="{{ $item->inventory_number }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Serial Number</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="serial_number" value="{{ $item->serial_number }}">
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
            <label class="col-md-4 control-label">Notes</label>
            <div class="col-md-6">
              <textarea class="form-control" name="notes" value="{{ $item->notes }}"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Installed On</label>
            <div class="col-md-6">
              <input type="text" class="form-control installed_on" name="installed_on_view" value="{{ $hardware->name }}" data-provide="typeahead">
              <input type="hidden" name="installed_on" id="installed_on" value="{{ $item->installed_on }}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Licence</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="licence" value="{{ $item->licence }}">
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
