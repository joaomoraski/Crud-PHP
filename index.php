<?php
include('config.php');
?>

<!doctype html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CRUD Básico - Listagem</title>
        <link rel="stylesheet" href="vendor/styles/style.css">
    </head>
    <body>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $consult = Mysql::dbconnect()->query("SELECT * FROM `people`");
            while ($information = $consult->fetch(PDO::FETCH_ASSOC)) {

                ?>
                <tr>
                    <td><?php echo $information['firstname']; ?></td>
                    <td><?php echo $information['lastname']; ?></td>
                    <td><?php echo $information['email']; ?></td>
                    <td><?php echo $information['telephone']?></td>
                    <td><a href="pages/edit-person.php?id=<?php echo $information['id'];?>"><i class="fas fa-user-edit"></i></a>
                        <a href="pages/delete-person.php?id=<?php echo $information['id'];?>"><i class="fas fa-user-minus"></i></a></td>
                </tr>
        <?php }?>
        </tbody>
    </table>


        <button class="button-style"><a href="<?php echo INCLUDE_PATH?>pages/add-person.php">Adicionar Usuário!</a></button>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://kit.fontawesome.com/976058a743.js" crossorigin="anonymous"></script>
        <script src="vendor/js/index.js"></script>
    </body>
</html>
