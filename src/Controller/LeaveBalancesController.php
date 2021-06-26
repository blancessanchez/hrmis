<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LeaveBalances Controller
 *
 * @property \App\Model\Table\LeaveBalancesTable $LeaveBalances
 * @method \App\Model\Entity\LeaveBalance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeaveBalancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Terms'],
        ];
        $leaveBalances = $this->paginate($this->LeaveBalances);

        $this->set(compact('leaveBalances'));
    }

    /**
     * View method
     *
     * @param string|null $id Leave Balance id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leaveBalance = $this->LeaveBalances->get($id, [
            'contain' => ['Employees', 'Terms'],
        ]);

        $this->set(compact('leaveBalance'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leaveBalance = $this->LeaveBalances->newEmptyEntity();
        if ($this->request->is('post')) {
            $leaveBalance = $this->LeaveBalances->patchEntity($leaveBalance, $this->request->getData());
            if ($this->LeaveBalances->save($leaveBalance)) {
                $this->Flash->success(__('The leave balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave balance could not be saved. Please, try again.'));
        }
        $employees = $this->LeaveBalances->Employees->find('list', ['limit' => 200]);
        $terms = $this->LeaveBalances->Terms->find('list', ['limit' => 200]);
        $this->set(compact('leaveBalance', 'employees', 'terms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Leave Balance id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leaveBalance = $this->LeaveBalances->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leaveBalance = $this->LeaveBalances->patchEntity($leaveBalance, $this->request->getData());
            if ($this->LeaveBalances->save($leaveBalance)) {
                $this->Flash->success(__('The leave balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave balance could not be saved. Please, try again.'));
        }
        $employees = $this->LeaveBalances->Employees->find('list', ['limit' => 200]);
        $terms = $this->LeaveBalances->Terms->find('list', ['limit' => 200]);
        $this->set(compact('leaveBalance', 'employees', 'terms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Leave Balance id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leaveBalance = $this->LeaveBalances->get($id);
        if ($this->LeaveBalances->delete($leaveBalance)) {
            $this->Flash->success(__('The leave balance has been deleted.'));
        } else {
            $this->Flash->error(__('The leave balance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
