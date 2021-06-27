<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeAccount $employeeAccount
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee Account'), ['action' => 'edit', $employeeAccount->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee Account'), ['action' => 'delete', $employeeAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeAccount->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employee Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee Account'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employeeAccounts view content">
            <h3><?= h($employeeAccount->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $employeeAccount->has('employee') ? $this->Html->link($employeeAccount->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeeAccount->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($employeeAccount->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employeeAccount->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $this->Number->format($employeeAccount->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($employeeAccount->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($employeeAccount->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($employeeAccount->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($employeeAccount->deleted_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
