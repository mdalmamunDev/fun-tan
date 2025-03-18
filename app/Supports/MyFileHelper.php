<?php

namespace App\Supports;

use App\Models\MyFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait MyFileHelper
{

    // It will store the uploaded file info on DB and merge the id with request
    private function storeFile($request, $req_arr_key) {
        $fileInfo = $request->input($req_arr_key);
        $user_id = Auth::id();
        if (!$fileInfo || !$user_id) return;

        //store the file and get the id
        $fileInfo['user_id'] = $user_id;
        $storedFile = MyFile::create($fileInfo); // file is an object
        if ($storedFile) $request->merge([$req_arr_key.'_id' => $storedFile->id]);
    }

    /*
    If new file uploaded to store => if a file stored before this record then just update the info or insert new record
    Here fileData is an array, contains file upload info
    $req_key => thumbnail, avatar | not the actual thumbnail_id or avatar_id
    */
    private function updateFile($request, $req_arr_key)
    {
        $fileData = $request->input($req_arr_key);
        $user_id = Auth::id();
        if (!$fileData || !array_key_exists('success', $fileData) || !$user_id) return;

        $fileData['user_id'] = Auth::id();
        $id = $request->input($req_arr_key . '_id');
        if ($id) { // update
            $file = MyFile::findOrFail($id);
            if ($file) {
                if ($file->path && Storage::exists('public/'.$file->path))
                    Storage::delete('public/'.$file->path);

                $file->update($fileData);
            }
        } else { // store
            // store a new file => get id => set this id merge file_id
            $storedFile = MyFile::create($fileData); // file is an object
            if ($storedFile) $request->merge([$req_arr_key . '_id' => $storedFile->id]);
        }
    }

    private function deleteFile($id)
    {
        $record = MyFile::findOrFail($id);

        if ($record) {
            if ($record->path && Storage::exists('public/' . $record->path))
                Storage::delete('public/' . $record->path);

            return $record->delete();
        }
    }
}