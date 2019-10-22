<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gravadoras Controller
 *
 * @property \App\Model\Table\GravadorasTable $Gravadoras
 *
 * @method \App\Model\Entity\Gravadora[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GravadorasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $gravadoras = $this->paginate($this->Gravadoras);

        $this->set(compact('gravadoras'));
    }

    /**
     * View method
     *
     * @param string|null $id Gravadora id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gravadora = $this->Gravadoras->get($id, [
            'contain' => []
        ]);

        $this->set('gravadora', $gravadora);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gravadora = $this->Gravadoras->newEntity();
        if ($this->request->is('post')) {
            $gravadora = $this->Gravadoras->patchEntity($gravadora, $this->request->getData());
            if ($this->Gravadoras->save($gravadora)) {
                $this->Flash->success(__('The gravadora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gravadora could not be saved. Please, try again.'));
        }
        $this->set(compact('gravadora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gravadora id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gravadora = $this->Gravadoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gravadora = $this->Gravadoras->patchEntity($gravadora, $this->request->getData());
            if ($this->Gravadoras->save($gravadora)) {
                $this->Flash->success(__('The gravadora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gravadora could not be saved. Please, try again.'));
        }
        $this->set(compact('gravadora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gravadora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gravadora = $this->Gravadoras->get($id);
        if ($this->Gravadoras->delete($gravadora)) {
            $this->Flash->success(__('The gravadora has been deleted.'));
        } else {
            $this->Flash->error(__('The gravadora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
