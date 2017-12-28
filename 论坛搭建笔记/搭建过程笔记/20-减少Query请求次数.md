# 20-减少Query请求次数
1.使用laravel-debugbar工具，发现在all thread页面，也就是显示所有话题的页面，调用了许多次数据库请求，罪魁祸首就是因为在index.blade.php中使用的path()方法，该方法获取一个thread的路径：

```
public function path()
{
	return "/threads/{$this->channel->slug}/{$this->id}";
}
```
解决办法，把ThreadController.php中的getThreads方法修改`$threads = Thread::latest()->filter($filters);`为`$threads = Thread::with('channel')->latest()->filter($filters);`即只调用一次Laravel请求，请求立即减少。

2.在视图模版中使用了`$view->with('channels', Channel::all());`这条语句，这意味着每次调用channels变量，都要运行Channel::all()语句，利用Laravel的缓存机制，可以减少查询语句次数：

```
$channels = \Cache::rememberForever('channels',function(){
    return Channel::all();
});
$view->with('channels', $channels);
```

3.在单独的thread页面中，第一个问题是show.blade.php中频繁对每个回复调用`$reply->owner->name`，把它改成一个变量`$reply->favorites_count`。在Thread中的replies方法中把count作为一个变量存储起来：

```
public function replies()
{
	return $this->hasMany(Reply::class)
        ->withCount('favorites');
}
```

4.第二个问题是为了获取每条评论喜欢的数量，频繁的调用了`$reply->favorites()->count()`。同样的，加上with('owner')：

```
return $this->hasMany(Reply::class)
    ->withCount('favorites')
    ->with('owner');
```

