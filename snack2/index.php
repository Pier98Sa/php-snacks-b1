<?php
    //parametri presi con GET
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    //lunghezza della striga nome
    $nameLength = strlen($name);

    //validazione dell'email
    $validEmail ;

    if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
        $validEmail = true;
    } else {
        $validEmail = false;
    }

    //validazione del dato age

    $validAge = is_numeric($age);

    //stampa dell'Esito

    $esito ;
    if( ($nameLength > 3) && ($validEmail) && ($validAge)){
        $esito = "Accesso riuscito";
    }else{
        $esito = "Accesso negato";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $esito; ?> </h1>
</body>
</html>