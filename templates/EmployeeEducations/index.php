<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeEducation[]|\Cake\Collection\CollectionInterface $employeeEducations
 */
?>
<div class="employeeEducations index content">
    <?= $this->Html->link(__('New Employee Education'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employee Educations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('employee_id') ?></th>
                    <th><?= $this->Paginator->sort('level_id') ?></th>
                    <th><?= $this->Paginator->sort('school_name') ?></th>
                    <th><?= $this->Paginator->sort('course_name') ?></th>
                    <th><?= $this->Paginator->sort('date_from') ?></th>
                    <th><?= $this->Paginator->sort('date_to') ?></th>
                    <th><?= $this->Paginator->sort('highest_units_earned') ?></th>
                    <th><?= $this->Paginator->sort('year_graduated') ?></th>
                    <th><?= $this->Paginator->sort('honors_received') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeeEducations as $employeeEducation): ?>
                <tr>
                    <td><?= $this->Number->format($employeeEducation->id) ?></td>
                    <td><?= $employeeEducation->has('employee') ? $this->Html->link($employeeEducation->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeeEducation->employee->id]) : '' ?></td>
                    <td><?= $this->Number->format($employeeEducation->level_id) ?></td>
                    <td><?= h($employeeEducation->school_name) ?></td>
                    <td><?= h($employeeEducation->course_name) ?></td>
                    <td><?= h($employeeEducation->date_from) ?></td>
                    <td><?= h($employeeEducation->date_to) ?></td>
                    <td><?= h($employeeEducation->highest_units_earned) ?></td>
                    <td><?= h($employeeEducation->year_graduated) ?></td>
                    <td><?= h($employeeEducation->honors_received) ?></td>
                    <td><?= h($employeeEducation->created) ?></td>
                    <td><?= h($employeeEducation->modified) ?></td>
                    <td><?= $this->Number->format($employeeEducation->deleted) ?></td>
                    <td><?= h($employeeEducation->deleted_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employeeEducation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeeEducation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeeEducation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEducation->id)]) ?>
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
