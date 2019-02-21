<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {
	public function __construct()
	{ 
		parent::__construct();
			$this->load->model('Database_Model');
			$this->load->helper('url');
			if(!$this->session->userdata("admin_session"))
				redirect(base_url().'admin/login');
			
	}
	public function index()
	{
		//listeleme  
		//buradaki admin/header ve admin/sidebarı uyeler_listenin en baş ve en sonuna ekldedik kalabalıktan kurtardık
        $query=$this->db->query("SELECT * FROM urunler ORDER BY adi");//veritabanından çekmek 
		//$data["veriler"]=$query->result();
		$data["veriler"]=$this->Database_Model->get_urunler();
	   $this->load->view('admin/urunler_liste',$data);//admin içinde conrtollerın adi
		
		//echo "anasayfa";
	}
	public function ekle()
	{
		$this->load->view('admin/urunler_ekle');
	}
	public function ekle_kaydet()
	{
		//form verilerinin alıp arraye , dataya ekliyoruz
		$data=array(
		'adi'=>$this->input->post('adi'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'kodu'=>$this->input->post('kodu'),
		'turu'=>$this->input->post('turu'),
		'kategori'=>$this->input->post('kategori'),
		'afiyat'=>$this->input->post('afiyat'),
		'sfiyat'=>$this->input->post('sfiyat'),
		'description'=>$this->input->post('description'),
		'keywords'=>$this->input->post('keywords'),
		
		);
		$this->db->insert("urunler",$data);
		$this->session->set_flashdata("mesaj","urun kaydı gerçekleştirildi");
		redirect(base_url().'admin/urunler');
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ");//veritabanından çekmek 
		$data["veriler"]=$query->result();
			$data["veri"]=$this->Database_Model->get_urun($id);		
	    $this->load->view('admin/urunler_duzenle_form',$data);
	}
public function guncelle($id)
	{
		//form verilerinin alıp arraye , dataya ekliyoruz
		$data=array(
		'adi'=>$this->input->post('adi'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'kodu'=>$this->input->post('kodu'),
		'turu'=>$this->input->post('turu'),
		'kategori'=>$this->input->post('kategori'),
		'afiyat'=>$this->input->post('afiyat'),
		'sfiyat'=>$this->input->post('sfiyat'),
		'description'=>$this->input->post('description'),
		'keywords'=>$this->input->post('keywords'),
		
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("urunler",$data,$id);
		redirect(base_url().'admin/urunler');
	}
	public function sil($id)
	{
		$query=$this->db->query("DELETE  FROM urunler WHERE  id=$id");//veritabanından çekmek 
        redirect(base_url().'admin/urunler');}

	public function resim_yukle($id)
	{
		//dosya seçin altında görmek istediğimizde bu olacak
		$query=$this->db->query("SELECT * FROM urunler WHERE  id=$id");//veritabanından çekmek 
        $data["veri"]=$query->result();
		
		$data["id"]=$id;
		$this->load->view('admin/urunler_resim_yukle',$data);
	}
	public function resim_kaydet($id)
	{
		$data["id"]=$id;
		//upload edilecek dosyaya ait ayarlar ve limitler
		        
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;
//ayarlar ile kütüphaneyi çağır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))//yükle -> eğer hata varssa 
                {
                        $error =  $this->upload->display_errors();//HATA oluştuysa errora at
						$this->session->set_flashdata("mesaj","Yüklemede Hata Oluştu:".$error);
                        $this->load->view('admin/urunler_resim_yukle', $data);//tekrar forma gönderiyor
                }
                else//hata yoksa
                {
                        $upload_data=$this->upload->data();		//codeıgter resmin adını değiştirseniz bile buradaiçerik kontroli yapıypr 
						$data=array(
						'resim'=>$upload_data["file_name"]
						);
					
					$this->load->model('Database_Model');
					$this->Database_Model->update_data("urunler",$data,$id);
					redirect(base_url().'admin/urunler');

									
							}
					
	}
	
	public function galeri_yukle($id)
	{
		//dosya seçin altında görmek istediğimizde bu olacak
		$query=$this->db->query("SELECT *FROM urunler_resim WHERE  urun_id=$id");//veritabanından çekmek 
        $data["veriler"]=$query->result();
		
		$data["id"]=$id;
		$this->load->view('admin/urunler_galeri_yukle',$data);
	}
	public function galeri_kaydet($id)
	{
		$data["id"]=$id;
		//upload edilecek dosyaya ait ayarlar ve limitler
		        
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;
//ayarlar ile kütüphaneyi çağır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))//yükle -> eğer hata varssa 
                {
                        $error =  $this->upload->display_errors();//HATA oluştuysa errora at
						$this->session->set_flashdata("mesaj","Yüklemede Hata Oluştu:".$error);
							redirect(base_url().'admin/urunler/galeri_yukle/'.$id);//tekrar forma gönderiyor	
                }
                else//hata yoksa
                {		
					//>>veritabanına kayıt
                        $upload_data=$this->upload->data();		//codeıgter resmin adını değiştirseniz bile buradaiçerik kontroli yapıypr 
						$data=array(
						'urun_id'=>$id,//ürünün idsine göre hareket edecek
						'resim'=>$upload_data["file_name"]
						);
					
					//update olmayacağı içim insert ekliycez
						$this->db->insert("urunler_resim",$data);
						//>>>veritabanı kayıt bitoyor
						
						$this->session->set_flashdata("mesaj","Resim geleriye Yüklendi:");
						redirect(base_url().'admin/urunler/galeri_yukle/'.$id);

									
							}
					
	}
	public function galeri_sil($urunid,$resimid)//önce ürün idsi sonrs resmin idsi gönderilir
	{
		  $query=$this->db->query("DELETE  FROM urunler_resim WHERE  Id=$resimid");//burada urunler_resim tablosundaki ürünün Id dini çek demek
		  $this->session->set_flashdata("mesaj","Resim Galeriden Silindi:");
		  redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);
		  
	}
	
	
	}
	