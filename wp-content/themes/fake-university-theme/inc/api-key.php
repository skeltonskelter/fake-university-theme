<?php

function universityMapKey($api)
{
    $api['key'] = 'AIzaSyAG_CXcX2AD3VhxC-mWJB4SYKW1F1nAvDQ';
    return $api;
}

add_action('rest_api_init', 'googleMapAPI');

function googleMapAPI($mapAPI)
{
    $mapAPI = '//maps.googleapis.com/maps/api/js?key=AIzaSyAG_CXcX2AD3VhxC-mWJB4SYKW1F1nAvDQ';
    return $mapAPI;
}
