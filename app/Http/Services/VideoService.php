<?php
namespace App\Http\Services;

use Illuminate\Support\Str;
use App\Models\Backend\Video;

class VideoService
{
    public function select($paginate = null)
    {
        if ($paginate) {
            return Video::latest()->paginate($paginate);
        }

        return Video::latest()->get();
    }

    public function selectFirstBy($column, $value)
    {
        return Video::where($column, $value)->firstOrFail();
    }

    public function create($data)
    {
        $data['slug'] = Str::slug($data['title']);

        return Video::create($data);
    }

    public function update($data, $uuid)
    {
        $data['slug'] = Str::slug($data['title']);

        unset($data['_method'], $data['_token']);

        return Video::where('uuid', $uuid)->update($data);
    }
}
