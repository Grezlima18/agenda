@extends('master')

@section('main-content')
<div class="container mt-5">
  <div class="card rounded shadow">
    <div class="card-body">
      <h2 class="card-title">Listagem de Cadastros</h2>
      <a href="{{ route('agenda.create') }}" class="btn btn-primary mb-3">Adicionar novo contato</a>

      @if($cadastros->count() > 0)
        <table class="table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Cidade / Estado</th>
                <th>E-mail</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cadastros as $cadastro)
                <tr>
                    <td>{{ $cadastro->nome }}</td>
                    <td>{{ $cadastro->telefone }}</td>
                    <td>{{ $cadastro->cidade_estado }}</td>
                    <td>{{ $cadastro->email }}</td>
                    <td>{{ $cadastro->categoria }}</td>
                    <td class="btn-group">
                        <a href="{{ route('agenda.edit', $cadastro->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        
                        <form action="{{ route('agenda.destroy', $cadastro->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum cadastro encontrado.</p>
    @endif

    </div>
  </div>
</div>

@if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
@stop
