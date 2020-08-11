<?php

class Usuario{
      private $carpetas;
      private $email;
      private $password;
      
    public function __construct($email,$password,$carpetas){
        
        $this->email=$email;
        $this->password=$password;
        $this->carpetas=$carpetas;

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

      public function guardarUsuario(){
            $contenidoArchivoUsuarios=file_get_contents("../../data/usuarios.json");
            $usuarios=json_decode($contenidoArchivoUsuarios,true); 
            $usuarios[]=array(
                  "email"=>$this->email,
                  "password"=>sha1($this->password),
                  "carpetas"=>$this->carpetas
            );
            $archivo=fopen("../../data/usuarios.json","w");
            fwrite($archivo, json_encode($usuarios));
            fclose($archivo);
      }
      
      public static function verificarUsuarios($email,$password){
            $contenidoArchivoUsuarios=file_get_contents("../../data/usuarios.json");
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