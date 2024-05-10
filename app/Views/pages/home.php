<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main role="main">
    <div class="jumbotron"> <!-- Ambatron -->
        <div class="container">
            <h1 class="display-3">Selamat Datang!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti sunt accusamus. Culpa necessitatibus doloribus, qui rerum porro, iure facilis eveniet architecto ratione aliquam ducimus. Laudantium esse rerum a doloribus!</p>
            <p><a class="btn btn-primary btn-lg" href="/pages/about" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Headline 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At similique perferendis ratione rerum! Tempore maxime sed iusto. Tenetur, alias explicabo. </p>
                <p><a class="btn btn-secondary" href="/pages/about" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Headline 2</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At similique perferendis ratione rerum! Tempore maxime sed iusto. Tenetur, alias explicabo. </p>
                <p><a class="btn btn-secondary" href="/pages/about" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Headline 3</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At similique perferendis ratione rerum! Tempore maxime sed iusto. Tenetur, alias explicabo. </p>
                <p><a class="btn btn-secondary" href="/pages/about" role="button">View details &raquo;</a></p>
            </div>
        </div>
        <hr>
    </div>
</main>
<footer class="container text-center">
    <p>&copy; Tokioshy 2024</p>
</footer>
<?= $this->endSection(); ?>