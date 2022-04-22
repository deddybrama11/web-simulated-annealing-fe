<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
 {
  public function __construct()
  {
  parent::__construct();
  $this->load->library('form_validation');
  }


 public function index()
 {
   if ($this->session->userdata('email')){
     redirect('user');
   }
   $this->form_validation->set_rules('email','Email','trim|required|valid_email');
   $this->form_validation->set_rules('password','Password','trim|required');

   if($this->form_validation->run() == false ){
   $data['title'] = 'Login Page';
   $this->load->view('tamplates/auth_header', $data);
   $this->load->view('auth/login');
   $this->load->view('tamplates/auth_footer');
 }else{
   $this->_login();
 }

 }
private function _login(){
$email=$this->input->post('email');
$password=$this->input->post('password');

$user = $this->db->get_where('user',['email'=> $email])->row_array();

//user ada
if($user){
// user ada active
if($user['is_active'] == 1){
  if(password_verify($password, $user['password'])){
    $data =[
      'email'=> $user['email'],
      'rule_id' => $user['rule_id']
    ];
    $this->session->set_userdata($data);
    if ($user['rule_id'] == 1){
      redirect('admin');
    }else if
    ($user['rule_id'] == 2){
      redirect('user');
    }else{
      redirect('jadwal');
    }

  }else{
    $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
   Password Salah!
  </div>');
  redirect('auth');
  }

}else{
  $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
 Email yang anda gunakan tidak aktif!
</div>');
redirect('auth');
}
}else{
  $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
 Email yang anda gunakan tidak terdaftar!
</div>');
  redirect('auth');
}

}


 public function registration(){

     if ($this->session->userdata('email')){
       redirect('user');
     }
   $this->form_validation->set_rules('name','Name','required|trim');
   $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
     'is_unique' => 'Email ini Telah terdaftar!'
   ]);
   $this->form_validation->set_rules('password12','Password','required|trim|min_length[3]|matches[password22]',[
     'matches' => 'password tidak cocok!',
     'min_length' => 'Password terlalu pendek!'
   ]);
   $this->form_validation->set_rules('password22','Password','required|trim|matches[password12]');

   if($this->form_validation->run() == false){
   $data['title']= 'WPU User Registration';
   $this->load->view('tamplates/auth_header',$data);
   $this->load->view('auth/registration');
   $this->load->view('tamplates/auth_footer');
 }else{
   $data = [
     'name' => htmlspecialchars ($this->input->post('name', true)),
     'email' => htmlspecialchars ($this->input->post('email', true)),
     'image' => 'default.jpg',
     'password' => password_hash($this->input->post('password12'), PASSWORD_DEFAULT),
     'rule_id' => 2,
     'is_active' => 1,
     'date_created' => time()
   ];
   $this->db->insert('user', $data);
   $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
  Selamat! Akun anda telah dibuat. Silahkan Login
</div>');
   redirect('auth');
 }
 }


 public function logout()
 {
   $this->session->unset_userdata('email');
   $this->session->unset_userdata('role_id');
   $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
  You have been logged out!
</div>');
   redirect('auth');
 }

 public function blocked()
 {
   $this->load->view('auth/blocked');
 }

 public function jadwal(){
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


   // $this->load->view('tamplates/header', $data);
   // $this->load->view('tamplates/sidebar', $data);
   $this->load->view('auth/jadwal', $data);
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

   if($this->input->get("minggu")&&$this->input->get("hari")&&$this->input->get("shift")){
     // echo "<br><br>";
      // var_dump($this->input->get("minggu"));
      // var_dump($this->input->get("hari"));
      // var_dump($this->input->get("shift"));
      $data['tampil'] =[$this->input->get("minggu"),$this->input->get("hari"),$this->input->get("shift")];
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


      $this->load->view('Auth/harian2', $data);
      $this->load->view('tamplates/footer');
      // var_dump($data['harian']);
   }else{

     $this->load->view('Auth/harian', $data);
     $this->load->view('tamplates/footer');
   }

   $this->load->model('Jadwal_model','jadwal');
   // if($this->form_validation->run() == false){
   //   // $this->load->view('tamplates/header', $data);
   //   // $this->load->view('tamplates/sidebar', $data);
   //   $this->load->view('tamplates/topbar', $data);
   //   $this->load->view('Auth/harian', $data);
   //   $this->load->view('tamplates/footer');
   // }elseif($this->input->get("minggu")&&$this->input->get("hari")&&$this->input->get("shift")){
   //   echo "dbjsadasdsadkakdajsdka kjsdksajdksajk ajk djaskd jask <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
   //    // var_dump($this->input->get("minggu"));
   //    // var_dump($this->input->get("hari"));
   //    // var_dump($this->input->get("shift"));
   // }
 }

}
