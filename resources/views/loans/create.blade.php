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
        <li><a href="{{ url('/loans') }}">Kit Loans</a></li>
        <li class="active">Create New Loan</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Create New Loan for {{ $kit->name }}</div>

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ url('loans/create') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="kit_on_loan" value="{{ $kit->id }}">

            <div class="form-group">
              <label class="col-md-4 control-label">On Loan to</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="on_loan_to" value="{{ old('on_loan_to') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Date on loan from</label>
              <div class="col-md-6">
                <input type="date" class="form-control" name="date_on_loan" value="{{ old('date_on_loan') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Date for return</label>
              <div class="col-md-6">
                <input type="date" class="form-control" name="date_to_return" value="{{ old('date_to_return') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Notes</label>
              <div class="col-md-6">
                <textarea class="form-control" name="notes">{{ old('on_loan_to') }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Kit Location</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="kit_loan_location" value="{{ old('kit_loan_location') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Contact details</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="contact" value="{{ old('kit_loan_location') }}">
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
