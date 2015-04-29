@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li class="active">Kit Loans</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">Loans</div>

        <div class="panel-body">
          

          <a href="loans/create" type="button" class="btn btn-default">Start a new loan</a>
          <a class="btn btn-default" type="button">Loan history</a>

          <hr />
          <h4>Current items on loan</h4>

          <div class="panel panel-danger">
            <div class="panel-heading">Mini kit 2 - Late</div>
            <div class="panel-body">

              <p><strong>On loan to</strong> John Doe</p>

              <p><strong>Return date</strong> 24/08/15</p>

              <div class="exta_loan_info">
                <p><strong>On loand from</strong> 20/07/15</strong></p>
                <p><strong>Location</strong> Cardiff</p>
                <p><strong>Contact</strong> 0190723423</p>
                <p><strong>Notes</strong> lorem ipsum</p>
              </div>

              <button type="button" class="btn btn-primary show_item_loan_details">Show more details</button>
              <button type="button" class="btn btn-default kit-returned">Item returned</button>

            </div>
          </div>


          <div class="panel panel-info">
            <div class="panel-heading">Digikit 5</div>
            <div class="panel-body">

              <p><strong>On loan to</strong> John Doe</p>

              <p><strong>Return date</strong> 24/08/15</p>

              <div class="exta_loan_info">
                <p><strong>On loand from</strong> 20/07/15</strong></p>
                <p><strong>Location</strong> Cardiff</p>
                <p><strong>Contact</strong> 0190723423</p>
                <p><strong>Notes</strong> lorem ipsum</p>
              </div>

              <button type="button" class="btn btn-primary show_item_loan_details">Show more details</button>
              <button type="button" class="btn btn-default kit-returned">Item returned</button>

            </div>
          </div>


          <div class="panel panel-info">
            <div class="panel-heading">Digikit 4</div>
            <div class="panel-body">

              <p><strong>On loan to</strong> John Doe</p>

              <p><strong>Return date</strong> 24/08/15</p>

              <div class="exta_loan_info">
                <p><strong>On loand from</strong> 20/07/15</strong></p>
                <p><strong>Location</strong> Cardiff</p>
                <p><strong>Contact</strong> 0190723423</p>
                <p><strong>Notes</strong> lorem ipsum</p>
              </div>

              <button type="button" class="btn btn-primary show_item_loan_details">Show more details</button>
              <button type="button" class="btn btn-default kit-returned">Item returned</button>

            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>
@endsection