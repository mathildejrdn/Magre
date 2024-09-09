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

    // Fonction pour appliquer les filtres
    function applyFilters() {
        console.log("Applying filters..."); // Debugging

        var selectedRegion = document.getElementById('region-select').value;

        console.log("Selected Region:", selectedRegion); // Debugging

        // Parcourt toutes les lignes du tableau et applique les filtres
        document.querySelectorAll('tbody tr').forEach(function(row) {
            var rowRegion = row.cells[2].textContent.trim(); // Notez que les index des cellules peuvent changer

            // Détermine si la ligne correspond aux critères de filtre
            var regionMatch = selectedRegion === "" || rowRegion === selectedRegion;

            // Affiche la ligne si elle correspond aux critères, sinon la cache
            if (regionMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // Ajouter les événements pour les filtres régionaux
    document.getElementById('apply-region-filter').addEventListener('click', applyFilters);
});
