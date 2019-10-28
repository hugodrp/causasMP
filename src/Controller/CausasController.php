<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Causas Controller
 *
 *
 * @method \App\Model\Entity\Causa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CausasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $causas = $this->paginate($this->Causas);

        $this->set(compact('causas'));
    }

    /**
     * View method
     *
     * @param string|null $id Causa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $causa = $this->Causas->get($id, [
            'contain' => []
        ]);

        $this->set('causa', $causa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $causa = $this->Causas->newEntity();
        if ($this->request->is('post')) {
            $causa = $this->Causas->patchEntity($causa, $this->request->getData());
            if ($this->Causas->save($causa)) {
                $this->Flash->success(__('The causa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The causa could not be saved. Please, try again.'));
        }
        $this->set(compact('causa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Causa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $causa = $this->Causas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $causa = $this->Causas->patchEntity($causa, $this->request->getData());
            if ($this->Causas->save($causa)) {
                $this->Flash->success(__('The causa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The causa could not be saved. Please, try again.'));
        }
        $this->set(compact('causa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Causa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $causa = $this->Causas->get($id);
        if ($this->Causas->delete($causa)) {
            $this->Flash->success(__('The causa has been deleted.'));
        } else {
            $this->Flash->error(__('The causa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
