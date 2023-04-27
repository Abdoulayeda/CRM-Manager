<?php

namespace App\Http\Controllers\Commerciale;

use App\Models\Action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionController extends Controller
{
    //

    public function store(Request $request, Action $action)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $action->fill($request->all());
        $action->save();
        return redirect()->back()
            ->with('success', 'Action créer avec success.');
    }
}
