<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Area Controller
 *
 * @property \App\Model\Table\AreaTable $Area
 */
class AreaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $area = $this->paginate($this->Area);

        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * View method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => ['Customer']
        ]);

        $this->set('area', $area);
        $this->set('_serialize', ['area']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $area = $this->Area->newEntity();
        if ($this->request->is('post')) {
            $area = $this->Area->patchEntity($area, $this->request->getData());
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area could not be saved. Please, try again.'));
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $area = $this->Area->patchEntity($area, $this->request->getData());
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area could not be saved. Please, try again.'));
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $area = $this->Area->get($id);
        if ($this->Area->delete($area)) {
            $this->Flash->success(__('The area has been deleted.'));
        } else {
            $this->Flash->error(__('The area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
