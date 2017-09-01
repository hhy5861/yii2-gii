<?php

namespace mike\gii;

/**
 * Gii Module
 */
class Module extends \yii\gii\Module
{
    /**
     * @var array
     */
    public $generators = [
        'model' => [
            'class' => 'mike\gii\generators\model\Generator',
        ],
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $class = new \ReflectionClass(\yii\gii\Module::className());
        $basePath = dirname($class->getFileName());
        $this->setBasePath($basePath);
    }
}
