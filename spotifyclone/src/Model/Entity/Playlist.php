<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Playlist Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $n_musicas
 * @property int $publica_privada
 * @property \Cake\I18n\FrozenTime $duracao
 * @property int $usuarios_id_usuario
 */
class Playlist extends Entity
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
        'n_musicas' => true,
        'publica_privada' => true,
        'duracao' => true,
        'usuarios_id_usuario' => true
    ];
}
