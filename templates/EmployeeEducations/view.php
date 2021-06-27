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
            <?= $this->Html->link(__('Edit Employee Education'), ['action' => 'edit', $employeeEducation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee Education'), ['action' => 'delete', $employeeEducation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeEducation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employee Educations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee Education'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employeeEducations view content">
            <h3><?= h($employeeEducation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $employeeEducation->has('employee') ? $this->Html->link($employeeEducation->employee->id, ['controller' => 'Employees', 'action' => 'view', $employeeEducation->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('School Name') ?></th>
                    <td><?= h($employeeEducation->school_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course Name') ?></th>
                    <td><?= h($employeeEducation->course_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Highest Units Earned') ?></th>
                    <td><?= h($employeeEducation->highest_units_earned) ?></td>
                </tr>
                <tr>
                    <th><?= __('Honors Received') ?></th>
                    <td><?= h($employeeEducation->honors_received) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employeeEducation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level Id') ?></th>
                    <td><?= $this->Number->format($employeeEducation->level_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $this->Number->format($employeeEducation->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date From') ?></th>
                    <td><?= h($employeeEducation->date_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date To') ?></th>
                    <td><?= h($employeeEducation->date_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year Graduated') ?></th>
                    <td><?= h($employeeEducation->year_graduated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($employeeEducation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($employeeEducation->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($employeeEducation->deleted_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
