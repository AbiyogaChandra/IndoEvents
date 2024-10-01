<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'Report List',
            'data' => $reports
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required', 
            'type' => 'required',
            'object_id' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $report = Report::create([
            'event_id' => $request->event_id, 
            'type' => $request->type,
            'object_id' => $request->object_id, 
            'content' => $request->content
        ]);
        if($report) {
            return response()->json([
                'success' => true,
                'message' => 'Report Created',
                'data' => $report
            ], 201);
        }
        return response()->json([
            'success' => false,
            'message' => 'Report Failed to Save',
        ], 409);
    }

    public function destroy(string $id)
    {
        $report = Report::findOrfail($id);
        if($report) {
            $report->delete();
            return response()->json([
                'success' => true,
                'message' => 'Report Deleted',
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Report Not Found',
        ], 404);
    }
}
