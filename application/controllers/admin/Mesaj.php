<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesaj extends CI_Controller {


	  public function __construct()
        {
                parent::__construct();
              $this->load->model('Database_Model');
               $this->load->helper('url');
			   $this->load->library("session");
              
                if (!$this->session->userdata("admin_session") )	//Login olup olmadığı kontrolü
                    redirect(base_url().'admin/login');					
        }
	public function index()
	{
			$query=$this->db->query("SELECT * FROM mesajlar ORDER BY adsoy");
			$data["veriler"]=$query->result();
			$this->load->view('admin/mesajlar_liste', $data);
		
	}
		public function sil($id)
	{
			$this->db->query("DELETE FROM mesajlar WHERE id=$id");
			  redirect(base_url().'admin/mesaj');	
	}
		public function detay($id)
	{
		$this->db->query("UPDATE  mesajlar SET durum='Okundu' WHERE Id=$id");
		$query=$this->db->query("SELECT  * FROM mesajlar WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/mesaj_detay',$data);
	}
	
		public function guncelle($id)
	{
		$data=array(
		'adminnotu'=>$this->input->post('adminnotu'),
		);
		 $this->Database_Model->update_data("mesajlar",$data,$id);
		$this->session->set_flashdata('mesaj','Notunuz gonderildi');
		redirect(base_url()."admin/mesaj/detay/$id");
	}		
}
