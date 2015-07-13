<?php //REST API Helper class
	class RESTObject {
		
		protected $messages;
		protected $errrors;
		protected $data;
		protected $success;
		
		public function __construct() {
			$this->messages = new stdClass();
			$this->errrors = new stdClass();
			$this->data = new stdClass();
			$this->success = false;
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
		
		public function setData($values) {
			unset($this->data);
			$this->data = $values;
		}
		
		public function setSuccess($value) {
			$this->success = $value;
		}

		public function __toString() {
			header('Content-Type: application/json');
			echo json_encode($this);
		}
?>
