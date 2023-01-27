<?php
namespace rajkumarpaneru\LaravelPermissionEditor\Http\Controllers;

use Illuminate\Routing\Controller;

class PermissionController extends Controller
{

    // Only this index for now: will show you why, in a minute

    public function index()
    {
        return view('permission-editor::permissions.index');
    }

}
