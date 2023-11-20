<?php

namespace App\Models;

use App\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Gallary extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    static function uploadImageInTemp($request)
    {
        $get_file_extention = $request->file('filepond')->extension();
        $generate_random_name = rand(1000000,999999999).'.'.$get_file_extention;
        
        return $request->file('filepond')->move('uploads/temp/'.$request->identifier,$generate_random_name);
    }

    static function removeImageInTemp($request)
    {
        if ( File::exists($request->image) ) {
                File::delete($request->image);
        }
    }

    static function saveTemporaryImages($identifier,$model,$model_name)
    {
        if ( file_exists(public_path('uploads/temp/'.$identifier)) ) {
            $all_files = File::allFiles('uploads/temp/'.$identifier);

            foreach($all_files as $file) {
    
                $model->gallaries()->create([
                    'name' => $model_name.'/'.$model->id.'/'.$file->getRelativePathname()
                ]);
    
                Storage::disk('uploads')->move('uploads/temp/'.$identifier.'/'.$file->getRelativePathname(),'uploads/models/'.$model_name.'/'.$model->id.'/'.$file->getRelativePathname());
            }

            File::deleteDirectory(public_path('uploads/temp/'.$identifier));
        }
      
    }

    static function deleteImage($path)
    {
        if ( file_exists(public_path($path)) )
            File::delete($path);
    }

}
