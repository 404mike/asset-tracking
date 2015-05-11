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

      @if(Session::has('message'))
        <p class="bg-success flash-message">{{ Session::get('message') }}</p>
      @endif  

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/kits') }}">Kits</a></li>
        <li class="active">Create New Kit</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Create New Kit</div>

        <div class="panel-body">
         
          <form class="form-horizontal" role="form" method="POST" action="{{ url('kits/create') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="col-md-4 control-label">Kit Name</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label">Location</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="location" value="{{ old('location') }}">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label">Notes</label>
            <div class="col-md-6">
              <textarea class="form-control" name="comments">{{ old('comments') }}</textarea>
            </div>
          </div>



          <hr />

          <div class="form-group">
            <label class="col-md-4 control-label">Search for items</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="search_kit_items" id="search_kit_items" value="{{ old('manufacturer') }}">
            </div>
          </div>

          <hr />

          <div class="form-group" id="kit-items">
            <div class="list-group">
              <p href="#" class="list-group-item active">
                Items
              </p>              
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
