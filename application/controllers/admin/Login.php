<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{ 
		parent::__construct();
			$this->load->helper('url');
			$this->load->database();//database mi kullanacağız o zamn load etmeliyiz
		
	}
	public function index()
	{
		$this->load->view('admin/login_form');
		
		//echo "anasayfa";
	}
	public function login_ol()
	{
		//echo "login işlemleri";//
		//şimdi cdeıgntera uygun post şelilleri yapılacak codeıgneterda her şey this ile başlar
		
		echo $email=$this->input->post("email");//login formunu post ettk kontrollerda sorgulamamız//lazımama bazı güvenlik kontrollünden geçmesi lazım xss kodları zaarlıdır//bu kötükodların önüne geçmek için duvar yapıyoruz
	    echo $sifre=$this->input->post("sifre");
		//xss kodlarını temizlemek için
		
		$email=$this->security->xss_clean($email);
	    $sifre=$this->security->xss_clean($sifre);
		$this->load->model('Database_Model');//model tanımladık app->model->Database_Model.php aç 
		
		 $result = $this->Database_Model->login("admin",$email,$sifre);
		if ($result)
		{
			//matris şeklinde düşün satır sayıları 0 dan başlayarak gelecektir
		$sess_array=array(
		'id'=>$result[0]->id,
		'yetki'=>$result[0]->yetki,
		'email'=>$result[0]->email,
		'adsoy'=>$result[0]->adsoy,
		'resim'=>$result[0]->resim,
		);
		$this->session->set_userdata("admin_session",$sess_array);//bu diziyi admin_sessiona atıyor artık session dizisi oluşturmuş oldu admine gönderiliyor
		redirect(base_url().'admin');//47.satırdan geldin //admin sayfasına git
		}
	else{
		$this->session->set_flashdata("mesaj","hatalı kullanıcı adı yada sifre");
		redirect(base_url().'admin/login');//login olduğun için 43.satıra git admine gidiyorsun
				
	}
	}
	public function login_cik()
	{
		$this->session->unset_userdata("admin_session");
		redirect(base_url().'admin/login');//login sayfasına git
	}
	
}