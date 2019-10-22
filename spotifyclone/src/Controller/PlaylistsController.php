<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Playlists Controller
 *
 * @property \App\Model\Table\PlaylistsTable $Playlists
 *
 * @method \App\Model\Entity\Playlist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlaylistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $playlists = $this->paginate($this->Playlists);

        $this->set(compact('playlists'));
    }

    /**
     * View method
     *
     * @param string|null $id Playlist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playlist = $this->Playlists->get($id, [
            'contain' => []
        ]);

        $this->set('playlist', $playlist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playlist = $this->Playlists->newEntity();
        if ($this->request->is('post')) {
            $playlist = $this->Playlists->patchEntity($playlist, $this->request->getData());
            if ($this->Playlists->save($playlist)) {
                $this->Flash->success(__('The playlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The playlist could not be saved. Please, try again.'));
        }
        $this->set(compact('playlist'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Playlist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playlist = $this->Playlists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playlist = $this->Playlists->patchEntity($playlist, $this->request->getData());
            if ($this->Playlists->save($playlist)) {
                $this->Flash->success(__('The playlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The playlist could not be saved. Please, try again.'));
        }
        $this->set(compact('playlist'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Playlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playlist = $this->Playlists->get($id);
        if ($this->Playlists->delete($playlist)) {
            $this->Flash->success(__('The playlist has been deleted.'));
        } else {
            $this->Flash->error(__('The playlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
