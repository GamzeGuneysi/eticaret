<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('Database_Model');
			if(!$this->session->userdata("uye_session")){redirect(base_url().'home/login');}
	}

	public function detay_kat($kat_id)
	{
		

		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="";
		$data["menu"]="anasayfa";

		$data["urunler"]=$this->Database_Model->get_urunler2($kat_id);//get_urunler2 database_modelden 

		$this->load->view('_1header',$data);
		$this->load->view('detay_kategori');
		$this->load->view('_4footer');
	}

	public function detay_urun($urun_id){//tamam
		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();

		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		$data['urun'] = $this->Database_Model->get_urun($urun_id);//get_urun database_modelden
		$query=$this->db->query("select * from urunler_resim WHERE urun_id=$urun_id "); //galerideki resimleri getirmek için
		$data['galeri']=$query->result();


		$this->load->view('_1header',$data);
		$this->load->view('detay_urun');
		$this->load->view('_4footer');
	}

	public function sepete_ekle($urun_id,$musteri_id,$adet,$fiyat){
		$data = array('musteri_id' => $musteri_id, 'urun_id' => $urun_id, 'adet' => $adet, 'fiyat' => $fiyat, 'tutar' => $fiyat );
		$this->db->insert('siparis',$data);
		redirect(base_url().'urun/sepetim');
	}

	public function sepete_ekle2($urun_id,$musteri_id,$fiyat){
		$adet=$this->input->post('adet');
		$tutar=$adet*$fiyat;
		$data = array('musteri_id' => $musteri_id, 'urun_id' => $urun_id, 'adet' => $adet, 'fiyat' => $fiyat, 'tutar' => $tutar );
		$this->db->insert('siparis',$data);
		redirect(base_url().'urun/sepetim');
	}
	public function sepetsil($id)
	{
			$this->db->query("DELETE FROM siparis WHERE id=$id");
			  redirect(base_url().'urun/sepetim');	
	}
}
?>