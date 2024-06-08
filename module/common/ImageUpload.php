<?php

namespace Module\Common;

use Intervention\Image\Facades\Image;

trait ImageUpload
{

    public function imageUploadByThumb($image)
    {

        $this->makeDir();

        $data = getimagesize($image);
        $width = $data[0];
        $height = $data[1];

        $file_name = $image->store('upload','public');
        $image = Image::make(public_path('storage/'.$file_name))->resize(50 * $width/$height,50);
        $image->save('storage/50_50/'.$file_name,60);
        $image = Image::make(public_path('storage/'.$file_name))->resize(300 * $width/$height,300);
        $image->save('storage/300_300/'.$file_name,60);
        $image = Image::make(public_path('storage/'.$file_name))->resize(700 * $width/$height,700);
        $image->save('storage/700_700/'.$file_name,60);
        return $file_name;
    }

    public function uploadFile($file)
    {
        return $file->store('public/files');
    }

    public function unlinkAllImage($image)
    {
        if (isset($image) && file_exists(public_path('storage/'.$image))){
            unlink(public_path('storage/'.$image));
        }

        if (isset($image) && file_exists(public_path('storage/50_50/'.$image))){
            unlink(public_path('storage/50_50/'.$image));
        }

        if (isset($image) && file_exists(public_path('storage/300_300/'.$image))){
            unlink(public_path('storage/300_300/'.$image));
        }

        if (isset($image) && file_exists(public_path('storage/700_700/'.$image))){
            unlink(public_path('storage/700_700/'.$image));
        }
    }

    public function makeDir()
    {
        if (!file_exists(public_path('storage/50_50'))){
            mkdir(public_path('storage/50_50'));
        }

        if (!file_exists(public_path('storage/50_50/upload'))){
            mkdir(public_path('storage/50_50/upload'));
        }

        if (!file_exists(public_path('storage/300_300'))){
            mkdir(public_path('storage/300_300'));
        }

        if (!file_exists(public_path('storage/300_300/upload'))){
            mkdir(public_path('storage/300_300/upload'));
        }

        if (!file_exists(public_path('storage/700_700'))){
            mkdir(public_path('storage/700_700'));
        }

        if (!file_exists(public_path('storage/700_700/upload'))){
            mkdir(public_path('storage/700_700/upload'));
        }

        if (!file_exists(public_path('storage/upload'))){
            mkdir(public_path('storage/upload'));
        }
    }

}
