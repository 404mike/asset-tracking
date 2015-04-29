@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">

					<div class="row">
					  <div class="col-md-3">
					  	<i class="fa fa-laptop fa-2x"></i> <a href="items">Items</a>
					  </div>
					  <div class="col-md-3">
					  	<i class="fa fa-suitcase fa-2x"></i> <a href="kits">Kits</a> 
					  </div>
					  <div class="col-md-3">
					  	<i class="fa fa-calendar fa-2x"></i> <a href="loans">Loans</a> <span class="badge">0</span> 
					  </div>
					  <div class="col-md-3">
					  	<i class="fa fa-search fa-2x"></i> <a href="search">Search</a>
					  </div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
