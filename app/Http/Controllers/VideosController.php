<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Backend\Video;
use App\Http\Requests\VideoRequest;
use App\Http\Services\VideoService;

class VideosController extends Controller
{

    public function __construct(
        private VideoService $videoService
        ){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.video.index', [
            'video' => $this->videoService->select(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideoRequest $request)
    {
        $this->videoService->create($request->all());

        return redirect()->route('panel.video.index')->with('success', 'Video has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        return view('backend.video.show', [
            'video' => $this->videoService->selectFirstBy('uuid', $uuid),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $uuid)
    {
        return view('backend.video.edit', [
            'video' => $this->videoService->selectFirstBy('uuid', $uuid)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideoRequest $request, String $uuid)
    {
        $data = $request->validated();

        $getVideo = $this->videoService->selectFirstBy('uuid', $uuid);

        try {
            $this->videoService->update($request->all(), $uuid);

            return redirect()->route('panel.video.index')->with('success', 'Video has been updated');
        } catch (\Exception $err) {
            return redirect()->back()->with('error', $err->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $uuid)
    {
        $getVideo = $this->videoService->selectFirstBy('uuid', $uuid);

        $getVideo->delete();

        return response()->json([
            'message' => 'Video has been deleted'
        ]);
    }
}
