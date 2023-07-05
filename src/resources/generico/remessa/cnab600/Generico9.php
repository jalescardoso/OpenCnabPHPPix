<?php

namespace CnabPHP\resources\generico\remessa\cnab600;

use CnabPHP\RegistroRemAbstract;
use cnabPHP\RemessaAbstract;
use Exception;

class Generico9 extends RegistroRemAbstract {

    protected function get_sequencial_registro() {
        $lote  = RemessaAbstract::getLote(0);
        $this->data['sequencial_registro'] = $lote->get_counter();
        return $this->___get('sequencial_registro');
    }
}
