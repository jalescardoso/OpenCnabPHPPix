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
    protected function get_numero_contrato() {
        if (!$this->data['numero_contrato']) {
            $this->data['numero_contrato'] = $this->___get('nosso_numero');
        }
        return $this->___get('numero_contrato');
    }
    protected function set_telefone_devedor($value) {
        $telefone_devedor = preg_replace("/[^0-9]/", "", $value);
        $this->data['ddd_telefone_devedor'] = substr($telefone_devedor, 0, 2);
        $this->data['telefone_devedor'] = substr($telefone_devedor, 2);
    }
    protected function get_sequencial() {
        if (!$this->data['data_termino_contrato']) {
            $this->data['data_termino_contrato'] = $this->data['data_vencimento_divida'];
        }
        return $this->___get('data_termino_contrato');
    }
}
