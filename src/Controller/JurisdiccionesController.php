<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jurisdicciones Controller
 *
 *
 * @method \App\Model\Entity\Jurisdiccione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JurisdiccionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $jurisdicciones = $this->paginate($this->Jurisdicciones);

        $this->set(compact('jurisdicciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Jurisdiccione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jurisdiccione = $this->Jurisdicciones->get($id, [
            'contain' => []
        ]);

        $this->set('jurisdiccione', $jurisdiccione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jurisdiccione = $this->Jurisdicciones->newEntity();
        if ($this->request->is('post')) {
            $jurisdiccione = $this->Jurisdicciones->patchEntity($jurisdiccione, $this->request->getData());
            if ($this->Jurisdicciones->save($jurisdiccione)) {
                $this->Flash->success(__('The jurisdiccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error(__('The jurisdiccione could not be saved. Please, try again.'));
            }            
        }
        $this->set(compact('jurisdiccione'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jurisdiccione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jurisdiccione = $this->Jurisdicciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jurisdiccione = $this->Jurisdicciones->patchEntity($jurisdiccione, $this->request->getData());
            if ($this->Jurisdicciones->save($jurisdiccione)) {
                $this->Flash->success(__('The jurisdiccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jurisdiccione could not be saved. Please, try again.'));
        }
        $this->set(compact('jurisdiccione'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jurisdiccione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jurisdiccione = $this->Jurisdicciones->get($id);
        if ($this->Jurisdicciones->delete($jurisdiccione)) {
            $this->Flash->success(__('The jurisdiccione has been deleted.'));
        } else {
            $this->Flash->error(__('The jurisdiccione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
