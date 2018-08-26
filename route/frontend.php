<?php

Route::get('/', 'frontend/Index/index')->name('homepage');

Route::get('/articles$', 'frontend/Article/index')->name('article_list');
Route::get('/articles/:id/show$', 'frontend/Article/detail')
		->pattern(['id'=>'\d+'])
		->name('article_detail');

Route::get('/tags/:id/atricles$', 'frontend/Article/tagArticle')
		->pattern(['id'=>'\d+'])
		->name('tag_article_list');

Route::get('/user/:id/info$', 'frontend/Article/userInfo')
		->pattern(['id'=>'\d+'])
		->name('user_info');

Route::get('/ajax/categories$', 'frontend/Article/categoryList')->name('ajax_category_list');
Route::get('/ajax/tags$', 'frontend/Article/tagList')->name('ajax_tag_list');
