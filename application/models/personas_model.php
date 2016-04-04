<?php
class personas_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function getPersonas()
    {
        $query=$this->db
            ->select("id,nombre,correo,telefono as tel,fecha")
            ->from("personas")
            ->order_by("id","desc")
            ->get();
        return $query->result();
    }
    public function insertar_persona($datos=array())
    {
        $this->db->insert("personas",$datos);
        return true;
    }
    public function getPersonaPorId($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
            ->select("id,nombre,correo,telefono,fecha")
            ->from("personas")
            ->where($where)
            ->get();
        return $query->row();
    }
    public function modificar_persona($datos=array(),$id)
    {
        $this->db->where('id',$id);
        $this->db->update('personas',$datos);
        return true;
    }
    public function eliminar($id)
    {
        $this->db->delete("personas",array("id"=>$id));
        return true;
    }

}