<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * EmployeeAccounts Controller
 *
 * @property \App\Model\Table\EmployeeAccountsTable $EmployeeAccounts
 * @method \App\Model\Entity\EmployeeAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeeAccountsController extends AppController
{
        /**
     * @inheritDoc
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'EmployeeAccounts',
                'action' => 'login',
                // 'plugin' => 'Users'
            ],
            'authError' => 'Did you really think you are allowed to see that?',
            // 'authenticate' => [
            //     'Form' => [
            //         'finder' => 'auth'
            //     ]
            // ],
            'storage' => 'Session'
        ]);
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

        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    /**
     * Login method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        // if ($this->request->is('post')) {
        //     $user = $this->Auth->identify();
        //     if ($user) {
        //         $this->Auth->setUser($user);

        //         // if ($this->ActivityLog->logginginActivityLog($user['id'], 'User login')) {
        //             return $this->redirect($this->Auth->redirectUrl());
        //         // }
        //         // $this->Flash->error(__('Error saving login info in activity log.'));
        //     }
        //     $this->Flash->error(__('Invalid username or password, try again.'));
        // }
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // pr($result);die;
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Employees',
                'action' => 'index',
            ]);

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    /**
     * Logout method
     *
     */
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'EmployeesAccount', 'action' => 'login']);
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
