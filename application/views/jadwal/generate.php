





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
              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKaryawanModal">Generate Jadwal</a>


              <!-- bagian tabel data karyawan -->
                <div id="loading">Loading.....</div>

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
      <div class="modal fade" id="newKaryawanModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newSubMenuModalLabel">P E R H A T I A N !</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url('jadwal/generate'); ?>" method="post">
                <input type="hidden" name="generate" value="generate">

            <div class="modal-body">
              Dengan melakukan generate jadwal maka akan melakukan penghapusan semua data pada jadwal sebelumnya. Apakah anda yakin ingin melakukan generate jadwal ?
</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <button type="submit" class="btn btn-primary" onclick="show">Ya</button>
            </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <script>
    var load = document.getElementById("loading");
    window.addEventListener('load', function(){
      load.style.display = "none";
    });

    function show(){
      div = document.getElementById('loading');
      div.style.displa = "block";
    }
  </script>
