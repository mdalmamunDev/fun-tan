<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Industry;
use App\Models\Tag;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function requiredData(Request $request) {
        $inputs = $request->all();
        $data = [];

        // industries
        if (in_array('industries', $inputs) || isset($inputs['industries'])) {
            $objName = isset($inputs['industries']['objName']) ? $inputs['industries']['objName'] : 'industries';
            $data[$objName] = Industry::where(function ($query) use ($inputs) {
                if (isset($inputs['industries']['id'])) {
                    $query->where('id', $inputs['industries']['id']);
                }
            })->get();
        }

        // genres
        if (in_array('genres', $inputs) || isset($inputs['genres'])) {
            $objName = isset($inputs['genres']['objName']) ? $inputs['genres']['objName'] : 'genres';
            $data[$objName] = Genre::where(function ($query) use ($inputs) {
                if (isset($inputs['genres']['id'])) {
                    $query->where('id', $inputs['genres']['id']);
                }
            })->get();
        }

        // tags
        if (in_array('tags', $inputs) || isset($inputs['tags'])) {
            $objName = isset($inputs['tags']['objName']) ? $inputs['tags']['objName'] : 'tags';
            $data[$objName] = Tag::where(function ($query) use ($inputs) {
                if (isset($inputs['tags']['id'])) {
                    $query->where('id', $inputs['tags']['id']);
                }
            })->get();
        }

        return retRes('Done fetching required data.', $data);
    }
}
