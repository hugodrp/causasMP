<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DetallesCausas Controller
 *
 * @property \App\Model\Table\DetallesCausasTable $DetallesCausas
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
        $this->paginate = [
            'contain' => ['Circunscripciones', 'Jurisdicciones', 'Origenes', 'Dependencias', 'HechosPunibles']
        ];
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
            'contain' => ['Circunscripciones', 'Jurisdicciones', 'Origenes', 'Dependencias', 'HechosPunibles']
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
        $circunscripciones = $this->DetallesCausas->Circunscripciones->find('list', ['limit' => 200]);
        $jurisdicciones = $this->DetallesCausas->Jurisdicciones->find('list', ['limit' => 200]);
        $origenes = $this->DetallesCausas->Origenes->find('list', ['limit' => 200]);
        $dependencias = $this->DetallesCausas->Dependencias->find('list', ['limit' => 200]);
        $hechosPunibles = $this->DetallesCausas->HechosPunibles->find('list', ['limit' => 200]);
        $this->set(compact('detallesCausa', 'circunscripciones', 'jurisdicciones', 'origenes', 'dependencias', 'hechosPunibles'));
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
        $circunscripciones = $this->DetallesCausas->Circunscripciones->find('list', ['limit' => 200]);
        $jurisdicciones = $this->DetallesCausas->Jurisdicciones->find('list', ['limit' => 200]);
        $origenes = $this->DetallesCausas->Origenes->find('list', ['limit' => 200]);
        $dependencias = $this->DetallesCausas->Dependencias->find('list', ['limit' => 200]);
        $hechosPunibles = $this->DetallesCausas->HechosPunibles->find('list', ['limit' => 200]);
        $this->set(compact('detallesCausa', 'circunscripciones', 'jurisdicciones', 'origenes', 'dependencias', 'hechosPunibles'));
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
