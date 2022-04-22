
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  public function getSubMenu()
  {
    $query="SELECT `user`.*,`user_job`.`job`
            FROM `user` JOIN `user_job`
            ON `user`.`job` = `user_job`.`id`

    ";
    return $this->db->query($query)->result_array();
  }

  public function getKaryawan()
  {
    $query = "SELECT karyawan.nip,karyawan.nama, jeniskelamin.jenis_kelamin FROM karyawan, jeniskelamin WHERE jeniskelamin.kode_jenis = karyawan.jenis_kelamin";
    return $this->db->query($query)->result_array();
  }

}
