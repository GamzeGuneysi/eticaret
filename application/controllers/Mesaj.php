<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesaj extends CI_Controller {


	  public function __construct()
        {
                parent::__construct();
              $this->load->model('Database_Model');
               $this->load->helper('url');
			   $this->load->library("session");
              
                if (!$this->session->userdata("uye_session") )	//Login olup olmadığı kontrolü
                    redirect(base_url().'home/login');					
        }
	public function mesaj()
	{
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Mesaj ||";
		$data["menu"]="mesaj";
		$query=$this->db->query("SELECT * FROM mesajlar ORDER BY adsoy");
			$data["veriler"]=$query->result();
			$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();
					
				$this->load->view('_1header',$data);//$this->load->view('_1header',$data);
		$this->load->view('mesajlar');
		$this->load->view('_4footer');
		
	}
		public function sil($id)
	{
			$this->db->query("DELETE FROM mesajlar WHERE id=$id");
			  redirect(base_url().'mesaj/mesaj');	
	}
		public function detay($id)
	{
			$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Mesaj Detay ||";
		$data["menu"]="mesaj detay";
		$this->db->query("UPDATE  mesajlar SET durum='okundu' WHERE Id=$id");
		$query=$this->db->query("SELECT  * FROM mesajlar WHERE Id=$id");
		$data["veri"]=$query->result();
		
			$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();
					
				$this->load->view('_1header',$data);//$this->load->view('_1header',$data);
		$this->load->view('mesaj_detay');
		$this->load->view('_4footer');
	}
	
		public function guncelle($id)
	{
		$data=array(
		'adminnotu'=>$this->input->post('adminnotu'),
		);
		 $this->Database_Model->update_data("Mesaj",$data,$id);
		$this->session->set_flashdata('mesaj','Notunuz gonderildi');
		redirect(base_url()."admin/mesaj/detay/$id");
	}		
}
