<div class="form-group">
    <label for="nome">Nome:</label>
    {{ Form::text('nome', null, ["class" => "form-control", 'required']) }}
</div>
<div class="form-group">
    <label for="telefone">Telefone:</label>
    {{ Form::text('telefone', null, ["class" => "form-control", 'required', 'id' => 'telefone']) }}
</div>

<div class="form-group">
    <label for="cidade_estado">Cidade / Estado:</label>
    {{ Form::text('cidade_estado', null, ["class" => "form-control", 'required']) }}
</div>
<div class="form-group">
    <label for="email">E-mail:</label>
    {{ Form::email('email', null, ["class" => "form-control", 'required']) }}
</div>
<div class="form-group">
    <label for="categoria">Categoria:</label>
    {{ Form::select('categoria', $categorias, null, ["class" => "form-control", 'required']) }}
</div>

<button type="submit" class="btn btn-primary">Enviar</button>