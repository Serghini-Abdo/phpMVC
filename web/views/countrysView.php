<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?></title>
</head>
<body data-bs-theme="dark">
<h1><?=$titre?></h1>
    <a href='#'>Ajouter Salarie</a>
    <table class="table table-striped">
        <caption></caption>
        <thead>
    <tr>
        <th><i class="fa-solid fa-house"></i>Code</th>
        <th>Name</th>
        <th>Continent</th>
        <th>Operations</th>
    </tr>
    </thead>
    <?php
        echo "<tbody>";
        foreach ($list as $slr) {
            echo " <tr>
            <th>$slr->Code</th>
            <th>$slr->Name</th>
            <th>$slr->Continent</th>
            <th><a href='/phpMVC/home'>home</a>  | <a href='/phpMVC/contact'>contact</a> |
             <a href='/phpMVC/detail'>Supprimer</a></th>
        </tr>";
        }
        echo "</tbody>";

?>

    </table>

    

</body>
</html>
