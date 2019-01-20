<?php

/*
Copyright © 2016 TangDongxin

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the "Software"),
to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense,
and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE
OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

if (!function_exists('d')) {
    function d($value)
    {
        if(is_array($value)) {
            header("Content-type: application/json");
            echo json_encode($value, JSON_UNESCAPED_UNICODE);
        } else {
            echo '<pre>';var_dump($value);echo '</pre>';
        }
    }
}

if(!function_exists('dd')) {
    function dd($value)
    {
        d($value);
        die(0);
    }
}

if (!function_exists('json_return')) {
    function json_return($value)
    {
        dd($value);
    }
}