<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Kalender extends CI_Controller {
   
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
			$this->load->database();
			$this->db = $this->load->database('widyama2_simakol', TRUE);
			$this->db->where('thakdmsmks','2020');
	    }
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
		
    public function index()
    {
        $data['result'] = $this->db->get("rmsmks")->result();		 
        foreach ($data['result'] as $key => $value) {			
            $data['data'][$key]['title'] = '- Ruang '.$value->ruangmsmks . ' ' . $value->kdkmkmsmks . ' Kelas ' . $value->kelasmsmks;
            $data['data'][$key]['start'] = $value->jmrenmsmks;
            $data['data'][$key]['end'] = $value->jmrenmsmks;	

			$hari_ini ='';	
			switch($value->hrrenmsmks){
					case 'MINGGU':
						$hari_ini = 0;
					break;
					case 'SENIN':			
						$hari_ini = 1;
					break;			 
					case 'SELASA':
						$hari_ini = 2;
					break;			 
					case 'RABU':
						$hari_ini = 3;
					break;
			 
					case 'KAMIS':
						$hari_ini = 4;
					break;			 
					case "JUM'AT":
						$hari_ini = 5;
					break;			 
					case 'SABTU':
						$hari_ini = 6;
					break;					
				}
            //$data['data'][$key]['dow'] = [$hari_ini];			
            $data['data'][$key]['backgroundColor'] = "#00a65a";					 
        }

		$this->load->view('dosen/dashboard/header');		
		$this->load->view('jadwal/my_calendar', $data);
		$this->load->view('dosen/dashboard/footer');		

    }
	
public function coba()
	{	

			$this->load->model('dosen/rmsmks_model');
			$data_1 = 
			array(
			
			'coba' => $this->rmsmks_model->get_rmsmks(),

			
			);	

		
				$data['result'] = $this->db->get("rmsmks")->result();		 
				foreach ($data['result'] as $key => $value) {			
					$data['data'][$key]['title'] = '- Ruang '.$value->ruangmsmks . ' ' . $value->kdkmkmsmks . ' Kelas ' . $value->kelasmsmks;
					$data['data'][$key]['startTime'] = $value->jmrenmsmks;
					$data['data'][$key]['color'] = 'red';	
				}
		
			$this->load->view('jadwal/new_calendar',$data_1);		
	 
		 
		
 
	}	
}
