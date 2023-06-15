<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $filiacao = $_POST['filiacao'];
    $dt_nasc = $_POST['dt_nasc'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dt_agendamento = $_POST['dt_agendamento'];

    // Conecta ao banco de dados MySQL (substitua os valores conforme a sua configuração)
    $conexao = new mysqli('localhost:3306', 'root', '123456', 'dados_clinica');

    // Verifica se a conexão foi estabelecida com sucesso
    if ($conexao->connect_errno) {
        die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
    }

    // Cria a consulta SQL para inserir os dados na tabela (substitua "tabela" pelo nome da sua tabela)
    $sql = "INSERT INTO tabela (nome, filiacao, dt_nasc, rg, cpf, sexo, email, telefone, dt_agendamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara a consulta
    $stmt = $conexao->prepare($sql);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt === false) {
        die('Erro na preparação da consulta: ' . $conexao->error);
    }

    // Associa os valores aos parâmetros da consulta
    $stmt->bind_param('sssssssss', $nome, $filiacao, $dt_nasc, $rg, $cpf, $sexo, $email, $telefone, $dt_agendamento);

    // Executa a consulta
    if ($stmt->execute()) {
        // Inserção bem-sucedida, redireciona para uma página de sucesso ou exibe uma mensagem
        echo 'Dados inseridos com sucesso!';
    } else {
        // Erro na execução da consulta
        echo 'Erro na inserção dos dados: ' . $stmt->error;
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
} else {
    // Se o formulário não foi enviado, redireciona para a página do formulário ou exibe uma mensagem de erro
    echo 'O formulário não foi enviado.';
}
?>
