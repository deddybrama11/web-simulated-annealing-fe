<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Jadwal</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
      <div class="container">


  <a class="navbar-brand" href="<?= base_url('auth/jadwal'); ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url('auth/harian'); ?>"> Hari Ini <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="<?= base_url('auth'); ?>"> Login <span class="sr-only">(current)</span></a>
    </div>
  </div>
    </div>
</nav>


<div class="jumbotron jumbotron-fluid">
<div class="container text-center">
<img src="<?= base_url() ?>assets/img/logo/LAPAN_logo.png" width="200">
<h1 class="display-4">PUSTEKSAT</h1>
<p class="lead">Pusat Teknologi Satelit.</p>
</div>
</div>




        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;  ?></h1>

          <form action="<?= base_url('Auth/harian'); ?>" method="get  ">


          <div class="form-group">
            <label for="exampleFormControlSelect1">Minggu ke- </label>
            <select class="form-control" id="exampleFormControlSelect1" name='minggu'>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <?php $sw = $harii->result_array(); ?>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Hari</label>
            <select class="form-control" id="exampleFormControlSelect1" name='hari'>
              <?php foreach ($harii->result_array() as $h):?>
                <option value="<?= $h['nama_hari']; ?>"><?= $h['nama_hari']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1"> Shift </label>
            <select class="form-control" id="exampleFormControlSelect1" name="shift">
              <option value="1">Pagi</option>
              <option value="2">Malam</option>

            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>

          </form>

          <?php if($harian!=""){
            // var_dump($job);
            ?>


            <!-- <table class="table table-hover" border="1">
              <thead>
                <tr>
                  <th> nip </th>
                  <th> nama </th>
                  <th> job </th>
                  <th> foto </th>
                </tr>
              </thead>
              <tbody> -->


                  <!-- <tr>
                    <td><?= $h['nip']; ?></td>
                    <td><?= $h['nama']; ?></td>
                    <td><?= $job[$ii]; ?></td>
                    <td><div class="col-sm-3">
                      <img src="<?= base_url('assets/img/profile/'). $user['image'];?>" class="img-thumbnail">
                    </div>
                  </td>
                  </tr> -->
                  <div class="row mb-4">
                    <?php
                    $ii= 0;
                    $bts = 2;
                    $tma = 0;
                    foreach ($harian as $h) {


                      ?>
                    <div class="col-md">
                      <div class="card" >
                        <img src="<?= base_url('assets/img/profile/'). $h['image'] ?>"  class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $h['nama']; ?></h5>
                          <?php if($job[$ii]=='OPT'):
                            if($tma<$bts):
                             ?>
                            <h5 class="card-title"><?= $job[$ii]; ?> LAPAN-A2</h5>
                            <?php   $tma++; ?>
                          <?php else: ?>
                            <h5 class="card-title"><?= $job[$ii]; ?> LAPAN-A3</h5>
                            <?php endif; ?>

                          <?php else: ?>
                            <h5 class="card-title"><?= $job[$ii]; ?></h5>
                            <?php endif; ?>

                          <p class="card-text"><?= $h['nip']; ?></p>
                        </div>
                      </div>
                    </div>

                <?php $ii++; } ?>
                </div>
         <?php  } ?>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </body>
  </html>
