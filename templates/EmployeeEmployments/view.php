<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeEmployment $employeeEmployment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee Employment'), ['action' => 'edit', $employeeEmployment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee Employment'), ['action' => 'delete', $employeeEmployment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEmployment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employee Employments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee Employment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employeeEmployments view content">
            <h3><?= h($employeeEmployment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $employeeEmployment->has('employee') ? $this->Html->link($employeeEmployment->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeeEmployment->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employeeEmployment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $this->Number->format($employeeEmployment->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hired Date') ?></th>
                    <td><?= h($employeeEmployment->hired_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Probationary Date') ?></th>
                    <td><?= h($employeeEmployment->probationary_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Regularization Date') ?></th>
                    <td><?= h($employeeEmployment->regularization_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resigned Date') ?></th>
                    <td><?= h($employeeEmployment->resigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Terminated Date') ?></th>
                    <td><?= h($employeeEmployment->terminated_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($employeeEmployment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($employeeEmployment->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($employeeEmployment->deleted_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
