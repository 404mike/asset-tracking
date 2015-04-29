@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Create New Kit</div>

        <div class="panel-body">
         
          <form class="form-horizontal" role="form" method="POST" action="{{ url('items/create_new_software') }}">

          <div class="form-group">
            <label class="col-md-4 control-label">Kit Name</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
          </div>

          <hr />

          <div class="form-group">
            <label class="col-md-4 control-label">Manufacturer</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="manufacturer" value="{{ old('manufacturer') }}">
            </div>
          </div>

          <hr />

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
