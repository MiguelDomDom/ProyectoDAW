<?php

if (isset($_POST["enviar_login"])){

    $expre1 = '/^[a-z0-9_-]{3,16}$/';

    if(preg_match($expre1,$_POST["Usuario_login"])){
        
        print "correcto";

    } else{
        print "usuario obligatorio";
    }
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
    
</body>
</html>
