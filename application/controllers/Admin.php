<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
 {
   public function __construct()
   {
     parent::__construct();
     is_logged_in();
   }
   public function index()
   {
     $data['title'] = 'Admin';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();



     $this->load->view('tamplates/header', $data);
     $this->load->view('tamplates/sidebar', $data);
     $this->load->view('tamplates/topbar', $data);
     $this->load->view('admin/index', $data);
     $this->load->view('tamplates/footer');


   }
   public function Role()
   {
     $data['title'] = 'Role';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();



     $this->load->view('tamplates/header', $data);
     $this->load->view('tamplates/sidebar', $data);
     $this->load->view('tamplates/topbar', $data);
     $this->load->view('admin/role', $data);
     $this->load->view('tamplates/footer');


   }
   public function ejadwal(){

     $data['title'] = 'Backup';
     $data['user']= $this->db->get_where('user',['email' =>
     $this->session->userdata('email')])->row_array();

     if($this->input->post('backup')){
       echo "ada";
       $this->load->dbutil();
       $prefs = array(
         'format' => 'zip',
         'filename' => 'my_db_backup.sql'
       );

       $backup =& $this->dbutil->backup($prefs);
       $db_name = 'backup-on-'.date("Y-m-d-H-i-s").'.zip';
       $save = 'pathtobkfolder/'.$db_name;
       $this->load->helper('file');
       write_file($save, $backup);
       $this->load->helper('download');
       force_download($db_name, $backup);
     }

     $this->load->view('tamplates/header', $data);
     $this->load->view('tamplates/sidebar', $data);
     $this->load->view('tamplates/topbar', $data);
     $this->load->view('admin/ejadwal', $data);
     $this->load->view('tamplates/footer');
   }



 }
