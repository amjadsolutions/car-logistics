<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CarController extends Controller
{
    // Constructor to ensure authentication
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    // Get Cars with Pagination and Filtering
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->has('make')) {
            $query->where('make', $request->make);
        }
        if ($request->has('model')) {
            $query->where('model', $request->model);
        }
        if ($request->has('year')) {
            $query->where('year', $request->year);
        }
        if ($request->has('vin')) {
            $query->where('vin', $request->vin);
        }
        if ($request->has('shipping_status')) {
            $query->where('shipping_status', $request->shipping_status);
        }

        $cars = $query->paginate(15);

        return response()->json($cars);
    }

    // Add a New Car
    public function store(Request $request)
    {
        $validated = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
            'vin' => 'required|string|size:17|unique:cars',
            'shipping_status' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            $validated['image'] = $imageName;
        }

        $car = Car::create($validated);

        // Save associated images if any
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $imageName = time() . '.' . $image->extension();
                $image->storeAs('public/car_images', $imageName);

                $car->images()->create(['image_path' => $imageName]);
            }
        }

        return response()->json($car, 201);
    }


    // Update Car Status
    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'make' => 'sometimes|string|max:255',
            'model' => 'sometimes|string|max:255',
            'year' => 'sometimes|integer|digits:4',
            'vin' => 'sometimes|string|size:17',
            'shipping_status' => 'sometimes|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if needed
            if ($car->image) {
                Storage::delete('public/images/' . $car->image);
            }

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            $validated['image'] = $imageName;
        }

        $car->update($validated);

        return response()->json($car, 200);
    }


    // Delete a Car
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        // Delete car images
        foreach ($car->images as $image) {
            Storage::delete('public/car_images/' . $image->image_path);
            $image->delete();
        }

        // Delete car image
        if ($car->image) {
            Storage::delete('public/images/' . $car->image);
        }

        $car->delete();

        return response()->json([
            'message' => 'Car deleted successfully.',
            'status' => 204
        ], 204);
    }
    public function show($id)
    {
        $car = Car::with('images')->findOrFail($id);
        return response()->json($car, 200);
    }
}
