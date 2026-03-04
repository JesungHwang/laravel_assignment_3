<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

View::share("sharedvalue", "MY SHARED VALUE!!!");

Route::post("/assignment_1/insert", function(Request $request) {

    Illuminate\Support\Facades\DB::update("INSERT INTO assignment_1 VALUES (?, ?, ?, ?)", 
               [$request->input("prodName"),
                $request->input("prodDesc"),
                $request->input("prodCode"),
                $request->input("prodCost")]);
 
    $employees = DB::select("SELECT * FROM assignment_1");

    return view("assignment_1", 
                ["assignment_1" => $assignment_1_db]);

});

Route::get("/assignment_1/update", function() {

    DB::update("UPDATE assignment_1 SET prodName=? WHERE id=?", 
               ["update function", 1]);
 
    $employees = DB::select("SELECT * FROM assignment_1");

    return view("assignment_1", 
                ["assignment_1" => $assignment_1_db]);

});

Route::get("/assignment_1/delete", function() {

    DB::delete("DELETE FROM employees WHERE id=?", [2]);
 
    $employees = DB::select("SELECT * FROM assignment_1");

    return view("assignment_1", 
                ["assignment_1" => $assignment_1_db]);

});

Route::get("/assignment_1", function() {

    $employees = DB::select("SELECT * FROM assignment_1");

    return view("assignment_1", 
                ["assignment_1" => $assignment_1_db]);

});

Route::get("/home2", function() { 
    return view("home2");
});

Route::get("/about2", function() { 
    return view("about2");
});

Route::get("/contact2", function() { 
    return view("contact2");
});


Route::get("/home", function() { 
    return view("home")->with("page", "Home");
});

Route::get("/about", function() { 
    return view("about")->with("page", "About");
});

Route::get("/contact", function() { 
    return view("contact")->with("page", "Contact");
});

Route::get('/simple', function () {


    $employees = [
        ["prodName" => "Kevin", "prodDesc" => "Browne", "prodCode" => 1, "prodCost" => 100000],
        ["prodName" => "Mary", "prodDesc" => "Black", "prodCode" => 2, "prodCost" => 200000],
        ["prodName" => "Bob", "prodDesc" => "Jones", "prodCode" => 3, "prodCost" => 150000]
    ];

    $fruits = [];

    return view('simple', 
                ["value" => "Some value here",
                 "maybe" => "An actual value!",
                 "status" => "warning",
                 "assignment_1" => $assignment_1_db,
                 "fruits" => $fruits ]);
});

Route::get("/profile", function() {
    return view("profile.main")->with("username", "Johnny");
});
