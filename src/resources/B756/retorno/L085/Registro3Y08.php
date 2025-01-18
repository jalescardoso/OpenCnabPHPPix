<?php
/*
* CnabPHP - Geração de arquivos de remessa e retorno em PHP
*
* LICENSE: The MIT License (MIT)
*
* Copyright (C) 2018 NextStep <http://github.com/nxstep-si>
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
namespace CnabPHP\resources\B756\retorno\L085;
use CnabPHP\resources\generico\retorno\L040\Generico3;
//use CnabPHP\RetornoAbstract;
use CnabPHP\Exception;
use CnabPHP\RetornoAbstract;


class Registro3Y08 extends Generico3
{
	protected $meta = array(
		'codigo_banco' => array(          // Posição 1-3
			'tamanho' => 3,
			'default' => '756',
			'tipo' => 'int',
			'required' => true
		),
		'codigo_lote' => array(           // Posição 4-7
			'tamanho' => 4,
			'default' => 1,
			'tipo' => 'int',
			'required' => true
		),
		'tipo_registro' => array(         // Posição 8
			'tamanho' => 1,
			'default' => '3',
			'tipo' => 'int',
			'required' => true
		),
		'numero_registro' => array(       // Posição 9-13
			'tamanho' => 5,
			'default' => '0',
			'tipo' => 'int',
			'required' => true
		),
		'seguimento' => array(            // Posição 14
			'tamanho' => 1,
			'default' => 'U',
			'tipo' => 'alfa',
			'required' => true
		),
		'zero' => array(
			'tamanho' => 1
		),
		'codigo_movimento' => array(      // Posição 16-17
			'tamanho' => 2,
			'default' => '',
			'tipo' => 'int',
			'required' => true
		),
		'cod_registro' => array(          // Posição 18-19
			'tamanho' => 2,
			'default' => '01',
			'tipo' => 'int',
			'required' => true
		),
		'zeros1' => array(                // Posição 20-20
			'tamanho' => 62,
			'default' => '0',
			'tipo' => 'int',
			'required' => true
		),
		'pix_url' => array(               // Posição 40-116
			'tamanho' => 73,
			'default' => '',
			'tipo' => 'alfa',
			'required' => true
		),
		'txid' => array(                  // Posição 117-151
			'tamanho' => 31,
			'default' => '',
			'tipo' => 'alfa',
			'required' => true
		)
	);

}

?>