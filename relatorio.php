
<?php
require_once('app/Models/Usuario.php');
require_once('app/Controllers/ControllerUsuario.php');

$usuarioDao = new ControllerUsuario();
if(!empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['idade'])  && !empty($_POST['voto'])){
$votacao = new Usuario($_POST['nome'], $_POST['cpf'], $_POST['idade'], $_POST['voto']);
    
$votacao->validarDados();
$usuarioDao->createVotacao($votacao);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de votos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css"/>

</head>
<body>
 
   <?php if ($usuarioDao->readVotacao()) { ?>
        <div class="container">
            <h1>Registros</h1>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>cpf</th>
                        <th>Idade</th>
                        <th>Voto</th>
                        <th>Data Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarioDao->readVotacao() as $votacao){ ?>
                        <tr>
                            <td><?php echo $votacao["nome"]; ?></td>
                            <td><?php echo $votacao["cpf"]; ?></td>
                            <td><?php echo $votacao["idade"]; ?></td>
                            <td><?php echo $votacao["voto"]; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($votacao["data"])); ?></td>
                        </tr>
                    <?php } ?>    
                </tbody>
            </table>
        </div>
    <?php } ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>