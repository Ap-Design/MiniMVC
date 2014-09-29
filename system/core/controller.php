<?php require(PROTECT);
	
	class Controller {
		function controller() {
			$this->userdata = unserialize(USERDATA);
			$this->db = unserialize(DATABASE_OBJECT);
		}
	}
	