@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

      @if(Session::has('message'))
        <p class="bg-success flash-message">{{ Session::get('message') }}</p>
      @endif
			
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">

					<div class="row">
					  <div class="col-md-3">
					  	<a class="home-items" href="items"><i class="fa fa-laptop fa-2x"></i> Items</a>
					  </div>
					  <div class="col-md-3">
					  	<a class="home-items" href="kits"><i class="fa fa-suitcase fa-2x"></i> Kits</a> 
					  </div>
					  <div class="col-md-3">
					  	<a class="home-items" href="loans"><i class="fa fa-calendar fa-2x"></i> Loans <span class="badge">{{ count($numberOfLoans) }}</span> </a>
					  </div>
<!-- 					  <div class="col-md-3">
					  	<i class="fa fa-search fa-2x"></i> <a href="search">Search</a>
					  </div> -->
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
