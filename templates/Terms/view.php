<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Term $term
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Term'), ['action' => 'edit', $term->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Term'), ['action' => 'delete', $term->id], ['confirm' => __('Are you sure you want to delete # {0}?', $term->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Terms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Term'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="terms view content">
            <h3><?= h($term->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($term->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($term->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $this->Number->format($term->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Business Date') ?></th>
                    <td><?= h($term->business_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($term->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($term->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($term->deleted_date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Leave Balances') ?></h4>
                <?php if (!empty($term->leave_balances)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Term Id') ?></th>
                            <th><?= __('Balance') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($term->leave_balances as $leaveBalances) : ?>
                        <tr>
                            <td><?= h($leaveBalances->id) ?></td>
                            <td><?= h($leaveBalances->employee_id) ?></td>
                            <td><?= h($leaveBalances->term_id) ?></td>
                            <td><?= h($leaveBalances->balance) ?></td>
                            <td><?= h($leaveBalances->created) ?></td>
                            <td><?= h($leaveBalances->modified) ?></td>
                            <td><?= h($leaveBalances->deleted) ?></td>
                            <td><?= h($leaveBalances->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LeaveBalances', 'action' => 'view', $leaveBalances->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LeaveBalances', 'action' => 'edit', $leaveBalances->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LeaveBalances', 'action' => 'delete', $leaveBalances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaveBalances->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
