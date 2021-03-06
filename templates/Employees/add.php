<?php $this->assign('title', 'Add Employee'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Add Employee
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="<?= $this->Url->build([
          'controller' => 'EmployeeInformation',
          'action' => 'home'
        ]);
        ?>"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li class="active">View Employee</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <?= $this->Flash->render(); ?>
        <div class="box box-primary">
          <?= $this->Form->create($employee) ?>
            <div class="box-body">
              <div class="col-md-12">
                <h2 class="page-header">
                  <i class="fa fa-user"></i> Employee Information
                </h2>
              </div>
              <div class="col-md-12">
                <div class="form-group col-md-4 <?= isset($employeeErrors['employee_no']) ? 'has-error' : '' ?>">
                  <label for="employee_no">Employee Number <span style="color:red">*</span></label>
                  <?= $this->Form->control('EmployeeInformation.employee_no', [
                    'class' => 'form-control',
                    'id' => 'employee_no',
                    'label' => false
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['employee_no']) ? $employeeErrors['employee_no'] : null) ?></span>
                </div>
                <div class="form-group col-md-4 <?= isset($employeeErrors['job_position_id']) ? 'has-error' : '' ?>">
                  <label for="job_position">Job Position <span style="color:red">*</span></label>
                  <?= $this->Form->control('EmployeeInformation.job_position_id', [
                    'class' => 'form-control',
                    'id' => 'job_position',
                    'label' => false,
                    'options' => $jobPositions,
                    'type' => 'select',
                    'empty' => 'Please select'
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['job_position_id']) ? $employeeErrors['job_position_id'] : null) ?></span>
                </div>
                <div class="form-group col-md-4 <?= isset($employeeErrors['is_als']) ? 'has-error' : '' ?>">
                  <label for="is_als">Teacher type <span style="color:red">*</span></label>
                  <div class="radio">
                    <?= $this->Form->radio('EmployeeInformation.is_als',
                        [
                          ['value' => 1, 'text' => 'ALS'],
                          ['value' => 2, 'text' => 'Non-ALS'],
                        ]
                      );
                    ?>
                  </div>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['is_als']) ? $employeeErrors['is_als'] : null) ?></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group col-md-4 <?= isset($employeeErrors['status']) ? 'has-error' : '' ?>">
                  <label for="status">Status <span style="color:red">*</span></label>
                  <?= $this->Form->control('EmployeeInformation.status', [
                    'class' => 'form-control',
                    'id' => 'status',
                    'label' => false,
                    'options' => $employeeStatus,
                    'type' => 'select',
                    'empty' => 'Please select'
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['status']) ? $employeeErrors['status'] : null) ?></span>
                </div>
                <div class="form-group col-md-4 <?= isset($employeeErrors['department_id']) ? 'has-error' : '' ?>">
                  <label for="username">Department <span style="color:red">*</span></label>
                  <?= $this->Form->control('EmployeeInformation.department_id', [
                    'class' => 'form-control',
                    'id' => 'department_id',
                    'label' => false,
                    'options' => $departments,
                    'type' => 'select',
                    'empty' => 'Please select'
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['department_id']) ? $employeeErrors['department_id'] : null) ?></span>
                </div>
              </div>
              <div class="col-md-12">
                <h2 class="page-header">
                  <i class="fa fa-sticky-note"></i> Basic Information
                </h2>
              </div>
              <div class="form-group col-md-12">
                <div class="form-group col-md-4 <?= isset($employeeErrors['last_name']) ? 'has-error' : '' ?>">
                  <label for="last_name">Last Name <span style="color:red">*</span></label>
                  <?= $this->Form->control('EmployeeInformation.last_name', [
                    'class' => 'form-control',
                    'id' => 'last_name',
                    'label' => false
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['last_name']) ? $employeeErrors['last_name'] : null) ?></span>
                </div>
                <div class="form-group col-md-4 <?= isset($employeeErrors['first_name']) ? 'has-error' : '' ?>">
                  <label for="first_name">First Name <span style="color:red">*</span></label>
                  <?= $this->Form->control('EmployeeInformation.first_name', [
                    'class' => 'form-control',
                    'id' => 'first_name',
                    'label' => false
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['first_name']) ? $employeeErrors['first_name'] : null) ?></span>
                </div>
                <div class="form-group col-md-4 <?= isset($employeeErrors['middle_name']) ? 'has-error' : '' ?>">
                  <label for="middle_name">Middle Name</label>
                  <?= $this->Form->control('EmployeeInformation.middle_name', [
                    'class' => 'form-control',
                    'id' => 'middle_name',
                    'label' => false
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['middle_name']) ? $employeeErrors['middle_name'] : null) ?></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group col-md-4 <?= isset($employeeErrors['email']) ? 'has-error' : '' ?>">
                  <label for="email">Email Address</label>
                  <?= $this->Form->control('EmployeeInformation.email', [
                    'class' => 'form-control',
                    'id' => 'email',
                    'label' => false,
                    'type' => 'email'
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['email']) ? $employeeErrors['email'] : null) ?></span>
                </div>
                <div class="form-group col-md-4 <?= isset($employeeErrors['gender']) ? 'has-error' : '' ?>">
                  <label for="gender">Gender <span style="color:red">*</span></label>
                  <div class="radio">
                    <?= $this->Form->radio('EmployeeInformation.gender',
                        [
                          ['value' => 1, 'text' => 'Male'],
                          ['value' => 2, 'text' => 'Female']
                        ]
                      );
                    ?>
                  </div>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['gender']) ? $employeeErrors['gender'] : null) ?></span>
                </div>
              </div>
              <div class="col-md-12">
                <h2 class="page-header">
                  <i class="fa fa-key"></i> Account Information
                </h2>
              </div>
              <div class="col-md-12">
                <div class="form-group col-md-4 <?= isset($employeeErrors['role_id']) ? 'has-error' : '' ?>">
                  <label for="username">Role <span style="color:red">*</span></label>
                  <?= $this->Form->control('EmployeeInformation.role_id', [
                    'class' => 'form-control',
                    'id' => 'role_id',
                    'label' => false,
                    'options' => $roles,
                    'type' => 'select',
                    'empty' => 'Please select'
                  ]); ?>
                  <span class="help-block"><?= $this->Error->first(isset($employeeErrors['role_id']) ? $employeeErrors['role_id'] : null) ?></span>
                </div>
                  <?= $this->Form->control('EmployeeInformation.password', [
                    'class' => 'form-control',
                    'id' => 'password',
                    'label' => false,
                    'type' => 'hidden'
                  ]); ?>
                  <?= $this->Form->control('EmployeeInformation.confirm_password', [
                    'class' => 'form-control',
                    'id' => 'confirm_password',
                    'label' => false,
                    'type' => 'hidden'
                  ]); ?>
              </div>
            </div>
            <div class="box-footer">
              <button type="button" class="btn btn-default" onclick="return Common.clearFormAll()">Clear</button>
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#showGeneratePassword">Submit</button>
            </div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="modal fade" id="showGeneratePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Generated password for employee</h4>
      </div>
      <div class="modal-body">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title-password" id="password_show"></h3>
          </div>
        </div>
        Kindly take note of the newly created password for your next login.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-submit-employee-form">Save</button>
      </div>
    </div>
  </div>
</div>
