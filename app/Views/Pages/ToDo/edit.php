<h1>Alterar</h1>
<p><strong>Formulario de edição</strong></p>

<?php foreach ($dados as $dado):?>
    <?= dd($dados) ?>
<?php endforeach;?>

<form action="/To_Do" method="post">
    <label for="to_do_name">Nome: </label>
    <input type="text" name="to_do_name" id="name">
    <br>
    <label for="to_do_body">Descricao: </label>
    <input type="text" name="to_do_body" id="body">
    <br>
    <input type="submit" value="Enviar">
</form>