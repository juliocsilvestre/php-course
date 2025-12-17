<?php
session_start();

// Inicializa a lista de tarefas
if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

/**
 * Adicionar tarefa
 */
if (isset($_POST['nova_tarefa'])) {
    $descricao = trim($_POST['nova_tarefa']);

    if ($descricao !== '') {
        $_SESSION['tarefas'][] = [
            'id' => uniqid(),
            'descricao' => $descricao,
            'concluida' => false
        ];
    }
}

/**
 * Marcar como concluída
 */
if (isset($_GET['concluir'])) {
    $id = $_GET['concluir'];

    foreach ($_SESSION['tarefas'] as &$tarefa) {
        if ($tarefa['id'] === $id) {
            $tarefa['concluida'] = true;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas - PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .concluida {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>
<body>

<h2>📝 Lista de Tarefas</h2>

<!-- Formulário -->
<form method="POST">
    <input type="text" name="nova_tarefa" placeholder="Digite a tarefa" required>
    <button type="submit">Adicionar</button>
</form>

<hr>

<ul>
    <?php foreach ($_SESSION['tarefas'] as $tarefa): ?>
        <li>
            <span class="<?= $tarefa['concluida'] ? 'concluida' : '' ?>">
                <?= htmlspecialchars($tarefa['descricao']) ?>
            </span>

            <?php if (!$tarefa['concluida']): ?>
                <a href="?concluir=<?= $tarefa['id'] ?>">✅ Concluir</a>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
