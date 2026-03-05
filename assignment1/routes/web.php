<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\userController;

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
Route::get("/manage/edit/{id}", function($id) {
    $product = DB::select("SELECT * FROM assignment_1 WHERE id = ?", [$id]);
    return view("edit", [
        "product" => $product[0],
        "page" => "Edit Product"
    ]);
});
Route::post("/manage/update/{id}", function(Request $request, $id) {
    DB::update(
        "UPDATE assignment_1 
        SET prodName=?, prodDesc=?, prodCode=?, prodCost=? 
        WHERE id=?",
        [
            $request->prodName,
            $request->prodDesc,
            $request->prodCode,
            $request->prodCost,
            $id
        ]
    );
    return redirect("/manage");
});

Route::get("/manage/delete/{id}", function($id) {
    DB::delete("DELETE FROM assignment_1 WHERE id=?", [$id]);
    return redirect("/manage");
});

Route::get("/manage", [userController::class, "manage"]);
// Route::get("/manage", function() {

//     $assignment_1_db = DB::select("SELECT * FROM assignment_1");

//     return view("manage", ["assignment_1" => $assignment_1_db, "page" => "Products"]);

// });

Route::get("/home", function() { 
    return view("home")->with("page", "Home");
});

Route::get("/search", function() { 
    return view("search")->with("page","Search");
});

Route::get("/about", function() { 
    return view("about")->with("page", "About");
});