<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/200x100" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
    <p class="card-text text-muted"><?= $data['mhs']['nrp']; ?></p>
    <p class="card-text"><?= $data['mhs']['email']; ?></p>
    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
    <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">back</a>
  </div>
</div>
</div>