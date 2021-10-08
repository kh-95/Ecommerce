<?php



/**
 * Setting Name
 * @param $name
 * @return mixed
 */
function getsetting($name)
{
    $setting=\App\Setting::where('name',$name)->first();
    return $setting->value();
}

/**
 * Upload Path
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

/**
 * Get Image
 * @param $filename
 * @return string
 */
function getimg($filename,$web = null)
{
    $base_url = ('/');
        return $base_url.'/storage/'.$filename;
}

/**
 * Upload an image
 * @param $img
 */
function uploader($request,$img_name)
{
    $filename = rand(99999, 99999999) . $request->file($img_name)->getClientOriginalName();
    $path = \Storage::disk('public')->putFile(uploadpath(), $request->file($img_name));
    return $path;
}

function solutions()
{
    $categories = App\Solution::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $categories;
}



function categories()
{
    $categories = App\Category::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['name']];
    });
    return $categories;
}
?>