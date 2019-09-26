<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Circunscripciones Controller
 *
 *
 * @method \App\Model\Entity\Circunscripcione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CircunscripcionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $circunscripciones = $this->paginate($this->Circunscripciones);

        $this->set(compact('circunscripciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Circunscripcione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $circunscripcione = $this->Circunscripciones->get($id, [
            'contain' => []
        ]);

        $this->set('circunscripcione', $circunscripcione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $circunscripcione = $this->Circunscripciones->newEntity();
        if ($this->request->is('post')) {
            $circunscripcione = $this->Circunscripciones->patchEntity($circunscripcione, $this->request->getData());
            if ($this->Circunscripciones->save($circunscripcione)) {
                $this->Flash->success(__('The circunscripcione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('The circunscripcione could not be saved. Please, try again.'));
            }            
        }
        $this->set(compact('circunscripcione'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Circunscripcione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $circunscripcione = $this->Circunscripciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $circunscripcione = $this->Circunscripciones->patchEntity($circunscripcione, $this->request->getData());
            if ($this->Circunscripciones->save($circunscripcione)) {
                $this->Flash->success(__('The circunscripcione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The circunscripcione could not be saved. Please, try again.'));
        }
        $this->set(compact('circunscripcione'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Circunscripcione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $circunscripcione = $this->Circunscripciones->get($id);
        if ($this->Circunscripciones->delete($circunscripcione)) {
            $this->Flash->success(__('The circunscripcione has been deleted.'));
        } else {
            $this->Flash->error(__('The circunscripcione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
