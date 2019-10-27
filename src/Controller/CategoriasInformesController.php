<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriasInformes Controller
 *
 *
 * @method \App\Model\Entity\CategoriasInforme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasInformesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $categoriasInformes = $this->paginate($this->CategoriasInformes);

        $this->set(compact('categoriasInformes'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Informe id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasInforme = $this->CategoriasInformes->get($id, [
            'contain' => []
        ]);

        $this->set('categoriasInforme', $categoriasInforme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasInforme = $this->CategoriasInformes->newEntity();
        if ($this->request->is('post')) {
            $categoriasInforme = $this->CategoriasInformes->patchEntity($categoriasInforme, $this->request->getData());
            if ($this->CategoriasInformes->save($categoriasInforme)) {
                $this->Flash->success(__('The categorias informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias informe could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasInforme'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Informe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasInforme = $this->CategoriasInformes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasInforme = $this->CategoriasInformes->patchEntity($categoriasInforme, $this->request->getData());
            if ($this->CategoriasInformes->save($categoriasInforme)) {
                $this->Flash->success(__('The categorias informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias informe could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasInforme'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Informe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasInforme = $this->CategoriasInformes->get($id);
        if ($this->CategoriasInformes->delete($categoriasInforme)) {
            $this->Flash->success(__('The categorias informe has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias informe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
