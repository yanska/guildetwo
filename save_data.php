<?php
// Vérifie si des données ont été envoyées
if (isset($_POST['data']) && !empty($_POST['data'])) {
    $data = $_POST['data'];

    // Sépare les lignes envoyées
    $lines = explode("\n", $data);

    // Nettoie les lignes pour enlever les espaces superflus
    $lines = array_map('trim', $lines);

    // Suppression de la première ligne si elle correspond exactement à l'en-tête récurrent
    if (isset($lines[0]) && strtolower($lines[0]) === strtolower("dateTime,character,itemID,offspec,id")) {
        array_shift($lines); // Retire la première ligne
    }

    // Recréation du contenu sans la première ligne si elle a été retirée
    $cleanedData = implode(PHP_EOL, $lines);

    // Vérifie qu'il reste des données à écrire
    if (!empty(trim($cleanedData))) {
        // Le chemin du fichier data.txt
        $filePath = 'data.txt';

        // Ouvre le fichier en mode append (ajout à la fin)
        $file = fopen($filePath, 'a');

        // Ajoute les nouvelles données nettoyées
        fwrite($file, $cleanedData . PHP_EOL);

        // Ferme le fichier
        fclose($file);

        // Affiche un message de succès et lien pour revenir à la page d'ajout
        echo "<p>Les données ont été ajoutées avec succès.</p>";
        echo "<p><a href='data.php'>Cliquez ici pour ajouter d'autres données</a></p>";
    } else {
        echo "<p>Aucune donnée valide à ajouter.</p>";
        echo "<p><a href='data.php'>Retourner à la page d'ajout</a></p>";
    }
} else {
    echo "<p>Aucune donnée n'a été envoyée.</p>";
    echo "<p><a href='data.php'>Retourner à la page d'ajout</a></p>";
}
?>
