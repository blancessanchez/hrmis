<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LeaveBalance $leaveBalance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Leave Balance'), ['action' => 'edit', $leaveBalance->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Leave Balance'), ['action' => 'delete', $leaveBalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaveBalance->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Leave Balances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Leave Balance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaveBalances view content">
            <h3><?= h($leaveBalance->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $leaveBalance->has('employee') ? $this->Html->link($leaveBalance->employee->id, ['controller' => 'Employees', 'action' => 'view', $leaveBalance->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Term') ?></th>
                    <td><?= $leaveBalance->has('term') ? $this->Html->link($leaveBalance->term->id, ['controller' => 'Terms', 'action' => 'view', $leaveBalance->term->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($leaveBalance->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Balance') ?></th>
                    <td><?= $this->Number->format($leaveBalance->balance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $this->Number->format($leaveBalance->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($leaveBalance->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($leaveBalance->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($leaveBalance->deleted_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
