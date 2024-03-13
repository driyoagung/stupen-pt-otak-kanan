<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data
            </button>
            <h3 class="my-3">Daftar Mahasiswa</h3>
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Mahasiswa terdaftar
                </button>
                <?php foreach ($data['mhs']as $mhs) :?>
            <button type="button" class="  list-group-item list-group-item-action">
                <?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class=" btn btn-danger float-end" onclick="return confirm('yakin?');">hapus</a>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class=" btn btn-success float-end mx-3">detail</a>
            </button>
            <?php endforeach; ?>     
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Manajemen">Teknik Manajemen</option>
                    <option value="Teknik Bisnis">Teknik Bisnis</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>