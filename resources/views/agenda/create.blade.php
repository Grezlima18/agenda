@extends('master')

@section('main-content')
<div class="container mt-5">
  <div class="card rounded shadow">
    <div class="card-body">
      <h2 class="card-title">Criar</h2>
      <a href="{{ route('agenda.index') }}" class="btn btn-primary"><< Voltar</a>
      {{ Form::open(array('url' => route('agenda.store'))) }}
          @include('agenda.form')
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop

@section('javascript')
  <script>
    $(document).ready(function() {
        $('#telefone').inputmask('(99) 99999-9999');
    });
  </script>
@endsection