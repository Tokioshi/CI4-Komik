<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4 mt-5">Kenali Saya Lebih Dekat</h1>
            <p class="lead">Selamat datang di dunia saya!</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card bg-light border-0">
                <div class="card-body">
                    <h2 class="card-title text-center">Siapa Saya?</h2>
                    <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus vel ipsam, cupiditate voluptatem laborum facere consequatur enim porro amet nemo debitis, non in reiciendis. Tempora velit modi rerum molestiae eos dicta asperiores, quasi quibusdam cum!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <div class="mt-3">
                <h2>Ayo Terhubung</h2>
                <p>Jangan ragu untuk menghubungi saya. Saya selalu senang untuk berkolaborasi dan bertukar ide!</p>
            </div>
            <a href="/pages/contact" class="btn btn-primary btn-lg mt-3">Kontak Saya</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>