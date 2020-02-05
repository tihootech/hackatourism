<?php

function user($p=null)
{
    return auth()->user() ? ( $p ? auth()->user()->$p : auth()->user() ) : null;
}

function master()
{
    $user = user();
    return $user && $user->type == 'master';
}

function rn()
{
    return request()->route()->getName();
}

function rs($length = 10) {
    return substr(str_shuffle(str_repeat($x='123456789ABCDEFGHJKLMNPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function short($string, $n=100)
{
    $string = strip_tags($string);
    return strlen($string) > $n ? mb_substr($string, 0, $n).'...' : $string;
}

function upload($new_file, $old_file=null)
{
    delete_file($old_file);
    if ($new_file) {
        $relarive_path = "storage/app/public";
        $file_name = random_sha(20) . '.' . $new_file->getClientOriginalExtension();
        $result = $new_file->move(base_path($relarive_path),$file_name);
        return 'storage/' . $file_name;
    }else {
        return null;
    }
}

function delete_file($income)
{
    $files = is_array($income) ? $income : [$income];
    foreach ($files as $file) {
        if ($file && file_exists($file)) {
            \File::delete($file);
        }
    }
}

function random_sha($l=10)
{
	return substr(md5(rand()), 0, $l);
}


function random_rgba($opacity=null)
{
    $opacity = $opacity ?? rand(0,10)/10;
    return "rgba(".rand(1,255).", ".rand(1,255).", ".rand(1,255).", $opacity)";
}

function urf($input){
    return str_replace(' ', '-', $input);
}

function raw($input){
    return str_replace('-', ' ', $input);
}

function class_name($string)
{
    $class = str_replace('_', '', ucwords($string, '_'));;
    return "App\\$class";
}

function remove_class_name($string)
{
    return str_replace('app\\', '', strtolower($string));;
}

function prepare_multiple($inputs)
{
    $result = [];
    foreach ($inputs as $key => $array) {
        if(is_array($array) && count($array)){
            foreach ($array as $i => $value) {
                $result[$i][$key] = $value;
            }
        }
    }
    return $result;
}


function human_time($tatal_seconds, $display_seconds=true)
{
    $seconds = $tatal_seconds % 60;
    $minutes = floor($tatal_seconds / 60);
    $output = $minutes > 0 ? $minutes.' '.__('MINUTE') : '';
    if ($minutes && $seconds && $display_seconds) {
        $output .= __('AND');
    }
    if (!$minutes || $display_seconds) {
        $output .= $seconds > 0 ? $seconds.' '.__('SECOND') : '';
    }
    return $output;
}

function toman($value)
{
    return nf($value).' تومان';
}

function nf($value)
{
    return $value ? number_format($value) : 'صفر';
}

function pretty_phone($phone)
{
    return substr($phone,0,4) . ' ' . substr($phone,4,3) . ' ' . substr($phone,7,4);
}
