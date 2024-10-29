<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class RatingController extends Controller
{
    public function ratingView():View
    {
        $ratings = Rating::with('user')->get();
        return view('dashboard', compact('ratings'));
    }

    public function createRating(Request $request)
    {
        $valided = $request->validate([
            'message' => 'string|max:255',
            
        ]);
        // if($valided){
        //     return redirect()->route('dashboard')->with('message','Anda hanya bisa sekali Komentar');
        // }
    
        $request->user()->rating()->create($valided);

        return redirect(route('dashboard'));
    }

    public function edit(Rating $rating):View
    {
        Gate::authorize('update', $rating);

        return view('user.edit', [
            'ratings' => $rating,
        ]);
    }

    public function update(Rating $rating, Request $request)
    {
        Gate::authorize('update', $rating);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
    
        // Update rating yang spesifik
        $rating->update($validated);
    
        return redirect()->route('dashboard')->with('success', 'Rating updated successfully.');
    }   

    public function destroy(Rating $rating): RedirectResponse
    {

    Gate::authorize('delete', $rating);
        $rating->delete();

        return redirect(route('dashboard'));
    }
}
