<?php

class Database_Model extends CI_Model {
	public function __construct()
	{ 
		parent::__construct();
	}
	public function login($tablo,$email,$sifre)//bilgiler karşılaşrırılarak return ediliyor
	{
		$this->db->select("*");
		$this->db->from($tablo);
		$this->db->where('email',$email);
		$this->db->where('sifre',$sifre);
		
		$this->db->limit(1);//bir satır veri getir
		
		
		$query=$this->db->get();//verileri getir
		
		if($query->num_rows() == 1)
		{
			return $query->result();//fonksiyon olarak geri gönderyani false gönderirde yanlış ullaşılamadı
		}
		else{
			return false;
		}
		
		
		
	}
	public function update_data($tablo,$data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update($tablo,$data);
		return true;
}


		function get_urunler() //tüm ürünleri getirir
		{
			$query=$this->db->query('SELECT urunler.*, kategoriler.adi as katadi
			FROM urunler 
			INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
			order by adi');
		return $query->result();
		}
		function urunresim() //tüm ürünleri getirir
		{
			$query=$this->db->query('SELECT urunler_resim.*, urunler.id as urunid
			FROM urunler_resim 
			INNER JOIN urunler
			 ON urunler.id=urunler_resim.urun_id');
		return $query->result();
		}

		function get_urunler2($kat_id) //bir kategorideki ürünlerin hepsini getirir detay_kategori sayfası için
		{
			$query=$this->db->query('SELECT urunler.*, kategoriler.adi as katadi
			FROM urunler 
			INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
			WHERE urunler.kategori='.$kat_id);
		return $query->result();
		}

	function get_urun($id)
		{
			$query=$this->db->query('SELECT urunler.*, kategoriler.adi as katadi
			FROM urunler 
			INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
			WHERE urunler.Id='.$id);//sadece bu ürüne ait fönder urunler.php de duzenle kısmını değiştirdik
		  return $query->result();
	    }
		public function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

} ?>