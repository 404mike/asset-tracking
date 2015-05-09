@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Search</div>

        <div class="panel-body">

          @foreach($results as $res)
            <div>
              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="../items/{{ $res->type }}/{{ $res->id }}">{{ $res->name }} - {{ $res->inventory_number }} - {{ $res->serial_number }}</a>
                </div>
              </div>
            </div>
          @endforeach

          <?php echo $pag->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
