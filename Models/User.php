<?php

class User{

    protected $id;
    protected $nombre_usuario;
    protected $contrasena;
    protected $nombre_apellidos;
    protected $email;

    public function GuardarUsuario(){
        include_once '../Config/Conexion.php';
        $conexion= new Conexion();
        $sql="INSERT INTO usuarios(nombre_usuario,nombre_apellidos,email,contrasena) VALUES (?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombre_usuario);
        $insertar->bindParam(2,$this->nombre_apellidos);
        $insertar->bindParam(3,$this->email);
        $insertar->bindParam(4,$this->contrasena);
        $insertar->execute();
    }
       
    

    public function ConsultarUsuarioEnBD()
    {
        include_once '../Config/Conexion.php';
        $conexion=new Conexion();
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$this->nombre_usuario'";
        $usuario= $conexion->stm->prepare($sql);
        $usuario->execute();
        $usuarioobjeto=$usuario->fetchAll(PDO::FETCH_OBJ);
        return $usuarioobjeto;
    }

    protected $id_a;
    protected $Nombre_Apellidos;
    protected $Identificacion;
    protected $Matricula;
    protected $Centro;
    protected $Numero_Parqueadero;
    protected $Fecha_ingreso;
    protected $Fecha_salida;

    public function GuardarConductor()
    {
        include_once '../Config/Conexion.php';
        $conexion= new Conexion();
        $sql="INSERT INTO infoauto(Nombre_Apellidos, Identificacion,Matricula,Centro,Numero_Parqueadero) VALUES (?,?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->Nombre_Apellidos);
        $insertar->bindParam(2,$this->Identificacion);
        $insertar->bindParam(3,$this->Matricula);
        $insertar->bindParam(4,$this->Centro);
        $insertar->bindParam(5,$this->Numero_Parqueadero);
        $insertar->execute();

    }
    public function NuevaContrasena(){
        $id = $_POST['id'];
        include_once '../Config/Conexion.php';
        $conexion= new Conexion();
        $sql="UPDATE usuarios SET contrasena=? WHERE id=$id";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->contrasena);
        
        
        
        $insertar->execute();
    }


}
?>