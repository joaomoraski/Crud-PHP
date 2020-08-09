<!doctype html>
<?php
include('../config.php');
if (isset($_POST['edit-user'])){
    $id = $_POST['id'];
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $telephone = trim($_POST['telephone']);
    $editPerson = new Person();
    $editPerson->UpdatePerson($id, $firstname, $lastname, $email, $telephone);
}
?>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CRUD Básico - Editar Pessoa</title>
        <link rel="stylesheet" href="../vendor/styles/style.css">
    </head>
    <body>
    <h1>Editar Pessoa</h1>
    <form method="post">
        <?php
            $sql = Mysql::dbconnect()->query("SELECT * FROM `people` WHERE id = ".$_GET['id']);
            $information = $sql->fetch(PDO::FETCH_ASSOC);

        ?>
        <input type="hidden" name="id" value="<?php echo $information['id'];?>">
        <label for="firstname">Nome: </label>
        <input name="firstname" type="text" required placeholder="Nome"  value="<?php echo $information['firstname'];?>"/>
        <label for="lastname">Sobrenome: </label>
        <input name="lastname" type="text" required placeholder="Sobrenome" value="<?php echo $information['lastname'];?>"/>
        <label for="email">Email: </label>
        <input name="email" type="email" required placeholder="E-mail" value="<?php echo $information['email'];?>"/>
        <label for="name">Telefone</label>
        <input name="telephone" type="text" required placeholder="Telefone" value="<?php echo $information['telephone'];?>"/>
        <input type="submit" class="button-style"  value="Atualizar!" name="edit-user"/>

    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="vendor/js/index.js"></script>
    </body>
</html>
