<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller
 {
   public function __construct()
   {
     parent::__construct();
     is_logged_in();
   }
   public function index()
   {
     $data['title'] = 'Jadwal Operator Satelit Lapan';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();

     $this->load->model('Jadwal_model','jadwal');


     $data['jadwal']= $this->jadwal->getMingguShift1();
     $data['jadwal2']= $this->jadwal->getMingguShift2();
     $data['hari'] = $this->db->get('hari');
     // $data['jadwal'] = $this->db->get_where('jadwal_karyawan', array('shift'=>'1'), 40);
     $data['job'] = $this->jadwal->getJob();
     $data['job2'] = $this->jadwal->getJob2();
     $data['gopt1'] = $this->jadwal->getOPT1();
     $data['gopt2'] = $this->jadwal->getOPT2();
     $data['karyawan'] = $this->jadwal->getKaryawan();


     if($this->input->post("tukar")){

       $nomor = $this->input->post('nomor');
       $nomor2 = $this->input->post('nomor2');


       if ($nomor&&$nomor2) {
         $nip1 ="";
         $nip2 ="";

         for ($i=0; $i<count($data['karyawan']) ; $i++) {
           if($data['karyawan'][$i]['no'] == $nomor){
             $nip1 = $data['karyawan'][$i]['nip'];

             break;
           }
         }
         for ($i=0; $i<count($data['karyawan']) ; $i++) {
           if($data['karyawan'][$i]['no'] == $nomor2){
             $nip2 = $data['karyawan'][$i]['nip'];
             break;
           }
         }

        $this->db->set('nip', $nip2);
        $this->db->where('no', $nomor);
        $this->db->update('jadwal_karyawan');

        $this->db->set('nip', $nip1);
        $this->db->where('no', $nomor2);
        $this->db->update('jadwal_karyawan');
        $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
        Anda berhasil mengisi data!

        </div>');
        redirect('jadwal');

       }else{  $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
       Anda belum mengisi data!

       </div>');


       }
     }


     $this->load->view('tamplates/header', $data);
     $this->load->view('tamplates/sidebar', $data);
     $this->load->view('tamplates/topbar', $data);
     $this->load->view('jadwal/index', $data);
     $this->load->view('tamplates/footer');
   }
   public function jadiexcel()
   {
     $data['title'] = 'Jadwal Operator Satelit Lapan';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();

     $this->load->model('Jadwal_model','jadwal');


     $data['jadwal']= $this->jadwal->getMingguShift1();
     $data['jadwal2']= $this->jadwal->getMingguShift2();
     $data['hari'] = $this->db->get('hari');
     // $data['jadwal'] = $this->db->get_where('jadwal_karyawan', array('shift'=>'1'), 40);
     $data['job'] = $this->jadwal->getJob();
     $data['job2'] = $this->jadwal->getJob2();
     $data['gopt1'] = $this->jadwal->getOPT1();
     $data['gopt2'] = $this->jadwal->getOPT2();



     $this->load->view('jadwal/jadiexcel', $data);

   }

   public function generate(){
     $data['title'] = 'Generate Jadwal';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();

     $this->load->model('Jadwal_model','jadwal');

      $curl = curl_init();
      curl_setopt_array($curl,array(
        CURLOPT_URL => "http://127.0.0.1:5000/ga",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT =>99999999999999999,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "chache-control: no-cache"
        ),
      ));

      if($this->input->post('generate')){
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
      }

     $this->load->view('tamplates/header', $data);
     $this->load->view('tamplates/sidebar', $data);
     $this->load->view('tamplates/topbar', $data);
     $this->load->view('jadwal/generate', $data);
     $this->load->view('tamplates/footer');
   }

   public function harian(){
     $data['title'] = 'Jadwal Harian';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();
     $this->load->model('Jadwal_model','jadwal');
     $data['harii'] = $this->db->get('hari');


     $data['jadwal']= $this->jadwal->getMingguShift1();
     $data['jadwal2']= $this->jadwal->getMingguShift2();
     $data['harian'] = "";
     $data['job1'] = $this->jadwal->getJob();
     $data['job'] = $this->jadwal->getJob();
     $data['job2'] = $this->jadwal->getJob2();
     $data['gopt1'] = $this->jadwal->getOPT1();
     $data['gopt2'] = $this->jadwal->getOPT2();
     // var_dump($data['job1']);


     // var_dump($data['jadwal']);
     // echo "<br><br>";
     // var_dump($data['harian']);

     if($this->input->get("minggu")&&$this->input->get("hari")&&$this->input->get("shift")){
       // echo "<br><br>";
        // var_dump($this->input->get("minggu"));
        // var_dump($this->input->get("hari"));
        // var_dump($this->input->get("shift"));
        $data['harian'] = $this->jadwal->jobHarian($this->input->get("minggu"),$this->input->get("hari"),$this->input->get("shift"));
        $data['h'] = $this->jadwal->getJobHarian($this->input->get("shift"));
        // echo "<br><br>";
        if($this->input->get("hari")=="Senin"){
          $data['job'] = $data['h'][0];
        }elseif ($this->input->get("hari")=="Selasa") {
          $data['job'] = $data['h'][1];
        }elseif ($this->input->get("hari")=="Rabu") {
          $data['job'] = $data['h'][2];
        }elseif ($this->input->get("hari")=="Kamis") {
          $data['job'] = $data['h'][3];
        }elseif ($this->input->get("hari")=="Jumat") {
          $data['job'] = $data['h'][4];
        }elseif ($this->input->get("hari")=="Sabtu") {
          $data['job'] = $data['h'][5];
        }elseif ($this->input->get("hari")=="Minggu") {
          $data['job'] = $data['h'][6];
        }
        // var_dump($data['harian']);
     }

     $this->load->model('Jadwal_model','jadwal');
     if($this->form_validation->run() == false){
       $this->load->view('tamplates/header', $data);
       $this->load->view('tamplates/sidebar', $data);
       $this->load->view('tamplates/topbar', $data);
       $this->load->view('jadwal/harian', $data);
       $this->load->view('tamplates/footer');
     }elseif($this->input->get("minggu")&&$this->input->get("hari")&&$this->input->get("shift")){
        // var_dump($this->input->get("minggu"));
        // var_dump($this->input->get("hari"));
        // var_dump($this->input->get("shift"));
     }
   }
   public function bulanan()
   {
     $data['title'] = 'Jadwal Operator Satelit Lapan';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();

     $this->load->model('Jadwal_model','jadwal');


     $data['jadwal']= $this->jadwal->getMingguShift1();
     $data['jadwal2']= $this->jadwal->getMingguShift2();
     $data['hari'] = $this->db->get('hari');
     // $data['jadwal'] = $this->db->get_where('jadwal_karyawan', array('shift'=>'1'), 40);
     $data['job'] = $this->jadwal->getJob();
     $data['job2'] = $this->jadwal->getJob2();
     $data['gopt1'] = $this->jadwal->getOPT1();
     $data['gopt2'] = $this->jadwal->getOPT2();
     $data['karyawan'] = $this->jadwal->getKaryawan();


     if($this->input->post("tukar")){

       $nomor = $this->input->post('nomor');
       $nomor2 = $this->input->post('nomor2');


       if ($nomor&&$nomor2) {
         $nip1 ="";
         $nip2 ="";

         for ($i=0; $i<count($data['karyawan']) ; $i++) {
           if($data['karyawan'][$i]['no'] == $nomor){
             $nip1 = $data['karyawan'][$i]['nip'];

             break;
           }
         }
         for ($i=0; $i<count($data['karyawan']) ; $i++) {
           if($data['karyawan'][$i]['no'] == $nomor2){
             $nip2 = $data['karyawan'][$i]['nip'];
             break;
           }
         }

        $this->db->set('nip', $nip2);
        $this->db->where('no', $nomor);
        $this->db->update('jadwal_karyawan');

        $this->db->set('nip', $nip1);
        $this->db->where('no', $nomor2);
        $this->db->update('jadwal_karyawan');
        $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
        Anda berhasil mengisi data!

        </div>');
        redirect('jadwal');

       }else{  $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
       Anda belum mengisi data!

       </div>');


       }
     }


     $this->load->view('tamplates/header', $data);
     $this->load->view('tamplates/sidebar', $data);
     $this->load->view('tamplates/topbar', $data);
     $this->load->view('jadwal/bulanan', $data);
     $this->load->view('tamplates/footer');
   }
}
