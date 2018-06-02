<?php

class SignUp
{
	var $uname;
	var $pwd;
	var $database;
	var $tablename;
	
	
	function InitDB($host,$uname,$pwd,$database,$tablename,$tablename1)
    {
        $this->db_host  = 'mysql.hostinger.in';
        $this->username = 'u839439463_queb';
        $this->pwd  = 'sayan123';
        $this->database  = 'u839439463_queb';
        $this->tablename = 'registration';
        $this->tablename1 = 'login';
        
    }
}