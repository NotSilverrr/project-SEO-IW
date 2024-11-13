<?php 
$title = "Gigaboulet - Le site de vente de cailloux n°1 en France";
$description = "Gigaboulet propose toutes sortes de services et de produits en lien avec les cailloux. Si vous en êtes passionné, vous trouverez forcément votre bonheur ici !";
include "includes/head.php"
?>
<body>
    <?php include("includes/header.php");?>
    <main class="index">
        <section id="banniere">
            <div class="container">
                <h1>Gigaboulet</h1>
            </div>
        </section>
        <section id="accueil">
            <div class="grid container">
                <div class="text">
                    <h2>Découvrez Nos Cailloux Inoubliables</h2>
                    <p>Gigaboulet est la boutique idéale pour tous les amateurs de cailloux. Nous proposons une collection variée de cailloux uniques, rares et esthétiques pour embellir votre décoration ou compléter votre collection. Chez nous, chaque caillou a une histoire !</p>
                    <a href="./market.php" class="flex-button">
                        <span>Aller à la Boutique</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="images">
                    <img src="static/img/pierre_yoga.webp" alt="Collection de cailloux uniques chez Gigaboulet">
                    <img src="static/img/pierre_main.webp" alt="Collection de cailloux uniques chez Gigaboulet">
                </div>
            </div>
            
        </section>
    
        <section id="produits">
            <div class="container">
                <h2>Nos <strong>GigaBoulets</strong> Phare</h2>
                <div class="grid">
                    <a href="./market.php">
                        <article>
                            <img src="static/img/pierre_mystique.webp" alt="">
                            <div class="text">
                                <h1><strong>GigaBoulet</strong> Mystique</h1>
                                <p>Un caillou exceptionnel, idéal pour les collectionneurs de pierres rares. Couleurs captivantes et textures naturelles.</p>
                            </div>
                        </article>
                    </a>
                    <a href="./market.php">
                        <article>
                            <img src="static/img/pierre_decoration.webp" alt="">
                            <div class="text">
                                <h1><strong>GigaBoulet</strong> de Décoration</h1>
                                <p>Ajoutez une touche naturelle à votre espace avec nos <strong>GigaBoulets</strong> décoratifs. Parfait pour les amateurs de design minéral.</p>

                            </div>
                        </article>
                    </a>
                    <a href="./market.php">
                        <article>
                            <img src="static/img/pierre_collection.webp" alt="">
                            <div class="text">
                                <h1><strong>GigaBoulet</strong> de Collection</h1>
                                <p>Pour les passionnés de minéralogie, découvrez des <strong>GigaBoulets</strong> uniques, sélectionnés pour leur beauté et leur rareté.</p>
                            </div>
                        </article>
                    </a>
                </div>

            </div>
        </section>

        <section id="services">
            <div class="container">
                <h2>Nos Services</h2>
                <ul>
                    <li>
                        <i class="fas fa-shipping-fast"></i> <!-- Icône de livraison rapide -->
                        <h3>Livraison rapide</h3>
                        <p>Recevez vos cailloux chez vous en un temps record.</p>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i> <!-- Icône de garantie qualité -->
                        <h3>Garantie qualité</h3>
                        <p>Tous nos cailloux sont soigneusement sélectionnés pour vous offrir le meilleur.</p>
                    </li>
                    <li>
                        <i class="fas fa-comments"></i> <!-- Icône de conseils personnalisés -->
                        <h3>Conseils personnalisés</h3>
                        <p>Notre équipe vous aide à choisir les cailloux qui vous conviennent.</p>
                    </li>
                </ul>

            </div>
        </section>

        <section id="avis">
            <div class="container">
                <h2>Ce Que Nos Clients Disent</h2>
                <div class="grid">
                    <article>
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star-half-stroke"></i>
    
                        </span>
                        <h1>Exceptionnel !!</h1>
                        <blockquote>
                            <p>"Gigaboulet propose des cailloux d'une qualité exceptionnelle ! Parfait pour ma collection. Je recommande vivement." - Jules L.</p>
                        </blockquote>
                    </article>
                    <article>
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
    
                        </span>
                        <h1>Le site de référence</h1>
                        <blockquote>
                            <p>"Des pierres magnifiques et une livraison rapide. Merci Gigaboulet !" - Sophie R.</p>
                        </blockquote>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h2>Contactez-Nous !</h2>
                <p>Vous avez des questions ou besoin de conseils ? N'hésitez pas à nous contacter :</p>
                <address>
                    Email : <a href="mailto:contact@gigaboulet.shop">contact@gigaboulet.shop</a><br>
                    Téléphone : <a href="tel:+330123456789">+33 01 23 45 67 89</a><br>
                    Adresse : 123 Rue des Boullets, Paris, France
                </address>
                <form action="/submit-form" method="post">
                    <h3>Contact</h3>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    
                    <button type="submit">Envoyer</button>
                </form>

            </div>
        </section>
    </main>
    <?php include("includes/footer.php");?>
</body>
</html>
