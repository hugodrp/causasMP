<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DetallesInformes Controller
 *
 * @property \App\Model\Table\DetallesInformesTable $DetallesInformes
 *
 * @method \App\Model\Entity\DetallesInforme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetallesInformesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Causas', 'Personas', 'CategoriasInformes']
        ];
        $detallesInformes = $this->paginate($this->DetallesInformes);

        $this->set(compact('detallesInformes'));
    }

    /**
     * View method
     *
     * @param string|null $id Detalles Informe id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detallesInforme = $this->DetallesInformes->get($id, [
            'contain' => ['Causas', 'Personas', 'CategoriasInformes']
        ]);

        $this->set('detallesInforme', $detallesInforme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detallesInforme = $this->DetallesInformes->newEntity();
        if ($this->request->is('post')) {
            $detallesInforme = $this->DetallesInformes->patchEntity($detallesInforme, $this->request->getData());
            if ($this->DetallesInformes->save($detallesInforme)) {
                $this->Flash->success(__('The detalles informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalles informe could not be saved. Please, try again.'));
        }
        $causas = $this->DetallesInformes->Causas->find('list', ['limit' => 200]);
        $personas = $this->DetallesInformes->Personas->find('list', ['limit' => 200]);
        $categoriasInformes = $this->DetallesInformes->CategoriasInformes->find('list', ['limit' => 200]);
        $this->set(compact('detallesInforme', 'causas', 'personas', 'categoriasInformes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalles Informe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detallesInforme = $this->DetallesInformes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detallesInforme = $this->DetallesInformes->patchEntity($detallesInforme, $this->request->getData());
            if ($this->DetallesInformes->save($detallesInforme)) {
                $this->Flash->success(__('The detalles informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalles informe could not be saved. Please, try again.'));
        }
        $causas = $this->DetallesInformes->Causas->find('list', ['limit' => 200]);
        $personas = $this->DetallesInformes->Personas->find('list', ['limit' => 200]);
        $categoriasInformes = $this->DetallesInformes->CategoriasInformes->find('list', ['limit' => 200]);
        $this->set(compact('detallesInforme', 'causas', 'personas', 'categoriasInformes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalles Informe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detallesInforme = $this->DetallesInformes->get($id);
        if ($this->DetallesInformes->delete($detallesInforme)) {
            $this->Flash->success(__('The detalles informe has been deleted.'));
        } else {
            $this->Flash->error(__('The detalles informe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
