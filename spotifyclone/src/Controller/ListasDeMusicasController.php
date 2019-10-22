<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ListasDeMusicas Controller
 *
 * @property \App\Model\Table\ListasDeMusicasTable $ListasDeMusicas
 *
 * @method \App\Model\Entity\ListasDeMusica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListasDeMusicasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Musicas', 'Artistas']
        ];
        $listasDeMusicas = $this->paginate($this->ListasDeMusicas);

        $this->set(compact('listasDeMusicas'));
    }

    /**
     * View method
     *
     * @param string|null $id Listas De Musica id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listasDeMusica = $this->ListasDeMusicas->get($id, [
            'contain' => ['Musicas', 'Artistas']
        ]);

        $this->set('listasDeMusica', $listasDeMusica);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listasDeMusica = $this->ListasDeMusicas->newEntity();
        if ($this->request->is('post')) {
            $listasDeMusica = $this->ListasDeMusicas->patchEntity($listasDeMusica, $this->request->getData());
            if ($this->ListasDeMusicas->save($listasDeMusica)) {
                $this->Flash->success(__('The listas de musica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listas de musica could not be saved. Please, try again.'));
        }
        $musicas = $this->ListasDeMusicas->Musicas->find('list', ['limit' => 200]);
        $artistas = $this->ListasDeMusicas->Artistas->find('list', ['limit' => 200]);
        $this->set(compact('listasDeMusica', 'musicas', 'artistas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listas De Musica id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listasDeMusica = $this->ListasDeMusicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listasDeMusica = $this->ListasDeMusicas->patchEntity($listasDeMusica, $this->request->getData());
            if ($this->ListasDeMusicas->save($listasDeMusica)) {
                $this->Flash->success(__('The listas de musica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listas de musica could not be saved. Please, try again.'));
        }
        $musicas = $this->ListasDeMusicas->Musicas->find('list', ['limit' => 200]);
        $artistas = $this->ListasDeMusicas->Artistas->find('list', ['limit' => 200]);
        $this->set(compact('listasDeMusica', 'musicas', 'artistas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listas De Musica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listasDeMusica = $this->ListasDeMusicas->get($id);
        if ($this->ListasDeMusicas->delete($listasDeMusica)) {
            $this->Flash->success(__('The listas de musica has been deleted.'));
        } else {
            $this->Flash->error(__('The listas de musica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
