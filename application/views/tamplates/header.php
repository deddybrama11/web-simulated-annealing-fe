<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/') ; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/') ; ?>css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    #loading{
      width: 50px;
      height: 50px;
      border-radius: 100%;
      border: 5px solid #ccc;
      border-top-color:#ff6a00;
      position: fixed;
      top:0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
      z-index:99;
      animation: putar 2s ease infinite;
    }

    @keyframes putar {
      from{
        transform:rotate(0deg)
      }to{
        transform: rotate(360deg);
      }
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
