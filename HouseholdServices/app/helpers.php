<?php

if(!function_exists('active_class')){
    function active_class($path, $active = 'active') {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}

if(!function_exists('is_active_route')){
    function is_active_route($path) {
        return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
    }
}

if(!function_exists('show_class')){
    function show_class($path) {
        return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
    }
}

if(!function_exists('btnColor')){
    function btnColor($category) {
        $color = match($category){
            'Cleaning Services' => 'danger',
            'Plumbing Services' => 'primary',
            'Gardening Services' => 'success',
        };
        return $color;
    }
}

if(!function_exists('starRating')){
    function starRating($worker_rating) {
        $star = '';
        for ($i = 0; $i < 5; $i++) {
            if($worker_rating > 0.9)
                $star .= '<i class="ri-star-fill text-warning align-bottom"></i>';
            elseif ($worker_rating > 0 && $worker_rating < 0.9)
                $star .= '<i class="ri-star-half-line text-warning align-bottom"></i>';
            elseif ($worker_rating <= 0)
                $star .= '<i class="ri-star-line text-warning align-bottom"></i>';
            $worker_rating--;
        }
        echo $star;
    }
}
