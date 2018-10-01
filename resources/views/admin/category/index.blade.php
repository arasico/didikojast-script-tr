@extends('admin.master.master')
@section('title'){{'گروه بندی'}}@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i>Add New category

                </div>
                <div class="card-body">
                    <form method="POST"
                          action="{{url('dashboard/category')}}@if(isset($editValue))/{{$editValue->id}}@endif"
                          class="form-2orizontal">
                        {!! csrf_field() !!}
                        @if(isset($editValue))
                            <input type="hidden" name="_method" value="PATCH">
                        @endif
                        <div class="form-group">
                            @if(Session::get('success')!=null)

                                <div dir="rtl"
                                     class="alert arasico-border-radius-5 alt green  card text-white bg-success text-center ">
                                    <div class="col-1"><a href="#"
                                                          class="icon-close alert-close arasico-color-404040 "></a>
                                    </div>
                                    <div class="col-11"><h5>{{Session::get('success')}}</h5></div>
                                </div>

                            @endif
                        <!-- message and validator -->
                            @if($errors->any())
                                <div dir="rtl"
                                     class="alert  arasico-border-radius-5 card text-white bg-danger text-center ">
                                    <div class="col-1"><a href="#"
                                                          class="icon-close alert-close arasico-color-404040  "></a>
                                    </div>
                                    <div class="col-11"><h5>{{$errors->first()}}</h5></div>
                                </div>
                            @endif
                            <label for="company">Name of category</label>
                            <input type="text" class="form-control" id="title"
                                   name="title" value="{{old('title')}}@if(isset($editValue)){{$editValue->title}}@endif"
                                   placeholder="Enter your title category">
                            <span class="help-block ">for example "لوازم خانگی"</span>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div id="ui-view" style="opacity: 1;">
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-list"></i> List of categorys

                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper"
                                 class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered datatable dataTable no-footer"
                                               id="DataTables" role="grid"
                                               aria-describedby="DataTables_Table_0_info"
                                               style="border-collapse: collapse !important">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Username: activate to sort column descending"
                                                    style="width: 215px;">title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Date registered: activate to sort column ascending"
                                                    style="width: 184px;">Url
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Role: activate to sort column ascending"
                                                    style="width: 184px;">Date
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 89px;">Status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 100px;">Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($categoryInfo as $value)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$value->title}}</td>
                                                    <td>{{$value->url}}</td>
                                                    <td>{{jDate::forge(date('Y/m/d', (integer)$value->created_at))->format('%Y-%B-%d')}}</td>
                                                    <td>
                                                        @if($value->type_row==1)
                                                            <span class="badge badge-success">Active</span>
                                                        @elseif($value->type_row==-1)
                                                            <span class="badge badge-danger">Delete</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-info"
                                                           href="{{url('dashboard/category/'.$value->id.'/edit')}}">
                                                            <i class="fa fa-edit "></i>
                                                        </a>
                                                        <a class="btn btn-danger" href="#" id="{{$value->id}}"
                                                           onclick="deleteFunction(this.id);">
                                                            <i class="fa fa-trash-o "></i>
                                                        </a>
                                                        <form id="form-delete-categories-{{$value->id}}"
                                                              action="{{url('dashboard/category/'.$value->id)}}"
                                                              method="post">
                                                            {!! csrf_field() !!}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('css')
@endsection
@section('script')
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#DataTables').DataTable();
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function deleteFunction(id) {
            swal({
                text: "کاربر گرامی ، آبا می خواهید فیلد مورد نظر را حذف نماید؟",
                icon: 'info',
                buttons: ["خیر", "بلی"],
            }).then(function (value) {
                if (value) {
                    document.forms["form-delete-categories-" + id].submit();
                }
            });
        }
    </script>
@endsection