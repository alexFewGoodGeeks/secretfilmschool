<?php
namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

trait UploadTrait
{
    public function upload(UploadedFile $uploadedFile): String
    {
        $name = Str::slug(time() . "_" . $uploadedFile->getClientOriginalName());

        $folder = '/uploads/images/';

        $disk = 'public';

        $uploadedFile->storeAs($folder, $name, $disk);

        return $folder . $name;
    }
}
