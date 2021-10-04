# plugin-creater

Hyperf 插件创建器

## 使用方式

```shell script
# 先进入 app 目录
cd /opt/wwww/demo/hyperf-skeleton
# 比如要创建一个 yogcloud/demo 的插件
# plugin/shop/demo
# plugin 表示插件目录
# yogcloud 一般为开发者github账号/composer 作者名
# demo 为插件名称
# 执行命令根据提示一步步操作即可
composer create-project yogcloud/plugin-creater plugin/youcloud/demo
```

## 插件目录示例
```shell script
# 执行成功后就会得到一下如下结构的插件
plugin/yogcloud/demo/
|-- composer.json
|-- phpunit.xml
|-- README.md
|-- src
|   |-- ConfigProvider.php
|   |-- Request------------------------------------- 验证器目录
|   |-- Exception----------------------------------- 异常类目录
|   |-- Controller---------------------------------- 控制器目录
|   |-- Contract------------------------------------ 服务接口契约目录
|   |-- Job----------------------------------------- 异步任务目录
|   |-- Listener------------------------------------ 事件监听器目录
|   |-- Logic--------------------------------------- 业务逻辑目录
|   |-- Model--------------------------------------- 模型目录
|   |-- Queue--------------------------------------- 异步队列目录
|   |-- Service------------------------------------- 服务目录
|   `-- Task---------------------------------------- 定时任务目录
`-- tests
    |-- bootstrap.php
    `-- Cases
```

## 感谢：
本工具根据 `mochat/plugin-creater` 大量代码 Copy 而来，再次感谢。