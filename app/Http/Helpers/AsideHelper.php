<?php 


function is_active($name) {
    $route_name = request()->route()->getName();    
    $route_name_array = explode('.',$route_name);

    if ( in_array($name,$route_name_array) )
        return 'active';

}