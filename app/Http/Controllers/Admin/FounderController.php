<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Founder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FounderController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Founders/Index');
    }

    public function getFounders()
    {
        $founders = Founder::orderBy('created_at', 'desc')->get();

        return response()->json([
            'data' => $founders
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Founders/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:2048',
        ]);

        $validated['position'] = $validated['position'] ?? '.';
        $validated['description'] = $validated['description'] ?? '<p>.</p>';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('/images/uploads'), $imageName);
            $validated['image'] = '/images/uploads/' . $imageName;
        }

        Founder::create($validated);

        return redirect()->route('founders.index')->with('success', 'Founder created successfully');
    }

    public function edit(Founder $founder)
    {
        return Inertia::render('Admin/Founders/Edit', compact('founder'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $founder = Founder::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if (!empty($founder->image) && file_exists(public_path($founder->image))) {
                unlink(public_path($founder->image));
            }

            // Store new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('/images/uploads'), $imageName);
            $validated['image'] = '/images/uploads/' . $imageName;
        } else {
            unset($validated['image']);
        }

        $founder->update($validated);

        return redirect()->route('founders.index')->with('success', 'Founder updated successfully.');
    }

    public function destroy($id)
    {
        $founder = Founder::findOrFail($id);

        // (Optional) delete image file too
        if (!empty($founder->image) && file_exists(public_path($founder->image))) {
            unlink(public_path($founder->image));
        }

        $founder->delete();

        return response()->json(['message' => 'Founder deleted successfully']);
    }
}
