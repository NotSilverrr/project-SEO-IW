<?php 
$title = "Gigaboulet - Le site de vente de cailloux n°1 en France";
$description = "Gigaboulet propose toutes sortes de services et de produits en lien avec les cailloux. Si vous en êtes passionné, vous trouverez forcément votre bonheur ici !";
include "includes/head.php"
?>
<body>
    <?php include("includes/header.php");?>
    <main class="container">
        <h1>Trouve le GigaBoulet qui te correspond</h1>
        <div class="dropdown-search-selector">
            <div class="dropdown-container">
                <input type="text" placeholder="Rechercher des boulets...">
                <select>
                    <option value="all">Tous les types</option>
                    <option value="decoratifs">Boulets décoratifs</option>
                    <option value="bricolage">Boulets pour bricolage</option>
                    <option value="naturels">Boulets naturels</option>
                    <option value="jardinage">Boulets pour jardinage</option>
                    <option value="prisonnier">Boulets de prisonnier</option>
                    <option value="poche">Boulets de poche</option>
                </select>
                <button type="submit" class="search-btn">Rechercher</button>
            </div>
        </div>
        
        <section class="product-grid">
            <h2>Nos Produits</h2>
            <div class="product-card">
                <img class= shop_img src="static/img/pierre_decoration.webp" alt="Boulets décoratifs">
                <img class= shop_img src="static/img/boulet decoratif.webp" alt="Boulets décoratifs">
                <h3>Boulets Décoratifs</h3>
                <p>Idéal pour vos jardins ou aquariums.</p>
                <p class="price">€10.00</p>
                <a href="/troll-achat" class="acheter">Acheter ce boulet</a>                
                <a href="/histoire" class="acheter">En savoir plus</a>
            </div>
            <div class="product-card">
            <img class= shop_img src="static/img/boulets naturels 2.webp" alt="Boulets naturels">
            <img class= shop_img src="static/img/boulets naturels.webp" alt="Boulets naturels">
            <h3>Boulets Naturels</h3>
                <p>Parfaits pour les projets de bricolage.</p>
                <p class="price">€8.00</p>
                <a href="/buypage.php" class="acheter">Acheter ce boulet</a>                
                <a href="/histoire" class="acheter">En savoir plus</a>
            </div>
            <div class="product-card">
            <img class= shop_img src="static/img/boulets jardinnage 2.webp" alt="Boulets pour jardinage">
            <img class= shop_img src="static/img/boulets jardinnage.webp" alt="Boulets pour jardinage">
                <h3>Boulets pour Jardinage</h3>
                <p>Améliorez le drainage de vos plantes.</p>
                <p class="price">€12.00</p>
                <a href="/troll-achat" class="acheter">Acheter ce boulet</a>                
                <a href="/histoire" class="acheter">En savoir plus</a>
            </div>
            <div class="product-card">
            <img class= shop_img src="static/img/boulet prisonnier 2.webp" alt="Boulets de prisonnier">
            <img class= shop_img src="static/img/boulet prisonnier.webp" alt="Boulets de prisonnier">
            <h3>Boulets de Prisonnier</h3>
                <p>Accessoire historique et décoratif.</p>
                <p class="price">€15.00</p>
                <a href="/troll-achat" class="acheter">Acheter ce boulet</a>                
                <a href="/histoire" class="acheter">En savoir plus</a>
            </div>
            <div class="product-card">
            <img class= shop_img src="static/img/boulets de poche.webp" alt="Boulets de poche">
            <img class= shop_img src="static/img/boulets de poche2.webp" alt="Boulets de poche">    
            <h3>Boulets de Poche</h3>
                <p>Pratiques et amusants à collectionner.</p>
                <p class="price">€5.00</p>
                <a href="/troll-achat" class="acheter">Acheter ce boulet</a>                
                <a href="/histoire" class="acheter">En savoir plus</a>
            </div>
            <!-- Ajouter d'autres cartes de produits ici -->
        </section>
    </main>
    <?php include("includes/footer.php");?>
</body>
</html>