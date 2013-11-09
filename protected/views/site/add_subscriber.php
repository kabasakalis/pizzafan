<?php
$this->pageTitle = Yii::app()->name . ' - Create Subscriber';
$this->breadcrumbs = array(
    'Add  subscriber',
);
?>

<div class="container page-min-height">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="">Add Subscriber</a></li>
            </ol>
        </div>
    </div>

    <div class="page-header">
        <h1>Add A New Subscriber</h1>
    </div>

    <div class="horizontal-form">
        <?php $form = $this->beginWidget('CActiveForm', array(
          //  'enableClientValidation' => true,
            //'enableAjaxValidation'=>true,
            // 'errorMessageCssClass'=>'has-error',
            'htmlOptions' => array('class' => 'form-horizontal',
                'role' => 'form',
                'id' => 'register-form'
            ),
            'clientOptions' => array(
                'id' => 'add-form',
                'validateOnSubmit' => true,
                'errorCssClass' => 'has-error',
                'successCssClass' => 'has-success',
                'inputContainer' => '.form-group',
                'validateOnChange' => true
            ),
        )); ?>

        <div class="form-group">
            <div class="col-lg-3 control-label">
                <div>
                    <p class="note">Fields with <span class="required">*</span> are required.</p>
                </div>
            </div>
            <div class="col-lg-5  has-error">
                <div class="help-block ">
                    <?php echo $form->errorSummary($model); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'name', array('class' => 'col-lg-3 control-label')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Full Name,ex. Πίτσας Φανόπουλος')); ?>
                <div class="help-block">
                    <?php echo $form->error($model, 'name'); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'email', array('class' => 'col-lg-3 control-label')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => 'Email')); ?>
                <span class="help-block help-inline ">
                <?php echo $form->error($model, 'email'); ?>
                    </span>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'gender', array('class' => 'col-lg-3 control-label')); ?>
            <div class="col-lg-5">
                <?php echo $form->radioButtonList($model, 'gender', array('male'=>'Male','female'=>'Female')); ?>
                <div class="help-block">
                    <?php echo $form->error($model, 'gender'); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'age', array('class' => 'col-lg-3 control-label')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'age', array('type' => 'password', 'class' => 'form-control', 'placeholder' => 'Subscriber\'s Age', 'rows' => 6, 'cols' => 50)); ?>
                <div class="help-block">
                    <?php echo $form->error($model, 'age'); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-3 col-lg-10">
                <?php echo CHtml::submitButton('Add', array('class' => 'btn btn-primary btn-lg')); ?>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
    <!-- form -->
</div>

