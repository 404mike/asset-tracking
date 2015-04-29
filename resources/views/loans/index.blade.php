@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Loans</div>

        <div class="panel-body">
          

          <a href="loans/create" type="button" class="btn btn-default">Start a new loan</a>

<!--           <a class="btn btn-primary" type="button">
            Items on Loan <span class="badge">4</span>
          </a> -->

          <hr />
          <h4>Current items on loan</h4>


          <div class="panel panel-danger">
            <div class="panel-heading">Mini kit 2</div>
            <div class="panel-body">

              <p>John Doe - 0197485446</p>

              <p>Return date 24/08/15</p>

              <div>

              </div>


              <div class="bs-example" data-example-id="btn-variants">
                <button type="button" class="btn btn-primary">Show more details</button>
                <button type="button" class="btn btn-default kit-returned">Item returned</button>
              </div>

              
            </div>
          </div>


          <div class="panel panel-info">
            <div class="panel-heading">Digikit 5</div>
            <div class="panel-body">
              <p>John Doe - 0197485446</p>

              <p>Return date 24/08/15</p>
              <div class="bs-example" data-example-id="btn-variants">
                <button type="button" class="btn btn-primary">Show more details</button>
                <button type="button" class="btn btn-default kit-returned">Item returned</button>
              </div>
            </div>
          </div>


          <div class="panel panel-info">
            <div class="panel-heading">Digikit 4</div>
            <div class="panel-body">
              <p>John Doe - 0197485446</p>

              <p>Return date 24/08/15</p>
              <div class="bs-example" data-example-id="btn-variants">
                <button type="button" class="btn btn-primary">Show more details</button>
                <button type="button" class="btn btn-default kit-returned">Item returned</button>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>
@endsection