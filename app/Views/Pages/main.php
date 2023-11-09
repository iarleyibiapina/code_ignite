    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php if(session('usuarioLogado')):?>
        LOGADO
        <br>
        nome: <?= session()->get('usuarioLogado')['nomeDeUsuario'] ?>
    <?php endif;?>
    Ola mundo
    <a href="<?= ("logout") ?>">Logout</a>
    </body>
    </html>
