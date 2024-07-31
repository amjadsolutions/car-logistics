<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Constructor to ensure authentication
    public function __construct()
    {
        $this->middleware('auth:api');
    }

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
        if ($request->has('status')) {
            $query->where('status', $request->status);
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
            'status' => 'required|string',
        ]);

        $car = Car::create($validated);

        return response()->json($car, 201);
    }

    // Update Car Status
    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|string',
        ]);

        $car->update($validated);

        return response()->json($car);
    }

    // Delete a Car
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return response()->json(null, 204);
    }
}
