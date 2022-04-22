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
      </a>
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

          <br>

          <?php
            $tmp = $hari->result_array();
            $sen = (int)$tmp[0]['jumlah'];
            $sel = (int)$tmp[1]['jumlah'];
            $rab = (int)$tmp[2]['jumlah'];
            $kam = (int)$tmp[3]['jumlah'];
            $jum = (int)$tmp[4]['jumlah'];
            $sab = (int)$tmp[5]['jumlah'];
            $ming = (int)$tmp[6]['jumlah'];

            $are = [$sen,$sel,$rab,$kam,$jum,$sab,$ming];

            $tmp = 0;
            $jd = $jadwal;

            $jml_opt = array();
            for ($i=0; $i <count($gopt1); $i++) {
              $jml_opt[] = $gopt1[$i]['jml'];
            }

           ?>

           <h2> Shift Pagi</h2>
           <div style="overflow-x:auto;">


          <table class="table table-hover" border="1">
            <thead>
            <tr>
                <th rowspan = "2" scope="col">hari/job</th>
              <?php foreach ($hari->result_array() as $h): ?>
                <th colspan="<?= (int)$h['jumlah']; ?>" scope="col"><?= $h['nama_hari']; ?></th>
              <?php endforeach; ?>

            </tr>
            </thead>
            <tbody>
                <tr>
                <td scope="row"></td>

                <?php for ($j=0; $j < count($job); $j++) : ?>
                    <?php
                    $bts = 2;
                    $tm = 0;
                    ?>

                  <?php for ($k=0; $k < count($job[$j]); $k++) : ?>
                    <?php if($job[$j][$k]=="OPT"):
                      if($tm<$bts):
                        $tm++;
                        ?>
                        <td scope="row" style="color:blue;font-weight:bold;"><?= $job[$j][$k]; ?> LAPAN-A2</td>

                      <?php else: ?>
                          <td scope="row" style="color:blue;font-weight:bold;"><?= $job[$j][$k]; ?> LAPAN-A3</td>
                        <?php endif;
                           ?>

                  <?php  else: ?>
                      <td scope="row" style="color:blue;font-weight:bold;"><?= $job[$j][$k]; ?></td>
                    <?php endif;
                       ?>

                  <?php endfor; ?>

                <?php endfor; ?>

                </tr>

              <?php for ($d=1; $d <= 4 ; $d++) { ?>

                <tr>
                  <td scope="row">Minggu <?= $d;?></td>


                  <?php for ($i=0; $i < $sen; $i++) : ?>
                    <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                  <?php
                      $tmp++;
                    endfor; ?>

                  <?php for ($i=0; $i < $sel; $i++) : ?>
                    <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                  <?php
                    $tmp++;
                  endfor; ?>

                <?php for ($i=0; $i < $rab; $i++) : ?>
                  <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                <?php
                  $tmp++;
                endfor; ?>
              <?php for ($i=0; $i < $kam; $i++) : ?>
                <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
              <?php
                $tmp++;
              endfor; ?>

              <?php for ($i=0; $i < $jum; $i++) : ?>
                <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
              <?php
                $tmp++;
              endfor; ?>
              <?php for ($i=0; $i < $sab; $i++) : ?>
                <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
              <?php
                $tmp++;
                endfor; ?>

              <?php for ($i=0; $i < $ming; $i++) : ?>
                <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
              <?php
                $tmp++;
            endfor; ?>
              </tr>

            <?php  } ?>



            </tbody>
            </table>
            </div>

            <?php
              $tmp = $hari->result_array();
              $sen = (int)$tmp[0]['jumlah2'];
              $sel = (int)$tmp[1]['jumlah2'];
              $rab = (int)$tmp[2]['jumlah2'];
              $kam = (int)$tmp[3]['jumlah2'];
              $jum = (int)$tmp[4]['jumlah2'];
              $sab = (int)$tmp[5]['jumlah2'];
              $ming = (int)$tmp[6]['jumlah2'];

              $are = [$sen,$sel,$rab,$kam,$jum,$sab,$ming];

              $tmp = 0;
              $jd = $jadwal2;
             ?>
             <br>
             <h2> Shift Malam</h2>
             <div style="overflow-x:auto;">


            <table class="table table-hover" border="1">
              <thead>
              <tr>
                  <th rowspan = "2" scope="col">hari/job</th>
                <?php foreach ($hari->result_array() as $h): ?>
                  <th colspan="<?= (int)$h['jumlah2']; ?>" scope="col"><?= $h['nama_hari']; ?></th>
                <?php endforeach; ?>

              </tr>
              </thead>
              <tbody>
                  <tr>
                  <td scope="row"></td>

                  <?php for ($j=0; $j < count($job2); $j++) : ?>
                      <?php
                      $bts = 2;
                      $tm = 0;
                      ?>

                    <?php for ($k=0; $k < count($job2[$j]); $k++) : ?>
                      <?php if($job2[$j][$k]=="OPT"):
                        if($tm<$bts):
                          $tm++;
                          ?>
                          <td scope="row" style="color:blue;font-weight:bold;"><?= $job2[$j][$k]; ?> LAPAN-A2</td>

                        <?php else: ?>
                            <td scope="row" style="color:blue;font-weight:bold;"><?= $job2[$j][$k]; ?> LAPAN-A3</td>
                          <?php endif;
                             ?>

                    <?php  else: ?>
                        <td scope="row" style="color:blue;font-weight:bold;"><?= $job2[$j][$k]; ?></td>
                      <?php endif;
                         ?>

                    <?php endfor; ?>

                  <?php endfor; ?>

                  </tr>

                <?php for ($d=1; $d <= 4 ; $d++) { ?>

                  <tr>
                    <td scope="row">Minggu <?= $d;?></td>


                    <?php for ($i=0; $i < $sen; $i++) : ?>
                      <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                    <?php
                        $tmp++;
                      endfor; ?>

                    <?php for ($i=0; $i < $sel; $i++) : ?>
                      <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                    <?php
                      $tmp++;
                    endfor; ?>

                  <?php for ($i=0; $i < $rab; $i++) : ?>
                    <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                  <?php
                    $tmp++;
                  endfor; ?>
                <?php for ($i=0; $i < $kam; $i++) : ?>
                  <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                <?php
                  $tmp++;
                endfor; ?>

                <?php for ($i=0; $i < $jum; $i++) : ?>
                  <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                <?php
                  $tmp++;
                endfor; ?>
                <?php for ($i=0; $i < $sab; $i++) : ?>
                  <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                <?php
                  $tmp++;
                  endfor; ?>

                <?php for ($i=0; $i < $ming; $i++) : ?>
                  <td scope="row"><?= $jd[$tmp]['nama']; ?></td>
                <?php
                  $tmp++;
              endfor; ?>
                </tr>

              <?php  } ?>



              </tbody>
              </table>
              </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </body>
  </html>
