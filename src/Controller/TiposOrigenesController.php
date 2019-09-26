<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposOrigenes Controller
 *
 *
 * @method \App\Model\Entity\TiposOrigene[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposOrigenesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tiposOrigenes = $this->paginate($this->TiposOrigenes);

        $this->set(compact('tiposOrigenes'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Origene id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposOrigene = $this->TiposOrigenes->get($id, [
            'contain' => []
        ]);

        $this->set('tiposOrigene', $tiposOrigene);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposOrigene = $this->TiposOrigenes->newEntity();
        if ($this->request->is('post')) {
            $tiposOrigene = $this->TiposOrigenes->patchEntity($tiposOrigene, $this->request->getData());
            if ($this->TiposOrigenes->save($tiposOrigene)) {
                $this->Flash->success(__('The tipos origene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('The tipos origene could not be saved. Please, try again.'));
            }            
        }
        $this->set(compact('tiposOrigene'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Origene id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposOrigene = $this->TiposOrigenes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposOrigene = $this->TiposOrigenes->patchEntity($tiposOrigene, $this->request->getData());
            if ($this->TiposOrigenes->save($tiposOrigene)) {
                $this->Flash->success(__('The tipos origene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipos origene could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposOrigene'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Origene id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposOrigene = $this->TiposOrigenes->get($id);
        if ($this->TiposOrigenes->delete($tiposOrigene)) {
            $this->Flash->success(__('The tipos origene has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos origene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
