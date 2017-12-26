# 17-用户可以通过Popularity筛选话题
1.css的flex属性：`让所有弹性盒模型对象的子元素都有相同的长度，忽略它们内部的内容`

2.css的display的flex属性：定义容器为弹性盒
参考[使用CSS弹性盒子](https://developer.mozilla.org/zh-CN/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes)

3.`$response = $this->getJson('/threads?popularity=1')->json()`获取一个JSON响应，返回一个`TestResponse`类型。
参考[Laravel API](https://github.com/laravel/framework/blob/5.4/src/Illuminate/Foundation/Testing/Concerns/MakesHttpRequests.php#L67)

4.`array_column($response, 'replies_count')`返回数组中指定的一列。

5.需要json文件的时候在index中添加：

```
if(request()->wantsJson()){
    return $threads;
}
```
wantsJson()返回一个布尔值，查看当前的request是否要求Json。

6.`$this->builder->getQuery()->orders = [];`获得Builder实例。

