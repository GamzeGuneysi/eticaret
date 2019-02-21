<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urun extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('Database_Model');
	}

	public function detay_kat($kat_id){
		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();

		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="";
		$data["menu"]="anasayfa";

		$data["urunler"]=$this->Database_Model->get_urunler2($kat_id);//get_urunler2 database_modelden 

		$this->load->view('_1header',$data);
		$this->load->view('detay_kategori');
		$this->load->view('_4footer');
	}

	public function detay_urun($urun_id){
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

	public function sepete_ekle($urun_id,$musteri_id,$adet){
		echo '<br>'.$urun_id;
		echo '<br>'.$musteri_id;
		echo '<br>'.$adet;
		redirect(base_url().'musteri/sepet_goster/'.$musteri_id);
	}

	public function sepete_ekle2($urun_id,$musteri_id){
		$adet=$this->input->post('adet');
		echo '<br>'.$urun_id;
		echo '<br>'.$musteri_id;
		echo '<br>'.$adet;
		redirect(base_url().'urun/sepetim/'.$musteri_id);
	}
	public function sepetim()
	{
		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepet ||";
		$data["menu"]="sepetim";
	if(!$this->session->userdata('uye_session'))
	{
		$this->session->set_flashdata('mesaj','Giriş Yapınız!');
		redirect(base_url()."login");
	}	
	     $uye_id=$this->session->uye_session["id"];
         $query=$this->db->query("select * from ayarlar limit 1");//tamam
         $data["veri"]=$query->result();
		 
		  $query=$this->db->query("select * from uyeler WHERE Id=$uye_id limit 1");//tamam
          $data["uye"]=$query->result();
		  $musteri_id=$this->session->uye_session["id"];//tamam
		  $query=$this->db->query("SELECT siparis.*, urunler.adi as urunadi ,urunler.sfiyat as fiyat,urunler.birim as ubirim
		FROM siparis
		INNER JOIN urunler On urunler.Id=urun_id
		WHERE siparis.musteri_id=$musteri_id		
		order by Id" );
	$data["veriler"]=$query->result();
	$this->load->view('uye_sepet',$data);
	
	}
	
}
?>