<?php

Route::get('hello-world/{name?}', 'Acme\Http\Controllers\HelloWorldController@hello');