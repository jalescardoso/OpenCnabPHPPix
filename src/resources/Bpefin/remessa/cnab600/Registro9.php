<?php

namespace CnabPHP\resources\Bpefin\remessa\cnab600;

use CnabPHP\resources\generico\remessa\cnab600\Generico9;
use CnabPHP\RemessaAbstract;

class Registro9 extends Generico9 {
    protected $meta = [
        'codigo_registro' => [
            "sequencia" => 1,
            "inicio" => 1,
            "tamanho" => 1,
            "descricao" => "Código do registro = '9' (nove) (1) ",
            'default' => 9,
            'tipo' => 'int',
            'required' => false
        ],
        'vazio' => [
            "sequencia" => 2,
            "inicio" => 2,
            "tamanho" => 592,
            "descricao" => "Deixar em branco",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        'sequencia_registro' => [
            "sequencia" => 3,
            "inicio" => 594,
            "tamanho" => 7,
            "descricao" => "Seqüência do registro no arquivo. (1) ",
            'default' => 9,
            'tipo' => 'int',
            'required' => true
        ]
    ];
    // protected function set_mensagem_1($value) {
    //     $this->data['mensagem_1'] = isset(RemessaAbstract::$entryData['mensagem_1']) ? RemessaAbstract::$entryData['mensagem_1'] : '';
    // }
   
}
