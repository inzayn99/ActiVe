<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::any('/', 'ApplicationController@index')->name('index');
    Route::any('/contact', 'ApplicationController@contact')->name('contact');


    Route::any('login', 'ApplicationController@login')->name('login');

    Route::group(['prefix' => 'users', 'middleware' => 'auth:web'], function () {
        Route::any('/', 'ApplicationController@user')->name('users');
        Route::any('/logout', 'ApplicationController@logout')->name('logout');
    });
});

Route::group(['namespace' => 'Backend'], function () {
    Route::any('admin-login', 'AdminUserController@login')->name('admin-login');
});

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::any('/', 'DashboardController@index')->name('admin');


    //admin//
    Route::group(['prefix' => 'admin-users'], function () {
        Route::any('/', 'AdminUserController@index')->name('admin-users');
        Route::any('/add-admin-user', 'AdminUserController@add')->name('add-admin-user');
        Route::any('update-admin-status', 'AdminUserController@updateStatus')->name('update-admin-status');
        Route::any('update-admin-type', 'AdminUserController@updateAdminType')->name('update-admin-type');
        Route::any('delete-admin-user/{criteria?}', 'AdminUserController@delete')->name('delete-admin-user');
        Route::any('edit-admin-user/{criteria?}', 'AdminUserController@edit')->name('edit-admin-user');
        Route::any('edit-admin-user-action', 'AdminUserController@editAction')->name('edit-admin-user-action');
    });
    //Category//
    Route::group(['prefix' => 'category'], function () {
        Route::any('/', 'CategoryController@index')->name('category');
        Route::any('/add-category', 'CategoryController@add')->name('add-category');
        Route::any('update-category-status', 'CategoryController@updateStatus')->name('update-category-status');
        Route::any('delete-category/{criteria?}', 'CategoryController@delete')->name('delete-category');
        Route::any('edit-category/{criteria?}', 'CategoryController@edit')->name('edit-category');
        Route::any('edit-category-action', 'CategoryController@editAction')->name('edit-category-action');

    });

    //subcategory//
    Route::group(['prefix' => 'sub-category'], function () {
        Route::any('/', 'SubCategoryController@index')->name('sub-category');
        Route::any('/add-sub-category', 'SubCategoryController@add')->name('add-sub-category');
        Route::any('update-sub-category-status', 'SubCategoryController@updateStatus')->name('update-sub-category-status');
        Route::any('delete-sub-category/{criteria?}', 'SubCategoryController@delete')->name('delete-sub-category');
        Route::any('edit-sub-category/{criteria?}', 'SubCategoryController@edit')->name('edit-sub-category');
        Route::any('edit-sub-category-action', 'SubCategoryController@editAction')->name('edit-sub-category-action');
    });

    //Flash News //
    Route::group(['prefix' => 'flash-news'], function () {
        Route::any('/', 'FlashNewsController@index')->name('flash-news');
        Route::any('/add-sub-category', 'FlashNewsController@add')->name('add-flash-news');
        Route::any('update-sub-category-status', 'FlashNewsController@updateStatus')->name('update-flash-news');
        Route::any('delete-sub-category/{criteria?}', 'FlashNewsController@delete')->name('delete-flash-news');
        Route::any('edit-sub-category/{criteria?}', 'FlashNewsController@edit')->name('edit-flash-news');
        Route::any('edit-sub-category-action', 'FlashNewsController@editAction')->name('edit-flash-news-action');
    });

    //-----Trending----- //
    Route::group(['prefix' => 'trending'], function () {
        Route::any('/', 'TrendingController@index')->name('show-trending');
        Route::any('/add-trending', 'TrendingController@add')->name('add-trending');
        Route::any('update-trending-status', 'TrendingController@updateStatus')->name('update-trending');
        Route::any('delete-trending/{criteria?}', 'TrendingController@delete')->name('delete-trending');
        Route::any('edit-trending/{criteria?}', 'TrendingController@edit')->name('edit-trending');
        Route::any('edit-trending-action', 'TrendingController@editAction')->name('edit-trending-action');
    });


    //-----SponsoredNews----- //
    Route::group(['prefix' => 'sponsored-news'], function () {
        Route::any('/', 'SponsoredNewsController@index')->name('show-sponsored-news');
        Route::any('/add-sponsored-news', 'SponsoredNewsController@add')->name('add-sponsored-news');
        Route::any('update-sponsored-news-status', 'SponsoredNewsController@updateStatus')->name('update-sponsored-news');
        Route::any('delete-sponsored-news/{criteria?}', 'SponsoredNewsController@delete')->name('delete-sponsored-news');
        Route::any('edit-sponsored-news/{criteria?}', 'SponsoredNewsController@edit')->name('edit-sponsored-news');
        Route::any('edit-sponsored-news-action', 'SponsoredNewsController@editAction')->name('edit-sponsored-news-action');
    });

    //-----Today's highlight----- //
    Route::group(['prefix' => 'Highlights'], function () {
        Route::any('/', 'HighlightController@index')->name('show-hightlights');
        Route::any('/add-highlight', 'HighlightController@add')->name('add-hightlight');
        Route::any('update-highlight-status', 'HighlightController@updateStatus')->name('update-highlight');
        Route::any('delete-highlight/{criteria?}', 'HighlightController@delete')->name('delete-highlight');
        Route::any('edit-highlight/{criteria?}', 'HighlightController@edit')->name('edit-highlight');
        Route::any('edit-highlight-action', 'HighlightController@editAction')->name('edit-highlight-action');
    });


    //-----Trending Topics----- //
    Route::group(['prefix' => 'TrendingTopics'], function () {
        Route::any('/', 'TrendingTopicsController@index')->name('show-trending-topics');
        Route::any('/add-trending-topics', 'TrendingTopicsController@add')->name('add-trending-topics');
        Route::any('update-trending-topics-status', 'TrendingTopicsController@updateStatus')->name('update-trending-topics');
        Route::any('delete-trending-topics/{criteria?}', 'TrendingTopicsController@delete')->name('delete-trending-topics');
        Route::any('edit-trending-topics/{criteria?}', 'TrendingTopicsController@edit')->name('edit-trending-topics');
        Route::any('edit-trending-topics-action', 'TrendingTopicsController@editAction')->name('edit-trending-topics-action');
    });

    //-----Footer----- //
    Route::group(['prefix' => 'Footer'], function () {
        Route::any('/', 'FooterController@index')->name('show-footer');
        Route::any('/add-footer', 'FooterController@add')->name('add-footer');
        Route::any('update-footer-status', 'FooterController@updateStatus')->name('update-footer');
        Route::any('delete-footer/{criteria?}', 'FooterController@delete')->name('delete-footer');
        Route::any('edit-footer/{criteria?}', 'FooterController@edit')->name('edit-footer');
        Route::any('edit-footer-action', 'FooterController@editAction')->name('edit-footer');
    });

    //-----MainPost----- //
    Route::group(['prefix' => 'Main-Post'], function () {
        Route::any('/', 'MainPostController@index')->name('show-main-post');
        Route::any('/add-main-post', 'MainPostController@add')->name('add-main-post');
        Route::any('update-main-post-status', 'MainPostController@updateStatus')->name('update-main-post');
        Route::any('delete-main-post/{criteria?}', 'MainPostController@delete')->name('delete-main-post');
        Route::any('edit-main-post/{criteria?}', 'MainPostController@edit')->name('edit-main-post');
        Route::any('edit-main-post-action', 'MainPostController@editAction')->name('edit-main-post');
    });


    Route::any('admin-logout', "AdminUserController@logout")->name('admin-logout');
});
