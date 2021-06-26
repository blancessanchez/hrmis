<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmployeeEducations Controller
 *
 * @property \App\Model\Table\EmployeeEducationsTable $EmployeeEducations
 * @method \App\Model\Entity\EmployeeEducation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeeEducationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Levels'],
        ];
        $employeeEducations = $this->paginate($this->EmployeeEducations);

        $this->set(compact('employeeEducations'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee Education id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeeEducation = $this->EmployeeEducations->get($id, [
            'contain' => ['Employees', 'Levels'],
        ]);

        $this->set(compact('employeeEducation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeeEducation = $this->EmployeeEducations->newEmptyEntity();
        if ($this->request->is('post')) {
            $employeeEducation = $this->EmployeeEducations->patchEntity($employeeEducation, $this->request->getData());
            if ($this->EmployeeEducations->save($employeeEducation)) {
                $this->Flash->success(__('The employee education has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee education could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeeEducations->Employees->find('list', ['limit' => 200]);
        $levels = $this->EmployeeEducations->Levels->find('list', ['limit' => 200]);
        $this->set(compact('employeeEducation', 'employees', 'levels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee Education id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeeEducation = $this->EmployeeEducations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeeEducation = $this->EmployeeEducations->patchEntity($employeeEducation, $this->request->getData());
            if ($this->EmployeeEducations->save($employeeEducation)) {
                $this->Flash->success(__('The employee education has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee education could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeeEducations->Employees->find('list', ['limit' => 200]);
        $levels = $this->EmployeeEducations->Levels->find('list', ['limit' => 200]);
        $this->set(compact('employeeEducation', 'employees', 'levels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee Education id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeeEducation = $this->EmployeeEducations->get($id);
        if ($this->EmployeeEducations->delete($employeeEducation)) {
            $this->Flash->success(__('The employee education has been deleted.'));
        } else {
            $this->Flash->error(__('The employee education could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
