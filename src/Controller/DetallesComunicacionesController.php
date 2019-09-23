<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DetallesComunicaciones Controller
 *
 *
 * @method \App\Model\Entity\DetallesComunicacione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetallesComunicacionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $detallesComunicaciones = $this->paginate($this->DetallesComunicaciones);

        $this->set(compact('detallesComunicaciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Detalles Comunicacione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detallesComunicacione = $this->DetallesComunicaciones->get($id, [
            'contain' => []
        ]);

        $this->set('detallesComunicacione', $detallesComunicacione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detallesComunicacione = $this->DetallesComunicaciones->newEntity();
        if ($this->request->is('post')) {
            $detallesComunicacione = $this->DetallesComunicaciones->patchEntity($detallesComunicacione, $this->request->getData());
            if ($this->DetallesComunicaciones->save($detallesComunicacione)) {
                $this->Flash->success(__('The detalles comunicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalles comunicacione could not be saved. Please, try again.'));
        }
        $this->set(compact('detallesComunicacione'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalles Comunicacione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detallesComunicacione = $this->DetallesComunicaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detallesComunicacione = $this->DetallesComunicaciones->patchEntity($detallesComunicacione, $this->request->getData());
            if ($this->DetallesComunicaciones->save($detallesComunicacione)) {
                $this->Flash->success(__('The detalles comunicacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalles comunicacione could not be saved. Please, try again.'));
        }
        $this->set(compact('detallesComunicacione'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalles Comunicacione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detallesComunicacione = $this->DetallesComunicaciones->get($id);
        if ($this->DetallesComunicaciones->delete($detallesComunicacione)) {
            $this->Flash->success(__('The detalles comunicacione has been deleted.'));
        } else {
            $this->Flash->error(__('The detalles comunicacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
