<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Origenes Controller
 *
 *
 * @method \App\Model\Entity\Origene[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrigenesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $origenes = $this->paginate($this->Origenes);

        $this->set(compact('origenes'));
    }

    /**
     * View method
     *
     * @param string|null $id Origene id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $origene = $this->Origenes->get($id, [
            'contain' => []
        ]);

        $this->set('origene', $origene);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $origene = $this->Origenes->newEntity();
        if ($this->request->is('post')) {
            $origene = $this->Origenes->patchEntity($origene, $this->request->getData());
            if ($this->Origenes->save($origene)) {
                $this->Flash->success(__('The origene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('The origene could not be saved. Please, try again.'));
            }            
        }
        $this->set(compact('origene'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Origene id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $origene = $this->Origenes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $origene = $this->Origenes->patchEntity($origene, $this->request->getData());
            if ($this->Origenes->save($origene)) {
                $this->Flash->success(__('The origene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The origene could not be saved. Please, try again.'));
        }
        $this->set(compact('origene'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Origene id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $origene = $this->Origenes->get($id);
        if ($this->Origenes->delete($origene)) {
            $this->Flash->success(__('The origene has been deleted.'));
        } else {
            $this->Flash->error(__('The origene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
