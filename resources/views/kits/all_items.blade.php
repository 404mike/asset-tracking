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
        <li class="active">Kits</li>
      </ol>

      <div class="panel panel-default">
        <div class="panel-heading">All Kits</div>

        <div class="panel-body">

          <a href="kits/create" type="button" class="btn btn-default">Create new Kit</a>

          @foreach ($kits as $kit)
            <div class="all_items_list"><a href="kits/{{ $kit->id }}">{{ $kit->name }} - {{ $kit->status }}</a></div>
          @endforeach

          <?php echo $kits->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
