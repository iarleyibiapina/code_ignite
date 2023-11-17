    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .conteudo{
                margin: 2rem;
            }
            table {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <header>
    <?php if(session('usuarioLogado')):?>
        LOGADO
        <br>
        nome: <?= session()->get('usuarioLogado')['nomeDeUsuario'] ?>
    <?php endif;?>
    <a href="<?= ("logout") ?>">Logout</a>
    </header>
    <section>
        <div class="conteudo">
            <table style="border: 1px solid black; ">
                <thead>
                    <tr>
                        A fazer
                        <button><a href="<?= ("To_Do/new") ?>">new</a></button>
                    </tr>
                    <tr>
                        <th>nome item</th>
                        <th>descricao item</th>
                        <th>açoes</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php  ?> -->
                    <?php foreach( $data as $dado_item ):?> 
                    <tr>
                        <th><?= $dado_item['to_do_name'] ?></th>
                        <th><?= $dado_item['to_do_body'] ?></th>
                        <th>
                        <button><a href="<?= ("To_Do/$dado_item[to_do_id]/edit") ?>">edit</a></button>
                        delete
                        </th>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
    </body>
    </html>
