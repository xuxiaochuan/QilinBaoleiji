<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class rdpinput extends base {

	function __construct($data = NULL) {
		parent::__construct();
		if($data == NULL) {
			$this->data = array (
				'cid' => 0,
				'sid' => 0,
				'at' => '0000-00-00 00:00:00', 
				'cmd' => '',
			);
		}
		else {
			$this->data = $data;
		}
	}


	function set_data($data_index, $data_data) {
		$flag = true;

		if($flag) {
			$this->data[$data_index] = $data_data;
			$this->flag[$data_index] = true;
			return true;
		}
		else {
			return false;
		}
	}

}

?>