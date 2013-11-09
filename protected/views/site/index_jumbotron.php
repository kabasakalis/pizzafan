<?php $this->pageTitle = Yii::app()->name; ?>
<div class="jumbotron">
<h2 class="page-header">Mail List</h2>
</div>
<div class="container">

</div>
<p><a  href="<?php echo app()->createUrl('site/addSubscriber'); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span>  Add Subscriber  </a></p>
<?php
Yii::import('bootstrap.widgets.TbGridView');
$this->widget('TbGridView', array(
    'dataProvider'=>$listDataProvider,
    'htmlOptions' => array('class' => 'grid-view'),
    'pager'=>array('class' => 'bootstrap.widgets.TbPager','htmlOptions'=>array('listOptions' => array('class'=>'pagination' ))),
    'itemsCssClass' => 'table table-striped table-bordered table-condensed',
    'cssFile' =>false,
    'filter'=>$filtersForm,
    'columns' => array(
        array(
            'name' => 'name',
            'type' => 'raw',
            'value' => 'CHtml::encode($data["name"])'
        ),
        array(
            'name' => 'email',
            'type' => 'raw',
            'value' => 'CHtml::encode($data["email"])',
        ),
        array(
            'name' => 'age',
            'type' => 'raw',
            'value' => 'CHtml::encode($data["age"])',
        ),
        array(
            'name' => 'gender',
            'type' => 'raw',
            'value' => 'CHtml::encode($data["gender"])',
        ),
        array(
            'name' => 'datetime',
            'filter'=>false,
            'type' => 'raw',
            'value' => 'Yii::app()->dateFormatter->formatDateTime($data["datetime"])',
        ),
        array(
            'name' => 'state',
            'type' => 'raw',
            'value' => 'CHtml::encode($data["state"])',
            'filter'=>false,
        ),
        array(
            'class' => 'CButtonColumn',
            'htmlOptions' => array('style' => 'width:75px'),
            'buttons' => array(
                'deleted' => array(
                    'label' =>  'Delete', // text label of the button
                    'url' =>'Yii::app()->controller->createUrl("/site/deleteSubscriber", array("email"=> CHtml::encode($data["email"])))', // a PHP expression for generating the URL of the button
                    'imageUrl' => Yii::app()->baseUrl . '/img/icons/cross.png', // image URL of the button.If not set or false,a text link is used
                    'options' => array("class" => "del", 'title' => 'Delete'), // HTML options for the button
                    'deleteConfirmation'=>'false'
                ),
                'update' => array(
                    'label' => 'Update', // text label of the button
                    'url' => '$data["email"]', // a PHP expression for generating the URL of the button
                   'imageUrl' =>Yii::app()->baseUrl  . '/img/icons/pencil.png', // image URL of the button.   If not set or false, a text link is used
                    'options' => array("class" => "update", 'title' =>  'Update'), // HTML options for the    button tag
                ),
                'view' => array(
                    'label' =>  'View', // text label of the button
                    'url' => '$data["email"]', // a PHP expression for generating the URL of the button
                   'imageUrl' =>Yii::app()->baseUrl . '/img/icons/view.png', // image URL of the button.   If not set or false, a text link is used
                    'options' => array("class" => "view", 'title' =>  'View'), // HTML options for the    button tag
                )
            ),
            'template' => '{deleted}',
        ),

    ),

));

?>

<div class="row">
    <div class="col-lg-4">
        <h2>Heading</h2>

        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui. </p>

        <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>Heading</h2>

        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui. </p>

        <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>Heading</h2>

        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
            felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
            massa justo sit amet risus.</p>

        <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
    </div>
</div>
