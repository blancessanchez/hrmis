<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeAccount[]|\Cake\Collection\CollectionInterface $employeeAccounts
 */
?>
<div class="employeeAccounts index content">
    <?= $this->Html->link(__('New Employee Account'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employee Accounts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('employee_id') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('last_login') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeeAccounts as $employeeAccount): ?>
                <tr>
                    <td><?= $this->Number->format($employeeAccount->id) ?></td>
                    <td><?= $employeeAccount->has('employee') ? $this->Html->link($employeeAccount->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeeAccount->employee->id]) : '' ?></td>
                    <td><?= h($employeeAccount->password) ?></td>
                    <td><?= h($employeeAccount->last_login) ?></td>
                    <td><?= h($employeeAccount->created) ?></td>
                    <td><?= h($employeeAccount->modified) ?></td>
                    <td><?= $this->Number->format($employeeAccount->deleted) ?></td>
                    <td><?= h($employeeAccount->deleted_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employeeAccount->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeeAccount->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeeAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeAccount->id)]) ?>
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
