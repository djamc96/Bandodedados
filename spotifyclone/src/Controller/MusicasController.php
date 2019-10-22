<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Musicas Controller
 *
 * @property \App\Model\Table\MusicasTable $Musicas
 *
 * @method \App\Model\Entity\Musica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MusicasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artistas']
        ];
        $musicas = $this->paginate($this->Musicas);

        $this->set(compact('musicas'));
    }

    /**
     * View method
     *
     * @param string|null $id Musica id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $musica = $this->Musicas->get($id, [
            'contain' => ['Artistas']
        ]);

        $this->set('musica', $musica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $musica = $this->Musicas->newEntity();
        if ($this->request->is('post')) {
            $musica = $this->Musicas->patchEntity($musica, $this->request->getData());
            if ($this->Musicas->save($musica)) {
                $this->Flash->success(__('The musica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The musica could not be saved. Please, try again.'));
        }
        $artistas = $this->Musicas->Artistas->find('list', ['limit' => 200]);
        $this->set(compact('musica', 'artistas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Musica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $musica = $this->Musicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $musica = $this->Musicas->patchEntity($musica, $this->request->getData());
            if ($this->Musicas->save($musica)) {
                $this->Flash->success(__('The musica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The musica could not be saved. Please, try again.'));
        }
        $artistas = $this->Musicas->Artistas->find('list', ['limit' => 200]);
        $this->set(compact('musica', 'artistas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Musica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $musica = $this->Musicas->get($id);
        if ($this->Musicas->delete($musica)) {
            $this->Flash->success(__('The musica has been deleted.'));
        } else {
            $this->Flash->error(__('The musica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
