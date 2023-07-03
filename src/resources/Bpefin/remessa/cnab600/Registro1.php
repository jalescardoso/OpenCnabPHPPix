<?php

namespace CnabPHP\resources\Bpefin\remessa\cnab600;

use CnabPHP\resources\generico\remessa\cnab600\Generico1;
use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;

class Registro1 extends Generico1 {
    protected $meta = [
        "codigo_registro" => [
            "sequencia" => 1,
            "inicio" => 1,
            "tamanho" => 1,
            "descricao" => "Código do registro = ‘1’ – detalhes (1)(2)",
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ],
        "codigo_operacao" => [
            "sequencia" => 2,
            "inicio" => 2,
            "tamanho" => 1,
            "descricao" => "Código da Operação I – inclusão E – exclusão (1)(2)",
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        "filial_digito" => [
            "sequencia" => 3,
            "inicio" => 3,
            "tamanho" => 6,
            "descricao" => "Filial e dígito do CNPJ da contratante (1)",
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ],
        "data_vencimento_divida" => [
            "sequencia" => 4,
            "inicio" => 9,
            "tamanho" => 8,
            "descricao" => "Data da ocorrência (AAAAMMDD) – data do vencimento da dívida, não superior a 4 anos e 11 meses (1)  ",
            'default' => '',
            'tipo' => 'dateReverse',
            'required' => true
        ],
        "data_termino_contrato" => [
            "sequencia" => 5,
            "inicio" => 17,
            "tamanho" => 8,
            "descricao" => "Data do término do contrato – formato “AAAAMMDD” . Caso não possua , repetir a data da ocorrência  (vide observação 1 para natureza  “DC”) (1)",
            'default' => '',
            'tipo' => 'dateReverse',
            'required' => true
        ],
        "codigo_natureza_operacao" => [
            "sequencia" => 6,
            "inicio" => 25,
            "tamanho" => 3,
            "descricao" => "Código de natureza da operação (1)",
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        "codigo_praca_embratel" => [
            "sequencia" => 7,
            "inicio" => 28,
            "tamanho" => 4,
            "descricao" => "Código da praça Embratel (que originou a dívida )",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        "tipo_pessoa" => [
            "sequencia" => 8,
            "inicio" => 32,
            "tamanho" => 1,
            "descricao" => "Tipo de pessoa do principal: F – Física ou J – Jurídica (3)(4)(5)",
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ],
        "tipo_doc" => [
            "sequencia" => 9,
            "inicio" => 33,
            "tamanho" => 1,
            "descricao" => "Tipo do primeiro docto. do principal: 1 – CNPJ ou 2 – CPF (3)(4)(5) ",
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        "numero_doc" => [
            "sequencia" => 10,
            "inicio" => 34,
            "tamanho" => 15,
            "descricao" => "Primeiro documento do principal: CPF completo base + dígito ou CNPJ completo base + filial + dígito Ajustado à direita e preenchido com zeros à esquerda (2)(3)(4)(5) ",
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ],
        "motivo_baixa" => [
            "sequencia" => 11,
            "inicio" => 49,
            "tamanho" => 2,
            "descricao" => "Motivo da baixa (2)(5)",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        "tipo_segundo_doc" => [
            "sequencia" => 12,
            "inicio" => 51,
            "tamanho" => 1,
            "descricao" => "Tipo do segundo documento do principal: 3 – RG, se houver. Se não, espaços (só para pessoa física).",
            'default' => '',
            'tipo' => 'int2',
            'required' => false
        ],
        "numero_segundo_doc" => [
            "sequencia" => 13,
            "inicio" => 52,
            "tamanho" => 15,
            "descricao" => "Segundo documento do principal, se houver, se não, espaços.",
            'default' => '',
            'tipo' => 'int',
            'required' => false
        ],
        "segundo_doc_uf" => [
            "sequencia" => 14,
            "inicio" => 67,
            "tamanho" => 2,
            "descricao" => "UF quando documento for RG, se não, espaços.",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        "tipo_pessoa_coobrigado" => [
            "sequencia" => 15,
            "inicio" => 69,
            "tamanho" => 1,
            "descricao" => "Tipo de pessoa do coobrigado: F – Física J – Jurídica (4)(6) ",
            'default' => '',
            'tipo' => 'alfa',
            'required' => false
        ],
        "tipo_doc_coobrigado" => [
            "sequencia" => 16,
            "inicio" => 70,
            "tamanho" => 1,
            "descricao" => "Tipo do primeiro documento do coobrigado: 1 – CNPJ 2 – CPF (4)(6)",
            'default' => '',
            'tipo' => 'int',
            'required' => false
        ],
        "numero_doc_coobrigado" => [
            "sequencia" => 17,
            "inicio" => 71,
            "tamanho" => 15,
            "descricao" => "Primeiro documento do coobrigado: CPF completo - base + dígito ou CNPJ completo - base + filial + dígito Ajustado à direita e preenchido com zeros à esquerda. (4)(6)",
            'default' => '',
            'tipo' => 'int',
            'required' => false
        ],
            // "PROP" => [
            //     "sequencia" => 18,
            //     "inicio" => 86,
            //     "tamanho" => 2,
            //     "descricao" => "Espaços",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 19,
            //     "inicio" => 88,
            //     "tamanho" => 1,
            //     "descricao" => "Tipo do segundo documento do coobrigado: 3 – RG, se houver, se não, espaços ( só para pessoa física )",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 20,
            //     "inicio" => 89,
            //     "tamanho" => 15,
            //     "descricao" => "Segundo documento do coobrigado, se houver, se não, espaços.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 21,
            //     "inicio" => 104,
            //     "tamanho" => 2,
            //     "descricao" => "Unidade da Federação, quando documento for RG, se não, espaços.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 22,
            //     "inicio" => 106,
            //     "tamanho" => 70,
            //     "descricao" => "Nome do devedor (1)(4)(6)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 23,
            //     "inicio" => 176,
            //     "tamanho" => 8,
            //     "descricao" => "A data do nascimento (AAAAMMDD) deve ser superior a 18 anos  ( só para pessoa física ). Se não, colocar 00000000.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 24,
            //     "inicio" => 184,
            //     "tamanho" => 70,
            //     "descricao" => "Nome do pai. Caso não possua, brancos.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 25,
            //     "inicio" => 254,
            //     "tamanho" => 70,
            //     "descricao" => "Nome da mãe. Caso não possua, brancos.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 26,
            //     "inicio" => 324,
            //     "tamanho" => 45,
            //     "descricao" => "Endereço completo (rua, Av., nº etc.) (1)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 27,
            //     "inicio" => 369,
            //     "tamanho" => 20,
            //     "descricao" => "Bairro correspondente (1)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 28,
            //     "inicio" => 389,
            //     "tamanho" => 25,
            //     "descricao" => "Município correspondente (1)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 29,
            //     "inicio" => 414,
            //     "tamanho" => 2,
            //     "descricao" => "Sigla Unidade Federativa (1)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 30,
            //     "inicio" => 416,
            //     "tamanho" => 8,
            //     "descricao" => "Código de endereçamento postal completo (1)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 31,
            //     "inicio" => 424,
            //     "tamanho" => 15,
            //     "descricao" => "Valor com 2 decimais, alinhar a direita com zeros a esquerda (1)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 32,
            //     "inicio" => 439,
            //     "tamanho" => 16,
            //     "descricao" => "O número do contrato deve ser único para o principal e seus coobrigados (Vide observação 2 para natureza “DC” e observação 4 ) (1)(2)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 33,
            //     "inicio" => 455,
            //     "tamanho" => 9,
            //     "descricao" => "Nosso número (Vide observação 3 para natureza “DC”)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 34,
            //     "inicio" => 464,
            //     "tamanho" => 25,
            //     "descricao" => "Complemento do endereço do devedor – usar somente quando o campo de seq. Nr. 26 (endereço completo) não for suficiente.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 35,
            //     "inicio" => 489,
            //     "tamanho" => 4,
            //     "descricao" => "DDD do telefone do devedor.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 36,
            //     "inicio" => 493,
            //     "tamanho" => 493,
            //     "descricao" => "Número do telefone do devedor.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 37,
            //     "inicio" => 502,
            //     "tamanho" => 8,
            //     "descricao" => "Data do compromisso assumido pelo devedor  - formato AAAAMMDD.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 38,
            //     "inicio" => 510,
            //     "tamanho" => 15,
            //     "descricao" => "Valor total do compromisso assumido pelo devedor, com 2 decimais, sem ponto e virgula.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 39,
            //     "inicio" => 525,
            //     "tamanho" => 1,
            //     "descricao" => "Indicativo de envio do registro de dados complementares (tipo 5) ‘S’ - indica que foi informado o registro tipo 5 obs: deixar em branco caso não utilize o registro 5 ",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 40,
            //     "inicio" => 526,
            //     "tamanho" => 5,
            //     "descricao" => "Deixar em branco",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 41,
            //     "inicio" => 531,
            //     "tamanho" => 1,
            //     "descricao" => "Indicativo do Tipo de Comunicado ao Devedor: Branco - FAC ‘B’ - Comunicado com Boleto Bancário (Obs: 5) ‘C’ - Comunicado com Pgto de Contas Públicas (Obs: 6)",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 42,
            //     "inicio" => 532,
            //     "tamanho" => 2,
            //     "descricao" => "Deixar em branco",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 43,
            //     "inicio" => 534,
            //     "tamanho" => 60,
            //     "descricao" => "Códigos de erros – 3 posições ocorrendo 20 vezes. Ausência de códigos indica que o registro foi aceito no movto de retorno. Na entrada, preencher com brancos.",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
            // "PROP" => [
            //     "sequencia" => 44,
            //     "inicio" => 594,
            //     "tamanho" => 7,
            //     "descricao" => "Seqüência do registro no arquivo",
            //     'default' => '0',
            //     'tipo' => 'int',
            //     'required' => true
            // ],
    ];


    // protected function set_nosso_numero_dv($value) {
    //     $result = self::mod11($this->data['nosso_numero']);
    //     $this->data['nosso_numero_dv'] = $result['digito'];
    // }


}
