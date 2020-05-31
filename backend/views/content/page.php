<?php

use \thecodeholic\yii2grapesjs\widgets\GrapesjsWidget as grapeWidget;

echo grapeWidget::widget([
                                 'clientOptions' => [
                                         'storageManager' => [
                                                /* 'id'              => '',
                                                 'type'            => 'remote',
                                                 'stepsBeforeSave' => 1,
                                                 'urlStore'        => "save?id=$model->id",
                                                 'urlLoad'         => "get?id=$model->id",*/
                                         ],
                                         'assetManager'   => [
                                                 'upload' => "upload"
                                         ],
                                 /*        'deviceManager'  => [
                                                 'defaultDevice' => 'Resolution 2',
                                                 'devices'       => [
                                                         [
                                                                 'name'       => 'Resolution 1',
                                                                 'width'      => '850px',
                                                                 'widthMedia' => '992px'
                                                         ],
                                                         [
                                                                 'name'  => 'Resolution 2',
                                                                 'width' => '750px',
                                                         ],
                                                         [
                                                                 'name'  => 'Resolution 3',
                                                                 'width' => '650px'
                                                         ],
                                                         [
                                                                 'name'  => 'Resolution 4',
                                                                 'width' => '450px',
                                                         ],
                                                         [
                                                                 'name'  => 'Resolution 5',
                                                                 'width' => '375px',
                                                         ]
                                                 ]
                                         ]*/
                                 ],
                                 // custom placeholder variables which will be added into richtext
                                 // default is empty array
                                 'variables'     => [
                                         '{first_name}' => 'First Name',
                                         '{last_name}'  => 'Last Name',
                                         '{age}'        => 'Age',
                                 ]
                         ]) ?>