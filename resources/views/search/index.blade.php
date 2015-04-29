@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Search</div>

        <div class="panel-body">

        <form class="form-horizontal" role="form" method="GET" action="{{ url('search/query') }}">

          <div class="form-group">
            <label class="col-md-4 control-label">Search Term</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="q" value="{{ old('q') }}">
            </div>
          </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Restrict search to</label>
              <div class="col-md-6">
                <select class="form-control" name="restrict">
                  <option value="all">All</option>
                  <option value="asset_code">Asset Code</option>
                  <option value="serial_code">Serial Code</option>
                </select>
              </div>
            </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </div>
        </form>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
