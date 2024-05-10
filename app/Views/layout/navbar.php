<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Tokioshy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php $session = session() ?>
                <a class="nav-link <?= ($page == "home" ? "active" : ""); ?>" href="/">Home</a>
                <a class="nav-link <?= ($page == "about" ? "active" : ""); ?>" href="/pages/about">About</a>
                <a class="nav-link <?= ($page == "contact" ? "active" : ""); ?>" href="/pages/contact">Kontak</a>
                <a class="nav-link <?= ($page == "komik" ? "active" : ""); ?>" href="/komik">Komik</a>
                <a class="nav-link <?= ($page == "orang" ? "active" : ""); ?>" href="/orang">Orang</a>
            </div>
        </div>
    </div>
</nav>