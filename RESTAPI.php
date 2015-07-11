<?php
	//REST API Helper class
	class RESTAPI {
		
		protected $messages;
		protected $errrors;
		protected $data;
		protected $success;
		
		public function __construct() {
			$this->messages = new stdClass();
			$this->data = new stdClass();
			$this->success false;
		}
		
		public function addMessage($element, $message) {
			$this->messages[$element] = $message;
		}
		
		public function addError($element, $message) {
			$this->errors[$element] = $message;
		}
		
		public function addData($element, $value) {
			$this->data[$element] = $value;
		}
		
		public function setSuccess($value) {
			$this->success = $value;
		}

		public function __toString(){
			header('Content-Type: application/json');
			echo json_encode($this);
		}
?>
