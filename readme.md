<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

环境的使用
mv|touch  等在 虚拟机|连接工具上使用
composer|yarn|npm  在本地终端使用=>git 提供的终端环境
保证了yarn这些的版本问题

bad  requres
复制  .env
composer install
php artsan  passport:keys
openssl config failed: error:02001003:system library:fopen:No such process

git——CRLF-LF
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/layouts/_header.blade.php.

git config core.autocrlf false
git add -A

alert();

debugger-controller
use Illuminate\Support\Facades\Log;

Log::error(compact('list', 'list2'));


git 建立 流程 
github 新建 (如果是新的电脑/虚拟机，可以把秘钥或者设置用户名，email)
git clone ...
git add ...
git commit “。。。。”
git push origin master/dev/等
注意:commit 时 内容用 双引号

遇见网页上 not input 。。。时 ，其中一种情况是变动了配置文件而没有重新加载这项配置（是Homestead的配置） 
数据库连接前可用连接工具测试  但是 .env   下  DB_host =127.0.0.1   时易出错 于执行 php artisan migrate ，建议改为 DB_host = localhost  


error:路由错误  |   缓存  | not defined auth.login   

解决：php artisan route:cache && php artisan config:cache    以及 composer dumpautoload


laravel-shop
composer
composer require overtrue/laravel-lang
composer require encore/laravel-admin "1.5.*"
composer require predis/predis
composer require endroid/qr-code
// 生成二维码

后台图片错误，上传文件后只是存了文件，没有给予其软连接
php artisan storage:link

展示时图片储存为软连接的不显示，需转为绝对路径
在对应的Model中，首先判断是否为完整的url，主要看有无http/https
use Illuminate\Support\Str;

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
// \Storage::disk('public') 此配置在对应的配置环境中需一致
    }

通知类:	notification 
php artisan make:notification OrderPaidNotification