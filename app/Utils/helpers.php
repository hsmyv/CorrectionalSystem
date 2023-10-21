<?php
function setActiveHeader($header, $output = "current")
{
    return request()->routeIs($header) == $header ? $output : '';
}

function setActiveBreadcrumb($header, $output)
{
    return request()->routeIs($header) == $header ? $output : '';
}


function uploadImage($model, $imageName)
{
    if (request()->hasFile($imageName)) {
        $model->clearMediaCollection($imageName);
        $model->addMediaFromRequest($imageName)->toMediaCollection($imageName);
    }
}

function uploadVideo($videoName, $request)
{
    if ($request->hasFile($videoName)) {
        $video = $request->file($videoName);
        $path = $video->store('videos/' . $videoName, 'public');
        return $path;
    }
}

function homePageInputs()
{
    return  [
        "first_slide_first_word",
        "first_slide_second_word",
        "first_slide_third_word",
        "first_slide_button",
        "second_slide_first_word",
        "second_slide_second_word",
        "second_slide_third_word",
        "second_slide_button",
        "third_slide_first_word",
        "third_slide_second_word",
        "features_button",
        "donate_title",
        "donate_excerpt",
        "donate_button",
        "donate_content",
        "act_title",
        "act_excerpt",
        "act_button",
        "act_content",
        "first_writing_title",
        "first_writing_description",
        "second_writing_title",
        "second_writing_description",
        "third_writing_title",
        "third_writing_description",
        "subscribe_title",
        "subscribe_button"
    ];
}
function aboutPageInputs()
{
    return  ['upper_slide_title' => '', 'upper_slide_description' => '', 'middle_section_title' => '', 'middle_section_excerpt' => '', 'middle_section_content' => ''];
}

function contactPageInputs()
{
    return [
    "map" => "",
    "config_mail" => "",
    "config_password" => "",
    "address" => "",
    "phone" => "",
    "mail" => "",
    "before_contact_us" => "",
    "schedule" => ""
    ];
}
