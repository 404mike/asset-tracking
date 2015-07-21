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
        <li class="active">Kit Loans</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Loans</div>

        <div class="panel-body">
          

          <a href="loans/available" type="button" class="btn btn-default">View Available Kits</a>

          <hr />
          <h4>Current items on loan</h4>

          @foreach($loans as $loan)

            <?php 
              $today = date("Y-m-d H:i:s");
              if($loan->date_to_return <= $today) {
                $panelColor = 'danger';
              }else{
                $panelColor = 'info';
              }
            ?>

            <div class="panel panel-<?php echo $panelColor; ?>">
              <div class="panel-heading"><a href="{{ url('kits') }}/{{ $loan->kit_on_loan }}">{{ $loan->name }}</a></div>
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
                <a href="{{ url('loans/close') }}/{{ $loan->kit_on_loan }}" type="button" class="btn btn-default kit-returned">Item returned</a>

              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection