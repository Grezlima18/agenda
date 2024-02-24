@extends('master')

@section('main-content')
<div class="container mt-5">
  <div class="card rounded shadow">
    <div class="card-body">
      <h2 class="card-title">Editar</h2>
      <a href="{{ route('agenda.index') }}" class="btn btn-primary"><< Voltar</a>
      {{ Form::model($cadastro, ['route' => ['agenda.update', $cadastro->id], 'method' => 'PUT']) }}
        @include('agenda.form')
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop
