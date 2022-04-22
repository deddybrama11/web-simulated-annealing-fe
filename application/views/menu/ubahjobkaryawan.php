
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;  ?></h1>



          <div class="row">
            <div class="col-log-6">
              <?= form_error('menu','<div class="alert alert-danger" role="alert">','</div>');?>

              <?= $this->session->flashdata('massage'); ?>


              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Ubah Job Karyawan</a>

              <div class="row">
                <div class="col">
                  <table class="table table-hover" border="1">
                    <thead>
                      <tr>
                         <!-- <th>Nama</th> -->
                         <th>Job</th>
                         <th>Shift</th>
                         <th colspan="2" style="text-align:center;">Edit</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php for($i = 0; $i<count($jobk); $i++): ?>
                        <?php for($j = 0; $j<count($jobk[$i]); $j++): ?>
                      <tr>
                        <!-- <td><?= $jobk[$i][$j]['nip']; ?></td> -->
                        <td><?= $jobk[$i][$j]['job']; ?></td>
                        <td><?= $jobk[$i][$j]['shift']; ?></td>
                        <td><a href="#" class="badge badge-success" data-toggle="modal" data-target="#newEdit<?= $jobk[$i][$j]['no']; ?>">Ubah</a></td>
                        <td><a href="<?= base_url('menu/ubahjobKaryawan?hapus=').$jobk[$i][$j]['no']."&nip=".$jobk[$i][$j]['nip'] ?>" class="badge badge-danger" >Hapus</a></td>
                      </tr>
                    <?php endfor; ?>
                    <?php endfor; ?>
                    </tbody>

                  </table>

                </div>

              </div>


            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

        <!-- Modal -->


      <!-- Button trigger modal -->


      <!-- Modal -->

      <?php for($i = 0; $i<count($jobk); $i++): ?>
        <?php for($j = 0; $j<count($jobk[$i]); $j++): ?>

          <div class="modal fade" id="newEdit<?= $jobk[$i][$j]['no']; ?>" tabindex="-1" role="dialog" aria-labelledby="exemplaModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="newEdit">Edit Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url('menu/ubahjobKaryawan?').'update='.$jobk[$i][$j]['no']."&nip=".$jobk[$i][$j]['nip'] ?>" method="post">


                  <div class="modal-body">



          <select id="job" name="job" class="form-control">
            <option value="">- Pilih Job -</option>
            <?php foreach ($job as $jd): ?>
              <option value="<?= $jd['id_job']; ?>"><?= $jd['job']; ?></option>
            <?php endforeach; ?>
          </select>
          <br>



          <div class="form-group">
          <input type="text" class="form-control"
            id="nama" name="shift" value="<?= $jobk[$i][$j]['shift']; ?>">
            </div>

            <input type="hidden" name="no" value="<?= $jobk[$i][$j]['no']; ?>">



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
    <?php endfor; ?>
