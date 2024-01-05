<?php

/*
 * CnabPHP - GeraÃ§Ã£o de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace CnabPHP\resources\B748\retorno\L400;

use CnabPHP\resources\generico\retorno\L400\Generico8;
use CnabPHP\RetornoAbstract;

class Registro8 extends Generico8 {

    public $trailler;
    protected $meta = array(
        'tipo_registro' => array( //identificacao do registro detalhe
            'tamanho' => 1,
            'default' => '8',
            'tipo' => 'int',
            'required' => true
        ),
        'nosso_numero_sicredi' => array( //Nosso numero SICREDI sem edição
            'tamanho' => 15,
            'default' => ' ',
            'tipo' => 'int',
            'required' => true
        ),
        'filler0' => array( //Filler
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'hibrido' => array( //hibrido - informacao sobre boleto com pix
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler01' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'txid' => array( //TXID - (codigo de identificacao do QR CODE)
            'tamanho' => 35,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler02' => array( //
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'pix_url' => array(
            'tamanho' => 77,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler03' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'copia_cola_qrcode' => array(
            'tamanho' => 256,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler04' => array( 
            'tamanho' => 4,
            'default' => ' ', 
            'tipo' => 'alfa',
            'required' => true
        ),
        'sequencia_registro' => array( // numero sequencial do registro
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        )
    );

    public function __construct($linhaTxt) {
        parent::__construct($linhaTxt);
    }

    /*
      metodo get_R3U
      metodo que espõe esse registro como se fosse o R3U da caixa
     */

    public function get_R3U() {
        return $this;
    }

    /*
      metodo get_vlr_liquido
      metodo que espõe esse vlr_liquido como se fosse o da caixa
     */

    public function get_vlr_liquido() {
        return $this->vlr_pago;
    }

}
