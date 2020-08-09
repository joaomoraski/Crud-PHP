<!doctype html>
<?php
include('../config.php');
if (isset($_POST['del'])) {
    $id = $_GET['id'];
    $delPerson = new Person();
    $delPerson->deletePerson($id);
} elseif (isset($_POST['cancel'])){
    header("Location: ../index.php");
}

?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Básico - Editar Pessoa</title>
    <link rel="stylesheet" href="../vendor/styles/style.css">
</head>
<body>
    <h1>Deletar Pessoa</h1>
    <form method="post">
    <?php
    $sql = Mysql::dbconnect()->query("SELECT * FROM `people` WHERE id = ".$_GET['id']);
    $information = $sql->fetch(PDO::FETCH_ASSOC);

    ?>
    <pre>
        Tem certeza que deseja deletar a pessoa <?php echo $information['firstname'].' '.$information['lastname'];?>
    </pre>
        <input type="hidden" name="id" value="<?php $information['id'];?>">
        <input type="submit" value="Sim, tenho certeza!" name="del">
        <input type="submit" value="Não, errei a pessoa!" name="cancel">
        
    </form>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="vendor/js/index.js"></script>
</body>
</html>
