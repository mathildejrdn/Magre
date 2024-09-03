//système de filtre back office//

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
        var priceRange = parseInt(document.getElementById('price-range').value, 10);
        var selectedRegion = document.getElementById('region-select').value;

        // Parcourt toutes les lignes du tableau et applique les filtres
        document.querySelectorAll('tbody tr').forEach(function(row) {
            var rowPrice = parseInt(row.cells[0].textContent, 10);
            var rowRegion = row.cells[1].textContent;

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