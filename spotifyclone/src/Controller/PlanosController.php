<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Planos Controller
 *
 * @property \App\Model\Table\PlanosTable $Planos
 *
 * @method \App\Model\Entity\Plano[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlanosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $planos = $this->paginate($this->Planos);

        $this->set(compact('planos'));
    }

    /**
     * View method
     *
     * @param string|null $id Plano id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $plano = $this->Planos->get($id, [
            'contain' => []
        ]);

        $this->set('plano', $plano);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $plano = $this->Planos->newEntity();
        if ($this->request->is('post')) {
            $plano = $this->Planos->patchEntity($plano, $this->request->getData());
            if ($this->Planos->save($plano)) {
                $this->Flash->success(__('The plano has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plano could not be saved. Please, try again.'));
        }
        $this->set(compact('plano'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Plano id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $plano = $this->Planos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plano = $this->Planos->patchEntity($plano, $this->request->getData());
            if ($this->Planos->save($plano)) {
                $this->Flash->success(__('The plano has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plano could not be saved. Please, try again.'));
        }
        $this->set(compact('plano'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Plano id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $plano = $this->Planos->get($id);
        if ($this->Planos->delete($plano)) {
            $this->Flash->success(__('The plano has been deleted.'));
        } else {
            $this->Flash->error(__('The plano could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
