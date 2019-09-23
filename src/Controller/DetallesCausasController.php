<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DetallesCausas Controller
 *
 *
 * @method \App\Model\Entity\DetallesCausa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetallesCausasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $detallesCausas = $this->paginate($this->DetallesCausas);

        $this->set(compact('detallesCausas'));
    }

    /**
     * View method
     *
     * @param string|null $id Detalles Causa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detallesCausa = $this->DetallesCausas->get($id, [
            'contain' => []
        ]);

        $this->set('detallesCausa', $detallesCausa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detallesCausa = $this->DetallesCausas->newEntity();
        if ($this->request->is('post')) {
            $detallesCausa = $this->DetallesCausas->patchEntity($detallesCausa, $this->request->getData());
            if ($this->DetallesCausas->save($detallesCausa)) {
                $this->Flash->success(__('The detalles causa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalles causa could not be saved. Please, try again.'));
        }
        $this->set(compact('detallesCausa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalles Causa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detallesCausa = $this->DetallesCausas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detallesCausa = $this->DetallesCausas->patchEntity($detallesCausa, $this->request->getData());
            if ($this->DetallesCausas->save($detallesCausa)) {
                $this->Flash->success(__('The detalles causa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalles causa could not be saved. Please, try again.'));
        }
        $this->set(compact('detallesCausa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalles Causa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detallesCausa = $this->DetallesCausas->get($id);
        if ($this->DetallesCausas->delete($detallesCausa)) {
            $this->Flash->success(__('The detalles causa has been deleted.'));
        } else {
            $this->Flash->error(__('The detalles causa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
