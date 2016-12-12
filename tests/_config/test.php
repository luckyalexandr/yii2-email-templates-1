<?php
return [
    'id' => 'email-templates-test',
    'class' => 'yii\console\Application',
    'basePath' => Yii::getAlias('@app'),

    'vendorPath' => Yii::getAlias('@vendor'),
    'runtimePath' => Yii::getAlias('@app/_output'),
    'bootstrap' => [],

    'components' => [
        'db' => require(__DIR__ . '/db.php'),
        'languageProvider' => [
            'class' => \bl\emailTemplates\providers\DbLanguageProvider::className(),
            'tableName' => 'language',
            'idField' => 'id',
            'nameField' => 'name'
        ],
        'templateManager' => [
            'class' => \bl\emailTemplates\components\TemplateManager::className()
        ],
    ],

    'params' => [],
];