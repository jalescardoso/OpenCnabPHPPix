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
    'codigo_registro'      =>    '0',
    'numero_inscricao'    =>    '41.263.541/0001-90',
    'data_geracao'    =>    '2023-05-16',
    'sequencia_registro' => 1,
    'numero_sequencial_arquivo' => 555,
    'telefone_instituicao' => "(62) 3956-5800",
    'nome_instituicao' => 'SOLIDY Moto Club PMC',
    'numero_sequencial_remessa' => 300,
    'codigo_envio' => 'E',
));
for ($i = 0; $i < 2; $i++) {
    $arquivo->inserirDetalhe(
        [
            'codigo_registro' => '1',
            "codigo_operacao" => "I",
            'data_vencimento_divida' => '2023-06-16',
            // 'data_termino_contrato' => '2023-07-16',
            'codigo_natureza_operacao' => 'DP', // duplicata
            'tipo_pessoa' => 'F',
            'tipo_doc' => '2',
            'numero_doc' => '03040904175',
        ],
    );
}
$remessa = $arquivo->getText();
// Grava o arquivo
file_put_contents(dir('./data/remessas/')->path . $arquivo->getFileName(), $remessa);
// echo $remessa;
// documentação serasa pefin https://drive.google.com/drive/folders/1pI1dCL_IixMOmJH1y4Z0MydzCLN7JBj7?usp=sharing