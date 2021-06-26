<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EmployeeAccounts Controller
 *
 * @property \App\Model\Table\EmployeeAccountsTable $EmployeeAccounts
 * @method \App\Model\Entity\EmployeeAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeeAccountsController extends AppController
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
        $employeeAccounts = $this->paginate($this->EmployeeAccounts);

        $this->set(compact('employeeAccounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee Account id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeeAccount = $this->EmployeeAccounts->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('employeeAccount'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeeAccount = $this->EmployeeAccounts->newEmptyEntity();
        if ($this->request->is('post')) {
            $employeeAccount = $this->EmployeeAccounts->patchEntity($employeeAccount, $this->request->getData());
            if ($this->EmployeeAccounts->save($employeeAccount)) {
                $this->Flash->success(__('The employee account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee account could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeeAccounts->Employees->find('list', ['limit' => 200]);
        $this->set(compact('employeeAccount', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee Account id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeeAccount = $this->EmployeeAccounts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeeAccount = $this->EmployeeAccounts->patchEntity($employeeAccount, $this->request->getData());
            if ($this->EmployeeAccounts->save($employeeAccount)) {
                $this->Flash->success(__('The employee account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee account could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeeAccounts->Employees->find('list', ['limit' => 200]);
        $this->set(compact('employeeAccount', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee Account id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeeAccount = $this->EmployeeAccounts->get($id);
        if ($this->EmployeeAccounts->delete($employeeAccount)) {
            $this->Flash->success(__('The employee account has been deleted.'));
        } else {
            $this->Flash->error(__('The employee account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
