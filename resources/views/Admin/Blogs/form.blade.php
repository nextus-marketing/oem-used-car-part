@extends('layouts.admin')

@section('title')
    Blog Management
@endsection

@section('content')

<!-- ================= EDITOR JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>

<!-- ================= EDITOR STYLES ================= -->
<style>
/* Image responsive */
.ce-block__content img,
.image-tool__image img {
    max-width: 100%;
    width: 100%;
    height: auto;
    display: block;
    margin: 15px auto;
    border-radius: 6px;
}

/* Editor width */
.ce-block__content,
.ce-toolbar__content {
    max-width: 900px;
}

/* Editor padding */
#editorjs {
    padding-left: 50px;
}

/* Toolbar fixes (VERY IMPORTANT) */
.ce-toolbar {
    z-index: 10;
}

.ce-toolbar__plus {
    left: -30px;
}

.ce-toolbar__actions {
    right: calc(100% + 10px);
}

/* Prevent overlap */
.ce-paragraph,
.ce-header {
    padding-left: 0 !important;
}
</style>

<form method="POST"
      action="{{ Route::is('admin.blogs.create') ? route('admin.blogs.store') : route('admin.blogs.update', $blog->id ?? null) }}"
      enctype="multipart/form-data"
      id="blogs-form">

    @csrf
    {{ Route::is('admin.blogs.create') ? '' : method_field('PUT') }}

    <!-- ================= BASIC DETAILS ================= -->
    <div class="card">
        <div class="card-header">
            <h5>{{ Route::is('admin.blogs.create') ? 'Create' : 'Edit' }} Blog</h5>
        </div>

        <div class="card-body row">

            <div class="col-md-6 mb-3">
                <label>Title *</label>
                <input type="text" name="title" id="title" class="form-control"
                       value="{{ $blog->title ?? '' }}">
                <div id="title-error" class="text-danger"></div>
            </div>

            <div class="col-md-6 mb-3">
                <label>Slug *</label>
                <input type="text" name="slug" id="slug" class="form-control"
                       value="{{ $blog->slug ?? '' }}">
                <div id="slug-error" class="text-danger"></div>
            </div>

            <div class="col-md-6 mb-3">
                <label>Publish Date *</label>
                <input type="date" name="publish_date" class="form-control"
                       value="{{ $blog->publish_date ?? '' }}">
                <div id="publish_date-error" class="text-danger"></div>
            </div>

            <div class="col-md-6 mb-3">
                <label>Author *</label>
                <input type="text" name="author" class="form-control"
                       value="{{ $blog->author ?? '' }}">
                <div id="author-error" class="text-danger"></div>
            </div>

            <div class="col-md-6 mb-3">
                <label>Sub Title *</label>
                <input type="text" name="sub_title" class="form-control"
                       value="{{ $blog->sub_title ?? '' }}">
                <div id="sub_title-error" class="text-danger"></div>
            </div>

            <div class="col-md-6 mb-3">
                <label>Main Image</label>
                <input type="file" name="photo" class="form-control">
                @if(isset($blog))
                    <img src="{{ $blog->photo_link }}" class="img-thumbnail mt-2" width="120">
                @endif
                <div id="photo-error" class="text-danger"></div>
            </div>

            <div class="col-md-12 mb-3">
                <label>Meta Title</label>
                <input type="text" name="meta_title" class="form-control"
                       value="{{ $blog->meta_title ?? '' }}">
            </div>

            <div class="col-md-12 mb-3">
                <label>Meta Description</label>
                <input type="text" name="meta_description" class="form-control"
                       value="{{ $blog->meta_description ?? '' }}">
            </div>

        </div>
    </div>

    <!-- ================= BLOG CONTENT ================= -->
    <div class="card mt-4">
        <div class="card-header">
            <h5>Blog Description</h5>
        </div>
        <div class="card-body">
            <div id="editorjs"></div>
            <div id="description-error" class="text-danger mt-2"></div>
        </div>
    </div>

    <!-- ================= ACTIONS ================= -->
    <div class="mt-3">
        <button class="btn btn-primary">Save</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
    </div>

</form>

<!-- ================= EDITOR INIT ================= -->
<script>
const editor = new EditorJS({
    holder: 'editorjs',

    tools: {
        header: {
            class: Header,
            inlineToolbar: true,
            config: {
                levels: [1,2,3,4,5,6],
                defaultLevel: 2
            }
        },

        list: {
            class: EditorjsList,
            inlineToolbar: true
        },

        quote: {
            class: Quote,
            inlineToolbar: true
        },

        table: {
            class: Table,
            inlineToolbar: true
        },

        image: {
            class: ImageTool,
            inlineToolbar: true,
            config: {
                captionPlaceholder: 'Enter image ALT text (SEO)',
                uploader: {
                    uploadByFile(file) {
                        const formData = new FormData();
                        formData.append('image', file);

                        return fetch("{{ route('editor.image.upload') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: formData
                        }).then(res => res.json());
                    }
                }
            }
        }
    },

    data: {!! isset($blog) && $blog->description ? $blog->description : '{}' !!}
});
</script>

<!-- ================= FORM SUBMIT ================= -->
<script>
$('#blogs-form').on('submit', async function(e) {
    e.preventDefault();
    $('div[id$="-error"]').empty();

    const content = await editor.save();
    let formData = new FormData(this);
    formData.append('description', JSON.stringify(content));

    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,

        success(res) {
            toastr.success(res.message || 'Saved Successfully');
            setTimeout(() => {
                window.location.href = "{{ route('admin.blogs.index') }}";
            }, 800);
        },

        error(xhr) {
            toastr.error('Validation Error');
            $.each(xhr.responseJSON.errors, function(key, val) {
                $('#' + key + '-error').html(val[0]);
            });
        }
    });
});

// AUTO SLUG
$('#title').keyup(function () {
    $('#slug').val(
        $(this).val().toLowerCase().replace(/[^a-z0-9]+/g, '-')
    );
});
</script>

@endsection
