<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
            var  $title="ศูนย์วิจัยผู้ป่วยปากแหว่ง เพดานโหว่ฯ มหาวิทยาลัยขอนแก่น";
	public function index()  //หน้าหลัก
	{

                             //     $this->load->view('welcome_message');
                            //   $this->load->view("docs/main");
                                $data["title"]=$this->title;
                                
                                  //   side show  
                                 //$this->load->view("main_slide")
                                $data["file1"]="main_slide";
                                  $data["head_content1"]="หน้าหลัก";
                                $data["content"]="Whats new in 3.0";
                                $this->load->view("main2",$data);
                               
                                    
	}
                public function contactus() //ติดต่อเรา
                {
                   // http://10.87.196.170/research/index.php/welcome/contactus
                       $data["title"]=$this->title;
                       $data["file1"]="contactus";
                       
                       $data["head_content1"]="ติดต่อเรา";
                       $data["content"]="คณะแพทยศาสตร์ มหาวิทยาลัยขอนแก่น".br()."123  ถ.มิตรภาพ  ต.ในเมือง".br()."อ.เมืองขอนแก่น จ.ขอนแก่น 40002";
                       
                       $this->load->view("main2",$data);
                       
                }
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */