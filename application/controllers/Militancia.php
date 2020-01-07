<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Militancia extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        //grocery_crud library
        $this->load->library('grocery_CRUD');
        //login model
        $this->load->model("login_model");
    }

    public function militantes()
    {
    	if ($this->login_model->isLogged()) {
        $crud = new grocery_CRUD();
        $crud->set_table('militantes');
        $crud->set_subject('Militante');
        $crud->columns('Id', 'Name', 'Address', 'Cellphone', 'Email');

        $crud->display_as('Id', '');
        $crud->display_as('Name', 'Nombre');
        $crud->display_as('Address', 'Dirección');
        $crud->display_as('Cellphone', 'Teléfono');
        $crud->display_as('Email', 'Correo electrónico');

        $crud->fields('Name', 'Address', 'Cellphone', 'Email');

        $crud->set_rules('Name', 'Name', 'trim|required');
        $crud->set_rules('Address', 'Address', 'trim|required');
        $crud->set_rules('Cellphone', 'Cellphone', 'trim|numeric');
        $crud->set_rules('Email', 'Email', 'trim|valid_email');

        $output = $crud->render();       
        $this->_example_output($output);       

        } else {
            $this->session->unset_userdata('admin');
            $this->session->sess_destroy();
            redirect("/login");
        }      

    }

    public function index()
    {
        if ($this->login_model->isLogged()) {                        
            redirect("militancia/militantes");           
        } else {
            $this->session->unset_userdata('admin');
            $this->session->sess_destroy();
            redirect("/login");
        }      
    }

    public function _example_output($output = null){
        $this->load->view('militancias.php', $output);
    }

    public function _username(){
        $user['usuario'] = $this->login_model->name();
        return $user;
    }

    
}
