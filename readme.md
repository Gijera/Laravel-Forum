# Laravel-Forum
本项目是一个由Laravel5.4搭建的论坛，使用TDD的方式来构建论坛，即先写测试，再写功能。
主要的参考资料为 [Laracast中Jeffery way的视频教程](https://laracasts.com/series/lets-build-a-forum-with-laravel) 以及 [Laravel手册](https://laravel.com/docs/5.4) 和 [Laravel API](http://devdocs.io/laravel~5.4/)，当然还有[php](http://php.net)。

下面是论坛的所有测试：
## Feather测试
### ParticipateInForumTest.php
* (7)an_authenticated_user_may_participate_in_forum_threads
* (9)unauthenticated_users_may_not_add_replies
* (18)a_reply_requires_a_body

### ReadThreadsTest.php
* (1)a_user_can_view_all_threads
* (2)a_user_can_read_a_single_thread
* (3)a_user_can_read_replies_that_are_associated_with_a_thread
* (19)a_user_can_filter_threads_according_to_a_channel
* (21)a_user_can_filter_threads_by_any_username
* (22)a_user_can_filter_threads_by_popularity

### CreateThreadsTest.php
* (10)an_authenticated_user_can_create_new_forum_threads
* (11)guests_may_not_create_threads
* (14)a_thread_requires_a_title
* (15)publishThread
* (16)a_thread_requires_a_body
* (17)a_thread_requires_a_valid_channel
* (28)a_thread_can_be_deleted
* (29)guest_cannot_delete_threads

### FavoritasTest.php
* (23)an_authenticated_user_can_favorite_any_reply
* (24)guests_can_not_favorite_anything
* (25)an_authenticated_user_may_only_favorite_a_reply_once

### ProfilesTest.php
* (26)a_user_has_a_profile
* (27)profiles_display_all_threads_created_by_the_associated_use

## Unit测试
### ThreadTest
* (5)a_thread_has_replies
* (6)a_thread_has_a_creator
* (8)a_thread_can_add_a_reply
* (12)a_thread_belongs_to_a_channel
* (13)a_thread_can_make_a_string_path

### ReplyTest
* (4)it_has_an_owner

### ChannelTest
* (20)a_channel_consists_of_threads