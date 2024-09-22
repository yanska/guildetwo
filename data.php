<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des données de joueurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        textarea {
            width: 100%;
            height: 150px;
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Ajouter des données de joueurs</h1>

    <!-- Formulaire pour coller les données -->
    <form action="save_data.php" method="post">
        <label for="data">Collez les données (format : dateTime,character,itemID,offspec,id) :</label>
        <textarea id="data" name="data"></textarea>
        <br>
        <button type="submit">Ajouter les données</button>
    </form>

    <script>
        // JavaScript pour éventuellement traiter ou valider les données avant l'envoi si nécessaire
    </script>
</body>
</html>
