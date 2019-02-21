<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('Database_Model');
	}
	
	public function index()
	{
		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();

		$query=$this->db->query("select * from urunler ORDER BY Id "); //galerideki resimleri slidera getirmek için
		$data['slider']=$query->result();
		

		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		
		$data["urunler"]=$this->Database_Model->get_urunler(); //tüm ürünleri ana sayfaya getirmek için _3content in içeriği


		$this->load->view('_1header',$data);
		$this->load->view('_2slider');
		$this->load->view('_3content');
		$this->load->view('_4footer');
	}
	public function iletisim()
	{

		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();


		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="İletisim";
		$data["menu"]="iletisim";
		 
		$this->load->view('_1header',$data);
		$this->load->view('iletisim');
		$this->load->view('_4footer');
	}

	public function hakkimizda()
	{
		$data["menu"]="hakkimizda";
		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();


		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="Hakkımızda";
		
		$this->load->view('_1header',$data);
		$this->load->view('hakkimizda');
		$this->load->view('_4footer');
	}
	public function Bize_Yazin()
	{

		$query=$this->db->query("select * from kategoriler ORDER BY adi ");
		$data['kategoriler']=$query->result();


		$query=$this->db->query("select * from ayarlar ");
		$data['veri']=$query->result();
		$data["sayfa"]="Bize_Yazin";
		$data["menu"]="Bize_Yazin";
		 
		$this->load->view('_1header',$data);
		$this->load->view('Bize_Yazin');
		$this->load->view('_4footer');
	}
	public function mesaj_kaydet()
	{
		//form verilerinin alıp arraye , dataya ekliyoruz
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'email'=>$this->input->post('email'),
		'mesaj'=>$this->input->post('mesaj'),
		'IP'=>$_SERVER['REMOTE_ADDR']
		
		
		
		);
		$this->db->insert("mesajlar",$data);
		//mail
		 $adsoy=$this->input->post('adsoy');
		$email=$this->input->post('eposta');
	    
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();

	
	    $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp-mail.outlook.com',//$data["veri"][0]->smtpserver,
                'smtp_port' => '587',//$data["veri"][0]->stmpport, 
                'smtp_user' => 'gamzeguneysi@hotmail.com',
                'smtp_pass' => 'neolur123',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8',
                'smtp_crypto' =>'tls',
                );
	
		$mesaj="Sayın: ".$adsoy."<br> Üyeliğinizin aktive edilebilmesi için aşağıdaki linke tıklayınız ya da adresi kopyalayıp adres çubuğuna yapıştırınız.<br>";
		$mesaj.="==================================================================<br>";
	
		
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="gonderdiğiniz mesaj<br>===============<br>";
		$mesaj.=$this->input->post('mesaj');
		
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail);
		$this->email->to($email);
		$this->email->subject($data["veri"][0]->name. "Form alındı mesajı");
		$this->email->message($mesaj);
		$result = $this->email->send();
		//echo $this->email->print_debugger();
		//echo "Cevap:" . $result;
		if($result)
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi.");
		else
		{
			$this->session->set_flashdata("email_sent","Email göndermede hata oluştu!!!");
			show_error($this->email->print_debugger());
		}
		
		//mail
		
		$this->session->set_flashdata("mesaj","<p>Mesajınız başarılı bir şekilde gönderilmiştir.<br>En kısa sürede sizinle iletişime geçilecektir.</p>");
		redirect(base_url().'home/Bize_Yazin');
	}


	public function login_ol()
	{
		$this->load->view('login_form');
	}


	public function kayit_ol()
	{
		$this->load->view('kayit_form');
	}

	public function kayit()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),//soldaki adsoy veritabanındaki sağdaki adsoy formdan gelen 
		'email'=>$this->input->post('email'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'sifre'=>$this->input->post('sifre'),
		'adres'=>$this->input->post('adres'),
		
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","kaydınız başarıyla gerçekleştirildi");
		redirect(base_url().'home/login_ol');//kayıt yaptıktan sonra login_ola yani login formuna yönlendirdim.
	}



public function login()//bu login database_modeldeki login
	{
		//echo "login işlemleri";//
		//şimdi cdeıgntera uygun post şelilleri yapılacak codeıgneterda her şey this ile başlar
		
		echo $email=$this->input->post("email");//login formunu post ettk kontrollerda sorgulamamız//lazımama bazı güvenlik kontrollünden geçmesi lazım xss kodları zaarlıdır//bu kötükodların önüne geçmek için duvar yapıyoruz
	    echo $sifre=$this->input->post("sifre");
		//xss kodlarını temizlemek için
		
		$email=$this->security->xss_clean($email);
	    $sifre=$this->security->xss_clean($sifre);
		$this->load->model('Database_Model');//model tanımladık app->model->Database_Model.php aç 
		
		 $result = $this->Database_Model->login("uyeler",$email,$sifre);//dikkat uyeler tablosuna gönderiyoruz.adminde olsak admin tablosuna göndereceğiz
		if ($result)//eğer dolu geliyorsa bu login olduk demektir
		{
			//matris şeklinde düşün satır sayıları 0 dan başlayarak gelecektir
		$sess_array=array(
		'id'=>$result[0]->id,
		'yetki'=>$result[0]->yetki,
		'email'=>$result[0]->email,
		'adsoy'=>$result[0]->adsoy,
		'resim'=>$result[0]->resim,
		);
		$this->session->set_userdata("uye_session",$sess_array);//bu sessionı uye seesiona atıyorum,adminde admin seesionda birbirinden etkilenmemesi için far
		redirect(base_url().'uye/hesabim');
		}
	else{//login olmadıysa buraya gelip bize mesajı verecek
		$this->session->set_flashdata("mesaj","hatalı kullanıcı adı yada sifre");
		redirect(base_url().'home/login_ol');//tekrar bizi login_ol fonksiyonuna login_formuna gönderecek
				
	}
	}

		
}