@extends ('admin.master')
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('/')}}admin/js/jquery-1.9.1.js"></script>

</head>
@section('title')
    Test Product CRUD system
@endsection

@section('body')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-5 col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-pencil"></i>
                        Products
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
                            <a href="#">Products</a>
                        </li>
                        <li class="active breadcrumb-item">Add Product</li>
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
                            Add Product
                        </div>

    <div class="card-body">

        <a class="btn btn-success  m-b-20 side-right" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>

        <table class="table table-bordered data-table">

            <thead>

            <tr>

                <th>No</th>

                <th>Name</th>

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

                    <form id="productForm" name="productForm" class="form-horizontal">

                        <input type="hidden" name="product_id" id="product_id">

                        <div class="form-group">

                            <label for="name" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-12">

                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">

                            </div>

                        </div>



                        <div class="form-group">

                            <label class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-12">

                                <textarea id="detail" name="detail" required="" placeholder="Enter Details" class="form-control"></textarea>

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
                ajax: "{{ route('ajaxproducts.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'detail', name: 'detail'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#createNewProduct').click(function () {
                $('#saveBtn').val("create-product");
                $('#product_id').val('');
                $('#productForm').trigger("reset");
                $('#modelHeading').html("Create New Product");
                $('#ajaxModel').modal('show');
            });


            $('body').on('click', '.editProduct', function () {
                var product_id = $(this).data('id');
                $.get("{{ route('ajaxproducts.index') }}" +'/' + product_id +'/edit', function (data) {
                    $('#modelHeading').html("Edit Product");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#product_id').val(data.id);
                    $('#name').val(data.name);
                    $('#detail').val(data.detail);
                })
            });

            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('ajaxproducts.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#productForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });

            $('body').on('click', '.deleteProduct', function () {
                var product_id = $(this).data("id");
                confirm("Are You sure want to delete !");
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('ajaxproducts.store') }}"+'/'+product_id,
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
