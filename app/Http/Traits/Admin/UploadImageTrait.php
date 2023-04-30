<?php

namespace App\Http\Traits\Admin;

trait UploadImageTrait
{
    private function uploadImage($request, $path, $old_image = null)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
            if ($old_image != null) {
                $this->deleteImage($path, $old_image);
            }
            return $fileName;
        }
        return $old_image;
    }

    private function deleteImage($path, $old_image)
    {
        if (file_exists($path . $old_image)) {
            unlink($path . $old_image);
        }
    }

    private function saveImage($product, $image)
    {
        $product->update([
            'image' => $image,
        ]);
    }


}
