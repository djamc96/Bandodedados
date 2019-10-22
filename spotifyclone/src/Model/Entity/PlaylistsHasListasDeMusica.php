<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlaylistsHasListasDeMusica Entity
 *
 * @property int $playlists_idplaylists
 * @property int $listas_de_musicas_musicas_id
 * @property int $listas_de_musicas_artistas_id
 *
 * @property \App\Model\Entity\ListasDeMusica $listas_de_musica
 */
class PlaylistsHasListasDeMusica extends Entity
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
        'listas_de_musica' => true
    ];
}
