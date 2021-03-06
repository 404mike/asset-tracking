@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/loans') }}">Kit Loans</a></li>
        <li class="active">{{$loans[0]->name}} loan history</li>
      </ol>


      <div class="panel panel-default">
        <div class="panel-heading">{{$loans[0]->name}} loan history</div>

        <div class="panel-body">

          @foreach($loans as $loan)

            <div class="panel panel-info">
              <div class="panel-heading">{{ $loan->name }}</div>
              <div class="panel-body">

                <p><strong>On loan to:</strong> {{ $loan->on_loan_to }}</p>

                <p><strong>Return date:</strong> {{ substr($loan->date_to_return, 0, -9) }}</p>

                <div class="exta_loan_info">
                  <p><strong>On loand from:</strong> {{substr( $loan->date_on_loan, 0 , -9) }}</strong></p>
                  <p><strong>Location:</strong> {{ $loan->kit_loan_location }}</p>
                  <p><strong>Contact:</strong> {{ $loan->contact }}</p>
                  <p><strong>Notes:</strong> {{ $loan->notes }}</p>
                </div>

                <button type="button" class="btn btn-primary show_item_loan_details">Show more details</button>

              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
