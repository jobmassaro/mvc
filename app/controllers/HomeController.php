<?php

namespace app\controllers;
use app\models\MySqlDatabase;

class HomeController
{
    
    protected $dbc;

    public function __construct()
    {
        $this->dbc = new MySqlDatabase(); 
    }

    public function home()
    {
        $arr[] = array();
        $db_array = parse_ini_file("sample.ini");
        $this->dbc->newConnection($db_array['dbhost'],$db_array['dbuser'],$db_array['dbpassword'],$db_array['dbname']);
        $this->dbc->executeQuery("SELECT * FROM accreditamento");
        while( $row = $this->dbc->getRows() )
        {
            $arr[] = $row;
        }
        echo json_encode($arr);
    }
}