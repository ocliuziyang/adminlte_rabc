# adminlte_rabc
使用 laravel 和 adminlte 实现的 rabc 用户权限管理后台

##安装
>git 克隆项目代码

$ `git clone https://github.com/ocliuziyang/adminlte_rabc.git`

安装下载好之后放到 valet or Homestead or 随意目录下(这个随意目录启动项目就要使用 `php artisan serve` 命令了)

>进入项目根目录，安装 composer 依赖包 

$ `composer install`

$ `cp .env.example .env`

>运行数据库迁移文件

$ `php artisan migrate` 

$ `php artisan db:seed`

>安装前端依赖包(如果不对css, js做更改也可以不安装)

$ `npm install` (这里需要安装 node.js 程序包，如果 npm 过慢，可以采用阿里巴巴源 cnpm)

安装完毕后运行 

$ `gulp` (默认会编译 resources/assets/js 目录下文件到 public/js),

查看网站后台（采用 valet 演示）：adminlte_rabc.dev/admin/login

用户名: `owner@owner.com` 密码: `owner`
