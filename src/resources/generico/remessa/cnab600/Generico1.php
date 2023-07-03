<?php

namespace CnabPHP\resources\generico\remessa\cnab600;

use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\Especie;
use Exception;

class Generico1 extends RegistroRemAbstract {
    protected function get_data_termino_contrato() {
        if (!$this->data['data_termino_contrato']) {
            $this->data['data_termino_contrato'] = $this->data['data_vencimento_divida'];
        }
        return $this->___get('data_termino_contrato');
    }
}
