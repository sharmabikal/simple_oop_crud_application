<?php
/**
 * Created by PhpStorm.
 * User: bikal
 * Date: 12/4/19
 * Time: 9:53 AM
 */

class DbConfig{

    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = 'root';
    private $_database = 'crud_app';

    protected $connection;

    public function __construct(){

        if(!isset($this->connection)){

            $this->connection = new mysqli($this->_host,$this->_username,$this->_password,$this->_database);

            if(!$this->connection){
                echo 'Cannot connect to the database server';
                exit;
            }
        }

        return $this->connection;

    }
}

?>

