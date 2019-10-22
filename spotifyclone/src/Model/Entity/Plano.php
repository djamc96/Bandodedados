<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plano Entity
 *
 * @property int $id
 * @property string $nome
 * @property float $preco
 * @property int|null $n_musicas_por_mes
 * @property \Cake\I18n\FrozenDate|null $validade_plano
 */
class Plano extends Entity
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
        'nome' => true,
        'preco' => true,
        'n_musicas_por_mes' => true,
        'validade_plano' => true
    ];
}
