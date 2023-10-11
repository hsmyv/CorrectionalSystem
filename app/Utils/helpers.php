<?php
function setActiveHeader($header, $output = "current")
{
    return request()->routeIs($header) == $header ? $output : '';
}
