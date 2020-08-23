<?php

class Empresa{
    protected $nombre;
    protected $email;
    protected $password;
    protected $carpetas;

    public function __construct($nombre,$email,$password,$carpetas){
        $this->nombre=$nombre;
        $this->email=$email;
        $this->password=$password;
        $this->carpetas = $carpetas;
    }


    

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function guardarEmpresa(){
        $contenidoArchivoEmpresa=file_get_contents("../../data/empresas.json");
        $empresas= json_decode($contenidoArchivoEmpresa,true);
        $empresas[]=array(
            "nombre"=>$this->nombre,
            "email"=>$this->email,
            "password"=>sha1($this->password),
            "carpetas"=>$this->carpetas
        );
            $archivo=fopen("../../data/empresas.json","w");
            fwrite($archivo, json_encode($empresas));
            fclose($archivo);
    }

    public function verificarEmpresa($email, $password){
        $contenidoArchivoUsuarios=file_get_contents("../../data/empresas.json");
            $usuarios=json_decode($contenidoArchivoUsuarios,true); 
            for($i=0;$i<sizeof($usuarios);$i++){
                  if ($usuarios[$i]["email"]==$email && $usuarios[$i]["password"]==sha1($password)){
                        return $usuarios[$i];
                  }
            } 
            return null; 
    }

}


?>