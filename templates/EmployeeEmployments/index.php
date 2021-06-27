<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeEmployment[]|\Cake\Collection\CollectionInterface $employeeEmployments
 */
?>
<div class="employeeEmployments index content">
    <?= $this->Html->link(__('New Employee Employment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employee Employments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('employee_id') ?></th>
                    <th><?= $this->Paginator->sort('hired_date') ?></th>
                    <th><?= $this->Paginator->sort('probationary_date') ?></th>
                    <th><?= $this->Paginator->sort('regularization_date') ?></th>
                    <th><?= $this->Paginator->sort('resigned_date') ?></th>
                    <th><?= $this->Paginator->sort('terminated_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeeEmployments as $employeeEmployment): ?>
                <tr>
                    <td><?= $this->Number->format($employeeEmployment->id) ?></td>
                    <td><?= $employeeEmployment->has('employee') ? $this->Html->link($employeeEmployment->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeeEmployment->employee->id]) : '' ?></td>
                    <td><?= h($employeeEmployment->hired_date) ?></td>
                    <td><?= h($employeeEmployment->probationary_date) ?></td>
                    <td><?= h($employeeEmployment->regularization_date) ?></td>
                    <td><?= h($employeeEmployment->resigned_date) ?></td>
                    <td><?= h($employeeEmployment->terminated_date) ?></td>
                    <td><?= h($employeeEmployment->created) ?></td>
                    <td><?= h($employeeEmployment->modified) ?></td>
                    <td><?= $this->Number->format($employeeEmployment->deleted) ?></td>
                    <td><?= h($employeeEmployment->deleted_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employeeEmployment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeeEmployment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeeEmployment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEmployment->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
