<?php


use Illuminate\Support\Facades\Route;

Route::resource('pages', 'CMS\PageController');
Route::resource('sections', 'CMS\SectionController');
Route::resource('columns', 'CMS\ColumnController');
Route::resource('blocks', 'CMS\BlockController');
Route::resource('contents', 'CMS\ContentController');
Route::resource('images', 'CMS\ImageController');
