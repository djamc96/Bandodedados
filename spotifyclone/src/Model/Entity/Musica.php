<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Musica Entity
 *
 * @property int $id
 * @property string $nome_musica
 * @property string $genero
 * @property \Cake\I18n\FrozenTime $duracao
 * @property string|null $link
 * @property int $artistas_id
 *
 * @property \App\Model\Entity\Artista $artista
 */
class Musica extends Entity
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
        'nome_musica' => true,
        'genero' => true,
        'duracao' => true,
        'link' => true,
        'artista' => true
    ];
}
