<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

//View::share("sharedvalue", "MY SHARED VALUE!!!");

Route::post("/manage/insert", function(Request $request) {

    DB::insert(
        "INSERT INTO assignment_1 (prodName, prodDesc, prodCode, prodCost)
         VALUES (?, ?, ?, ?)",
        [
            $request->prodName,
            $request->prodDesc,
            $request->prodCode,
            $request->prodCost
        ]
    );
    return redirect("/manage");
});

Route::get("/manage/update/{id}", function($id) {
    DB::update("UPDATE assignment_1 SET prodName=? WHERE id=?", ["updated product", $id]);
    //$assignment_1_db = DB::select("SELECT * FROM assignment_1");
    return redirect("/manage", ["assignment_1" => $assignment_1_db, "page" => "Products"]);
});

Route::get("/manage/delete", function() {

    DB::delete("DELETE FROM assignment_1 WHERE id=?", ["update function", $id]);
 
    $assignment_1_db = DB::select("SELECT * FROM assignment_1");

    return view("manage", ["assignment_1" => $assignment_1_db]);

});

Route::get("/manage", function() {

    $assignment_1_db = DB::select("SELECT * FROM assignment_1");

    return view("manage", ["assignment_1" => $assignment_1_db, "page" => "Products"]);

});

Route::get("/home", function() { 
    return view("home")->with("page", "Home");
});

Route::get("/search", function() { 
    return view("search")->with("page","Search");
});

Route::get("/about", function() { 
    return view("about")->with("page", "About");
});

Route::get("/manage/edit/{id}", function($id) {
    $product = DB::select("SELECT * FROM assignment_1 WHERE id = ?", [$id]);
    return view("edit", [
        "product" => $product[0],
        "page" => "Edit Product"
    ]);
});