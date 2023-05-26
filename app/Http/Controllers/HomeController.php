<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Review;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Session::remove('upload_progress');
        return view('home');
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');

            if ($file->getClientOriginalExtension() === 'csv') {
                $filePath = $file->getRealPath();

                $csvData = array_map('str_getcsv', file($filePath));
//                $totalRows = count($csvData);
                $header = array_shift($csvData);
//                $processedRows = 0;

                foreach ($csvData as $row) {
                    $existingReview = Review::where('reviewer', $row[0])
                        ->where('email', $row[1])
                        ->where('review', $row[2])
                        ->where('rating', $row[3])
                        ->where('employee', $row[4])
                        ->where('employees_position', $row[5])
                        ->where('unique_employee_number', $row[6])
                        ->where('company', $row[7])
                        ->where('company_description', $row[8])
                        ->first();

                    if (!$existingReview) {
                        Review::create([
                            'reviewer' => $row[0],
                            'email' => $row[1],
                            'review' => $row[2],
                            'rating' => $row[3],
                            'employee' => $row[4],
                            'employees_position' => $row[5],
                            'unique_employee_number' => $row[6],
                            'company' => $row[7],
                            'company_description' => $row[8],
                        ]);
                    }
//                    $processedRows++;
//                    $progressPercentage = round(($processedRows / $totalRows) * 100, 2);
//                    Session::put('upload_progress', $progressPercentage);
                }
                return redirect()->route('home')->with('success', 'CSV file successfully uploaded and processed.');
            } else {
                Session::remove('upload_progress');
                // The file is not a CSV file
                return redirect()->route('home')->with('error', 'Invalid file format. Please upload the CSV file.');
            }
        }

        // The file was not loaded
        return redirect()->route('home')->with('error', 'The file was not loaded. Please select a file to upload.');
    }

}
