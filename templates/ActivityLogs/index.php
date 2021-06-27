<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivityLog[]|\Cake\Collection\CollectionInterface $activityLogs
 */
?>
<div class="activityLogs index content">
    <?= $this->Html->link(__('New Activity Log'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activity Logs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('employee_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activityLogs as $activityLog): ?>
                <tr>
                    <td><?= $this->Number->format($activityLog->id) ?></td>
                    <td><?= $activityLog->has('employee') ? $this->Html->link($activityLog->employee->id, ['controller' => 'Employees', 'action' => 'view', $activityLog->employee->id]) : '' ?></td>
                    <td><?= h($activityLog->description) ?></td>
                    <td><?= h($activityLog->created) ?></td>
                    <td><?= h($activityLog->modified) ?></td>
                    <td><?= $this->Number->format($activityLog->deleted) ?></td>
                    <td><?= h($activityLog->deleted_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activityLog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activityLog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $activityLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activityLog->id)]) ?>
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
