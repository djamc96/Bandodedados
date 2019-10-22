<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlaylistsHasListasDeMusicas Controller
 *
 * @property \App\Model\Table\PlaylistsHasListasDeMusicasTable $PlaylistsHasListasDeMusicas
 *
 * @method \App\Model\Entity\PlaylistsHasListasDeMusica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlaylistsHasListasDeMusicasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ListasDeMusicas']
        ];
        $playlistsHasListasDeMusicas = $this->paginate($this->PlaylistsHasListasDeMusicas);

        $this->set(compact('playlistsHasListasDeMusicas'));
    }

    /**
     * View method
     *
     * @param string|null $id Playlists Has Listas De Musica id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playlistsHasListasDeMusica = $this->PlaylistsHasListasDeMusicas->get($id, [
            'contain' => ['ListasDeMusicas']
        ]);

        $this->set('playlistsHasListasDeMusica', $playlistsHasListasDeMusica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playlistsHasListasDeMusica = $this->PlaylistsHasListasDeMusicas->newEntity();
        if ($this->request->is('post')) {
            $playlistsHasListasDeMusica = $this->PlaylistsHasListasDeMusicas->patchEntity($playlistsHasListasDeMusica, $this->request->getData());
            if ($this->PlaylistsHasListasDeMusicas->save($playlistsHasListasDeMusica)) {
                $this->Flash->success(__('The playlists has listas de musica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The playlists has listas de musica could not be saved. Please, try again.'));
        }
        $listasDeMusicas = $this->PlaylistsHasListasDeMusicas->ListasDeMusicas->find('list', ['limit' => 200]);
        $this->set(compact('playlistsHasListasDeMusica', 'listasDeMusicas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Playlists Has Listas De Musica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playlistsHasListasDeMusica = $this->PlaylistsHasListasDeMusicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playlistsHasListasDeMusica = $this->PlaylistsHasListasDeMusicas->patchEntity($playlistsHasListasDeMusica, $this->request->getData());
            if ($this->PlaylistsHasListasDeMusicas->save($playlistsHasListasDeMusica)) {
                $this->Flash->success(__('The playlists has listas de musica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The playlists has listas de musica could not be saved. Please, try again.'));
        }
        $listasDeMusicas = $this->PlaylistsHasListasDeMusicas->ListasDeMusicas->find('list', ['limit' => 200]);
        $this->set(compact('playlistsHasListasDeMusica', 'listasDeMusicas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Playlists Has Listas De Musica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playlistsHasListasDeMusica = $this->PlaylistsHasListasDeMusicas->get($id);
        if ($this->PlaylistsHasListasDeMusicas->delete($playlistsHasListasDeMusica)) {
            $this->Flash->success(__('The playlists has listas de musica has been deleted.'));
        } else {
            $this->Flash->error(__('The playlists has listas de musica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
