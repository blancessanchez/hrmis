<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * JobPositions Controller
 *
 * @property \App\Model\Table\JobPositionsTable $JobPositions
 * @method \App\Model\Entity\JobPosition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobPositionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $jobPositions = $this->paginate($this->JobPositions);

        $this->set(compact('jobPositions'));
    }

    /**
     * View method
     *
     * @param string|null $id Job Position id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobPosition = $this->JobPositions->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('jobPosition'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobPosition = $this->JobPositions->newEmptyEntity();
        if ($this->request->is('post')) {
            $jobPosition = $this->JobPositions->patchEntity($jobPosition, $this->request->getData());
            if ($this->JobPositions->save($jobPosition)) {
                $this->Flash->success(__('The job position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job position could not be saved. Please, try again.'));
        }
        $this->set(compact('jobPosition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Job Position id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobPosition = $this->JobPositions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobPosition = $this->JobPositions->patchEntity($jobPosition, $this->request->getData());
            if ($this->JobPositions->save($jobPosition)) {
                $this->Flash->success(__('The job position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job position could not be saved. Please, try again.'));
        }
        $this->set(compact('jobPosition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Job Position id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobPosition = $this->JobPositions->get($id);
        if ($this->JobPositions->delete($jobPosition)) {
            $this->Flash->success(__('The job position has been deleted.'));
        } else {
            $this->Flash->error(__('The job position could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
