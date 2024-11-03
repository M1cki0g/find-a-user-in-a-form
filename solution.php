<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="form.php">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br>
        <input type="submit" name="envoyer" value="send">
</body>
<?php
$pers = array(
    'pseudo1' => array('prenom' => 'Yassine', 'nom' => 'Touli', 'age' => 20),
    'pseudo2' => array('prenom' => 'Ahmed', 'nom' => 'Touli', 'age' => 20),
    'pseudo3' => array('prenom' => 'Brahim', 'nom' => 'Touli', 'age' => 20)
);
if (isset($_POST['envoyer'])) {
    $find = 0;
    foreach ($pers as $personne) {
        foreach ($personne as $key => $val) {
            if ($val == $_POST['name']) {
                echo $personne['prenom'] . ' ' . $personne['nom'] . ' ' . $personne['age'];
                $find = 1;
            }
        }
    }
    if ($find == 0)
        echo 'Aucun utilisateur trouvé avec ce nom';
}

?>

</html>
