# Laravel-Forum
本项目是一个由Laravel5.4搭建的论坛，使用TDD的方式来构建论坛，即先写测试，再写功能。
主要的参考资料为 [Laracast中Jeffery way的视频教程](https://laracasts.com/series/lets-build-a-forum-with-laravel) 以及 [Laravel手册](https://laravel.com/docs/5.4) 和 [Laravel API](http://devdocs.io/laravel~5.4/)

# 搭建笔记
这部分笔记包括学习过程和对整个框架的不断改进的记录。

## [功能框架分析](https://github.com/Gijera/Laravel-Forum/tree/master/论坛搭建笔记/论坛总图分析)
* [测试](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/论坛总图分析/测试.md)
* [路由](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/论坛总图分析/路由.md)
* [数据](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/论坛总图分析/数据.md)
* [模型](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/论坛总图分析/模型.md)
* [控制器](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/论坛总图分析/控制器.md)
* [视图](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/论坛总图分析/视图.md)

注意：笔记中前面的数字表示该测试创建的顺序

## [过程记录笔记](https://github.com/Gijera/Laravel-Forum/tree/master/论坛搭建笔记/搭建过程笔记)
* [01-使用Seeding填充数据库](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/01-使用Seeding填充数据库.md)
* [02-编写Threads测试驱动](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/02-编写Threads测试驱动.md)
* [03-话题的回复](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/03-话题的回复.md)
* [04-用户可以在话题中评论](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/04-用户可以在话题中评论.md)
* [05-Reply表单](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/05-Reply表单.md)
* [06-用户可以添加话题](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/06-用户可以添加话题.md)
* [07-添加一些帮助测试](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/07-添加一些帮助测试.md)
* [08-异常处理难题](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/08-异常处理难题.md)
* [09-一个话题应该被分配给一个频道](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/09-一个话题应该被分配给一个频道.md)
* [10-如何测试表单的验证错误](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/10-如何测试表单的验证错误.md)
* [11-用户可以根据频道筛选话题](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/11-用户可以根据频道筛选话题.md)
* [12-验证错误和遗留数据](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/12-验证错误和遗留数据.md)
* [13-提取到视图组件](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/13-提取到视图组件.md)
* [14-用户可以通过用户名来筛选话题](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/14-用户可以通过用户名来筛选话题.md)
* [15-重构一下代码](https://github.com/Gijera/Laravel-Forum/blob/master/论坛搭建笔记/搭建过程笔记/15-重构一下代码.md)