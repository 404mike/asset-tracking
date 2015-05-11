@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">


      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/loans') }}">Kit Loans</a></li>
        <li class="active">All Available Kits</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">All Available Kits</div>

        <div class="panel-body">

          @if(count($availableKits) == 0)
            There are currently no kits available
          @endif

          @foreach($availableKits as $kit)

            <div class="panel panel-info">
              <div class="panel-heading"><a href="{{ url('kits') }}/{{ $kit->id }}">{{ $kit->name }}</a></div>
              <div class="panel-body">

                <p><strong>Location:</strong> {{ $kit->kit_loan_location }}</p>

                <a href="{{ url('loans/create') }}/{{ $kit->id }}" type="button" class="btn btn-primary show_item_loan_details">Start a new loan for this Kit</a>

              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
