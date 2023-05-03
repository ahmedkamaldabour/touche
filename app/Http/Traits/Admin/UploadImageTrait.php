<?php

namespace App\Http\Traits\Admin;

use function public_path;

trait UploadImageTrait
{
    private function uploadImage($request,
                                 $path,
                                 $old_image = null)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
            if ($old_image != null) {
                $this->deleteImage($old_image);
            }
            return $fileName;
        }
        return $old_image;
    }

    private function deleteImage($old_image)
    {
        $old_image = public_path($old_image);
        if (file_exists($old_image)) {
            unlink($old_image);
        }
    }

    private function saveImage($product, $image)
    {
        $product->update([
            'image' => $image,
        ]);
    }


}
