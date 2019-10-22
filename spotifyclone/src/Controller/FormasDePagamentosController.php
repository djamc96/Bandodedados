<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormasDePagamentos Controller
 *
 * @property \App\Model\Table\FormasDePagamentosTable $FormasDePagamentos
 *
 * @method \App\Model\Entity\FormasDePagamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormasDePagamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $formasDePagamentos = $this->paginate($this->FormasDePagamentos);

        $this->set(compact('formasDePagamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Formas De Pagamento id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formasDePagamento = $this->FormasDePagamentos->get($id, [
            'contain' => ['Clientes']
        ]);

        $this->set('formasDePagamento', $formasDePagamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formasDePagamento = $this->FormasDePagamentos->newEntity();
        if ($this->request->is('post')) {
            $formasDePagamento = $this->FormasDePagamentos->patchEntity($formasDePagamento, $this->request->getData());
            if ($this->FormasDePagamentos->save($formasDePagamento)) {
                $this->Flash->success(__('The formas de pagamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formas de pagamento could not be saved. Please, try again.'));
        }
        $this->set(compact('formasDePagamento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Formas De Pagamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formasDePagamento = $this->FormasDePagamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formasDePagamento = $this->FormasDePagamentos->patchEntity($formasDePagamento, $this->request->getData());
            if ($this->FormasDePagamentos->save($formasDePagamento)) {
                $this->Flash->success(__('The formas de pagamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formas de pagamento could not be saved. Please, try again.'));
        }
        $this->set(compact('formasDePagamento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Formas De Pagamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formasDePagamento = $this->FormasDePagamentos->get($id);
        if ($this->FormasDePagamentos->delete($formasDePagamento)) {
            $this->Flash->success(__('The formas de pagamento has been deleted.'));
        } else {
            $this->Flash->error(__('The formas de pagamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
