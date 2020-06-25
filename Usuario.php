<?php
class Usuario{
    public $usuario;
    public $contrasena;
    public $email;
    public $usuarios = array(
        "Mperez",
        "ASolis",
        "MPaz",
        "AIniesta",
        "JMayor"
    );

    public function login(): bool{
        return true;
    }

    public function logout(): void{
        echo "Saliste del sistema";
    }

    public function traerDatosUsuarios(): array {
        return $this->usuarios;
    }

    public function guardarUsuario($usuario){
        $this->usuarios[] = $usuario;
    }

}