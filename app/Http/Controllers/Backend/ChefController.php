<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ChefRequest;
use App\Http\Services\FileService;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ChefController extends Controller
{
    public function __construct(
        private FileService $fileService
    ){}


    public function index() : View
    {
        return view('backend.chef.index', [
            'chefs' => DB::table('chefs')->orderBy('id', 'desc')->paginate(5)
        ]); 
    }

    public function create() : View
    {
        return view('backend.chef.create');
    }

    public function store(ChefRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        try {
            // jika upload foto
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->fileService->upload($data['photo'], 'chef');
            }

            $data['uuid'] = (string) Str::uuid();

            DB::table('chefs')->insert($data);

            return redirect()->route('panel.chef.index')->with('success', 'Chef has been created');
        } catch (\Exception $err) {
            if ($request->hasFile('photo')) {
                $this->fileService->delete($data['photo']);
            }

            return redirect()->back()->with('error', $err->getMessage());
        }
    }

    public function show(string $uuid)
    {
        return view('backend.chef.show', [
            'chef' => DB::table('chefs')->where('uuid', $uuid)->firstOrFail()
        ]);
    }

    public function edit(string $uuid) : View
    {
        return view('backend.chef.edit', [
            'chef' => DB::table('chefs')->where('uuid', $uuid)->firstOrFail()
        ]);
    }

    public function update(ChefRequest $request, string $uuid) : RedirectResponse
    {
        $data = $request->validated();

        $getChef = DB::table('chefs')->where('uuid', $uuid)->firstOrFail();

        try {
            // jika upload foto 
            if ($request->hasFile('photo')) {
                if ($getChef->photo) {
                    $this->fileService->delete($getChef->photo);
                }

                $data['photo'] = $this->fileService->upload($data['photo'], 'chef');
            }

            $data['uuid'] = (string) Str::uuid();

            DB::table('chefs')->where('uuid', $uuid)->update($data);

            return redirect()->route('panel.chef.index')->with('success', 'Chef has been updated');
        } catch (\Exception $err) {
            if ($request->hasFile('photo')) {
                $this->fileService->delete($data['photo']);
            }

            return redirect()->back()->with('error', $err->getMessage());
        }
    }

    public function destroy(string $uuid) : JsonResponse
    {

        $getChef = DB::table('chefs')->where('uuid', $uuid)->firstOrFail();

        DB::beginTransaction();

        try {
            if ($getChef->photo) {
                $this->fileService->delete($getChef->photo);
            }

            DB::table('chefs')->where('uuid', $uuid)->delete();

            DB::commit();

            return response()->json([
                'message' => 'Chef has been deleted'
            ]);
        } catch (\Exception $err) {
            DB::rollBack();

            if ($getChef->photo) {
                $this->fileService->delete($getChef->photo);
            }

            return redirect()->back()->with('error', $err->getMessage());
        }
    }
}
