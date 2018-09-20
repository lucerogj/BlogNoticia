<?php
class User
{
	private $pdo;
    
    public $id;
    public $user;
    public $pass;
    public $nombre;
    public $mail;
    public $perfil;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	
	
}