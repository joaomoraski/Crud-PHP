<!doctype html>
<?php
    include('../config.php');
    if (isset($_POST['add-user'])){
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $telephone = trim($_POST['telephone']);
        $addPerson = new Person();
        $addPerson->addPerson($firstname,$lastname,$email,$telephone);
    }


?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Básico - Adicionar Pessoa</title>
    <link rel="stylesheet" href="../vendor/styles/style.css">
</head>
<body>
<h1>Adicionar Pessoa</h1>
<form method="post">
    <label for="firstname">Nome: </label>
    <input name="firstname" type="text" required placeholder="Nome"/>
    <label for="lastname">Sobrenome: </label>
    <input name="lastname" type="text" required placeholder="Sobrenome"/>
    <label for="email">Email: </label>
    <input name="email" type="email" required placeholder="E-mail"/>
    <label for="name">Telefone</label>
    <input name="telephone" type="text" required placeholder="Telefone"/>
    <input type="submit" class="button-style"  value="Adicionar!" name="add-user"/>

</form>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="vendor/js/index.js"></script>
</body>
</html>
