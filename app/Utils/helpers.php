<?php
function setActiveHeader($header, $output = "current")
{
    return request()->routeIs($header) == $header ? $output : '';
}

function setActiveBreadcrumb($header, $output)
{
    return request()->routeIs($header) == $header ? $output : '';
}

function uploadImage($model, $imageName, $request)
{
    if ($request->hasFile($imageName)) {
        $model->addMediaFromRequest($imageName)->toMediaCollection($imageName);
    }
}
