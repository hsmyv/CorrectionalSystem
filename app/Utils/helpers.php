<?php
function setActiveHeader($header, $output = "current")
{
    return request()->routeIs($header) == $header ? $output : '';
}

function setActiveBreadcrumb($header, $output)
{
    return request()->routeIs($header) == $header ? $output : '';
}
