<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="pannel">
        <div id="agendaChoice"></div>
        <div id="actuChoice"></div>
    </div>
    <article>
        <h2>Agenda</h2>
        <?php
            require '../admin/adminAssets/bddCrud.php';
            echo '<table>';
                echo '<tr>';
                    echo '<th>Id</th>';
                    echo '<th>Titre</th>';
                    echo '<th>Date de début</th>';
                    echo '<th>Date de fin</th>';
                    echo '<th>URL</th>';
                    echo '<th>Modifier</th>';
                    echo '<th>Supprimer</th>';
                echo '</tr>';
                foreach ($events as $event) {
                    //Faire dans un tableau
                    
                    echo '<tr>';
                    echo '<td>'.$event['id'].'</td>';
                    echo '<td>'.$event['title'].'</td>';
                    echo '<td>'.$event['start'].'</td>';
                    echo '<td>'.$event['end'].'</td>';
                    echo '<td>'.$event['url'].'</td>';
                    echo '<td><a href="../admin/adminAssets/crud/eventUpdate.php?id='.$event['id'].'">Modifier</a></td>';
                    echo '<td><a href="../admin/adminAssets/crud/eventDelete.php?id='.$event['id'].'">Supprimer</a></td>';
                    echo '</tr>';
                }
            echo '</table>';
        ?>
        <a href="../admin/adminAssets/crud/eventAdd.php">Ajouter un évènement</a>
    </article>
    <article>
        <h2>Actualités</h2>
    </article>
</body>
</html>