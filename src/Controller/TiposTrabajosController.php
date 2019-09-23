<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposTrabajos Controller
 *
 *
 * @method \App\Model\Entity\TiposTrabajo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposTrabajosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tiposTrabajos = $this->paginate($this->TiposTrabajos);

        $this->set(compact('tiposTrabajos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Trabajo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposTrabajo = $this->TiposTrabajos->get($id, [
            'contain' => []
        ]);

        $this->set('tiposTrabajo', $tiposTrabajo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposTrabajo = $this->TiposTrabajos->newEntity();
        if ($this->request->is('post')) {
            $tiposTrabajo = $this->TiposTrabajos->patchEntity($tiposTrabajo, $this->request->getData());
            if ($this->TiposTrabajos->save($tiposTrabajo)) {
                $this->Flash->success(__('The tipos trabajo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipos trabajo could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposTrabajo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Trabajo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposTrabajo = $this->TiposTrabajos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposTrabajo = $this->TiposTrabajos->patchEntity($tiposTrabajo, $this->request->getData());
            if ($this->TiposTrabajos->save($tiposTrabajo)) {
                $this->Flash->success(__('The tipos trabajo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipos trabajo could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposTrabajo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Trabajo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposTrabajo = $this->TiposTrabajos->get($id);
        if ($this->TiposTrabajos->delete($tiposTrabajo)) {
            $this->Flash->success(__('The tipos trabajo has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos trabajo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
