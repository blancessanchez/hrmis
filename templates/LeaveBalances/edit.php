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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $leaveBalance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $leaveBalance->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Leave Balances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaveBalances form content">
            <?= $this->Form->create($leaveBalance) ?>
            <fieldset>
                <legend><?= __('Edit Leave Balance') ?></legend>
                <?php
                    echo $this->Form->control('employee_id', ['options' => $employees]);
                    echo $this->Form->control('term_id', ['options' => $terms]);
                    echo $this->Form->control('balance');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
