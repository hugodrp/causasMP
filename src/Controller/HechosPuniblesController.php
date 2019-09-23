<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HechosPunibles Controller
 *
 *
 * @method \App\Model\Entity\HechosPunible[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HechosPuniblesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $hechosPunibles = $this->paginate($this->HechosPunibles);

        $this->set(compact('hechosPunibles'));
    }

    /**
     * View method
     *
     * @param string|null $id Hechos Punible id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hechosPunible = $this->HechosPunibles->get($id, [
            'contain' => []
        ]);

        $this->set('hechosPunible', $hechosPunible);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hechosPunible = $this->HechosPunibles->newEntity();
        if ($this->request->is('post')) {
            $hechosPunible = $this->HechosPunibles->patchEntity($hechosPunible, $this->request->getData());
            if ($this->HechosPunibles->save($hechosPunible)) {
                $this->Flash->success(__('The hechos punible has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hechos punible could not be saved. Please, try again.'));
        }
        $this->set(compact('hechosPunible'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hechos Punible id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hechosPunible = $this->HechosPunibles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hechosPunible = $this->HechosPunibles->patchEntity($hechosPunible, $this->request->getData());
            if ($this->HechosPunibles->save($hechosPunible)) {
                $this->Flash->success(__('The hechos punible has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hechos punible could not be saved. Please, try again.'));
        }
        $this->set(compact('hechosPunible'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hechos Punible id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hechosPunible = $this->HechosPunibles->get($id);
        if ($this->HechosPunibles->delete($hechosPunible)) {
            $this->Flash->success(__('The hechos punible has been deleted.'));
        } else {
            $this->Flash->error(__('The hechos punible could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
