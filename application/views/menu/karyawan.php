





        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;  ?></h1>



          <div class="row">
            <div class="col-log">
              <?php if(validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors() ;?>
              </div>
            <?php endif; ?>
              <?= $this->session->flashdata('massage'); ?>
              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKaryawanModal">Tambah Karyawan Baru</a>


              <!-- bagian tabel data karyawan -->
              <table class="table table-hover" border="1">
                <thead>
                  <tr>
                     <th>Nip</th>
                     <th>Nama</th>
                     <th>Jenis Kelamin</th>
                     <th colspan="2" style="text-align:center;">Edit</th>

                  </tr>
                </thead>
                <tbody>
                  <?php for($i=0; $i<count($karyawan);$i++): ?>
                  <tr>
                    <td><?= $karyawan[$i]['nip']; ?></td>
                    <td><?= $karyawan[$i]['nama']; ?></td>
                    <td><?= $karyawan[$i]['jenis_kelamin']; ?></td>
                    <td><a href="<?= base_url('menu/karyawan?').'hapus='.$karyawan[$i]['nip']; ?>" class="badge badge-danger">Hapus</a></td>
                    <td><a href="#" class="badge badge-success" data-toggle="modal" data-target="#newEdit<?= $karyawan[$i]['nip']; ?>">Ubah</a></td>
                  </tr>
                  <?php endfor; ?>

                </tbody>

              </table>


            </div>

          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

        <!-- Modal -->


      <!-- Button trigger modal -->


      <!-- Modal -->
      <div class="modal fade" id="newKaryawanModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newSubMenuModalLabel">tambah karyawan baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url('menu/karyawan'); ?>" method="post">


            <div class="modal-body">


    <div class="form-group">
      <input type="text" class="form-control"
      id="nip" name="nip" placeholder="NIP">
    </div>
    <div class="form-group">
      <input type="text" class="form-control"
      id="nama" name="nama" placeholder="Nama">
    </div>

  <div class="form-group">
  <select id="jkelamin" name="jkelamin" class="form-control">
    <option value="">- Pilih Jenis Kelamin -</option>
    <?php foreach ($jenis as $j): ?>
      <option value="<?= $j['kode_jenis']; ?>"><?= $j['jenis_kelamin']; ?></option>
    <?php endforeach; ?>
  </select>
</div>
</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
              </form>
          </div>
        </div>
      </div>

<?php for($i=0;$i<count($karyawan);$i++): ?>
<div class="modal fade" id="newEdit<?= $karyawan[$i]['nip']; ?>" tabindex="-1" role="dialog" aria-labelledby="exemplaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newEdit">Edit Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('menu/karyawan?').'update='.$karyawan[$i]['nip']; ?>" method="post">


        <div class="modal-body">
          <div class="form-group">

<input type="text" class="form-control"
  id="nip" name="nip" value="<?= $karyawan[$i]['nip']; ?>">
</div>
<div class="form-group">
<input type="text" class="form-control"
  id="nama" name="nama" value="<?= $karyawan[$i]['nama']; ?>">
  </div>
  <select id="jkelamin" name="jkelamin" class="form-control">
    <option value="">- Pilih Jenis Kelamin -</option>
    <?php foreach ($jenis as $j): ?>
      <option value="<?= $j['kode_jenis']; ?>"><?= $j['jenis_kelamin']; ?></option>
    <?php endforeach; ?>
  </select>

</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
          </form>
      </div>
    </div>
  </div>

<?php endfor; ?>
