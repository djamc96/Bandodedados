<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MusicasHasPlaylists Controller
 *
 * @property \App\Model\Table\MusicasHasPlaylistsTable $MusicasHasPlaylists
 *
 * @method \App\Model\Entity\MusicasHasPlaylist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MusicasHasPlaylistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Musicas', 'Playlists']
        ];
        $musicasHasPlaylists = $this->paginate($this->MusicasHasPlaylists);

        $this->set(compact('musicasHasPlaylists'));
    }

    /**
     * View method
     *
     * @param string|null $id Musicas Has Playlist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $musicasHasPlaylist = $this->MusicasHasPlaylists->get($id, [
            'contain' => ['Musicas', 'Playlists']
        ]);

        $this->set('musicasHasPlaylist', $musicasHasPlaylist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $musicasHasPlaylist = $this->MusicasHasPlaylists->newEntity();
        if ($this->request->is('post')) {
            $musicasHasPlaylist = $this->MusicasHasPlaylists->patchEntity($musicasHasPlaylist, $this->request->getData());
            if ($this->MusicasHasPlaylists->save($musicasHasPlaylist)) {
                $this->Flash->success(__('The musicas has playlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The musicas has playlist could not be saved. Please, try again.'));
        }
        $musicas = $this->MusicasHasPlaylists->Musicas->find('list', ['limit' => 200]);
        $playlists = $this->MusicasHasPlaylists->Playlists->find('list', ['limit' => 200]);
        $this->set(compact('musicasHasPlaylist', 'musicas', 'playlists'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Musicas Has Playlist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $musicasHasPlaylist = $this->MusicasHasPlaylists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $musicasHasPlaylist = $this->MusicasHasPlaylists->patchEntity($musicasHasPlaylist, $this->request->getData());
            if ($this->MusicasHasPlaylists->save($musicasHasPlaylist)) {
                $this->Flash->success(__('The musicas has playlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The musicas has playlist could not be saved. Please, try again.'));
        }
        $musicas = $this->MusicasHasPlaylists->Musicas->find('list', ['limit' => 200]);
        $playlists = $this->MusicasHasPlaylists->Playlists->find('list', ['limit' => 200]);
        $this->set(compact('musicasHasPlaylist', 'musicas', 'playlists'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Musicas Has Playlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $musicasHasPlaylist = $this->MusicasHasPlaylists->get($id);
        if ($this->MusicasHasPlaylists->delete($musicasHasPlaylist)) {
            $this->Flash->success(__('The musicas has playlist has been deleted.'));
        } else {
            $this->Flash->error(__('The musicas has playlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
