<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de gestion</title>
    <link rel="stylesheet" href="../styles/backoffice.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/index.css">
    <script src="../javascript/script.js" defer></script>
</head>
<body>
<div class="sidebar">
        <a href="#vente" class="active">Vente</a>
        <a href="#location">Location</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>
                        Prix
                        <div class="filter-container" id="filter-price">
                            <label for="price-range">Filtrer par prix :</label>
                            <input type="range" id="price-range" min="0" max="1000000" step="10000" value="500000">
                            <span id="price-value">500000 €</span>
                            <button onclick="applyFilters()">Appliquer</button>
                        </div>
                    </th>
                    <th>
                        Région
                        <div class="filter-container" id="filter-region">
                            <label for="region-select">Filtrer par région :</label>
                            <select id="region-select">
                                <option value="">Toutes</option>
                                <option value="Île-de-France">Île-de-France</option>
                                <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                                <option value="Bretagne">Bretagne</option>
                            </select>
                            <button onclick="applyFilters()">Appliquer</button>
                        </div>
                    </th>
                    <th>Information</th>
                    <th>Gestion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>500000</td>
                    <td>Île-de-France</td>
                    <td>info</td>
                    <td><button>Voir</button></td>
                </tr>
                <tr>
                    <td>750</td>
                    <td>Provence-Alpes-Côte d'Azur</td>
                    <td>info</td>
                    <td><button>Voir</button></td>
                </tr>
                <tr>
                    <td>300000</td>
                    <td>Bretagne</td>
                    <td>info</td>
                    <td><button>Voir</button></td>
                </tr>
                <tr>
                    <td>1000000</td>
                    <td>Île-de-France</td>
                    <td>info</td>
                    <td><button>Voir</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>