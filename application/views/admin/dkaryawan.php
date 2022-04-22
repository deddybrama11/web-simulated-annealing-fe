




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


              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKaryaModal">Tambah Karyawan Baru</a>
              <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Nomer Handphone</th>
      <th scope="col">image</th>
      <th scope="col">rule_id</th>
      <th scope="col">is_active</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php foreach ($subMenu as $sm) : ?>

    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $sm['name']; ?></td>
      <td><?= $sm['email']; ?></td>
      <td><?= $sm['no_hp']; ?></td>
      <td><img style="width: 5rem;" src="<?= base_url('assets/img/profile/'). $sm['image'] ?>"></td>
      <td><?= $sm['rule_id']; ?></td>
      <td><?= $sm['is_active']; ?></td>
      <td>
        <a href="ubah.php?id"<?= $sm["id"] ?> class="badge badge-success">edit</a>

        <a href="" class="badge badge-danger">dellet</a>
      </td>
    </tr>
    <?php $i++; ?>
  <?php endforeach ?>
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
      <div class="modal fade" id="newKaryawanModal" tabindex="-1" role="dialog" aria-labelledby="newKaryawanModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newKaryawanModalLabel">tambah karyawan baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url('admin/dkaryawan'); ?>" method="post">


            <div class="modal-body">
              <div class="form-group">

    <input type="text" class="form-control"
    id="name" name="name" placeholder="Submenu name">
  </div>


    <div class="form-group">
      <input type="text" class="form-control"
      id="email" name="email" placeholder="email">
    </div>
    <div class="form-group">
      <input type="text" class="form-control"
      id="no_hp" name="no_hp" placeholder="Nomor Handphone">
    </div>

  <div class="form-group">
    <input type="text" class="form-control"
id="image" name="image" placeholder="image">
</div>
<div class="form-group">
  <input type="password" class="form-control form-control-user" id="password32"  name="password32" placeholder="Password">
  <?= form_error('password32', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="form-group">
    <input type="password" class="form-control form-control-user" id="password42" name="password42"  placeholder="Repeat Password">
</div>
<div class="form-group">
  <input type="text" class="form-control"
id="rule_id" name="rule_id" placeholder="rule_id">
</div>
<div class="form-group">
  <div class="form-check">
  <input class="form-check-input" type="checkbox"
   value="1" name="is_active" id="is_active" checked>
  <label class="form-check-label" for="is_active">
    Active?
  </label>
</div>

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
