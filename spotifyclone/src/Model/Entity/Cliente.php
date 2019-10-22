<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $validade_do_pagamento
 * @property int $usuarios_id
 * @property int $formas_de_pagamento_id
 * @property int $planos_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\FormasDePagamento $formas_de_pagamento
 * @property \App\Model\Entity\Plano $plano
 */
class Cliente extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'validade_do_pagamento' => true,
        'usuario' => true,
        'formas_de_pagamento' => true,
        'plano' => true
    ];
}
