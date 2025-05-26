<?php

namespace App\Trait;

use Illuminate\Http\UploadedFile;

trait UploadFile
{
    //
    protected function uploadImage(UploadedFile $file, string $directory = 'uploads')
    {
        $imageName = 'freshen_' . uniqid() . "." . $file->getClientOriginalExtension();
        $file->move(public_path($directory), $imageName);
        return $directory . "/" . $imageName;
    }
}
