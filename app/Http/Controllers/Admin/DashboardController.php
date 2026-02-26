<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Employee;
use App\Models\Enquiry;
use App\Models\Gallery;
use App\Models\AutoEnquiry;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $systemRoles = getSystemRoles();
        $users = User::whereHas("roles", function($q) use($systemRoles){$q->whereIn("name", $systemRoles)->where('name','!=','SuperAdmin');})->count();
        $employees = Employee::count();
        $blogs = Blog::count();
        $enquiries = Enquiry::count();
        $auto_enquiries = AutoEnquiry::count();


        return view('Admin.Dashboard.index', compact('users','employees', 'enquiries','auto_enquiries','blogs'));
    }
}