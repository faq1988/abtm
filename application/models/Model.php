
<?php

class Model extends CI_Model {
	//llamo al contructor
	public function __construct()	{
	  $this->load->database(); 
	}


public function get_torneo() {
 
    $query = $this->db->query("SELECT *  FROM torneo JOIN etapa USING (id_torneo)");
 
    return $query->row_array();
  
}





}
?>
