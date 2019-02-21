<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{ 
		parent::__construct();
			$this->load->helper('url');
			if(!$this->session->userdata("admin_session"))
				redirect(base_url().'admin/login');
			$this->load->database();
	}
	public function index()
	{
		$id=$this->session->userdata('admin_session')['id']; //login yapan kişinin bilgilari seesion içindeydi ordaki idyi id değişkenşne aldı ikinci id bunun
		$query=$this->db->query("select * from admin where id=$id");
		$data['veri']=$query->result();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/main_content',$data);
		$this->load->view('admin/footer');
		//echo "anasayfa";
	}
		public function ayarlar()
	{
		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
				$this->load->view('admin/ayarlar',$data);

	}
	public function ayarlar_guncelle($id)
	{
		//form verilerinin alıp arraye , dataya ekliyoruz
		$data=array(
		'ad'=>$this->input->post('ad'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'smtpemail'=>$this->input->post('smtpemail'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'keywords'=>$this->input->post('keywords'),
		'description'=>$this->input->post('description'),
		'hakkimizda'=>$this->input->post('hakkimizda'),
		'facebook'=>$this->input->post('facebook'),
		'twitter'=>$this->input->post('twitter'),
		'instagram'=>$this->input->post('instagram'),
		'iletisim'=>$this->input->post('iletisim'),
			'password'=>$this->input->post('password'),
		
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("ayarlar",$data,$id);
		redirect(base_url().'admin/Home/ayarlar');
	}
}
