document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour afficher/masquer le filtre au clic sur l'en-tête
    document.querySelectorAll('th').forEach(function(th) {
        th.addEventListener('click', function(event) {
            var filterContainer = th.querySelector('.filter-container');

            // Ferme tous les autres filtres
            document.querySelectorAll('.filter-container').forEach(function(container) {
                if (container !== filterContainer) {
                    container.classList.remove('active');
                }
            });

            // Active/désactive le filtre actuel
            if (filterContainer) {
                filterContainer.classList.toggle('active');
            }

            event.stopPropagation(); // Empêche la fermeture immédiate du filtre
        });
    });

    // Empêche la fermeture du filtre lors de l'interaction avec le contenu du filtre
    document.querySelectorAll('.filter-container').forEach(function(container) {
        container.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });

    // Ferme les filtres si on clique en dehors
    document.addEventListener('click', function() {
        document.querySelectorAll('.filter-container').forEach(function(container) {
            container.classList.remove('active');
        });
    });

    // Fonction pour mettre à jour l'affichage de la valeur du range de prix
    document.getElementById('price-range').addEventListener('input', function() {
        document.getElementById('price-value').textContent = this.value + ' €';
    });

    // Fonction pour appliquer les filtres
    function applyFilters() {
        console.log("Applying filters..."); // Debugging

        var priceRange = parseInt(document.getElementById('price-range').value, 10);
        var selectedRegion = document.getElementById('region-select').value;

        console.log("Price Range:", priceRange); // Debugging
        console.log("Selected Region:", selectedRegion); // Debugging

        // Vérifie si les filtres ont des valeurs valides
        if (isNaN(priceRange)) {
            priceRange = Infinity; // Si la valeur du range de prix n'est pas un nombre, ignore le filtre
        }

        // Parcourt toutes les lignes du tableau et applique les filtres
        document.querySelectorAll('tbody tr').forEach(function(row) {
            var rowPrice = parseInt(row.cells[0].textContent.replace(/[^0-9]/g, ''), 10);
            var rowRegion = row.cells[1].textContent.trim();

            // Détermine si la ligne correspond aux critères de filtre
            var priceMatch = rowPrice <= priceRange;
            var regionMatch = selectedRegion === "" || rowRegion === selectedRegion;

            // Affiche la ligne si elle correspond aux critères, sinon la cache
            if (priceMatch && regionMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // Applique les filtres lorsque le bouton "Appliquer" est cliqué
    document.querySelectorAll('button[onclick="applyFilters()"]').forEach(button => {
        button.addEventListener('click', applyFilters);
    });

    // JavaScript pour les popups
    document.querySelectorAll('.infoIcon, .manageIcon').forEach(icon => {
        icon.addEventListener('click', function() {
            // Ferme les popups
            document.querySelectorAll('.popup').forEach(popup => popup.style.display = 'none');
            
            // Montre le popup
            const popupContent = icon.getAttribute('data-popup-content');
            const popupElement = Array.from(document.querySelectorAll('.popup')).find(popup => popup.querySelector('.popup-content p').textContent === popupContent);
            if (popupElement) {
                popupElement.style.display = 'block';
            }
        });
    });

    // Gestion de la fermeture des popups avec le bouton "X"
    document.querySelectorAll('.popup .close').forEach(button => {
        button.addEventListener('click', function() {
            // Trouve le parent popup et le cache
            const popupElement = this.closest('.popup');
            if (popupElement) {
                popupElement.style.display = 'none';
            }
        });
    });

    // Fonction pour fermer les popups si on clique en dehors
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.popup, .infoIcon, .manageIcon')) {
            document.querySelectorAll('.popup').forEach(popup => popup.style.display = 'none');
        }
    });
});