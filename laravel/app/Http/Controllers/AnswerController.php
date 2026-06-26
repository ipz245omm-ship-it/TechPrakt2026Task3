<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    // GET /answers
    public function index()
    {
        return response()->json([
            [
                "id" => 1,
                "answer" => "First answer"
            ],
            [
                "id" => 2,
                "answer" => "Second answer"
            ]
        ]);
    }

    // POST /answers
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Answer created",
            "data" => $request->all()
        ]);
    }

    // Не використовується
    public function show(string $id)
    {
        return response()->json([
            "id" => $id
        ]);
    }

    // PATCH /answers/{id}
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Answer updated",
            "id" => $id,
            "data" => $request->all()
        ]);
    }

    // DELETE /answers/{id}
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Answer deleted",
            "id" => $id
        ]);
    }
}