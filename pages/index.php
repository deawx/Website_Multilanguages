<?php  
if(isset($_GET['idioma']) && $_GET['idioma'] !='' )
    $idioma = strtolower($_GET['idioma']);
else
    $idioma = 'es';

include_once "../language/{$idioma}_traduction.php";


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2><?php echo WELCOME; ?></h2>
</body>
</html>