
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;  ?></h1>



          <div class="row">
            <div class="col-log-6">
              <?= form_error('menu','<div class="alert alert-danger" role="alert">','</div>');?>

              <?= $this->session->flashdata('massage'); ?>


              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Job Karyawan</a>

              <table class="table table-hover" border="1">
                <thead>
                  <tr>
                     <th>Nama</th>
                     <th>Shift 1</th>
                     <th>Shift 2</th>
                     <th colspan="2" style="text-align:center;">Edit</th>

                  </tr>
                </thead>
                <tbody>

                  <?php for($i = 0; $i<count($karyawan);$i++): ?>
                  <tr>
                    <td><?= $karyawan[$i]['nama']; ?></td>
                      <td>
                    <?php for($j = 0; $j<count($jobk[0][$i]);$j++): ?>
                      <?= $jobk[0][$i][$j]." "; ?>
                    <?php endfor; ?>
                    </td>
                    <td>
                  <?php for($j = 0; $j<count($jobk[1][$i]);$j++): ?>
                    <?= $jobk[1 ][$i][$j]." "; ?>
                  <?php endfor; ?>
                  </td>
                  <td><a href="<?=base_url('menu/ubahjobkaryawan?nip=').$karyawan[$i]['nip']; ?>" class="badge badge-success">Ubah</a></td>
                  </tr>
                <?php endfor; ?>


                </tbody>

              </table>
              <?= $asd; ?>
              <?php if($asd): ?>
                <table class="table table-hover" border="1">
                  <thead>
                    <tr>
                       <th>Nama</th>
                       <th>Shift 1</th>
                       <th>Shift 2</th>
                       <th colspan="2" style="text-align:center;">Edit</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    </tr>


                  </tbody>

                </table>
              <?php endif; ?>

            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

        <!-- Modal -->


      <!-- Button trigger modal -->


      <!-- Modal -->
      <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newMenuModalLabel">Tambah Job Karyawan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url('menu/jobKaryawan'); ?>" method="post">


            <div class="modal-body">

  <div class="form-group">
  <select id="nip" name="nip" class="form-control">
    <option value="">- Nama Karyawan -</option>
    <?php for($i = 0; $i<count($karyawan);$i++): ?>
      <option value="<?= $karyawan[$i]['nip']; ?>"><?= $karyawan[$i]['nama']; ?></option>
    <?php endfor; ?>
  </select>
  </div>

  <div class="form-group">
  <select id="job" name="job" class="form-control">
    <option value="">- Job -</option>
      <?php for($i = 0; $i<count($job); $i++): ?>
      <option value="<?= $job[$i]['id_job']; ?>"><?= $job[$i]['job']; ?></option>
    <?php endfor; ?>
  </select>
  </div>

  <div class="form-group">
  <select id="status" name="status" class="form-control">

    <option value="">- Status Gelar -</option>
    <?php for($i = 0; $i<count($status); $i++): ?>
      <option value="<?= $status[$i]['id_status']; ?>"><?= $status[$i]['id_status']; ?></option>
    <?php endfor; ?>
  </select>
  </div>

  <div class="form-group">
  <select id="shift" name="shift" class="form-control">
    <option value="">- Shift -</option>
    <?php for($i = 0; $i<count($shift); $i++): ?>
      <option value="<?= $shift[$i]['id_shift']; ?>"><?= $shift[$i]['shift']; ?></option>
    <?php endfor; ?>
  </select>
  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" value="btn" name="btn" >Tambah</button>
            </div>
              </form>
          </div>
        </div>
      </div>
