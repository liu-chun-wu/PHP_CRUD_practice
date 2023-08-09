<?
$footer = new DB('footer');
$data = $footer->findById(1);
?>
<footer align="center">
    <hr>
    &copy; Author : <?= $data['author']; ?><br>
    Email : <a href=""><?= $data['email']; ?></a>
</footer>