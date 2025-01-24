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
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1080 3961 l-265 -66 -25 -50 c-115 -230 -199 -359 -317 -487 -40
                -42 -73 -81 -73 -85 0 -5 -16 -168 -37 -365 l-37 -356 43 -115 c23 -64 50
                -122 59 -129 9 -8 170 -112 357 -230 l340 -216 243 -24 c178 -18 249 -21 267
                -13 13 5 93 65 177 131 142 112 165 135 291 291 l137 170 34 319 c31 288 33
                322 20 349 -8 16 -72 131 -142 255 l-127 225 -305 232 c-269 205 -309 233
                -340 232 -19 -1 -154 -31 -300 -68z m200 -116 c0 -27 -65 -293 -74 -301 -6 -6
                -114 -39 -240 -73 -125 -34 -235 -65 -244 -68 -8 -4 9 29 39 73 29 43 77 126
                107 184 l54 105 167 41 c173 43 191 47 191 39z m405 -213 l220 -169 67 -118
                c37 -66 65 -121 64 -123 -4 -3 -646 287 -659 298 -5 4 5 71 22 149 17 78 31
                144 31 147 0 10 39 -19 255 -184z m63 -452 c392 -179 403 -184 398 -209 -3
                -14 -15 -123 -27 -242 l-23 -216 -276 -57 c-152 -31 -284 -56 -293 -56 -8 0
                -87 54 -175 121 l-159 120 -17 176 -17 176 78 189 c57 139 82 187 93 185 8 -2
                196 -86 418 -187z m-608 173 c0 -4 -27 -73 -60 -153 l-61 -145 -256 -168
                c-140 -92 -258 -166 -260 -163 -5 5 42 465 48 470 4 4 568 164 582 165 4 1 7
                -2 7 -6z m-104 -700 c-1 -1 -116 -44 -256 -96 -170 -63 -257 -91 -261 -83 -29
                51 -35 46 238 226 l258 169 11 -107 c7 -59 11 -108 10 -109z m211 -245 c74
                -56 132 -105 131 -109 -8 -20 -234 -259 -244 -257 -20 5 -484 303 -477 306 5
                1 102 38 218 81 116 44 216 80 224 80 8 1 75 -45 148 -101z m675 -140 c-28
                -36 -111 -113 -193 -179 l-144 -117 -130 13 c-71 7 -132 14 -134 14 -4 1 10
                16 146 165 l72 79 208 42 c114 24 212 43 216 44 5 1 -13 -27 -41 -61z"/>
                <path d="M2517 3339 c-48 -28 -38 -107 16 -132 28 -13 373 -151 1501 -598 137
                -55 258 -99 268 -99 27 0 68 45 68 74 0 37 -10 55 -39 70 -71 37 -1752 696
                -1772 696 -13 0 -32 -5 -42 -11z"/>
                <path d="M2721 2464 c-12 -15 -21 -35 -21 -45 0 -50 22 -60 1014 -454 533
                -212 978 -385 987 -385 10 0 30 11 45 23 30 26 36 79 11 104 -24 24 -1946 783
                -1982 783 -24 0 -39 -7 -54 -26z"/>
                <path d="M2005 1595 c-50 -50 -26 -100 67 -139 277 -115 1656 -656 1672 -656
                64 1 95 100 42 135 -37 24 -1710 685 -1734 685 -13 0 -34 -11 -47 -25z"/>
                </g>
                </svg>
            </div>
        </section>
        <section id="accueil">
            <div class="grid container">
                <div class="text">
                    <h2>Découvrez Nos Cailloux Inoubliables</h2>
                    <p>Gigaboulet est la boutique idéale pour tous les amateurs de cailloux. Nous proposons une collection variée de cailloux uniques, rares et esthétiques pour embellir votre décoration ou compléter votre collection. Chez nous, chaque caillou a une histoire !</p>
                    <a href="/magasin" class="flex-button">
                        <span>Aller à la Boutique</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="images">
                    <img src="static/img/pierre_yoga.webp" alt="Plusieurs gigaboulets empilés les uns sur les autres, avec un arrière-plan flou." loading="lazy">
                    <img src="static/img/pierre_main.webp" alt="Gigaboulets de plusieurs couleurs dans les mains d'une dame." loading="lazy">
                </div>
            </div>
            
        </section>
    
        <section id="produits">
            <div class="container">
                <h2>Nos <strong>GigaBoulets</strong> Phare</h2>
                <div class="grid">
                    <a href="/magasin">
                        <article>
                            <img src="static/img/pierre_mystique.webp" alt="Gigaboulet crytalisé violet sur une surface en bois." loading="lazy">
                            <div class="text">
                                <h1><strong>GigaBoulet</strong> Mystique</h1>
                                <p>Un caillou exceptionnel, idéal pour les collectionneurs de pierres rares. Couleurs captivantes et textures naturelles.</p>
                            </div>
                        </article>
                    </a>
                    <a href="/magasin">
                        <article>
                            <img src="static/img/pierre_decoration.webp" alt="Trois gigaboulets parfaitement ronds de tailles différentes, posés sur l'herbe." loading="lazy">
                            <div class="text">
                                <h1><strong>GigaBoulet</strong> de Décoration</h1>
                                <p>Ajoutez une touche naturelle à votre espace avec nos <strong>GigaBoulets</strong> décoratifs. Parfait pour les amateurs de design minéral.</p>

                            </div>
                        </article>
                    </a>
                    <a href="/magasin">
                        <article>
                            <img src="static/img/pierre_collection.webp" alt="Plusieurs gigaboulets de couleurs et de tailles différentes sur fond blanc." loading="lazy">
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
                    Téléphone : <a href="tel:+330123456789">+33 7 83 89 98 06</a><br>
                    Adresse : 123 Rue des Boullets, Paris, France
                </address>
                <form method="post">
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
