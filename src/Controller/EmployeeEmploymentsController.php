<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmployeeEmployments Controller
 *
 * @property \App\Model\Table\EmployeeEmploymentsTable $EmployeeEmployments
 * @method \App\Model\Entity\EmployeeEmployment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeeEmploymentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees'],
        ];
        $employeeEmployments = $this->paginate($this->EmployeeEmployments);

        $this->set(compact('employeeEmployments'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee Employment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeeEmployment = $this->EmployeeEmployments->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('employeeEmployment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeeEmployment = $this->EmployeeEmployments->newEmptyEntity();
        if ($this->request->is('post')) {
            $employeeEmployment = $this->EmployeeEmployments->patchEntity($employeeEmployment, $this->request->getData());
            if ($this->EmployeeEmployments->save($employeeEmployment)) {
                $this->Flash->success(__('The employee employment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee employment could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeeEmployments->Employees->find('list', ['limit' => 200]);
        $this->set(compact('employeeEmployment', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee Employment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeeEmployment = $this->EmployeeEmployments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeeEmployment = $this->EmployeeEmployments->patchEntity($employeeEmployment, $this->request->getData());
            if ($this->EmployeeEmployments->save($employeeEmployment)) {
                $this->Flash->success(__('The employee employment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee employment could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeeEmployments->Employees->find('list', ['limit' => 200]);
        $this->set(compact('employeeEmployment', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee Employment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeeEmployment = $this->EmployeeEmployments->get($id);
        if ($this->EmployeeEmployments->delete($employeeEmployment)) {
            $this->Flash->success(__('The employee employment has been deleted.'));
        } else {
            $this->Flash->error(__('The employee employment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
