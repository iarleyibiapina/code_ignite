<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <a href="<?= ('/') ?>">Voltar</a>
    <!-- exibe erros csrf -->

    <?php if(session()->getFlashdata('erro')): ?>
        <?php foreach(session()->getFlashdata('erro') as $key => $value): ?>
            <p><?=$value?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="login" method="post">
    <?= csrf_field() ?> 


        <input type="text" name="nome" id="nome"  value="<?= old("nome") ?>">
        <label for="nome">Nome</label>
        <br>
        <input type="text" name="email" id="email" > 
        <label for="email">Email</label>
        <br>
        <input type="password" name="senha" id="senha" >
        <label for="senha">Senha:</label>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>


