 <!-- agh ghesmate tab1 ro kaml kon khodet  -->


@extends('admin.master.master')
@section('title'){{'تائید آگهی های دریافتی'}}@endsection
@section('content')
<div class="col-md-12 mb-12">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="false"><i class="fa fa-eye"></i> Active Pending  &nbsp;<span class="badge badge-success">New</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="true"><i class=" fa fa-eye-slash"></i> Deactivate &nbsp;<span class="badge badge-pill badge-danger">29</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-controls="messages" aria-selected="false"><i class="fa fa-exclamation-triangle"></i> Banned</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="actived" aria-selected="false"><i class=" fa fa-check-circle "></i> Actived</a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="tab1" role="tabpanel">
           

        <div id="ui-view" style="opacity: 1;"><script>
  loadCSS("vendors/css/dataTables.bootstrap4.min.css");
  var requireJS = [
    "vendors/js/jquery.dataTables.min.js",
    "vendors/js/dataTables.bootstrap4.min.js"
  ];
  loadJS(requireJS, "js/views/tables.js");
</script>

<div class="animated fadeIn">
  <div class="card">
    <div class="card-header">
      <i class="fa fa-edit"></i> DataTables
      <div class="card-actions">
        <a href="https://datatables.net">
          <small class="text-muted">docs</small>
        </a>
      </div>
    </div>
    <div class="card-body">
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
        <thead>
          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 215px;">Username</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 184px;">Date registered</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 79px;">Role</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 89px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 192px;">Actions</th></tr>
        </thead>
        <tbody>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        <tr role="row" class="odd">
            <td class="sorting_1">Adam Alister</td>
            <td>2012/01/21</td>
            <td>Staff</td>
            <td>
              <span class="badge badge-success">Active</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>
            </a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">Adinah Ralph</td>
            <td>2012/06/01</td>
            <td>Admin</td>
            <td>
              <span class="badge badge-dark">Inactive</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>
            </a>
            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">Ajith Hristijan</td>
            <td>2012/03/01</td>
            <td>Member</td>
            <td>
              <span class="badge badge-warning">Pending</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>

            </a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">Alphonse Ivo</td>
            <td>2012/01/01</td>
            <td>Member</td>
            <td>
              <span class="badge badge-success">Active</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
                <i class="fa fa-search-plus "></i>
              </a>
              <a class="btn btn-info" href="#">
                <i class="fa fa-edit "></i>
              </a>
              <a class="btn btn-danger" href="#">
                <i class="fa fa-trash-o "></i>
              </a>
            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">Anton Phunihel</td>
            <td>2012/01/01</td>
            <td>Member</td>
            <td>
              <span class="badge badge-success">Active</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
                <i class="fa fa-search-plus "></i>
              </a>
              <a class="btn btn-info" href="#">
                <i class="fa fa-edit "></i>
              </a>
              <a class="btn btn-danger" href="#">
                <i class="fa fa-trash-o "></i>
              </a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">Bao Gaspar</td>
            <td>2012/01/01</td>
            <td>Member</td>
            <td>
              <span class="badge badge-success">Active</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>

            </a>
            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">Bernhard Shelah</td>
            <td>2012/06/01</td>
            <td>Admin</td>
            <td>
              <span class="badge badge-dark">Inactive</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>

            </a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">Bünyamin Kasper</td>
            <td>2012/08/23</td>
            <td>Staff</td>
            <td>
              <span class="badge badge-danger">Banned</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>

            </a>
            </td>
          </tr><tr role="row" class="odd">
            <td class="sorting_1">Carlito Roffe</td>
            <td>2012/08/23</td>
            <td>Staff</td>
            <td>
              <span class="badge badge-danger">Banned</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>
            </a>
            </td>
          </tr><tr role="row" class="even">
            <td class="sorting_1">Chidubem Gottlob</td>
            <td>2012/02/01</td>
            <td>Staff</td>
            <td>
              <span class="badge badge-danger">Banned</span>
            </td>
            <td>
              <a class="btn btn-success" href="#">
              <i class="fa fa-search-plus "></i>
            </a>
              <a class="btn btn-info" href="#">
              <i class="fa fa-edit "></i>
            </a>
              <a class="btn btn-danger" href="#">
              <i class="fa fa-trash-o "></i>
            </a>
            </td>
          </tr></tbody>
      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 32 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
    </div>
  </div>
</div></div>

        </div>
        <div class="tab-pane " id="tab2" role="tabpanel">
        empty
        </div>
        <div class="tab-pane" id="tab3" role="tabpanel">
          3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="tab-pane" id="tab4" role="tabpanel">
          4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>

@endsection
 