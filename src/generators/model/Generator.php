<?php

namespace mike\gii\generators\model;

/**
 * model生成器, 去掉 unique 属性验证
 */
class Generator extends \yii\gii\generators\model\Generator
{
    /**
     * @var bool
     */
    public $generateLabelsFromComments = true;

    /**
     * @var array
     */
    public $templates = [
        'cy' => __DIR__ . '/default',
    ];

    /**
     * @var string
     */
    public $template = 'mike';

    /**
     * @inheritdoc
     */
    protected function isColumnAutoIncremental($table, $columns)
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function formView()
    {
        $class = new \ReflectionClass(get_parent_class($this));

        return dirname($class->getFileName()) . '/form.php';
    }
}
