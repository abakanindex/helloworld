<?php

namespace Acme\Http\Controller;

class HelloWorldController {

    public function hello($name = null) {
        return view('helloworldpackage::hello-world', compact('name'));
    }


}