<?php
/**
 * Created by PhpStorm.
 * User: dee
 * Date: 2019-05-16
 * Time: 19:43
 */
class DB {
	public $host = 'localhost';
	public $username = 'root';
	public $dbname = 'name';
	public $password = '';
	public $conn;

	public function connection()
	{
		$this->conn;
		try {
			
			$this->conn = new PDO('host:mysql');

		} catch (PDOException $e) {
			
		}
	}
}