<?php
class UsuariosModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuarios()  {
        $sql = "SELECT id, nombre, apellido, correo, telefono, clave, rol, perfil, fecha FROM usuarios WHERE estado = 1";
        return $this->selectAll($sql);
    }

    public function getVerificar($item, $nombre, $id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM usuarios WHERE $item = '$nombre' AND id != $id AND estado = 1";
        } else {
            $sql = "SELECT id FROM usuarios WHERE $item = '$nombre' AND estado = 1";
        }
        
        return $this->select($sql);
    }

    public function registrar($nombre, $apellido, $correo, $telefono, $clave, $rol)
    {
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono, clave, rol) VALUES (?,?,?,?,?,?)";
        $datos = array($nombre, $apellido, $correo, $telefono, $clave, $rol);
        return $this->insertar($sql, $datos);
    }

    public function delete($id) 
    {
        $sql = "UPDATE usuarios SET estado = ? WHERE id = ?";
        $datos = array(0, $id);
        return $this->save($sql, $datos);
    }

    public function getUsuario($id) 
    {
        $sql = "SELECT id, nombre, apellido, correo, telefono, clave, rol, perfil, fecha FROM usuarios WHERE id = $id ";
        return $this->select($sql);
    }

    public function modificar($nombre, $apellido, $correo, $telefono, $rol, $id)
    {
        $sql = "UPDATE usuarios SET nombre=?, apellido=?, correo=?, telefono=?, rol=? WHERE id=?";
        $datos = array($nombre, $apellido, $correo, $telefono, $rol, $id);
        return $this->save($sql, $datos);
    }


    // Ver total archivos compartidos
    public function verificarEstado($correo)
    {
        $sql = "SELECT count(id) AS total FROM detalle_archivos WHERE correo = '$correo' AND estado = 1";
        return $this->select($sql);
    }

    public function cambiarPass($clave, $id)
    {
        $sql = "UPDATE usuarios SET clave=? WHERE id=?";
        $datos = array($clave, $id);
        return $this->save($sql, $datos);
    }
}

?>