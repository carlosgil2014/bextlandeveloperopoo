<?php
//requeri solo una vez el archivo 
require_once('Model.php');
class StatusModel extends Model
{
	private $id_status;
	private $status;


	public function __construct()
	{
		$this->db_name = 'mexflitx';
	}

	public function create($status_id = ''){

		$this->query = "insert into status set `id_status` = 0, status = '$status_id'";
		$this->set_query();

	}
	public function read($id_status = ''){
		$this->query = ($id_status != '')
		?"select * from status where id_status = $id_status" 
		: "select * from status";
		
		$this->get_query();
		//var_dump($this->rows);
		
		//$num_rows = count($this->rows);
		$data = array();

		foreach ($this->rows as $key => $value) {
			//agrega una posicion en el utlmo elemento
			//array_push($data,$value);
			$data[$key] = $value;
		}
		//var_dump($data);
		return $data;
		//return $this->rows;
	}
	public function update($status_data = ''){
		foreach ($status_data as $key => $value) {
			// variable de variable
			//http://php.net/manual/es/language.variables.variable.php
			$$key = $value;
		}
		$this->query = " UPDATE `status` SET status = '$status' WHERE `id_status` = $id_status ";
		$this->set_query();
	}
	public function delete($status_id = ''){
		$this->query = " DELETE FROM `status`WHERE `id_status` = $status_id ";
		$this->set_query();
	}

	public function __destruct(){
		//unset($this);
	}

}
 ?>