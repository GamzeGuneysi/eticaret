<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
	public function __construct()
	{ 
		parent::__construct();
			$this->load->helper('url');
			if(!$this->session->userdata("admin_session"))
				redirect(base_url().'admin/login');
			
	}
	public function index()
	{
		//listeleme  
		//buradaki admin/header ve admin/sidebarı uyeler_listenin en baş ve en sonuna ekldedik kalabalıktan kurtardık
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");//veritabanından çekmek 
		$data["veriler"]=$query->result();
	    $this->load->view('admin/uyeler_liste',$data);//admin içinde conrtollerın adi
		
		//echo "anasayfa";
	}
	public function ekle()
	{
		$query=$this->db->query("SELECT * FROM sehir ORDER BY plaka");//veritabanından çekmek 
		$data["veriler"]=$query->result();	
		
		$this->load->view('admin/uyeler_ekle',$data);
	}
	public function ekle_kaydet()
	{
		//form verilerinin alıp arraye , dataya ekliyoruz
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'email'=>$this->input->post('email'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki'),
		'sifre'=>$this->input->post('sifre'),
		'adres'=>$this->input->post('adres'),
		
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","uye kaydı gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE  id=$id");//veritabanından çekmek 
		$data["veri"]=$query->result();
	    $this->load->view('admin/uyeler_duzenle_form',$data);
}
public function guncelle($id)
	{
		//form verilerinin alıp arraye , dataya ekliyoruz
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'email'=>$this->input->post('email'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki'),
		'sifre'=>$this->input->post('sifre'),
		'adres'=>$this->input->post('adres'),
		
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		redirect(base_url().'admin/uyeler');
	}
	public function sil($id)
	{
		$query=$this->db->query("DELETE  FROM uyeler WHERE  id=$id");//veritabanından çekmek 
        redirect(base_url().'admin/uyeler');}
}