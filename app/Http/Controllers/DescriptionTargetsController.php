<?php

namespace App\Http\Controllers;

use App\DescriptionTarget;
use Illuminate\Http\Request;

class DescriptionTargetsController extends Controller
{
    

    public function store(Request $request) {
        $descriptionTarget = DescriptionTarget::create($request->all());
        return $descriptionTarget->id;
    }

    public function update(Request $request, int $id) {
        DescriptionTarget::find($id)->fill($request->all())->save();
    }

    public function destroy(Request $request) {
        foreach($request->ids as $id) {
            DescriptionTarget::destroy($id);
        }
    }

    public function fetch(Request $request) {
        return Controller::narrowDownFromConditions(
            $request,
            "\App\DescriptionTarget::all",
            "\App\DescriptionTarget::where"
        );
    }

}