<?php

$id=$_get["id"];


if($hapus($id)>0){
  echo"<script>
    alert('data berhasil di hapus!');
    document.location.href='submenu.php';
    ";
}else{
  echo"<script>
    alert('data gagal di hapus!');
    document.location.href='submenu.php';
    ";
}
 ?>
