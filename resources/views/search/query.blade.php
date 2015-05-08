@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Search</div>

        <div class="panel-body">

        Results
          <?php echo '<pre>'  , print_r($results) , '</pre>';?>
          <?php echo $pag->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
