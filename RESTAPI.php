<?php
	//REST API Helper class
	class RESTAPI {
		
		protected $restObject;
		
		public function __construct() {
			$this->restObject = new stdClass();
			$this->restObject->errors = new stdClass();
			$this->restObject->messages = new stdClass();
			$this->restObject->data = new stdClass();
			$this->restObject->success false;
		}
		
		public function addMessage($element, $message) {
			$this->restObject->messages[$element] = $message;
		}
		
		public function addError($element, $message) {
			$this->restObject->errors[$element] = $message;
		}
		
		public function addData($element, $value) {
			$this->restObject->data[$element] = $value;
		}
		
		public function setStatuc($status) {
			$this->restObject->success = $status;
		}
		
		public function getObject() {
			return $this->restObject;
		}
		
		public function __toString(){
			header('Content-Type: application/json');
			echo json_encode($this->restObject);
		}
?>
