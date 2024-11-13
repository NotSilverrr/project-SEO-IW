<?php 
$title = "Gigaboulet - Le site de vente de cailloux n°1 en France";
$description = "Gigaboulet propose toutes sortes de services et de produits en lien avec les cailloux. Si vous en êtes passionné, vous trouverez forcément votre bonheur ici !";
include "includes/head.php"
?>
<body>
    <?php include("includes/header.php");?>
    <main>
        <section id="banniere">
            <div class="container">
                <h1>Gigaboulet</h1>
            </div>
        </section>
        <div class="container">
            <section id="accueil">
                <h2>Découvrez Nos Cailloux Inoubliables</h2>
                <p>Gigaboulet est la boutique idéale pour tous les amateurs de cailloux. Nous proposons une collection variée de cailloux uniques, rares et esthétiques pour embellir votre décoration ou compléter votre collection. Chez nous, chaque caillou a une histoire !</p>
                <img src="images/accueil-cailloux.jpg" alt="Collection de cailloux uniques chez Gigaboulet">
            </section>
        
            <section id="produits">
                <h2>Nos Cailloux Phare</h2>
                <article>
                    <h3>Caillou Mystique</h3>
                    <p>Un caillou exceptionnel, idéal pour les collectionneurs de pierres rares. Couleurs captivantes et textures naturelles.</p>
                </article>
                <article>
                    <h3>Caillou de Décoration</h3>
                    <p>Ajoutez une touche naturelle à votre espace avec nos cailloux décoratifs. Parfait pour les amateurs de design minéral.</p>
                </article>
                <article>
                    <h3>Caillou de Collection</h3>
                    <p>Pour les passionnés de minéralogie, découvrez des cailloux uniques, sélectionnés pour leur beauté et leur rareté.</p>
                </article>
            </section>

            <section id="services">
                <h2>Nos Services</h2>
                <ul>
                    <li><strong>Livraison rapide</strong> - Recevez vos cailloux chez vous en un temps record.</li>
                    <li><strong>Garantie qualité</strong> - Tous nos cailloux sont soigneusement sélectionnés.</li>
                    <li><strong>Conseils personnalisés</strong> - Notre équipe vous aide à choisir les cailloux qui vous conviennent.</li>
                </ul>
            </section>

            <section id="avis">
                
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
                
                
            </section>

            <section id="contact">
                <h2>Contactez-Nous</h2>
                <p>Vous avez des questions ou besoin de conseils ? N'hésitez pas à nous contacter :</p>
                <address>
                    Email : <a href="mailto:contact@gigaboulet.shop">contact@gigaboulet.shop</a><br>
                    Téléphone : <a href="tel:+330123456789">+33 01 23 45 67 89</a><br>
                    Adresse : 123 Rue des Cailloux, Paris, France
                </address>
                <form action="/submit-form" method="post">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    
                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </div>
    </main>
    <?php include("includes/footer.php");?>
</body>
</html>
