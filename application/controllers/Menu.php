<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
 {
   public function __construct()
   {
     parent::__construct();
     is_logged_in();
   }
   public function index()
   {
     $data['title'] = 'Menu Management';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();

     $data['menu'] = $this->db->get('user_menu')->result_array();

     $this->form_validation->set_rules('menu','Menu','required');

     if($this->form_validation->run() == false) {
       $this->load->view('tamplates/header', $data);
       $this->load->view('tamplates/sidebar', $data);
       $this->load->view('tamplates/topbar', $data);
       $this->load->view('menu/index', $data);
       $this->load->view('tamplates/footer');

     }else{
       $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
       $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
       menu baru telah ditambah!
     </div>');
     redirect('menu');
     }

   }

   public function submenu()
   {
     $data['title'] = 'Daftar Akun Karyawan';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();
     $this->load->model('Menu_model','menu');

     $data['subMenu']= $this->menu->getSubMenu();
     $data['menu']=$this->db->get('user_job')->result_array();

        $this->form_validation->set_rules('name','Name','required');
          $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email ini Telah terdaftar!'
          ]);
          $this->form_validation->set_rules('no_hp','No_hp','required');
            $this->form_validation->set_rules('image','Image','required');

            $this->form_validation->set_rules('password32','Password','required');


              $this->form_validation->set_rules('rule_id','Rule_id','required');
              $this->form_validation->set_rules('is_active','Is_active','required');





        $aaaaa = $this->input->get('u_id');

        if($aaaaa){
          $this->db->where('user_id',$aaaaa);
          $this->db->delete('user');
          redirect('menu/submenu');
        }
        $bb = $this->input->get('us_id');

        if($bb){
          $this->db->where('user_id',$bb);
          $name = $this->input->post('name');
          var_dump($name);
          $email = $this->input->post('email');
          var_dump($email);
          $no_hp = $this->input->post('no_hp');
          var_dump($no_hp);
          $image = $this->input->post('image');
          var_dump($iamge);

          $password = password_hash($this->input->post('password32'), PASSWORD_DEFAULT);
          var_dump($password);
          $rule_id = $this->input->post('rule_id');
          var_dump($rule_id);
          $is_active = $this->input->post('is_active');
          var_dump($is_active);
          $edit=array(
            'name'=>$name,
            'email'=>$email,
            'no_hp'=>$no_hp,
            'image'=>$image,

            'password'=>$password,
            'rule_id'=>$rule_id,
            'is_active'=>$is_active

          );
          $this->db->update('user',$edit);
          redirect('menu/submenu');
        }





        if($this->form_validation->run()== false){
          $this->load->view('tamplates/header', $data);
          $this->load->view('tamplates/sidebar', $data);
          $this->load->view('tamplates/topbar', $data);
          $this->load->view('menu/submenu', $data);
          $this->load->view('tamplates/footer');
        }else{
          $data=[
            'name' =>$this->input->post('name'),
            'email' =>htmlspecialchars ($this->input->post('email', true)),
            'no_hp' =>$this->input->post('no_hp'),
            'image' =>$this->input->post('image'),

            'password' => password_hash($this->input->post('password32'), PASSWORD_DEFAULT),
            'rule_id' =>$this->input->post('rule_id'),
            'is_active' =>$this->input->post('is_active'),
            'date_created' => time()
          ];
          $this->db->insert('user',$data);

          $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
        Karyawan Baru baru telah ditambah!
        </div>');
        redirect('menu/submenu');
        }

   }
   public function karyawan()
   {
    $data['title'] = 'Data Karyawan';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();

     $this->load->model('Menu_model','menu');
     $data['karyawan']= $this->menu->getKaryawan();
     $data['jenis'] = $this->db->get('jeniskelamin')->result_array();

     $this->form_validation->set_rules('nama','Nama','required|trim|is_unique[karyawan.nama]');
     $this->form_validation->set_rules('nip','NIP','required|trim|is_unique[karyawan.nip]');

     $hapus = $this->input->get('hapus');
     if ($hapus) {
       $this->db->delete('status_karyawan', array('nip' => $hapus));
       $this->db->delete('karyawan', array('nip' => $hapus));
       $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
       Data Karyawan telah dihapus !
       </div>');
       redirect('menu/karyawan');
     }

     if($this->form_validation->run() == false) {
       $this->load->view('tamplates/header', $data);
       $this->load->view('tamplates/sidebar', $data);
       $this->load->view('tamplates/topbar', $data);
       $this->load->view('menu/karyawan', $data);
       $this->load->view('tamplates/footer');

     }else{
       $update = $this->input->get('update');


       if($update){
         $jkelamin = $this->input->post('jkelamin');
         if($jkelamin==""){
           $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
         Pilih Jenis Kelamin !!
         </div>');
           redirect('menu/karyawan');

         }else{

           $data= array(
             'nip' =>$this->input->post('nip'),
             'nama' =>$this->input->post('nama'),
             'jenis_kelamin' =>$this->input->post('jkelamin')
           );
             $this->db->where('nip',$this->input->get('update'));
             $this->db->update('karyawan',$data);

             $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
           Data Karyawan telah diubah!
           </div>');
           redirect('menu/karyawan');
         }

       }else{

         $jkelamin = $this->input->post('jkelamin');
         if($jkelamin==""){

           $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
         Pilih Jenis Kelamin !!
         </div>');
           redirect('menu/karyawan');
         }

         $data= array(
           'nip' =>$this->input->post('nip'),
           'nama' =>$this->input->post('nama'),
           'jenis_kelamin' =>$this->input->post('jkelamin')
         );
         $this->db->set($data);
        $this->db->insert('karyawan');
        $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
      Karyawan telah ditambahkan!
      </div>');
      redirect('menu/karyawan');
       }
     }
   }
   public function jobKaryawan(){
      $data['title'] = 'Data Job Karyawan';
      $data['user']= $this->db->get_where('user',['email' =>
      $this->session->userdata('email')])->row_array();



      $this->load->model('Jadwal_model','jadwal');



       $data['karyawan'] = $this->db->get('karyawan')->result_array();
       $data['job'] = $this->db->get('job')->result_array();
       $data['status'] = $this->db->get('status')->result_array();
       $data['shift'] = $this->db->get('shift')->result_array();

       $this->form_validation->set_rules('nip','Nip','required');
       $this->form_validation->set_rules('job','Job','required');
       $this->form_validation->set_rules('status','Status','required');
       $this->form_validation->set_rules('shift','Shift','required');

      $nip = $this->input->post('nip');
      $job = $this->input->post('job');
      $status = $this->input->post('status');
      $shift = $this->input->post('shift');

      $data['jobk'] = $this->jadwal->jobk();
      $asd = $this->input->get('ad');
      $data['asd'] = $asd;
      // var_dump($asd);
      $btn = $this->input->post('btn');
      if($btn){
        if($nip&&$job&&$status&&$shift){
          echo "berarti wes diisi semua";


          $data= array(
            'nip' =>$this->input->post('nip'),
            'job' =>$this->input->post('job'),
            'status' =>$this->input->post('status'),
            'shift' =>$this->input->post('shift')
          );
          $this->db->set($data);
         $this->db->insert('status_karyawan');
         $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
         Job Karyawan telah ditambahkan!
         </div>');
         redirect('menu/jobKaryawan');
       }else{  $this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">
       Anda belum mengisi data!

       </div>');


       }
      }




      if($this->form_validation->run() == false) {
        $this->load->view('tamplates/header', $data);
        $this->load->view('tamplates/sidebar', $data);
        $this->load->view('tamplates/topbar', $data);
        $this->load->view('menu/jobkaryawan', $data);
        $this->load->view('tamplates/footer');

      }else{

      }
   }
    public function ubahjobKaryawan(){
      $data['title'] = 'Ubah Data Job Karyawan';
      $data['user']= $this->db->get_where('user',['email' =>
      $this->session->userdata('email')])->row_array();

      $this->load->model('Jadwal_model','jadwal');

      $data['job'] = $this->db->get('job')->result_array();

      if($this->input->get('hapus')&&$this->input->get('nip')){
        echo "anjay";

        $this->db->delete('status_karyawan', array('no' => $this->input->get('hapus')));
        $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
        Data Job Karyawan telah dihapus !
        </div>');
        redirect('menu/ubahjobkaryawan?nip='.$this->input->get('nip'));

        // }
      }elseif($this->input->get('update')&&$this->input->get('nip')){


        echo "esinii";
        $data= array(
          'job' =>$this->input->post('job'),
          'shift' =>$this->input->post('shift')
        );

          $this->db->where('no',$this->input->get('update'));
          $this->db->update('status_karyawan',$data);

          $this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">
        Data Job Karyawan telah diubah!
        </div>');
        redirect('menu/ubahjobKaryawan?nip='.$this->input->get('nip'));
      }elseif($this->input->get('nip') ){
        $data['jobk'] = $this->jadwal->jobk2($this->input->get('nip'));
        // var_dump($data['jobk']);
        // for($i=0; $i<count($data['jobk']);$i++){
        //   var_dump($data['jobk']);
        //   echo "<br><br>";
      }else {
        redirect('menu/jobKaryawan');
      }



      if($this->form_validation->run() == false) {
        $this->load->view('tamplates/header', $data);
        $this->load->view('tamplates/sidebar', $data);
        $this->load->view('tamplates/topbar', $data);
        $this->load->view('menu/ubahjobkaryawan', $data);
        $this->load->view('tamplates/footer');

      }else{

      }

    }
 }
