<?php
Class DBConnection
{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $DBName="project";
    private $database_connection;
    private static $instance;
    
    
    private function construct()
    {
        $this->database_connection = $this->database_connect($this->host, $this->host,$this->username,$this->password,$this->DBName);
    }
    public static function getInstance()
    {
        if(self::$instance==null)
        {
            self::$instance=new DBConnection();
        }
        return self::$instance;
    }
    private function database_connect($database_host,$database_username,$database_password,$database_name)
    {
        if($connection = mysqli_connect($database_host,$database_username,$database_password,$database_name))
        {
            echo("success");
            return $connection;
        }
        else
        {
            die("Connection Error");
        }
    }
    
    return $connection;
        
}