<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->layout->setLayout('template');
    }
    public function index()
    {
        $datos=$this->personas_model->getPersonas();
        $this->layout->view('index',compact("datos"));
    }
    public function add()
    {
        if($this->input->post())
        {
            if ($this->form_validation->run("crud/add")==true)//va a form_validation y obtiene las reglas
            {
                $data=array
                (
                    'nombre'=>$this->input->post("nom",true),
                    'correo'=>$this->input->post("correo",true),
                    'telefono'=>$this->input->post("tel",true),
                    "fecha"=>date("y-m-d h:m:s")
                );
                $guardar=$this->personas_model->insertar_persona($data);
                if($guardar)
                {
                    $this->session->set_flashdata('ControllerMessagge','Se ha agregado exitosamente el registro');
                    redirect(base_url().'crud',301);
                }
                else{
                    $this->session->set_flashdata('ControllerMessagge','Se ha producido un error');
                    redirect(base_url().'crud/add',301);
                }
            }
        }
        $this->layout->view('add');
    }
    public function edit($id=null)
    {
        if(!$id)
        {
            show_404();
        }
        if($this->input->post())
        {
            if ($this->form_validation->run("crud/add")==true)//va a form_validation y obtiene las reglas
            {
                $data=array
                (
                    'nombre'=>$this->input->post("nom",true),
                    'correo'=>$this->input->post("correo",true),
                    'telefono'=>$this->input->post("tel",true)
                );
                $guardar=$this->personas_model->modificar_persona($data,$id);
                if($guardar)
                {
                    $this->session->set_flashdata('ControllerMessagge','Se ha editado exitosamente el registro');
                    redirect(base_url().'crud',301);
                }
                else{
                    $this->session->set_flashdata('ControllerMessagge','Se ha producido un error');
                    redirect(base_url().'crud/edit/'.$id,301);
                }
            }

        }

        $datitos=$this->personas_model->getPersonaPorId($id);
        if(sizeof($datitos)==0)
        {
            show_404();
        }
        $this->layout->view("edit",compact("id","datitos"));
    }
}
