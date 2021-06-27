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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employeeAccount->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employeeAccount->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employee Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employeeAccounts form content">
            <?= $this->Form->create($employeeAccount) ?>
            <fieldset>
                <legend><?= __('Edit Employee Account') ?></legend>
                <?php
                    echo $this->Form->control('employee_id', ['options' => $employees]);
                    echo $this->Form->control('password');
                    echo $this->Form->control('last_login', ['empty' => true]);
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
