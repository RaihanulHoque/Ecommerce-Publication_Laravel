@extends ('admin.master')
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('/')}}admin/js/jquery-1.9.1.js"></script>

</head>
@section('title')
    PBS Admin | Book Category Management
@endsection

@section('body')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Book Categories
                    </h4>
                </div>
                <div class="col-sm-7 col-lg-6">
                    <ol  class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('book-categories')}}">Book Categories</a>
                        </li>
                        <li class="active breadcrumb-item">Manage</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            Manage Book Categories
                        </div>

                        <div class="card-body">

                            <a class="btn btn-success  m-b-20 side-right" href="javascript:void(0)" id="createNewCategory"> Add New Category</a>

                            <table class="table table-bordered data-table">

                                <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Parent</th>
                                    <th>Title Eng.</th>
                                    <th>Title Bang.</th>
                                    <th>Slug URL</th>

                                    <th>Details</th>

                                    <th width="280px">Action</th>

                                </tr>

                                </thead>

                                <tbody>

                                </tbody>

                            </table>

                        </div>
                        <div class="modal fade" id="ajaxModel" aria-hidden="true">

                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelHeading"></h4>
                                    </div>
                                    <div class="modal-body">

                                        <form id="categoryForm" name="categoryForm" class="form-horizontal">
                                            <input type="hidden" name="category_id" id="category_id">

                                            <div class="form-group">
                                                <label for="name" class="col-sm-12 control-label">Parent Category</label>
                                                <div class="col-sm-12">
                                                    <select name="parent" id="parent" class="validate[required] form-control select2">
                                                        <option value="0">Select Parent</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="name" class="col-sm-12 control-label">Category Name (Eng.)*</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="validate[required] form-control" id="title" name="title" placeholder="Enter Name" value="" maxlength="200" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="title_bang" class="col-sm-12 control-label">Category Name (Bang.)*</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="validate[required] form-control" id="title_bang" name="title_bang" placeholder="বাংলা নাম" value="" maxlength="200" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="slug" class="col-sm-12 control-label">Category Slug URL (use-dash-for-space) *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="validate[required] form-control smallLetter" id="slug" name="slug" placeholder="slug-url (i.e. শিশু-কিশোর-বই)" value="" maxlength="200" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Short Description</label>
                                                <div class="col-sm-12">
                                                    <textarea id="detail_info" name="detail_info" required="" placeholder="Enter Details" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('ajax-book-categories.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'parent', name: 'parent'},
                    {data: 'title', name: 'title'},
                    {data: 'title_bang', name: 'title_bang'},
                    {data: 'slug', name: 'slug'},
                    {data: 'detail_info', name: 'detail_info'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#createNewCategory').click(function () {
                $('#saveBtn').val("create-Category");
                $('#category_id').val('');
                $('#categoryForm').trigger("reset");
                $('#modelHeading').html("Create New Category");
                $('#ajaxModel').modal('show');
            });


            $('body').on('click', '.editCategory', function () {
                var category_id = $(this).data('id');
                $.get("{{ route('ajax-book-categories.index') }}" +'/' + category_id +'/edit', function (data) {
                    $('#modelHeading').html("Edit Category");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#category_id').val(data.id);
                    $('#parent').val(data.parent);
                    $('#title').val(data.title);
                    $('#title_bang').val(data.title_bang);
                    $('#slug').val(data.slug);
                    $('#detail_info').val(data.detail_info);
                })
            });

            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#categoryForm').serialize(),
                    url: "{{ route('ajax-book-categories.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#categoryForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });

            $('body').on('click', '.deleteCategory', function () {
                var category_id = $(this).data("id");
                confirm("Are You sure want to delete !");
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('ajax-book-categories.store') }}"+'/'+category_id,
                    success: function (data) {
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });
        });

    </script>

@endsection

