<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artista Entity
 *
 * @property int $id
 * @property string $nome_artista
 * @property string|null $pais
 * @property int $gravadoras_id
 *
 * @property \App\Model\Entity\Gravadora $gravadora
 */
class Artista extends Entity
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
        'nome_artista' => true,
        'pais' => true,
        'gravadora' => true
    ];
}
