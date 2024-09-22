<!DOCTYPE html>
<html>
<head>
    <title>Liste des personnages</title>
    <style>
		th                 { background-color : #557CBA; }
		/* Alternance de couleur sur les lignes */
		tr:nth-child(even) { background-color : #CED4E5; }
		tr:nth-child(odd)  { background-color : #E8EBF5; }
		th,td { padding:0.7em; text-align: center; }
    </style>
</head>
<body>

<h1>Liste des personnages de la guilde</h1>

<table border="1">
    <tr>
        <th>Pseudo</th>
        <th>Loots</th>
    </tr>

    <?php
    $names = array();
    $itemCounts = array();

    $file = fopen('data.txt', 'r');
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $data = explode(',', $line);
            $character = $data[1];
            if (!in_array($character, $names)) {
                $names[] = $character;
            }
            // Compter le nombre d'items pour chaque personnage
            if (!isset($itemCounts[$character])) {
                $itemCounts[$character] = 1;
            } else {
                $itemCounts[$character]++;
            }
        }
        fclose($file);

        // Afficher la liste des personnages avec le nombre d'items associés
        foreach ($names as $name) {
            $count = isset($itemCounts[$name]) ? $itemCounts[$name] : 0;
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td><a href='item_list.php?name=$name'>$count loot</a></td>";
            echo "</tr>";
        }
        
    } else {
        echo "Impossible d'ouvrir le fichier.";
    }
    ?>
</table>

</body>
</html>