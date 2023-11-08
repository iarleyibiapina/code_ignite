<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news" method="post">
    <?= csrf_field() ?> 

    <label for="title">Title: </label>
    <input type="text" value="<?= set_value('title')?>" name="title">
    <br>

    <label for="body">Text: </label>
    <!-- equivalente ao old() -->
    <textarea name="body" id="body" cols="30" rows="10"><?= set_value("body") ?></textarea>
    <br>

    <input type="submit" value="Create News item">
</form>