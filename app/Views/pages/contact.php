<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mt-4">
                <h2>Kontak Saya</h2>
                <form action="/pages/send" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Nama Anda</label>
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Masukkan nama anda" value="<?= old('name'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Anda</label>
                        <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukkan email anda" value="<?= old('email'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control <?= ($validation->hasError('message')) ? 'is-invalid' : ''; ?>" id="message" name="message" rows="5" placeholder="Masukkan pesan anda"></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('message'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>>
</div>
<?= $this->endSection(); ?>