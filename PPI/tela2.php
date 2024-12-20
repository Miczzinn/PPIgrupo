<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Cabeçalho -->
    <header class="header d-flex align-items-center p-3 bg-dark text-white">
        <img src="./img/1200px-Instituto_Federal_Marca_2015.svg_.png" alt="Logo EDEIF" class="logo" style="width: 50px; height: auto;">
        <h4 class="ms-2 fw-bold mb-0">EDEIF</h4>
    </header>

    <!-- Título -->
    <main class="container my-5">
        <div class="bg-light p-4 rounded shadow">
            <h1 class="text-center mb-4">DADOS DO ALUNO</h1>
            
            <!-- Botões -->
            <div class="d-flex justify-content-center gap-3 mb-4">
                <button class="btn btn-danger btn-lg">MENSAGEM DE ERRO</button>
                <button class="btn btn-success btn-lg">DIGITE A MATRÍCULA DO ALUNO</button>
            </div>

            <!-- Formulário -->
            <form method="POST" action="processa.php" class="row g-3">
                <div class="col-md-6">
                    <label for="responsavel" class="form-label">Nome completo do responsável legal:</label>
                    <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="Digite o nome completo">
                </div>
                <div class="col-md-6">
                    <label for="parentesco" class="form-label">Grau de parentesco:</label>
                    <input type="text" class="form-control" id="parentesco" name="parentesco" placeholder="Grau de parentesco">
                </div>

                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                </div>
                <div class="col-md-6">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
                </div>
                <div class="col-md-6">
                    <label for="telefone" class="form-label">Nº de telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">
                </div>

                <div class="col-md-6">
                    <label for="endereco" class="form-label">Endereço (Rua):</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
                </div>
                <div class="col-md-6">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                </div>
                <div class="col-md-6">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                </div>

                <div class="col-md-6">
                    <label for="curso" class="form-label">Curso:</label>
                    <input type="text" class="form-control" id="curso" name="curso" placeholder="Curso">
                </div>
                <div class="col-md-6">
                    <label for="professor" class="form-label">Professor Orientador:</label>
                    <input type="text" class="form-control" id="professor" name="professor" placeholder="Professor Orientador">
                </div>
            </form>
        </div>
    </main>

  
    <footer class="d-flex justify-content-between p-3">
        <a href="index.php" class="btn btn-secondary fw-bold">← ANTERIOR</a>
        <a href="tela3.php" class="btn btn-primary fw-bold">PRÓXIMO →</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
