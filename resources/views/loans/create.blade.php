@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">


      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/loans') }}">Kit Loans</a></li>
        <li class="active">Create New Loan</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Create New Loan</div>

        <div class="panel-body">
          Form to create a new loan
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
