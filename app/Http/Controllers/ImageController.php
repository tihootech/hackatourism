<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function manage($type, $id)
    {
        // ==== retrieve objects from database
    	$images = Image::whereOwnerType(className($type))->whereOwnerId($id)->latest()->get();

        // ==== return proper view
		return view('dashboard.images.manage', compact('images', 'type', 'id'));
    }

	public function upload(Request $request)
	{
		// TODO: check if user is allowed to upload image for the instance

        // ==== validate incoming request
        $request->validate([
            'owner_type' => 'required',
            'owner_id' => 'required',
            'images.*' => 'required|image|max:4000',
        ]);

        // ==== upload and store images
		foreach ($request->images as $image_from_request) {
			$image = new Image;
            $image->owner_id = $request->owner_id;
            $image->owner_type = $request->owner_type;
            $image->path = upload($image_from_request);
            $image->save();
		}

        // ==== redirect after process
        return back()->withMessage(__('OPERATIONS_SUCCESSFUL'));
	}

	public function destroy(Image $image, Request $request)
	{
		// TODO: check if user is allowed to delete the file (users must not be able to delete other users images)

        // ==== delete file in storage
		deleteFile($image->path);

         // ==== delete image's record in database
		$image->delete();

        // ==== redirect after process
		return back()->withMessage(__('OPERATIONS_SUCCESSFUL'));
	}
}
