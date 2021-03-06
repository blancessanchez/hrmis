<?php $this->assign('title', 'Login'); ?>
<div class="login-box">
  <div class="login-logo">
    <?= $this->Html->link('YNS HRMIS', [
        'controller' => 'EmployeeInformation',
        'action' => 'home'
      ],
      ['escape' => false]
    ); ?>
  </div>
  <?= $this->Flash->render() ?>
  <div class="login-box-body">
    <p class="login-box-msg">Log in to start your session</p>
      <?= $this->Form->create() ?>
      <div class="form-group has-feedback">
        <?= $this->Form->control('employee_no', [
            'label' => false,
            'type' => 'number',
            'required' => false,
            'div' => false,
            'placeholder' => 'Employee Number',
            'class' => 'form-control employeeno',
            'pattern' => '[0-9]'
          ]);
        ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?= $this->Form->control('password', array(
            'label' => false,
            'type' => 'password',
            'required' => false,
            'div' => false,
            'placeholder' => 'Password',
            'class' => 'form-control'
          ));
        ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    <?= $this->Form->end() ?><br>
  </div>
</div>
