<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de gestion</title>
    <link rel="stylesheet" href="../styles/backoffice.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <script src="../javascript/script.js" defer></script>
</head>
<body>
<div class="container">
    <div class="form-container">
        <img src="../images/logos/MG logo trans.png" alt="Logo">
        <form method="POST">
            <div class="container-price">
                <label for="price">Prix :</label>
                <input type="number" class="form-input" name="price" id="price" placeholder="prix en valeur numérique">
            </div>
            <div class="container-region">
                <label for="region">Région :</label>
                <select class="form-input" name="region" id="region">
                    <option value="">Sélectionnez une région</option>
                    <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                    <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                    <option value="Bretagne">Bretagne</option>
                    <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                    <option value="Corse">Corse</option>
                    <option value="Grand Est">Grand Est</option>
                    <option value="Hauts-de-France">Hauts-de-France</option>
                    <option value="Île-de-France">Île-de-France</option>
                    <option value="Normandie">Normandie</option>
                    <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                    <option value="Occitanie">Occitanie</option>
                    <option value="Pays de la Loire">Pays de la Loire</option>
                    <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                </select>
            </div>
            <select class="form-input" name="ID_category" id="category">
                <option value="">Sélectionnez une catégorie</option>
                <option value="Châlet">Châlet</option>
                <option value="Château">Château</option>
                <option value="Villa">Villa</option>
                <option value="Appartement">Appartement</option>
            </select>
            <div class="container-bedrooms">
                <label for="bedrooms">Nombre de chambres :</label>
                <input type="number" class="form-input" name="bedroom" id="bedroom" placeholder="nombre de chambre">
            </div>
            <div class="container-rooms">
                <label for="rooms">Nombre de pièces :</label>
                <input type="number" class="form-input" name="room" id="room" placeholder="nombre de pièces">
            </div>
            <div class="container-square_meters">
                <label for="square_meters">M² :</label>
                <input type="number" class="form-input" name="square_meters" id="square_meters" placeholder="m² en valeur numérique">
            </div>
            <div class="container-square_meters">
                <label for="description">Description du bien :</label>
                <textarea class="form-input" name="description" id="description" placeholder="Description du bien" rows="5" cols="40"></textarea>
            </div>
            <select class="form-input" name="type" id="type">
                <option value="">Est-ce une vente ou une location ?</option>
                <option value="vente">Vente</option>
                <option value="location">Location</option>
            </select>
            <div class="container-postdate">
                <label for="postdate">Date de publication :</label>
                <input type="date" class="form-input" name="postdate" id="postdate">
            </div>
            <div class="container-image">
                <label for="image">Ajouter une image :</label>
                <input type="file" class="form-input" name="image" id="image" accept="image/*">
            </div>
            <button type="submit">Ajouter une propriété</button>
        </form>
    </div>
</div>


</body>
</html>