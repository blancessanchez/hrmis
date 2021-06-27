<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeEducation $employeeEducation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employeeEducation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEducation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employee Educations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employeeEducations form content">
            <?= $this->Form->create($employeeEducation) ?>
            <fieldset>
                <legend><?= __('Edit Employee Education') ?></legend>
                <?php
                    echo $this->Form->control('employee_id', ['options' => $employees]);
                    echo $this->Form->control('level_id');
                    echo $this->Form->control('school_name');
                    echo $this->Form->control('course_name');
                    echo $this->Form->control('date_from', ['empty' => true]);
                    echo $this->Form->control('date_to', ['empty' => true]);
                    echo $this->Form->control('highest_units_earned');
                    echo $this->Form->control('year_graduated', ['empty' => true]);
                    echo $this->Form->control('honors_received');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
