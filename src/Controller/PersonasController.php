<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Personas Controller
 *
 *
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $personas = $this->paginate($this->Personas);
        $this->set(compact('personas'));
        // $this->set('personas', $personas);
    }

    /**
     * View method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id)
    {
        $persona = $this->Personas->get($id);
        $this->set('persona', $persona);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persona = $this->Personas->newEntity();
        if ($this->request->is('post')) {
            $persona = $this->Personas->patchEntity($persona, $this->request->getData());
            if ($this->Personas->save($persona)) {
                $this->Flash->success('La persona ha sido creada correctamente.');

                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error('La persona no pudo ser creada. Por favor, intente nuevamente');
            }            
        }
        $this->set(compact('persona'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persona = $this->Personas->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            $persona = $this->Personas->patchEntity($persona, $this->request->getData());
            if ($this->Personas->save($persona)) 
            {
                $this->Flash->success('La persona ha sido modificada');
                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error('La persona no pudo ser modificada. Por favor, intente nuevamente.');
            }            
        }

        $this->set(compact('persona'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persona = $this->Personas->get($id);

        if ($this->Personas->delete($persona)) 
        {
            $this->Flash->success('La persona ha sido eliminada.');
        } 
        else 
        {
            $this->Flash->error('La persona no pudo ser eliminada. Por favor, intente nuevamente.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
