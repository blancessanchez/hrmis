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
            <?= $this->Html->link(__('List Employee Employments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employeeEmployments form content">
            <?= $this->Form->create($employeeEmployment) ?>
            <fieldset>
                <legend><?= __('Add Employee Employment') ?></legend>
                <?php
                    echo $this->Form->control('employee_id', ['options' => $employees]);
                    echo $this->Form->control('hired_date', ['empty' => true]);
                    echo $this->Form->control('probationary_date', ['empty' => true]);
                    echo $this->Form->control('regularization_date', ['empty' => true]);
                    echo $this->Form->control('resigned_date', ['empty' => true]);
                    echo $this->Form->control('terminated_date', ['empty' => true]);
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
