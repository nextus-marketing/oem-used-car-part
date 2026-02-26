<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EnquiryController extends Controller
{
    public function index()
    {
        return view('Admin.Enquiries.index');
    }

    public function data(Request $request)
    {
        $query = Enquiry::latest();

        return DataTables::eloquent($query)

            ->addIndexColumn()

            ->editColumn('datetime', function ($enquiry) {
                return Carbon::parse($enquiry->created_at)
                    ->timezone('Asia/Kolkata')
                    ->format('d M Y, h:i A');
            })

            ->editColumn('email', function ($enquiry) {
                return '<a href="mailto:' . $enquiry->email . '">' . $enquiry->email . '</a>';
            })

            ->editColumn('mobile', function ($enquiry) {
                return '<a href="tel:' . $enquiry->mobile . '">' . $enquiry->mobile . '</a>';
            })

            ->editColumn('message', function ($enquiry) {
                return mb_strimwidth($enquiry->message, 0, 97, '...');
            })

            ->addColumn('action', function ($enquiry) {
                return '<a href="' . route('admin.enquiries.show', $enquiry->route_key) . '" 
                        class="badge bg-info fs-1">
                        <i class="fa fa-eye"></i>
                        </a>';
            })

            ->addColumn('action', function ($enquiry) {
                $show = '<a href="' . route('admin.enquiries.show', ['enquiry' => $enquiry->route_key]) . '" class="badge bg-info fs-1 modal-one-btn" data-entity="enquiries" data-title="Enquiry" data-route-key="' . $enquiry->route_key . '"><i class="fa fa-eye"></i></a>';
                return $show;
            })

            ->rawColumns(['email', 'mobile', 'action'])

            ->setRowId('id')

            ->make(true);
    }

    public function list()
    {
        $enquiries = Enquiry::all();

        return response()->json([
            'status' => 'success',
            'list' => $enquiries,
        ], 200);
    }

    public function show(Enquiry $enquiry)
    {
        return view('Admin.Enquiries.show', compact('enquiry'));
    }
}
