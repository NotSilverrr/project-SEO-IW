<header>
    <div class="container">
        <a href="/"><img src="static/img/gigaboulet.webp" class="header_logo" alt="Logo_Gigaboulet"></a>
        <nav>
            <ul class="header_list">
                <li><a href="/magasin">Magasin</a></li>
                <li><a href="/histoire">Notre histoire</a></li>
                <li><a href="/pourquoi-nous">Pourquoi Nous ?</a></li>
                <li><a href="/faq">Faq</a></li>
            </ul>
            
        </nav>
        <button class="burger-button" id="burger-button" onclick="openBurger()">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <script src="../static/js/burger.js"></script>
</header>

<section class="burger-menu" id="burger-menu">
    <button class="close" onclick="closeBurger()">X</button>
    <ul class="burger_list">
        <li><a href="./../market.php">Magasin</a></li>
        <li><a href="./../story.php">Notre histoire</a></li>
        <li><a href="./../why.php">Pourquoi Nous ?</a></li>
        <li><a href="./../faq.php">Faq</a></li>
    </ul>
</section>