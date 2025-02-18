<?php

namespace App\Http\Controllers\Backend;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index(): View 
    {
        return view('backend.review.index', [
            'reviews' => Review::with('transaction:id,code')->paginate(10),
        ]);
    }

    public function show(string $uuid): View
    {
        $review = Review::with('transaction:id,code,name,type')
            ->whereUuid($uuid)->firstOrFail();

        return view('backend.review.show', [
            'review' => $review
        ]);
    }

    public function destroy(string $uuid): JsonResponse 
    {
        $review = Review::where('uuid', $uuid)->firstOrFail();
        $review->delete();

        return response()->json([
            'message' => 'Review has been deleted'
        ]);
    }
}
