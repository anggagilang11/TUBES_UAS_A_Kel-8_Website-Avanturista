<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class MultipartHelper
{
    static function imageUpload($file)
    {
        $file_name = date('YmdHis').'-'.time().'-'.Str::random(50).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('photo/'), $file_name);
        return $file_name;
    }
}
