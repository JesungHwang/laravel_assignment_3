<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class userController extends Controller
{
    public function manage()
    {
        $assignment_1_db = DB::select("SELECT * FROM assignment_1");

        return view("manage", [
            "assignment_1" => $assignment_1_db,
            "page" => "Products"
        ]);
    }
}
