<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Formulário</title>
  <!-- Adicione o link do Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="card rounded shadow">
    <div class="card-body">
      <h2 class="card-title">Formulário</h2>
      <form>
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone">
        </div>
        <div class="form-group">
          <label for="cidadeEstado">Cidade / Estado:</label>
          <input type="text" class="form-control" id="cidadeEstado" placeholder="Digite sua cidade e estado">
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
        </div>
        <div class="form-group">
          <label for="categoria">Categoria:</label>
          <select class="form-control" id="categoria">
            <option value="1">Aluno</option>
            <option value="2">Responsável</option>
            <option value="3">Professor</option>
            <option value="4">Funcionário</option>
            <option value="5">Coordenador</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>

<!-- Adicione o link do Bootstrap JS e jQuery (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
