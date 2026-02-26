@extends('layouts.admin')
@section('author')
    Blogs
@endsection
@section('content')

<style>
    .select2-container .select2-selection--single {
        height: 38px;
        display: flex;
        align-items: center;
        border: 1px solid #ced4da;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #495057;
        padding-left: 8px;
        padding-right: 8px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 100%;
    }

    .select2-container--default .select2-selection--single:focus {
        border-color: #007bff;
    }
</style>

<section>
    <div class="row">
        <div class="col-12">
            <div class="card w-100 position-relative overflow-hidden">
                <div class="card-header px-4 py-3 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title fw-semibold mb-0 lh-sm">Blogs</h5>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-info">
                            Create&nbsp;<i class="ti ti-plus"></i>
                        </a>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-3 mb-2">
                            <label for="venue_start_date" class="form-label">Publish Date</label>
                            <input type="date" class="form-control" id="venue_start_date" name="venue_start_date" />
                        </div>

                        <div class="col-md-3 mb-2">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="">Select Status</option>
                                <option value="ACTIVE">Active</option>
                                <option value="INACTIVE">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-2">
                            <label for="title_id" class="form-label">Title</label>
                            <select class="form-control select2" name="title_id" id="title_id">
                                <option value="0">Select Title</option>
                                @foreach($blogs as $item)
                                    <option value="{{ $item->id }}" {{ old('blog_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="card-body p-4">
                    <div class="table-responsive rounded-2 mb-4">
                        <table class="table table-bordered table-sm text-nowrap mb-0 align-middle" id="datatable">
                            <thead class="text-dark fs-3">
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="5%">Edit</th>
                                    <th width="5%">Status</th>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Publish Date</th>
                                    <!-- <th>Sub Title</th>
                                    <th>Slug</th>
                                    <th>Author Name</th> -->
                                    <th>View Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Populated by DataTable -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Show -->
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="modalTitle" class="modal-title">Blog Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- AJAX-loaded content -->
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.select2').select2({
            placeholder: 'Select title',
            allowClear: true
        });

        let dataTable = $('#datatable').DataTable({
            dom: "Bfrtip",
            buttons: ["copy", "csv", "excel", "pdf", "print"],
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('admin.blogs.data') }}',
                type: 'POST',
                data: function (d) {
                    d._token = $('meta[name=csrf-token]').attr('content');
                    d.publish_date = $('#venue_start_date').val();
                    d.title_id = $('#title_id').val();
                    d.status = $('#status').val();
                }
            },
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'action', name: 'blogs.id', searchable: false },
                { data: 'status', name: 'blogs.status', searchable: false },
                { data: 'photo', name: 'blogs.photo' },
                { data: 'title', name: 'blogs.title' },
                { data: 'publish_date', name: 'blogs.publish_date' },
                // { data: 'sub_title', name: 'blogs.sub_title' },
                // { data: 'slug', name: 'blogs.slug' },
                // { data: 'author', name: 'blogs.author' },
                {
                    data: 'blog_visitors_count',
                    name: 'blog_visitors_count',
                    searchable: false,
                    orderable: false
                },
            ],
            columnDefs: [
                { targets: [0, 1, 2], className: "text-center" }
            ],
        });

        // Redraw table on filter change
        $('#venue_start_date, #status, #title_id').on('change', function () {
            dataTable.draw();
        });

        // Toggle status
        $(document).on('change', '.blogs-status-switch', function (e) {
            e.preventDefault();
            const routeKey = $(this).data('routekey');
            const status = $(this).is(':checked') ? 'ACTIVE' : 'INACTIVE';
            const column = $(this).data('column') || 'status';
            const url = "{{ route('admin.blogs.change.status') }}";

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    route_key: routeKey,
                    status: status,
                    column: column
                },
                success: function (res) {
                    toastr.success(res.message);
                },
                error: function () {
                    toastr.error('Failed to change status');
                }
            });
        });


            // Delete blog
            $(document).on('click', '.delete-blog', function (e) {
            e.preventDefault();
            const routeKey = $(this).data('routekey');

            if (confirm("Are you sure you want to delete this blog?")) {
                $.ajax({
                    url: `/admin/blogs/${routeKey}`,
                    type: 'DELETE',
                    data: {
                        _token: $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (data) {
                        if (data.status === 'success') {
                            toastr.success(data.message);
                            dataTable.ajax.reload();
                        } else {
                            toastr.error(data.message);
                        }
                    },
                    error: function () {
                        toastr.error('Failed to delete blog.');
                    }
                });
            }
        });
        $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel").addClass("btn btn-primary me-1");
    });
</script>

@endsection
