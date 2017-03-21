## 安装

1. 修改 `composer.json` 文件


```
"repositories": [
    {
        "type": "vcs",
        "url": "git@gitlab.oapol.com:yii/yii2-cy-gii.git"
    }
]
```

2. 执行 `composer.phar require cy/gii`


3. 修改配置

```
if (!YII_ENV_PROD) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'cy\gii\Module',
    ];
}
```