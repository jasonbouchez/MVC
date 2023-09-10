<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des contacts</h1>
    <?php
        foreach ($tab as $key){
            echo $key['id'] . ' ' . $key['nom'] . ' ' . $key['prenom'] . ' ' . $key['tel'] . '<br>';
        }
    ?>
</body>
</html>