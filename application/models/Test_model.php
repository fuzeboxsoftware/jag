<?php
class Test_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function get_test_info() {
		$sql = $this->db->query("SELECT * FROM `test` LIMIT 1");
		return $sql->row();
	}
}
?>