<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Article\Http\Controllers\Api', 'as' => 'api.', 'middleware' => ['api'], 'prefix' => ''], function () {

    /*
     *
     *  Categories Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'categories';
    $controller_name = 'ApiCategoriesController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);

});
