<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Database_Model');
		$this->load->helper('url');
			
			//*** login olma kontrolü eğer login olmadıysa üyenin hiç bir fonk. ulasamaz
			if(!$this->session->userdata("uye_session"))
				redirect(base_url().'home/login_ol');
			
	}
	public function index()
	{
		 
		$query=$this->db->query("SELECT * FROM ayarlar");//veritabanından çekmek 
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		
		$data["sayfa"]="Üye Paneli";
		$data['menu']="uye";
	    $this->load->view('hesabim',$data);
		
		
	}
	public function cikis()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
	}
	
public function hesabim()
	{
		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="Uye hesabı";
		$data["menu"]="uye";

		$query=$this->db->query("select * from uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data['uye']=$query->result();

		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();
		
		$this->load->view('_1header',$data);//$this->load->view('_1header',$data);
		$this->load->view('hesabim');
		$this->load->view('_4footer');


	}
	public function siparislerim()
	{
		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="Uye hesabı";
		$data["menu"]="uye";
 $musteri_id=$this->session->uye_session["id"];
		$query=$this->db->query(" select * FROM  siparis WHERE musteri_id=$musteri_id"	);
		$data["veriler"]=$query->result();

		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();
		
		$this->load->view('_1header',$data);
		$this->load->view('siparislerim');
		$this->load->view('_4footer');


	}
public function uye_guncelle()
	{
		//form verilerinin alıp arraye , dataya ekliyoruz
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'email'=>$this->input->post('email'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'sifre'=>$this->input->post('sifre'),
		'adres'=>$this->input->post('adres')
		
		);
		$id=$this->session->uye_session["id"];//bilgileri hepp sessiondan aldık
		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","uye bilgileriniz güncellendi");
		redirect(base_url().'uye/hesabim');
	}
	public function sil($id)
	{
		$query=$this->db->query("DELETE  FROM uyeler WHERE  id=$id");//veritabanından çekmek 
        redirect(base_url().'uye/hesabim');
    }
		public function siparis_detay($id)
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
		redirect(base_url()."uye/login");
	}	
	     $uye_id=$this->session->uye_session["id"];
         $query=$this->db->query("select * from ayarlar limit 1");
         $data["veri"]=$query->result();
		 
		 $uye_id=$this->session->uye_session["id"];
		$query=$this->db->query(" select * from  siparis WHERE Id=$id"	);
		 $data["siparis"]=$query->result();
		 	$query=$this->db->query(" select * from  siparis_urunler WHERE siparis_id=$id"	);
		 $data["urunler"]=$query->result();
		 $this->load->view('siparisler_detay',$data); 
		
	}
	
}