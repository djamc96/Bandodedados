<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Artistas Controller
 *
 * @property \App\Model\Table\ArtistasTable $Artistas
 *
 * @method \App\Model\Entity\Artista[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtistasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Gravadoras']
        ];
        $artistas = $this->paginate($this->Artistas);

        $this->set(compact('artistas'));
    }

    /**
     * View method
     *
     * @param string|null $id Artista id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artista = $this->Artistas->get($id, [
            'contain' => ['Gravadoras']
        ]);

        $this->set('artista', $artista);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artista = $this->Artistas->newEntity();
        if ($this->request->is('post')) {
            $artista = $this->Artistas->patchEntity($artista, $this->request->getData());
            if ($this->Artistas->save($artista)) {
                $this->Flash->success(__('The artista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artista could not be saved. Please, try again.'));
        }
        $gravadoras = $this->Artistas->Gravadoras->find('list', ['limit' => 200]);
        $this->set(compact('artista', 'gravadoras'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artista id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artista = $this->Artistas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artista = $this->Artistas->patchEntity($artista, $this->request->getData());
            if ($this->Artistas->save($artista)) {
                $this->Flash->success(__('The artista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artista could not be saved. Please, try again.'));
        }
        $gravadoras = $this->Artistas->Gravadoras->find('list', ['limit' => 200]);
        $this->set(compact('artista', 'gravadoras'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artista id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artista = $this->Artistas->get($id);
        if ($this->Artistas->delete($artista)) {
            $this->Flash->success(__('The artista has been deleted.'));
        } else {
            $this->Flash->error(__('The artista could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
