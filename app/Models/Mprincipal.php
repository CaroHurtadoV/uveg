<?php namespace App\Models;

use CodeIgniter\Model;
class Mprincipal extends Model {
    protected $DBGroup = 'default';
    
    function __construct() {
        parent::__construct();
    }  
    public function getDatos($table, $select, $where, $order){
        $db = \Config\Database::connect('default');
        $builder = $db->table($table);
        $builder->select($select);
        $builder->where($where);
        $builder->orderby($order);
        $query = $builder->get();
        return $query->getResult();
    }

    public function updatePersona($id_persona, $datos){
        $db = \Config\Database::connect('default');

        $builder = $db->table('personas');
        $builder->where('id_persona', $id_persona);
        $builder->update($datos);

    }

    public function updateEstudiante($id_alumno_tbc, $datos){
        $db = \Config\Database::connect('default');

        $builder = $db->table('alumnos_tbc');
        $builder->where('id_alumno_tbc', $id_alumno_tbc);
        $builder->update($datos);

    }

    public function insertCalificacion($datos){
        $db = \Config\Database::connect('default');

        $builder = $db->table('calificaciones');
        $builder->insert($datos);

    }
    
    

}