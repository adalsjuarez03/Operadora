<?php
class Conexion extends PDO {
    private $hostBD = 'sql212.infinityfree.com';
    private $nombreBD = 'if0_37745370_operadora';
    private $usuarioBD = 'if0_37745370';
    private $passwordBD = 'bVJfZ0MDvIXJYR';

    public function __construct() {
        try {
            parent::__construct(
                'mysql:host=' . $this->hostBD . ';dbname=' . $this->nombreBD . ';charset=utf8',
                $this->usuarioBD,
                $this->passwordBD,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (Exception $e) {
            exit("Error de conexión: " . $e->getMessage());
        }
    }

    // Método estático para obtener la conexión
    public static function conectar() {
        return new self();
    }
}
?>
