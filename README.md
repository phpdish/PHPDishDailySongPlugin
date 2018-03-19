# PHPDish 每天一首歌插件

[![Latest Stable Version](https://img.shields.io/packagist/v/phpdish/daily-song-plugin.svg?style=flat-square&label=stable)](https://packagist.org/packages/phpdish/daily-song-plugin)
[![Total Downloads](https://img.shields.io/packagist/dt/phpdish/daily-song-plugin.svg?style=flat-square)](https://packagist.org/packages/phpdish/daily-song-plugin)
[![MIT License](https://img.shields.io/packagist/l/phpdish/daily-song-plugin.svg?style=flat-square)](https://packagist.org/packages/phpdish/daily-song-plugin)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/phpdish/daily-song-plugin.svg?style=flat-square)](https://scrutinizer-ci.com/g/phpdish/daily-song-plugin/?branch=master)

具体效果请前往官网查看[https://www.phpdish.com](https://www.phpdish.com)

## Installation

执行下面命令安装

```bash
$ composer require phpdish/daily-song-plugin
```

修改你的 `app/AppKernel.php` 文件注册插件：

```php
// 注册插件
$plugins = [
     ...
     
     new PHPDish\DailySongPlugin\PHPDishDailySongPlugin()
];
```
执行下面命令安装数据库：

```bash
$ bin/console doctrine:schema:update --force
```

## Usage

### 引用播放器

在你的模板文件中相应的位置写入下面的代码：

```html
{{ render(controller('PHPDishDailySongPlugin:Song:getSong')) }}
```

你会得到一个类似下面的html结构：

```html
<div class="daily-song">
    <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" height=86 src="//music.163.com/outchain/player?type=2&id=xxx&auto=0&height=66"></iframe>
</div>
```
调整样式适配你的模板。

### 管理歌曲

安装之后在你的后台 > 网站 下回出现“每天一首歌”导航，你可以在这里进行歌曲的维护。

## Support

如果有问题可以前往官网发帖或者直接在 issue 提问。

## License
   
采用 [MIT](https://opensource.org/licenses/MIT) 开源许可证。

