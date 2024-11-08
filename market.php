<?php 
$title = "Gigaboulet - Le magasin";
$description = "";
include "includes/head.php";
?>
<body>
  <?php include "includes/header.php" ?>
  <main class="container">
        <h1>Trouves le <strong>GigaBoulet</strong> qui te correspond</h1>
        <div class="search-bar">
            <input type="text" placeholder="Rechercher des boulets...">
            <button type="submit">Rechercher</button>
        </div>
        
        <div class="filter-section">
            <h2>Filtres</h2>
            <select>
                <option value="all">Tous les types</option>
                <option value="decoratifs">Boulets décoratifs</option>
                <option value="bricolage">Boulets pour bricolage</option>
                <option value="naturels">Boulets naturels</option>
                <option value="jardinage">Boulets pour jardinage</option>
                <option value="prisonnier">Boulets de prisonnier</option>
                <option value="poche">Boulets de poche</option>
            </select>
            <button type="button">Appliquer</button>
        </div>
        
        <section class="product-grid">
            <h2>Nos Produits</h2>
            <div class="product-card">
                <img src="static/images/boulet1.jpg" alt="GigaBoulets décoratifs">
                <h3><strong>GigaBoulet</strong> Décoratifs</h3>
                <p>Idéal pour vos jardins ou aquariums.</p>
                <p class="price">€10.00</p>
                <button>Acheter</button>
            </div>
            <div class="product-card">
                <img src="static/images/boulet2.jpg" alt="GigaBoulets naturels">
                <h3><strong>GigaBoulet</strong> Naturels</h3>
                <p>Parfaits pour les projets de bricolage.</p>
                <p class="price">€8.00</p>
                <button>Acheter</button>
            </div>
            <div class="product-card">
                <img src="static/images/boulet3.jpg" alt="GigaBoulets pour jardinage">
                <h3><strong>GigaBoulet</strong> pour Jardinage</h3>
                <p>Améliorez le drainage de vos plantes.</p>
                <p class="price">€12.00</p>
                <button>Acheter</button>
            </div>
            <div class="product-card">
                <img src="static/images/boulet4.jpg" alt="GigaBoulets de prisonnier">
                <h3><strong>GigaBoulet</strong> de Prisonnier</h3>
                <p>Accessoire historique et décoratif.</p>
                <p class="price">€15.00</p>
                <button>Acheter</button>
            </div>
            <div class="product-card">
                <img src="static/images/boulet5.jpg" alt="GigaBoulets de poche">
                <h3><strong>GigaBoulet</strong> de Poche</h3>
                <p>Pratiques et amusants à collectionner.</p>
                <p class="price">€5.00</p>
                <button>Acheter</button>
            </div>
            <!-- Ajouter d'autres cartes de produits ici -->
        </section>
    </main>
    <?php include("includes/footer.php");?>
</body>
</html>