<?php

Class registerController Extends baseController {

    public function index() {
			
		if (isset($_POST['signup']))
		{
			$register = new signup();
			if ($register->addUser())
			{
				$this->registry->template->successSignup = true;
				$this->registry->template->show("register");
			}
			else
			{
				$this->registry->template->successSignup = false;
				$this->registry->template->show("register");
				
			} 
			
		}
		else
			$this->registry->template->show("register");
    }
	
	
	
}
