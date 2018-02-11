<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class PresetsController extends Application
 {
        function __construct()
	{
            parent::__construct();
            $this->load->model('presetscsv');
	}
 	/**
 	 * Index Page for this controller.
 	 *
 	 * Maps to the following URL
 	 * 		http://example.com/
 	 * 	- or -
 	 * 		http://example.com/welcome/index
 	 *
 	 * So any other public methods not prefixed with an underscore will
 	 * map to /welcome/<method_name>
 	 * @see https://codeigniter.com/user_guide/general/urls.html
 	 */
 	public function index()
 	{
 		$this->data['pagetitle'] = 'Equipments presets';
 		$this->data['pagebody'] = 'presets';
                /*
 		$parts = array();
 
 		$source = $this->presets->all();
 		foreach ($source as $record)
 		{
 			$parts[] = array('pre_code' => $record['pre_code']);
 		}
 		$this->data['parts'] = $parts;
 		$this->render();
                
                */
                
                $parts = $this->presetscsv->all();
                $this->data['parts'] = $parts;
                
                $this->render();
 	}
 }