<?php

function user($p=null)
{
    return auth()->user() ? ( $p ? auth()->user()->$p : auth()->user() ) : null;
}

function currentArtisan($p=null)
{
    return isArtisan() ? ( $p ? user('owner')->$p : user('owner') ) : null;
}

function isMaster()
{
    $user = user();
    return $user && $user->type == 'master';
}

function isArtisan()
{
    $user = user();
    return $user && $user->type == 'artisan';
}

function isCustomer()
{
    $user = user();
    return $user && $user->type == 'customer';
}

function rn()
{
    return request()->route()->getName();
}

function randomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='123456789ABCDEFGHJKLMNPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function short($string, $n=100)
{
    $string = strip_tags($string);
    return strlen($string) > $n ? mb_substr($string, 0, $n).'...' : $string;
}

function upload($new_file, $old_file=null)
{
    deleteFile($old_file);
    if ($new_file) {
        $relarive_path = "storage/app/public";
        $file_name = randomString(20) . '.' . $new_file->getClientOriginalExtension();
        $result = $new_file->move(base_path($relarive_path),$file_name);
        return 'storage/' . $file_name;
    }else {
        return null;
    }
}

function deleteFile($income)
{
    $files = is_array($income) ? $income : [$income];
    foreach ($files as $file) {
        if ($file && file_exists($file)) {
            \File::delete($file);
        }
    }
}

function randomSha($l=10)
{
	return substr(md5(rand()), 0, $l);
}


function urf($input){
    return str_replace(' ', '-', $input);
}

function raw($input){
    return str_replace('-', ' ', $input);
}

function className($string)
{
    $class = str_replace('_', '', ucwords($string, '_'));;
    return "App\\$class";
}

function removeClassName($string)
{
    return str_replace('app\\', '', strtolower($string));;
}

function prepareMultiple($inputs)
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


function humanTime($tatal_seconds, $display_seconds=true)
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

function prettyPhone($phone)
{
    return substr($phone,0,4) . ' ' . substr($phone,4,3) . ' ' . substr($phone,7,4);
}
