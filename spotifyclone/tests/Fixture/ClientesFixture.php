<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientesFixture
 */
class ClientesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'validade_do_pagamento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'usuarios_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'formas_de_pagamento_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'planos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_clientes_usuarios1_idx' => ['type' => 'index', 'columns' => ['usuarios_id'], 'length' => []],
            'fk_clientes_formas_de_pagamento1_idx' => ['type' => 'index', 'columns' => ['formas_de_pagamento_id'], 'length' => []],
            'fk_clientes_planos1_idx' => ['type' => 'index', 'columns' => ['planos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'usuarios_id', 'formas_de_pagamento_id', 'planos_id'], 'length' => []],
            'fk_clientes_formas_de_pagamento1' => ['type' => 'foreign', 'columns' => ['formas_de_pagamento_id'], 'references' => ['formas_de_pagamentos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_clientes_planos1' => ['type' => 'foreign', 'columns' => ['planos_id'], 'references' => ['planos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_clientes_usuarios1' => ['type' => 'foreign', 'columns' => ['usuarios_id'], 'references' => ['usuarios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'validade_do_pagamento' => '2019-10-03',
                'usuarios_id' => 1,
                'formas_de_pagamento_id' => 1,
                'planos_id' => 1
            ],
        ];
        parent::init();
    }
}
