<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Cabeçalho -->
    <header class="bg-dark text-white p-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="./img/1200px-Instituto_Federal_Marca_2015.svg_.png" alt="Logo EDEIF" class="logo" style="width: 50px; height: auto;">
            <h4 class="ms-3 fw-bold">EDEIF</h4>
        </div>
    </header>
        <h3 class="text-center mb-4">DADOS DO ALUNO</h3>


    <!-- Mensagens -->
    <div class="container text-center my-3">
        <button class="btn btn-danger mx-2 fw-bold">MENSAGEM DE ERRO</button>
        <button class="btn btn-success mx-2 fw-bold">DIGITE A MATRÍCULA DO ALUNO</button>
    </div>

    <!-- Formulário -->
    <div class="container mt-4">
        <form method="POST" action="processa.php">
            <div class="row mb-3">
                <div class="col">
                    <label for="responsavel" class="form-label">Nome completo do responsável legal:</label>
                    <input type="text" class="form-control" id="responsavel" name="responsavel">
                </div>
                <div class="col">
                    <label for="parentesco" class="form-label">Grau de parentesco:</label>
                    <input type="text" class="form-control" id="parentesco" name="parentesco">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="nome" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="col">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="col">
                    <label for="telefone" class="form-label">Nº de telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="endereco" class="form-label">Endereço (Rua):</label>
                    <input type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="col">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
                <div class="col">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="curso" class="form-label">Curso:</label>
                    <input type="text" class="form-control" id="curso" name="curso">
                </div>
                <div class="col">
                    <label for="professor" class="form-label">Professor Orientador:</label>
                    <input type="text" class="form-control" id="professor" name="professor">
                </div>
            </div>
        </form>
    </div>

    <!-- Navegação -->
    <div class="container d-flex justify-content-between mt-4">
        <a href="index.php" class="btn btn-secondary fw-bold">← VOLTAR</a>
        <a href="tela3.php" class="btn btn-primary fw-bold">PRÓXIMO →</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>