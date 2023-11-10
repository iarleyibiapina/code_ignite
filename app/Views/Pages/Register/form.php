<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <a href="<?= ('/') ?>">Voltar</a>

    <?php if(session()->getFlashdata('erro')): ?>
        <?php foreach(session()->getFlashdata('erro') as $key => $value): ?>
            <p><?=$value?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- exibe erros csrf -->
    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <form action="register" method="post">
        <?= csrf_field() ?> 

        <input type="text" name="nome" id="nome" value="<?= set_value('nome') ?>">
        <label for="nome">Nome</label>
        <br>
        <!-- <input type="email" name="email" id="email" value="<?= set_value('email') ?>"> -->
        <input type="text" name="email" id="email" value="<?= set_value('email') ?>">
        <label for="email">Email</label>
        <br>
        <input type="password" name="senha" id="senha" value<?= set_value('senha') ?>>
        <label for="senha">Senha:</label>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>


