<?php

require_once 'Database.php';
require_once 'Estudante.php';
require_once 'Curso.php';

$db = new Database();
$estudanteModel = new Estudante($db);
$cursoModel = new Curso($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rota = $_GET['rota'];

    if ($rota === 'criar_estudante') {
        $dados = [
            'nome' => $_POST['nome'],
            'rg' => $_POST['rg'],
            'cpf' => $_POST['cpf'],
            'data_nascimento' => $_POST['data_nascimento'],
            'telefones' => [$_POST['telefone1'], $_POST['telefone2']],
            'nome_pais' => [
                'mae' => $_POST['nome_mae'],
                'pai' => $_POST['nome_pai']
            ],
            'endereco' => [
                'rua' => $_POST['rua'],
                'numero' => $_POST['numero'],
                'cidade' => $_POST['cidade'],
                'estado' => $_POST['estado'],
                'cep' => $_POST['cep']
            ]
        ];
        $estudanteModel->criarEstudante($dados);
    } elseif ($rota === 'criar_curso') {
        $dados = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'carga_horaria' => $_POST['carga_horaria'],
            'data_inicio' => $_POST['data_inicio'],
            'data_fim' => $_POST['data_fim']
        ];
        $cursoModel->criarCurso($dados);
    }
}
