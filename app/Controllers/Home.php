<?php

namespace App\Controllers;
use App\Models\Mprincipal;

class Home extends BaseController
{
	private $datosVista = array(
        'titulo' => 'Examen-UVEG',
        'layout' => 'plantilla/principal',
        'vista' => 'vprincipal',
        'stylecss' => '',
    );
    private $datosVistaVacia = array(
        'titulo' => 'Examen-UVEG',
        'layout' => 'plantilla/vacio',
        'vista' => 'vprincipal',
        'stylecss' => '',
    );

    private function _Vista($data = array())
    {
        $data = array_merge($this->datosVista, $data);
        echo view($data['layout'], $data);               
    }

    private function _Vista_vacia($data = array())
    {
        $data = array_merge($this->datosVistaVacia, $data);
        echo view($data['layout'], $data);               
    }

    public function index()
    {
        $data = array(); 
        $data['scripts'] = array('principal');            
        $data['vista'] = 'dashboard';                
        $this->_Vista($data);
    }

    public function centro()
    {
    	$data = array();
    	$centros = new Mprincipal;
    	$tabla = 'vw_centros';
    	$from = "*";
    	$where = "activo = 1";
    	$order = "desc_tlb DESC";
        $data['centros'] = $centros->getDatos($tabla, $from, $where, $order);
         
        $data['scripts'] = array('principal');            
        $data['vista'] = 'centro';                
        $this->_Vista_vacia($data);
    }

    public function alumnos()
    {
        $data = array();
    	$alumnos = new Mprincipal;

    	$tabla = 'vw_alumnos';
    	$from = "*";
    	$where = "1=1";
    	$order = "desc_tlb DESC";    	
        $data['alumnos'] = $alumnos->getDatos($tabla, $from, $where, $order);

        $data['scripts'] = array('principal');            
        $data['vista'] = 'alumnos';                
        $this->_Vista_vacia($data);
    }

    public function calificaciones()
    {
    	$datos = new Mprincipal; 
        $data = array();       

        //Get alumnos
        $tabla = 'vw_alumnos';
        $from = "*";
        $where = "1=1";
        $order = "";
        $data['alumnos'] = $datos->getDatos($tabla, $from, $where, $order);


        //Get materias
        $tabla = 'materias';
        $from = "*";
        $where = "1=1";
        $order = "clave_materia";
        $data['materias'] = $datos->getDatos($tabla, $from, $where, $order);

        $data['scripts'] = array('principal');            
        $data['vista'] = 'calificaciones';                
        $this->_Vista_vacia($data);
    }

    public function detalle_centro($id = null){
    	$data = array();
    	$centros = new Mprincipal;    	

    	if(!empty($id) && is_numeric($id)){
    		$tabla = 'vw_centros';
            $from = "*";
            $where = " cat_tlb_id={$id}";
            $order = "";
            $data['centro'] = $centros->getDatos($tabla, $from, $where, $order);     
    	}else{
    		$data['centro'] = [];            
    	}
    	$data['scripts'] = array('principal');            
        $data['vista'] = 'detalle_centro';                
        $this->_Vista_vacia($data);
    }

    public function detalle_alumno($id = null){
    	$data = array();
    	$alumno = new Mprincipal;    	

    	if(!empty($id) && is_numeric($id)){
    		$tabla = 'vw_alumnos';
            $from = "*";
            $where = " id_alumno_tbc={$id}";
            $order = "";
            $data['alumno'] = $alumno->getDatos($tabla, $from, $where, $order);     
    	}else{
    		$data['alumno'] = [];            
    	}
    	$data['scripts'] = array('principal');            
        $data['vista'] = 'detalle_alumno';                
        $this->_Vista_vacia($data);
    }
    public function edicion_alumno($id = null){
    	$data = array();
    	$datos = new Mprincipal;
    	$from = "*";
    	$where = "activo =1";

    	//Get cat telebachillerato
    	$data['telebachillerato'] = $datos->getDatos('cat_tlb', $from, $where, 'desc_tlb');

    	//Get cat estatus alumno
    	$data['estatus_alumno'] = $datos->getDatos('cat_alumnos_activos', $from, $where, 'desc_alumnos_activos');

    	//Get cat genero
    	$data['cat_genero'] = $datos->getDatos('cat_genero', $from, $where, 'desc_genero');

    	//Get cat municipio residencia
    	$data['cat_municipios'] = $datos->getDatos('cat_municipios', $from, $where." AND id_edo=11", 'nombre_mpo');

    	//Get cat pais
    	$data['cat_pais'] = $datos->getDatos('cat_pais', $from, $where, 'nombre_pais');


    	if(!empty($id) && is_numeric($id)){
    		$tabla = 'vw_alumnos';
            $from = "*";
            $where = " id_alumno_tbc={$id}";
            $order = "";
            $data['alumno'] = $datos->getDatos($tabla, $from, $where, $order);     
    	}else{
    		$data['alumno'] = [];            
    	}
    	$data['scripts'] = array('principal');            
        $data['vista'] = 'edicion_alumno';                
        $this->_Vista_vacia($data);


    }
    public function submit_actualizar_participante(){
    	$datos = new Mprincipal;

    	$data = $this->request->getPost();
    	$id_persona = $data['id_persona'];
    	$id_alumno_tbc = $data['id_alumno_tbc'];    	


    	$persona = [
    		'nombre'=>$data['nombre'],
    		'primer_apellido'=>$data['primer_apellido'],
    		'segundo_apellido'=>$data['segundo_apellido'],
    		'id_genero'=>$data['id_genero'],
    		'id_mpo_residencia'=>$data['id_mpo_residencia'],
    		'id_pais_nac'=>$data['id_pais_nac'],
    		'fecha_nac'=>$data['fecha_nac'],
    	];

    	$return = $datos->updatePersona($id_persona, $persona);    

    	$estudiante = [
    		'id_tlb'=>$data['id_tlb'],
    		'generacion'=>$data['generacion'],
    		'estatus_alumno'=>$data['estatus_alumno'],    	
    	];
    	
    	$return = $datos->updateEstudiante($id_alumno_tbc, $estudiante);

    	echo 1;    	

    }

    public function submit_guardar_calificacion(){
    	$datos = new Mprincipal;
    	$data = $this->request->getPost();

    	$calificacion = [
    		'id_estudiante'=>$data['alumno'],
    		'id_materia'=>$data['materia'],
    		'calificacion1'=>$data['calificacion1'],
    		'calificacion2'=>$data['calificacion2'],
    		'calificacion3'=>$data['calificacion3'],
    		'promedio'=>$data['promedio'],
    		'fecha_guardo'=>date('Y-m-d H:mm:ss'),
    	];

    	$return = $datos->insertCalificacion($calificacion);
    	echo 1;
    }
}
