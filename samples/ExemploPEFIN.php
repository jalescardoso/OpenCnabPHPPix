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

namespace CnabPHP\samples;

require_once("../vendor/autoload.php");

use \CnabPHP\Remessa;

$arquivo = new Remessa('pefin', 'cnab600', array(
    'codigo_registro'              => '0',
    'numero_inscricao'             => '01.926.988/0001-87',
    'data_geracao'                 => '2023-05-16',
    'numero_sequencial_arquivo'    => 555,
    'telefone_instituicao'         => "(62) 3333-3333",
    'nome_instituicao'             => 'empresa ficticia ltda',
    'numero_sequencial_remessa'    => 300,
    'codigo_envio'                 => 'E',
));
$arquivo->inserirDetalhe(
    [
        'codigo_registro'            => '1',
        "codigo_operacao"            => "I",
        'data_vencimento_divida'     => '2023-06-16',
        'data_termino_contrato'      => '2023-07-16', // se vazio será preenchido pelo vencimento da divida
        'codigo_natureza_operacao'   => 'DP', // duplicata
        'tipo_pessoa'                => 'F',
        'tipo_doc'                   => '2',
        'numero_doc'                 => '890.433.750-04',
        'nome_devedor'               => "fulanos cardoso dias campos",
        'data_nascimento'            => '1991-05-16',
        'nome_pai'                   => 'fulanos dias campos',
        'nome_mae'                   => 'fulana lucia cardoso',
        "endereco"                   => "Avenida Bela Vista Quadra 01 - Lote 09",
        "bairro"                     => "Vila Santo Antonio - Conjunto Liberdade",
        "municipio"                  => "Aparecida de Goiânia",
        'uf'                         => "GO",
        'cep'                        => '74911690',
        'valor'                      => 352.99,
        'numero_contrato'            => '1001993', // se vazio será preenchido com nosso numero
        'nosso_numero'               => '1001993',
        'telefone_devedor'           => "(62) 98553-4041",
    ],
);

$remessa = $arquivo->getText();
// Grava o arquivo
file_put_contents(dir('./data/remessas/')->path . $arquivo->getFileName(), $remessa);
// echo $remessa;
// documentação serasa pefin https://drive.google.com/drive/folders/1pI1dCL_IixMOmJH1y4Z0MydzCLN7JBj7?usp=sharing