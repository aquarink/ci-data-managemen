<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
        //Model
		$this->load->model('TaskModel');
		//Php Excel
	}

	public function index()
	{
		$this->load->view('page-manager/index');
	}

	public function pm($page = 1)
	{
		$limit  = 10;

		$url = site_url('manager/pm');

		$result = $this->TaskModel->taskJoinSite($limit, $page);
		

		$total = $this->TaskModel->taskJoinSiteTotal();

		$this->load->library('pagination');

		$config['base_url']         = $url;
        $config['total_rows']       = $total;
        $config['per_page']         = $limit;
        $config['use_page_numbers'] = true;
        $config['num_links']        = 5;
        $config['full_tag_open']    = '<ul class="pagination" style="margin:0px">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="prev">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();
        //menyiapkan data untuk dikirim ke view
        $data['result']     = $result;
        $data['pagination'] = $pagination;

        $this->load->view('page-manager/pm', $data);
	}

	public function maps()
	{
		$this->load->view('page-manager/maps');
	}

	public function support()
	{
		$this->load->view('page-manager/support');
	}

	public function logout()
	{
		// $this->load->view('page-manager/index');
		$isi = $this->TaskModel->taskJoinSiteAll();
		echo "<pre>";

		foreach ($isi as $value) {
			print_r($value);
		}
		
	}

	public function excelConv() 
	{
		$this->load->library('PHPExcel');
		$this->load->library('PHPExcel/IOFactory');
 
		// merubah style border pada cell yang aktif (cell yang terisi)
		$styleArray = array( 'borders' => 
			array( 'allborders' => 
				array( 'style' => PHPExcel_Style_Border::BORDER_THIN, 'color' => array('argb' => '00000000'), 
					), 
				), 
			);
 
		// melakukan pengaturan pada header kolom
		$fontHeader = array( 
			'font' => array(
				'bold' => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
             	'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
             	'rotation'   => 0,
			),
			'fill' => array(
            	'type' => PHPExcel_Style_Fill::FILL_SOLID,
            	'color' => array('rgb' => '6CCECB')
        	)
		);
 
		//membuat object baru bernama $objPHPExcel
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setTitle("title")->setDescription("description");
 
		// data dibuat pada sheet pertama
		$objPHPExcel->setActiveSheetIndex(0); 
 
		//set header kolom
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Project ID.'); 
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Site Name'); 
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Site ID');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Region.'); 
		$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Team Name'); 
		$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Status');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Remark.'); 
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Total Tenants'); 
		$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Last Update');
 
		// pendefinisian data
		// /$isidata = $this->TaskModel->taskJoinSiteAll();

		foreach ($this->TaskModel->taskJoinSiteAll() as $value) {
			//echo $value->project_id;
			$isi[] = array(
				'A' => $value->project_id, 
				'B' => $value->site_name, 
				'C' => $value->site_id,
				'D' => $value->area, 
				'E' => $value->vendor, 
				'F' => $value->status,
				'G' => $value->remark, 
				'H' => 'belum', 
				'I' => $value->last_update
				);
		}
		
		// melakukan pengisian data
		foreach($isi as $k => $v)
		{
			$col = $k + 9;
			foreach($v as $k1 => $v1)
			{
				$column = $k1.$col;
				$objPHPExcel->getActiveSheet()->setCellValue($column, $v1); 
			}
		}
 
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
 
		$objWorksheet = $objPHPExcel->getActiveSheet();
		$objWorksheet->getStyle('A1:I1')->applyFromArray($fontHeader);
		$objWorksheet->getStyle('A1:'.$column)->applyFromArray($styleArray);

		$fileName = "Sacti_PM_List_Export_".date('Y-m-d H-i-s').".xls";

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$fileName.'"');
		header('Cache-Control: max-age=0');
 
		$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
		// $objWriter->save("Sacti_PM_List_Export_".date('Y-m-d').".xls");
		$objWriter->save("php://output");

		redirect('manager/pm');
	}


}
