<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Empresa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header d-flex align-items-center p-3 bg-dark text-white">
        <img src="./img/1200px-Instituto_Federal_Marca_2015.svg_.png" alt="Logo EDEIF" class="logo" style="width: 50px; height: auto;">
        <h4 class="ms-2 fw-bold mb-0">EDEIF</h4>
    </header>

    <main class="container my-5">
        <div class="bg-light p-4 rounded shadow">
            <h1 class="text-center mb-4">DADOS DA EMPRESA</h1>
            <div class="d-flex justify-content-center gap-3 mb-4">
                <button class="btn btn-danger btn-lg">MENSAGEM DE ERRO</button>
                <button class="btn btn-success btn-lg">DIGITE O CNPJ DA EMPRESA</button>
            </div>
            
            <!-- Formulário PHP -->
            <form action="processar.php" method="POST" class="row g-3">
                <!-- PHP para exibir mensagens -->
                <?php
                if (isset($_GET['erro'])) {
                    echo '<div class="alert alert-danger">Erro: ' . htmlspecialchars($_GET['erro']) . '</div>';
                }
                if (isset($_GET['sucesso'])) {
                    echo '<div class="alert alert-success">Sucesso: ' . htmlspecialchars($_GET['sucesso']) . '</div>';
                }
                ?>

                <div class="col-md-6">
                    <label for="razao_social" class="form-label">Nome completo/Razão social</label>
                    <input type="text" id="razao_social" name="razao_social" class="form-control" placeholder="Digite o nome completo" required>
                </div>
                <div class="col-md-6">
                    <label for="telefone" class="form-label">Telefone para contato</label>
                    <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@exemplo.com" required>
                </div>
                <div class="col-md-6">
                    <label for="cpf_cnpj" class="form-label">CPF/CNPJ</label>
                    <input type="text" id="cpf_cnpj" name="cpf_cnpj" class="form-control" placeholder="Digite o CPF ou CNPJ" required>
                </div>
                <div class="col-12">
                    <label for="endereco" class="form-label">Endereço (Rua)</label>
                    <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Digite o endereço" required>
                </div>
                <div class="col-md-4">
                    <label for="numero" class="form-label">Nº</label>
                    <input type="text" id="numero" name="numero" class="form-control" placeholder="Nº" required>
                </div>
                <div class="col-md-4">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro" required>
                </div>
                <div class="col-md-4">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" id="cep" name="cep" class="form-control" placeholder="XXXXX-XXX" required>
                </div>
                <div class="col-md-6">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade" required>
                </div>
                <div class="col-md-6">
                    <label for="estado" class="form-label">Estado</label>
                    <select id="estado" name="estado" class="form-select" required>
                        <option value="">Selecione</option>
                        <option value="SP">SP</option>
                        <option value="RJ">RJ</option>
                        <option value="MG">MG</option>
                        <option value="ES">ES</option>
                        <!-- Outros estados -->
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="representante" class="form-label">Nome do representante legal</label>
                    <input type="text" id="representante" name="representante" class="form-control" placeholder="Nome do representante" required>
                </div>
                <div class="col-md-6">
                    <label for="cargo" class="form-label">Cargo ou função</label>
                    <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Cargo ou função" required>
                </div>
            </form>
        </div>
    </main>

    <footer class="d-flex justify-content-between p-3">
        <a href="tela2.php" class="btn btn-secondary fw-bold">← ANTERIOR</a>
        <a href="proximo.php" class="btn btn-primary fw-bold">PRÓXIMO →</a>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
