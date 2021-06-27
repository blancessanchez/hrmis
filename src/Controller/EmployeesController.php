<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\ActivityLogsTable $ActivityLogs
 * @property \App\Model\Table\DepartmentsTable $Departments
 * @property \App\Model\Table\EmployeeAccountsTable $EmployeeAccounts
 * @property \App\Model\Table\EmployeeEducationsTable $EmployeeEducations
 * @property \App\Model\Table\EmployeeEmploymentsTable $EmployeeEmployments
 * @property \App\Model\Table\EmployeesTable $Employees
 * @property \App\Model\Table\JobPositionsTable $JobPositions
 * @property \App\Model\Table\LeavesBalancesTable $LeaveBalances
 * @property \App\Model\Table\LeavesTable $Leaves
 *
 *
 */
class EmployeesController extends AppController
{
    /**
     * @inheritDoc
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadModel('ActivityLogs');
        $this->loadModel('Departments');
        $this->loadModel('EmployeeAccounts');
        $this->loadModel('EmployeeEducations');
        $this->loadModel('EmployeeEmployments');
        $this->loadModel('Employees');
        $this->loadModel('JobPositions');
        $this->loadModel('LeaveBalances');
        $this->loadModel('Leaves');
    }

    /**
     * @inheritDoc
     */
    public function beforeFilter(EventInterface $event)
    {
        $parentBeforeFilterEvent = parent::beforeFilter($event);
        if ($parentBeforeFilterEvent instanceof \Cake\Http\Response) {
            return $parentBeforeFilterEvent;
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments', 'JobPositions'],
        ];
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Departments', 'JobPositions', 'ActivityLogs', 'EmployeeAccounts', 'EmployeeEducations', 'EmployeeEmployments', 'LeaveBalances', 'Leaves'],
        ]);

        $this->set(compact('employee'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEmptyEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
        $jobPositions = $this->Employees->JobPositions->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'departments', 'jobPositions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $departments = $this->Employees->Departments->find('list', ['limit' => 200]);
        $jobPositions = $this->Employees->JobPositions->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'departments', 'jobPositions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Change Password
     *
     * @return void
     */
    public function changePassword()
    {
        // $currentUserId = $this->Auth->user('id');
        $employeeErrors = [];
        if ($this->request->is('post')) {
            $this->request->allowMethod(['post', 'delete']);
            $employee = $this->EmployeeInformation->get($currentUserId);
            $saveEmployeeData = $this->EmployeeInformation->patchEntity($employee, $this->request->getData());
            if ($saveEmployeeData->hasErrors()) {
                $employeeErrors = $employee->errors();
                $this->Flash->error(__('The employee could not be saved. Please, try again.'));
            } else {
                // loging in activity log
                $session = $this->getRequest()->getSession();
                $this->ActivityLog->logginginActivityLog($session->read('Auth.User.id'), 'Changed password');
                if ($this->EmployeeInformation->save($saveEmployeeData)) {
                    $this->Flash->success(__('Successfully changed password.'));
                } else {
                    $this->Flash->error(__('The password could not be changed. Please, try again.'));
                }

                return $this->redirect(['action' => 'employeeList']);
            }
        }

        $this->set(compact('employeeErrors'));
    }
}
