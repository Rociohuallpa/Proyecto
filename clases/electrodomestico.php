<?php
abstract class electrodomestico {
    // Método abstracto
    abstract public function encender();

    // Método con implementación
    public function funcionar() {
        echo "El electrodomestico esta :\n";
    }
}

class Televisor extends electrodomestico {
    public function encender() {
        echo "El televisor esta encendido\n";
    }
}
class Lavadora extends electrodomestico {
    public function encender() {
        echo "La lavadora está en funcionamiento\n";
    }
}


?>