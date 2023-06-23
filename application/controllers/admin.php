<?php
class admin extends MY_controller
{
public function index()
 {
 $this=>load->library('form_validation');
 $this=>form_validation->set_rules('uname','User Name','required|alpha');
 $this=>form_validation->set_rules('pass','Password','required|max length[12]';
 $this=>form_validation->set_error_delimiters('<div class = "text-danger">','</div>');

 if ($this-> form_validation->run())
 {
 	echo "Validation successful";
 }
 else
 {
 	$this->load->view('Admin/Login');
 }
 }

}

?>	