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
                    <th>Information propriété & client</th>
                    <th>Gestion de la propriété</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>500000</td>
                    <td>Île-de-France</td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
</svg>
</td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M32 32l448 0c17.7 0 32 14.3 32 32l0 32c0 17.7-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96L0 64C0 46.3 14.3 32 32 32zm0 128l448 0 0 256c0 35.3-28.7 64-64 64L96 480c-35.3 0-64-28.7-64-64l0-256zm128 80c0 8.8 7.2 16 16 16l160 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-160 0c-8.8 0-16 7.2-16 16z"/>
</svg></td>
                </tr>
                <tr>
                    <td>750</td>
                    <td>Provence-Alpes-Côte d'Azur</td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
</svg></td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M32 32l448 0c17.7 0 32 14.3 32 32l0 32c0 17.7-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96L0 64C0 46.3 14.3 32 32 32zm0 128l448 0 0 256c0 35.3-28.7 64-64 64L96 480c-35.3 0-64-28.7-64-64l0-256zm128 80c0 8.8 7.2 16 16 16l160 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-160 0c-8.8 0-16 7.2-16 16z"/>
</svg></td>
                </tr>
                <tr>
                    <td>300000</td>
                    <td>Bretagne</td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
</svg></td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M32 32l448 0c17.7 0 32 14.3 32 32l0 32c0 17.7-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96L0 64C0 46.3 14.3 32 32 32zm0 128l448 0 0 256c0 35.3-28.7 64-64 64L96 480c-35.3 0-64-28.7-64-64l0-256zm128 80c0 8.8 7.2 16 16 16l160 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-160 0c-8.8 0-16 7.2-16 16z"/>
</svg></td>
                </tr>
                <tr>
                    <td>1000000</td>
                    <td>Île-de-France</td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
</svg></td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 40px; height: 40px; display: block; margin: 0 auto;">
    <path fill="#002349" d="M32 32l448 0c17.7 0 32 14.3 32 32l0 32c0 17.7-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96L0 64C0 46.3 14.3 32 32 32zm0 128l448 0 0 256c0 35.3-28.7 64-64 64L96 480c-35.3 0-64-28.7-64-64l0-256zm128 80c0 8.8 7.2 16 16 16l160 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-160 0c-8.8 0-16 7.2-16 16z"/>
</svg>
</td>
                </tr>
            </tbody>
        </table>
        <button>Ajouter une propriété</button>
    </div>
   
</body>
</html>