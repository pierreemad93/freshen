<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ServiceRequest;

class StoreService
{
    public function store($request)
    {
        // $image = $request->file('image');
        // $imagePath = $this->uploadImage($image);
        $data = $request->validated();
        // $data['image'] =  $imagePath;
        $data['added_by'] = Auth::user()->name;
        $data['slug'] = Str::slug($data['title'], '-');;
        Service::create($data);
    }
}
