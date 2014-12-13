<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Alumno extends Controller {

	public function action_index()
	{
        $view = View::factory('login');
        
		$this->response->body($view);
	}
    
    public function action_registro()
    {
        $aAlumno = ORM::factory('Alumno')
            ->order_by('id', 'DESC')
            ->find_all();
        
		$view = View::factory('registro')
            ->set('aAlumno', $aAlumno);
        
		$this->response->body($view);
    }
    
    public function action_save()
	{
		$oAlumno = ORM::factory('Alumno');
		$oAlumno->values($this->request->post());
		if($oAlumno->save())
            die(json_encode(array('status' => 'OK', 'data' => $oAlumno->as_array())));
        die(json_encode(array('status' => 'ERROR')));
	}
	

} // End Welcome
