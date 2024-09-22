<!DOCTYPE html>
<html>
<head>
    <title>Liste des items pour <?php echo $_GET['name']; ?></title>
    <style>
		th                 { background-color : #557CBA; }
		/* Alternance de couleur sur les lignes */
		tr:nth-child(even) { background-color : #CED4E5; }
		tr:nth-child(odd)  { background-color : #E8EBF5; }
		th,td { padding:0.7em; text-align: center; }
    </style>
</head>
<body>

<h1>Liste des items pour <?php echo $_GET['name']; ?></h1>

<table border="1">
    <tr>
        <th>Date</th>
        <th>Loot</th>
        <th>Offspec</th>
    </tr>

    <?php
    $file = fopen('data.txt', 'r');

    if ($file) {
        function getItemName($itemID) {
            $url = "https://www.wowhead.com/classic/item=$itemID";
            $html = file_get_contents($url);
            preg_match('/<title>(.*?) - Item -/', $html, $matches);
            return isset($matches[1]) ? trim($matches[1]) : 'Nom inconnu';
        }

        while (($line = fgets($file)) !== false) {
            $data = explode(',', $line);
            $character = $data[1];
            
            if ($character == $_GET['name']) {
                echo "<tr>";
                
                // Colonne Date
                echo "<td>{$data[0]}</td>";

                // Colonne Loot (Nom de l'objet)
                echo "<td><a href='https://www.wowhead.com/classic/item={$data[2]}' target='_blank'>" . getItemName($data[2]) . "</a></td>";
                
                // Colonne Offspec
                echo "<td>{$data[3]}</td>";
                
                echo "</tr>";
            }
        }
        
        fclose($file);

    } else {
        echo "Impossible d'ouvrir le fichier.";
    }
    ?>
</table>

</body>
</html>