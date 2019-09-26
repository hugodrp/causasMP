<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposComunicaciones Controller
 *
 *
 * @method \App\Model\Entity\TiposComunicacione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposComunicacionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tiposComunicaciones = $this->paginate($this->TiposComunicaciones);

        $this->set(compact('tiposComunicaciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Comunicacione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposComunicacione = $this->TiposComunicaciones->get($id, [
            'contain' => []
        ]);

        $this->set('tiposComunicacione', $tiposComunicacione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposComunicacione = $this->TiposComunicaciones->newEntity();
        if ($this->request->is('post')) {
            $tiposComunicacione = $this->TiposComunicaciones->patchEntity($tiposComunicacione, $this->request->getData());
            if ($this->TiposComunicaciones->save($tiposComunicacione)) {
                $this->Flash->success(__('The tipos comunicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('The tipos comunicacione could not be saved. Please, try again.'));
            }            
        }
        $this->set(compact('tiposComunicacione'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Comunicacione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposComunicacione = $this->TiposComunicaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposComunicacione = $this->TiposComunicaciones->patchEntity($tiposComunicacione, $this->request->getData());
            if ($this->TiposComunicaciones->save($tiposComunicacione)) {
                $this->Flash->success(__('The tipos comunicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipos comunicacione could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposComunicacione'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Comunicacione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposComunicacione = $this->TiposComunicaciones->get($id);
        if ($this->TiposComunicaciones->delete($tiposComunicacione)) {
            $this->Flash->success(__('The tipos comunicacione has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos comunicacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
