<?php
$arquivo = 'tarefas.txt';

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, '');
}

$tarefas = file($arquivo, FILE_IGNORE_NEW_LINES);

if (isset($_POST['nova_tarefa']) && $_POST['nova_tarefa'] !== '') {
    $tarefas[] = $_POST['nova_tarefa'];
    file_put_contents($arquivo, implode(PHP_EOL, $tarefas));
    header("Location: index.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    unset($tarefas[$id]);
    file_put_contents($arquivo, implode(PHP_EOL, $tarefas));
    header("Location: index.php");
    exit;
}

if (isset($_POST['editar_id'])) {
    $id = $_POST['editar_id'];
    $tarefas[$id] = $_POST['editar_tarefa'];
    file_put_contents($arquivo, implode(PHP_EOL, $tarefas));
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas - PHP</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        ul { padding: 0; }
        li { margin-bottom: 10px; list-style: none; }
        a { margin-left: 10px; color: red; text-decoration: none; }
    </style>
</head>
<body>

<h2>📋 Lista de Tarefas</h2>

<form method="POST">
    <input type="text" name="nova_tarefa" placeholder="Nova tarefa" required>
    <button type="submit">Adicionar</button>
</form>

<hr>

<ul>
<?php foreach ($tarefas as $index => $tarefa): ?>
    <li>
        <?php if (isset($_GET['edit']) && $_GET['edit'] == $index): ?>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="editar_id" value="<?= $index ?>">
                <input type="text" name="editar_tarefa" value="<?= htmlspecialchars($tarefa) ?>" required>
                <button type="submit">Salvar</button>
            </form>
        <?php else: ?>
            <?= htmlspecialchars($tarefa) ?>
            <a href="?edit=<?= $index ?>">✏️ Editar</a>
            <a href="?delete=<?= $index ?>">🗑️ Deletar</a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>
