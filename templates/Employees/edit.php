<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Edit Employee') ?></legend>
                <?php
                    echo $this->Form->control('role_id');
                    echo $this->Form->control('employee_no');
                    echo $this->Form->control('department_id', ['options' => $departments]);
                    echo $this->Form->control('job_position_id', ['options' => $jobPositions]);
                    echo $this->Form->control('employee_status');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('middle_name');
                    echo $this->Form->control('name_extension');
                    echo $this->Form->control('email');
                    echo $this->Form->control('blood_type');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('birth_date', ['empty' => true]);
                    echo $this->Form->control('birth_place');
                    echo $this->Form->control('citizenship');
                    echo $this->Form->control('citizenship_country');
                    echo $this->Form->control('residential_address');
                    echo $this->Form->control('residential_zipcode');
                    echo $this->Form->control('telephone_no');
                    echo $this->Form->control('mobile_no');
                    echo $this->Form->control('gsis_id_no');
                    echo $this->Form->control('pagibig_id_no');
                    echo $this->Form->control('philhealth_no');
                    echo $this->Form->control('sss_no');
                    echo $this->Form->control('tin_no');
                    echo $this->Form->control('image');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
