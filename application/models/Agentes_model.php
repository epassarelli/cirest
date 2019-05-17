<?php 
class Agentes_model extends CI_Model { 

    function __construct() { 
        parent::__construct(); 

        switch (ENVIRONMENT) {
            case 'development':
                # code...
                $this->db = $this->load->database('agentes_local', TRUE);
                break;
            
            case 'testing':
                # code...
                $this->db = $this->load->database('agentes_dr', TRUE);
                break;

            case 'production':
                # code...
                $this->db = $this->load->database('agentes_pr', TRUE);
                break;
        }
    } 
    
    /*
    * 
    * 
    */

    function getAgentes(){
        $query = $this->db->get('Agente');
        return $query->result();
    }

}