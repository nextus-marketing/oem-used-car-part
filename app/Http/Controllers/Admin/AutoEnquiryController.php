<?php

namespace App\Http\Controllers\Admin;

use App\Models\AutoEnquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AutoEnquiryController extends Controller
{
    public function index()
    {
        return view('Admin.AutoEnquiries.index');
    }

        public function data(Request $request)
            {
                $query = AutoEnquiry::where('id', '!=', 0)->orderBy('created_at', 'desc');

                return DataTables::eloquent($query)
                ->editColumn('datetime', function ($autoenquiry) {
            return \Carbon\Carbon::parse($autoenquiry->created_at)
                ->setTimezone('Asia/Kolkata')
                ->format('d-m-Y || h:i A');
            })
            ->editColumn('full_name', function ($autoenquiry) {
                return $autoenquiry->full_name;
            })
            ->editColumn('email', function ($autoenquiry) {
             return '<a href="mailto:' . $autoenquiry->email . '">' . $autoenquiry->email . '</a>';
            })
            ->editColumn('mobile', function ($autoenquiry) {
                return '<a href="tel:' . $autoenquiry->mobile . '">' . $autoenquiry->mobile . '</a>';
            })
            ->editColumn('zip', function ($autoenquiry) {
                return $autoenquiry->zip;
            })
            ->editColumn('vehicle_model', function ($autoenquiry) {
                return $autoenquiry->vehicle_model;
            })
            ->editColumn('vehicle_year', function ($autoenquiry) {
                return $autoenquiry->vehicle_year;
            })
            ->editColumn('part_name', function ($autoenquiry) {
                return $autoenquiry->part_name;
            })
            ->editColumn('make', function ($autoenquiry) {
                return $autoenquiry->make;
            })
            ->editColumn('vehicle_part', function ($autoenquiry) {
                return $autoenquiry->vehicle_part;
            })
            ->addColumn('action', function ($autoenquiry) {
                $show = '<a href="' . route('admin.auto_enquiries.show', ['auto_enquiry' => $autoenquiry->route_key]) . '" class="badge bg-info fs-1 modal-one-btn" data-entity="auto_enquiries" data-title="AutoEnquiry" data-route-key="' . $autoenquiry->route_key . '"><i class="fa fa-eye"></i></a>';
                return $show;
            })

            ->addIndexColumn()
            ->rawColumns(['datetime', 'full_name', 'zip', 'email', 'mobile', 'vehicle_model', 'vehicle_year', 'part_name', 'make', 'status', 'action','vehicle_part'])->setRowId('id')->make(true);
    }

    public function list()
    {
        $auto_enquiries = AutoEnquiry::all();
        return response()->json([
            'status' => 'success',
            'list' => $auto_enquiries
        ], 200);
    }

    public function show(AutoEnquiry $autoenquiry)
    {
        return view('Admin.AutoEnquiries.show', compact('autoenquiry'));
    }
}
