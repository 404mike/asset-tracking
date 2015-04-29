@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Items index</div>

        <div class="panel-body">

          <a href="items/create" type="button" class="btn btn-default">Create new item</a>


          <a class="btn btn-primary" type="button">
            Show all Items
          </a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection