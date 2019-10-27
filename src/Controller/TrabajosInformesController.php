<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrabajosInformes Controller
 *
 * @property \App\Model\Table\TrabajosInformesTable $TrabajosInformes
 *
 * @method \App\Model\Entity\TrabajosInforme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrabajosInformesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DetallesInformes', 'TiposTrabajos']
        ];
        $trabajosInformes = $this->paginate($this->TrabajosInformes);

        $this->set(compact('trabajosInformes'));
    }

    /**
     * View method
     *
     * @param string|null $id Trabajos Informe id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trabajosInforme = $this->TrabajosInformes->get($id, [
            'contain' => ['DetallesInformes', 'TiposTrabajos']
        ]);

        $this->set('trabajosInforme', $trabajosInforme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trabajosInforme = $this->TrabajosInformes->newEntity();
        if ($this->request->is('post')) {
            $trabajosInforme = $this->TrabajosInformes->patchEntity($trabajosInforme, $this->request->getData());
            if ($this->TrabajosInformes->save($trabajosInforme)) {
                $this->Flash->success(__('The trabajos informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trabajos informe could not be saved. Please, try again.'));
        }
        $detallesInformes = $this->TrabajosInformes->DetallesInformes->find('list', ['limit' => 200]);
        $tiposTrabajos = $this->TrabajosInformes->TiposTrabajos->find('list', ['limit' => 200]);
        $this->set(compact('trabajosInforme', 'detallesInformes', 'tiposTrabajos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabajos Informe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trabajosInforme = $this->TrabajosInformes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabajosInforme = $this->TrabajosInformes->patchEntity($trabajosInforme, $this->request->getData());
            if ($this->TrabajosInformes->save($trabajosInforme)) {
                $this->Flash->success(__('The trabajos informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trabajos informe could not be saved. Please, try again.'));
        }
        $detallesInformes = $this->TrabajosInformes->DetallesInformes->find('list', ['limit' => 200]);
        $tiposTrabajos = $this->TrabajosInformes->TiposTrabajos->find('list', ['limit' => 200]);
        $this->set(compact('trabajosInforme', 'detallesInformes', 'tiposTrabajos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabajos Informe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trabajosInforme = $this->TrabajosInformes->get($id);
        if ($this->TrabajosInformes->delete($trabajosInforme)) {
            $this->Flash->success(__('The trabajos informe has been deleted.'));
        } else {
            $this->Flash->error(__('The trabajos informe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
