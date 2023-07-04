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

namespace CnabPHP\resources\Bpefin\remessa\cnab600;

use CnabPHP\resources\generico\remessa\cnab600\Generico0;

class Registro0 extends Generico0 {

    protected $meta = [
        "codigo_registro" => [
            "sequencia" => 1,
            "inicio" => 1,
            "tamanho" => 1,
            "descricao" => "Código do registro = '1' - detalhes (1)(2)",
            'default' => '0',
            'tipo' => 'int',
            'required' => false
        ],
        "numero_inscricao" => [
            "sequencia" => 2,
            "inicio" => 2,
            "tamanho" => 9,
            "descricao" => "Número do CNPJ da instituição informante ajustado à direita e preenchido com zeros à esquerda",
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        "data_geracao" => [
            "sequencia" => 3,
            "inicio" => 11,
            "tamanho" => 8,
            "descricao" => "Data do movimento (AAAAMMDD) - data de geração do arquivo (1)",
            'default' => '',
            'tipo' => 'dateReverse',
            'required' => true
        ],
        "ddd_instituicao" => [
            "sequencia" => 4,
            "inicio" => 19,
            "tamanho" => 4,
            "descricao" => "Número de DDD do telefone de contato da instituição informante (1)",
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        "telefone_instituicao" => [
            "sequencia" => 5,
            "inicio" => 23,
            "tamanho" => 8,
            "descricao" => "Número do telefone de contato da instituição informante (1) ",
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        "numero_ramal" => [
            "sequencia" => 6,
            "inicio" => 31,
            "tamanho" => 4,
            "descricao" => "Número de ramal do telefone de contato da instituição informante (1)",
            'default' => '0',
            'tipo' => 'int',
            'required' => false
        ],
        "nome_instituicao" => [
            "sequencia" => 7,
            "inicio" => 35,
            "tamanho" => 70,
            "descricao" => "Nome do contato da instituição informante (1)",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        "identificacao_arquivo" => [
            "sequencia" => 8,
            "inicio" => 105,
            "tamanho" => 15,
            "descricao" => "Identificação do arquivo fixo “SERASA-CONVEM04” (1)",
            'default' => 'SERASA-CONVEM04',
            'tipo' => 'alfa',
            'required' => false
        ],
        "numero_sequencial_remessa" => [
            "sequencia" => 9,
            "inicio" => 120,
            "tamanho" => 6,
            "descricao" => "Número da remessa do arquivo seqüencial do 000001, incrementando de 1 a cada novo movimento (1) ",
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        "codigo_envio" => [
            "sequencia" => 10,
            "inicio" => 126,
            "tamanho" => 1,
            "descricao" => "Código de envio de arquivo: (1) “E” - Entrada “R” - Retorno ",
            'default' => 'E',
            'tipo' => 'alfa',
            'required' => true
        ],
        "diferencial_remessa" => [
            "sequencia" => 11,
            "inicio" => 127,
            "tamanho" => 4,
            "descricao" => "Diferencial de remessa, caso a instituição informante tenha necessidade de enviar mais de uma remessa independentes por deptos., no mesmo dia, de 0000 à 9999. Caso contrário, em branco.",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        "deixar_vazio" => [
            "sequencia" => 12,
            "inicio" => 131,
            "tamanho" => 463,
            "descricao" => "Deixar em branco ",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        "sequencia_registro" => [
            "sequencia" => 13,
            "inicio" => 594,
            "tamanho" => 7,
            "descricao" => "Sequencia do registro no arquivo igual a 0000001 para o header",
            'default' => '1',
            'tipo' => 'int',
            'required' => false
        ],
    ];
}
