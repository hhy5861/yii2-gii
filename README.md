## 安装

1. 修改 `composer.json` 文件


```
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:hhy5861/yii2-gii.git"
    }
]
```

2. 执行 `composer.phar require "mike/gii:dev-master"`


3. 修改配置

```
if (!YII_ENV_PROD) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'mike\gii\Module',
    ];
}
```