<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Streaks Controller
 *
 * @property \App\Model\Table\StreaksTable $Streaks
 *
 * @method \App\Model\Entity\Streak[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StreaksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $streaks = $this->paginate($this->Streaks);

        $this->set(compact('streaks'));
    }

    /**
     * View method
     *
     * @param string|null $id Streak id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $streak = $this->Streaks->get($id, [
            'contain' => ['Shoots', 'Weapons']
        ]);

        $this->set('streak', $streak);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $streak = $this->Streaks->newEntity();
        if ($this->request->is('post')) {
            $streak = $this->Streaks->patchEntity($streak, $this->request->getData());
            if ($this->Streaks->save($streak)) {
                $this->Flash->success(__('The streak has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The streak could not be saved. Please, try again.'));
        }
        $this->set(compact('streak'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Streak id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $streak = $this->Streaks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $streak = $this->Streaks->patchEntity($streak, $this->request->getData());
            if ($this->Streaks->save($streak)) {
                $this->Flash->success(__('The streak has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The streak could not be saved. Please, try again.'));
        }
        $this->set(compact('streak'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Streak id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $streak = $this->Streaks->get($id);
        if ($this->Streaks->delete($streak)) {
            $this->Flash->success(__('The streak has been deleted.'));
        } else {
            $this->Flash->error(__('The streak could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
