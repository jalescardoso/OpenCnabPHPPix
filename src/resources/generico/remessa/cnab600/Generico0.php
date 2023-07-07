<?php

namespace CnabPHP\resources\generico\remessa\cnab600;

use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use Exception;

class Generico0 extends RegistroRemAbstract {
    protected $counter = 1;
    public function get_counter() {
        $this->counter++;
        return $this->counter;
    }
    public function inserirDetalhe($data) {
        $data = $this->recycleData($data);
        $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro1';
        $this->children[] = new $class($data);
    }
    protected function set_numero_inscricao($value) {
        $numero_inscricao = explode('/', $value)[0];
        $this->data['numero_inscricao'] = str_ireplace(array('.', '/', '-'), array(''), $numero_inscricao);
    }
    protected function set_telefone_instituicao($value) {
        $telefone_instituicao = preg_replace("/[^0-9]/", "", $value);
        $this->data['ddd_instituicao'] = substr($telefone_instituicao, 0, 2);
        $this->data['telefone_instituicao'] = substr($telefone_instituicao, 2);
    }
    protected function recycleData($data) {
        $data['filial_digito'] = preg_replace("/[^0-9]/", "",explode('/', $this->entryData["numero_inscricao"])[1]);
        $data['sequencial_registro'] = $this->get_counter();
        return $data;
    }
}
