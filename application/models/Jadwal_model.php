
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
  public function getMingguShift1()
  {
    $query="SELECT jadwal_karyawan.*, karyawan.nama FROM jadwal_karyawan, karyawan WHERE karyawan.nip = jadwal_karyawan.nip AND jadwal_karyawan.shift = '1' ORDER BY jadwal_karyawan.no ASC";

    return $this->db->query($query)->result_array();
  }

  public function getMingguShift2()
  {
    $query="SELECT jadwal_karyawan.*, karyawan.nama FROM jadwal_karyawan, karyawan WHERE karyawan.nip = jadwal_karyawan.nip AND jadwal_karyawan.shift = '2' ORDER BY jadwal_karyawan.no ASC";

    return $this->db->query($query)->result_array();
  }


  public function getJob()
  {
    $hari = $this->db->get('hari');
    $hari = $hari->result_array();

    $tmp = array();

    for($i=0;$i<count($hari);$i++){

      $nama_hari = $hari[$i]['nama_hari'];
      $query= "SELECT jadwal.hari, jadwal.jml, job.job FROM jadwal,job WHERE hari = '$nama_hari' AND job.id_job = jadwal.id_job  AND shift = '1' ORDER BY id_jadwal ASC";
      $query = $this->db->query($query)->result_array();
      // var_dump($query);

      $tmpt = array();
      for($a=0;$a<(count($query));$a++){
        for($b=0;$b<(int)$query[$a]['jml'];$b++){
          $tmpt[] = $query[$a]['job'];
        }
      }
      $tmp[] = $tmpt;

    }
    return $tmp;
  }

  public function getJob2()
  {
    $hari = $this->db->get('hari');
    $hari = $hari->result_array();

    $tmp = array();

    for($i=0;$i<count($hari);$i++){

      $nama_hari = $hari[$i]['nama_hari'];
      $query= "SELECT jadwal.hari, jadwal.jml, job.job FROM jadwal,job WHERE hari = '$nama_hari' AND job.id_job = jadwal.id_job  AND shift = '2' ORDER BY id_jadwal ASC";
      $query = $this->db->query($query)->result_array();
      // var_dump($query);

      $tmpt = array();
      for($a=0;$a<(count($query));$a++){
        for($b=0;$b<(int)$query[$a]['jml'];$b++){
          $tmpt[] = $query[$a]['job'];
        }
      }
      $tmp[] = $tmpt;
    }
    return $tmp;
  }

  public function jobk(){
    $karyawan = $this->db->get('karyawan');
    $karyawan = $karyawan->result_array();

    $tmpt = array();
    for($i=0; $i<count($karyawan); $i++){
      $tm = array();
      $nip = $karyawan[$i]['nip'];
      $query= "SELECT status_karyawan.no, status_karyawan.nip, job.job, status_karyawan.shift FROM `status_karyawan`,`job` WHERE nip = '$nip' AND shift = 1 AND job.id_job = status_karyawan.job";
      $query = $this->db->query($query)->result_array();
      for($j = 0; $j<count($query);$j++){
        $tm[] = $query[$j]['job'];
      }
      $tmpt[] = $tm;
      // var_dump($query);
    }

    $tmpt2 = array();
    for($i=0; $i<count($karyawan); $i++){
      $tm = array();
      $nip = $karyawan[$i]['nip'];

      $query= "SELECT status_karyawan.no, status_karyawan.nip, job.job, status_karyawan.shift FROM `status_karyawan`,`job` WHERE nip = '$nip' AND shift = 2 AND job.id_job = status_karyawan.job";
      //SELECT * FROM `status_karyawan` WHERE nip = '$nip' and shift = 2
      $query = $this->db->query($query)->result_array();
      for($j = 0; $j<count($query);$j++){
        $tm[] = $query[$j]['job'];
      }
      $tmpt2[] = $tm;
      // var_dump($query);
    }
    // var_dump($tmpt);
    // echo "<br><br>";
    // var_dump($tmpt2);
    $tmptfinal = array();
    $tmptfinal[] = $tmpt;
    $tmptfinal[] = $tmpt2;
    // echo "<br><br>";
    // var_dump($tmptfinal);
    return $tmptfinal;

  }

  public function jobk2($nip){

      $query= "SELECT status_karyawan.no, status_karyawan.nip, job.job, status_karyawan.shift FROM `status_karyawan`,`job` WHERE nip = '$nip' AND shift = 1 AND job.id_job = status_karyawan.job";
      $query = $this->db->query($query)->result_array();


      $query2= "SELECT status_karyawan.no, status_karyawan.nip, job.job, status_karyawan.shift FROM `status_karyawan`,`job` WHERE nip = '$nip' AND shift = 2 AND job.id_job = status_karyawan.job";
      //SELECT * FROM `status_karyawan` WHERE nip = '$nip' and shift = 2
      $query2 = $this->db->query($query2)->result_array();
      var_dump($query);

    $tmptfinal = array();
    $tmptfinal[] = $query;
    $tmptfinal[] = $query2;

    return $tmptfinal;

  }

  public function jobHarian($minggu,$hari,$shift){
    $query = "SELECT jadwal_karyawan.*, karyawan.nama, user.image FROM `jadwal_karyawan`,`karyawan`,`user` WHERE minggu_ke = $minggu AND hari = '$hari' AND shift = '$shift' AND jadwal_karyawan.nip = karyawan.nip AND karyawan.nama = user.name";
    $query = $this->db->query($query)->result_array();

    return $query;
  }
  public function getJobHarian($shift){
    $hari = $this->db->get('hari');
    $hari = $hari->result_array();

    $tmp = array();

    for($i=0;$i<count($hari);$i++){

      $nama_hari = $hari[$i]['nama_hari'];
      $query= "SELECT jadwal.hari, jadwal.jml, job.job FROM jadwal,job WHERE hari = '$nama_hari' AND job.id_job = jadwal.id_job  AND shift = '$shift' ORDER BY id_jadwal ASC";
      $query = $this->db->query($query)->result_array();
      // var_dump($query);

      $tmpt = array();
      for($a=0;$a<(count($query));$a++){
        for($b=0;$b<(int)$query[$a]['jml'];$b++){
          $tmpt[] = $query[$a]['job'];
        }
      }
      $tmp[] = $tmpt;
    }
    return $tmp;
  }

  public function getOPT1(){
    $query = "SELECT jadwal.hari, jadwal.jml, job.job FROM jadwal,job WHERE job.id_job = jadwal.id_job AND job = 'OPT' AND shift = '1' ORDER BY id_jadwal ASC";
    $query = $this->db->query($query)->result_array();
    return $query;
  }
  public function getOPT2(){
    $query = "SELECT jadwal.hari, jadwal.jml, job.job FROM jadwal,job WHERE job.id_job = jadwal.id_job AND job = 'OPT' AND shift = '2' ORDER BY id_jadwal ASC";
    $query = $this->db->query($query)->result_array();
    return $query;
  }

  public function getKaryawan(){
    $query = "SELECT jadwal_karyawan.*, karyawan.nama FROM `jadwal_karyawan`,`karyawan` WHERE karyawan.nip = jadwal_karyawan.nip ORDER BY no ASC";
    $query = $this->db->query($query)->result_array();
    return $query;
  }


}
