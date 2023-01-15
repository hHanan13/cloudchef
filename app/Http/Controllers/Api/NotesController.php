<?php

namespace App\Http\Controllers\Api;
use App\Models\Note;
use App\Models\review_rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function ListOfNotes()
    {
        $Notes=Note::where('status',1)->latest()->get();
        return response()->json(['status' => 1, 'data' => $Notes]);
    }

    public function show($id)
    {
        return Note::with('review_ratings','category.notes')->find($id);
    }

}
