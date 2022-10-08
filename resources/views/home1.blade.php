<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Menara / Tower</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plugins/toastr/toastr.min.css")}}">
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
</head>
<script>
  let baseUrl = "{{asset('/')}}";
</script>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        {{-- <a href="{{asset('/')}}" class="nav-link">Home</a> --}}
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{-- <i class="far fa-bell"></i> --}}
          <i class="fas fa-user-circle"></i>
          {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          {{-- <span class="dropdown-item dropdown-header">15 Notifications</span> --}}
          {{-- <div class="dropdown-divider"></div> --}}
          {{-- <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a> --}}
          <div class="dropdown-divider mt-2"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Profil
            {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
            {{-- <span class="float-right text-muted text-sm">2 days</span> --}}
          </a>
          <div class="dropdown-divider mb-2"></div>
          {{-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('/')}}" class="brand-link">
      <img src="{{asset("dist/img/DPRKPP-02.png")}}" alt="Logo" class="brand-image img-size-250">
      <span class="brand-text font-weight-light text-primary">DPRKPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{asset('/')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Menara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Menara</li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-10 offset-md-1">
                    {{-- <form action="{{ route('pertelaan.search.json') }}" method="get"> --}}
                    <form action="{{url("/api/tower/search_json")}}" id="input-search" method="get">
                    <div class="row">
                      <div class="col-3">
                        <div class="form-group">
                          <label>Pilih Kolom:</label>
                          <select class="select2" name="kolom" id="kolom" style="width: 100%;">
                              <option value="gid">GID</option>
                              <option value="provider">Provider</option>
                              <option value="tipe_tower">Tipe Tower</option>
                              <option value="tinggi_tower">Tinggi Tower</option>
                              <option value="no_upt_skrk">No UPT SKRK</option>
                              <option value="no_upt">No UPT IMB</option>
                              <option value="sk_skrk">SK SKRK</option>
                              <option value="sk_imb">SK IMB</option>
                              <option value="nama_pemohon">Nama Pemohon</option>
                              <option value="alamat_pemohon">Alamat Pemohon</option>
                              <option value="alamat_tower">Alamat Tower</option>
                              <option value="jenis_data">Jenis Data</option>
                              <option value="kelurahan">Kelurahan</option>
                              <option value="kecamatan">Kecamatan</option>
                              <option value="izin">Izin</option>
                              <option value="ket_imb">Keterangan IMB</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <label>Masukkan Nilai:</label>
                          <input type="text" name="nilai" id="nilai" class="form-control"/>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <label>Cari Data:</label>
                          <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                  <i class="fa fa-search"></i>
                              </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>GID</th>
                    <th>SK IMB</th>
                    <th>Provider</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Tipe Tower</th>
                    <th>Tinggi Tower</th>
                    <th>Alamat Tower</th>
                    <th>SK SKRK</th>
                    {{-- <th>Keterangan IMB</th> --}}
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  {{-- <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr> --}}
                  </tbody>
                  {{-- <tfoot> --}}
                  {{-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> --}}
                  {{-- </tfoot> --}}
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Data Menara</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body" class="modal-body">
        <div class="row">
          <div class="col-12">
            <div id="modal-table" class="table-responsive">
              
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Menara</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <section class="content"> --}}
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-body" id="edit-modal">
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        {{-- </section> --}}
      </div>
      <div class="modal-footer-edit justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-sm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Data Tower</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin Menghapus Data ?</p>
      </div>
      <div class="modal-footer-alert justify-content-between">
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- jQuery -->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset("plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("plugins/jszip/jszip.min.js")}}"></script>
<script src="{{asset("plugins/pdfmake/pdfmake.min.js")}}"></script>
<script src="{{asset("plugins/pdfmake/vfs_fonts.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset("plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
<script src="{{asset("plugins/sweetalert2/sweetalert2.min.js")}}"></script>
<script src="{{asset("plugins/toastr/toastr.min.js")}}"></script>
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.min.js")}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $('.select2').select2()
  });
	// let baseUrl = "{{asset('/')}}";
	console.log(baseUrl);
  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Data Di Update.')
  });
	$(document).ready(function () {
		// $("#example1").DataTable({
		//   "responsive": true, "lengthChange": false, "autoWidth": false,
		//   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		table()
	});
  // $('body').on('click', '.edit', function () {
  //     var product_id = $(this).data('gid');
  //     console.log(product_id);
  //     $.get(baseUrl+"api/tower/show_json" +'/' + product_id , function (data) {
  //           $('#modelHeading').html("Edit Product");
  //           $('#saveBtn').val("edit-user");
  //           $('#ajaxModel').modal('show');
  //           $('#product_id').val(data.id);
  //           $('#name').val(data.name);
  //           $('#detail').val(data.detail);
  //       })
  // });
  function table() {
    $('#example2').DataTable({
    "dom": 'Bfrtip',
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "bDestroy": true,
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
    "processing": true,
    "serverSide": false,
			"ajax": {
			"url": '{{ route('tower.json') }}',
			"dataType": "json",
			"type": "GET",
			"data":{ _token: "{{csrf_token()}}"}
			},
      "order":[0,'asc'],
			"columns": [
			// {data: 'DT_RowIndex', name: 'id'},
			{data: 'gid', name: 'gid'},
      {data: 'sk_imb'},
			{data: 'provider'},
      {data: 'kelurahan'},
      {data: 'kecamatan'},
			{data: 'tipe_tower'},
			{data: 'tinggi_tower'},
      {data: 'alamat_tower'},
      {data: 'sk_skrk'},
      // {data: 'ket_imb'},
			{data: 'action', orderable: false, searcable: false}
			],
      // 'order' : [[0,'desc']]
		}).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  }
  function show_json(gid){
    // console.log($('#gid').val(data.gid));
    console.log(gid)
    $.ajax({
        type: "GET",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/tower/show_json/"+gid,
        success: function (response) {
          res = response;
          if (res.no_skrk == null) {res.no_skrk = ""}
          if (res.provider == null) {res.provider = ""}
          if (res.tipe_tower == null) {res.tipe_tower = ""}
          if (res.tinggi_tower == null) {res.tinggi_tower = ""}
          if (res.sk_imb == null) {res.sk_imb = ""}
          if (res.alamat_pemohon == null) {res.alamat_pemohon = ""}
          if (res.alamat_tower == null) {res.alamat_tower = ""}
          if (res.pemilik == null) {res.pemilik = ""}
          if (res.izin == null) {res.izin = ""}
          if (res.kelurahan == null) {res.kelurahan = ""}
          if (res.kecamatan == null) {res.kecamatan = ""}
          if (res.ket_imb == null) {res.ket_imb = ""}
          if (res.no_upt == null) {res.no_upt = ""}
          if (res.nama_pemohon == null) {res.nama_pemohon = ""}
          if (res.alamat_pemohon == null) {res.alamat_pemohon = ""}
          if (res.sk_skrk == null) {res.sk_skrk = ""}
          if (res.scan_skrk == null) {res.scan_skrk = ""}
          if (res.scan_imb == null) {res.scan_imb = ""}
          if (res.scan_gambar_imb == null) {res.scan_gambar_imb = ""}
          if (res.scan_zoning == null) {res.scan_zoning = ""}
          if (res.jenis_data == null) {res.jenis_data = ""}
          console.log(res);
          $('#modal-table').html(
            `
            <table class="table">
              <tr>
                <th>Provider</th>
                <td>`+res.provider+`</td>
              </tr>
              <tr>
                <th>Tipe Tower</th>
                <td>`+res.tipe_tower+`</td>
              </tr>
              <tr>
                <th>Tinggi Tower</th>
                <td>`+res.tinggi_tower+`</td>
              </tr>
              <tr>
                <th>No UPT SKRK</th>
                <td>`+res.sk_imb+`</td>
              </tr>
              <tr>
                <th>No UPT IMB</th>
                <td>`+res.sk_imb+`</td>
              </tr>
              <tr>
                <th>SK SKRK</th>
                <td>`+res.sk_skrk+`</td>
              </tr>
              <tr>
                <th>SK IMB</th>
                <td>`+res.sk_imb+`</td>
              </tr>
              <tr>
                <th>Alamat Pemohon</th>
                <td>`+res.alamat_pemohon+`</td>
              </tr>
              <tr>
                <th>Alamat Tower</th>
                <td>`+res.alamat_tower+`</td>
              </tr>
              <tr>
                <th>Pemilik</th>
                <td>`+res.pemilik+`</td>
              </tr>
              <tr>
                <th>Izin</th>
                <td>`+res.izin+`</td>
              </tr>
              <tr>
                <th>Kecamatan</th>
                <td>`+res.kecamatan+`</td>
              </tr>
              <tr>
                <th>Kelurahan</th>
                <td>`+res.kelurahan+`</td>
              </tr>
              <tr>
                <th>Keterangan IMB</th>
                <td>`+res.ket_imb+`</td>
              </tr>
              <tr>
                <th>No UPT</th>
                <td>`+res.no_upt+`</td>
              </tr>
              <tr>
                <th>Nama Pemohon</th>
                <td>`+res.nama_pemohon+`</td>
              </tr>
              <tr>
                <th>Alamat Pemohon</th>
                <td>`+res.alamat_pemohon+`</td>
              </tr>
              <tr>
                <th>Scan SKRK</th>
                <td>`+res.scan_skrk+`</td>
              </tr>
              <tr>
                <th>Scan IMB</th>
                <td><a href="{{asset("storage/scan_imb/`+res.scan_imb+`")}}" target="_blank"><img src="{{asset("storage/scan_imb/`+res.scan_imb+`")}}" width="100"></a></td>
              </tr>
              <tr>
                <th>Scan Gambar IMB</th>
                <td>`+res.scan_gambar_imb+`</td>
              </tr>
              <tr>
                <th>Scan Zoning</th>
                <td>`+res.scan_zoning+`</td>
              </tr>
              <tr>
                <th>Jenis Data</th>
                <td>`+res.jenis_data+`</td>
              </tr>
            </table>
            `
          )
          $('.modal-footer').html(
            `
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            `
          )
          // ewpLoadingHide();
        }
        // ,
        // error: function (xhr, ajaxOptions, thrownError) {
        //   // ewpLoadingHide();
        //   handleErrorDetail(xhr);
        // },
    });
  }
  function edit_json(gid){
    // console.log($('#gid').val(data.gid));
    console.log($("#gid").val())
    $.ajax({
        type: "GET",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/tower/show_json/"+gid,
        success: function (response) {
          res = response;
          if (res.no_skrk == null) {res.no_skrk = ""}
          if (res.provider == null) {res.provider = ""}
          if (res.tipe_tower == null) {res.tipe_tower = ""}
          if (res.tinggi_tower == null) {res.tinggi_tower = ""}
          if (res.sk_imb == null) {res.sk_imb = ""}
          if (res.alamat_pemohon == null) {res.alamat_pemohon = ""}
          if (res.alamat_tower == null) {res.alamat_tower = ""}
          if (res.pemilik == null) {res.pemilik = ""}
          if (res.izin == null) {res.izin = ""}
          if (res.kelurahan == null) {res.kelurahan = ""}
          if (res.kecamatan == null) {res.kecamatan = ""}
          if (res.ket_imb == null) {res.ket_imb = ""}
          if (res.no_upt == null) {res.no_upt = ""}
          if (res.geom == null) {res.geom = ""}
          if (res.nama_pemohon == null) {res.nama_pemohon = ""}
          if (res.alamat_pemohon == null) {res.alamat_pemohon = ""}
          if (res.sk_skrk == null) {res.sk_skrk = ""}
          if (res.scan_skrk == null) {res.scan_skrk = ""}
          if (res.scan_imb == null) {res.scan_imb = ""}
          if (res.scan_gambar_imb == null) {res.scan_gambar_imb = ""}
          if (res.scan_zoning == null) {res.scan_zoning = ""}
          if (res.jenis_data == null) {res.jenis_data = ""}
          console.log(baseUrl+"api/tower/store_json/"+gid);
          console.log(res);
            $('#edit-modal').html(
              `
              <form action="`+baseUrl+`"api/tower/store_json/"`+gid+`" id="input-menara" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="emp_scan_imb" id="emp_scan_imb">
                <input type="hidden" name="emp_scan_gambar_imb" id="emp_scan_gambar_imb">
                <input type="hidden" name="emp_scan_zoning" id="emp_scan_zoning">
                <input type="hidden" name="gid" id="gid" class="form-control" value="`+res.gid+`">
                <div class="form-group">
                    <label for="inputClientCompany">Provider</label>
                    <input type="text" name="provider" id="provider" class="form-control" value="`+res.provider+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Tipe Tower</label>
                    <input type="text" name="tipe_tower" id="tipe_tower" class="form-control" value="`+res.tipe_tower+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Tinggi Tower</label>
                    <input type="number" name="tinggi_tower" id="tinggi_tower" class="form-control" value="`+res.tinggi_tower+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">SK IMB</label>
                    <input type="text" name="sk_imb" id="sk_imb" class="form-control" value="`+res.sk_imb+`">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Alamat Pemohon</label>
                  <textarea name="alamat_pemohon" id="alamat_pemohon" class="form-control" rows="4">`+res.alamat_pemohon+`</textarea>
                </div>
                <div class="form-group">
                  <label for="inputDescription">Alamat Tower</label>
                  <textarea name="alamat_tower" id="alamat_tower" class="form-control" rows="4">`+res.alamat_tower+`</textarea>
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Kelurahan</label>
                    <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="`+res.kelurahan+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Kecamatan</label>
                    <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="`+res.kecamatan+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Scan IMB</label>
                    <input type="file" name="scan_imb" id="scan_imb" class="form-control" value="`+res.scan_imb+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Scan Gambar IMB</label>
                    <input type="file" name="scan_gambar_imb" id="scan_gambar_imb" class="form-control" value="`+res.scan_gambar_imb+`">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Scan Zoning</label>
                    <input type="file" name="scan_zoning" id="scan_zoning" class="form-control" value="`+res.scan_zoning+`">
                </div>
                <div class="form-group">
                  <label for="inputStatus">Jenis Data</label>
                  <select id="jenis_data" name="jenis_data" class="form-control custom-select">
                    <option value="`+res.jenis_data+`" selected>`+res.jenis_data+`</option>
                    <option value="REKONSILIASI">REKONSILIASI</option>
                    <option value="NON REKONSILIASI">NON REKONSILIASI</option>
                  </select>
                </div>
              `
            )
            $("#emp_scan_imb").val(res.scan_imb)
            $("#emp_scan_gambar_imb").val(res.scan_gambar_imb)
            $("#emp_scan_zoning").val(res.scan_zoning)
            // console.log($("#emp_scan_imb").val())
            $('.modal-footer-edit').html(
              `
              <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
              <button type="button" onclick="store_json(`+gid+`)" class="btn btn-success float-right mb-3 mr-3 toastrDefaultSuccess">Save changes</button>
              </form>
              `
            )
        }
    });
  }
  function store_json(gid){
    console.log($("#gid").val())
    var data = {
      gid: $("#gid").val(),
      provider: $("#provider").val(),
      tipe_tower: $("#tipe_tower").val(),
      tinggi_tower: $("#tinggi_tower").val(),
      sk_imb: $("#sk_imb").val(),
      alamat_pemohon: $("#alamat_pemohon").val(),
      alamat_tower: $("#alamat_tower").val(),
      kelurahan: $("#kelurahan").val(),
      kecamatan: $("#kecamatan").val(),
      scan_imb: $("#scan_imb").data('src'),
      jenis_data: $("#jenis_data").val(),
    }
    const fd = new FormData(document.getElementById('input-menara'));
    console.log(data)
    $.ajax({
        type: "POST",
        processData: false, 
        contentType: false,
        dataType: "json",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        data: fd,
        url: baseUrl+"api/tower/store_json/"+gid,
        success: function (response) {
          // res = response;
          // console.log(res);
          // Swal.fire("Success!", "Data berhasil "+resSwal, "success");
          $('#modal-lg').modal('hide')
          table()
        }
    });
  }
  function alert(gid) {
    $('.modal-footer-alert').html(
      `
        <button type="button" class="btn btn-default ml-3" data-dismiss="modal">Close</button>
        <button type="button" onclick="delete_json(`+gid+`)" class="btn btn-danger float-right mb-3 mr-3">Hapus</button>
      `
    )
  }
  function delete_json(gid){
    $('#modal-sm').modal('hide')
    console.log(gid)
    alert('delete');
    $.ajax({
        type: "DELETE",
        dataType: "json",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          "Authorization":"Bearer " + localStorage.getItem("token")
        },
        url: baseUrl+"api/tower/delete_json/"+gid,
        success: function (response) {
          // res = response;
          // console.log(res);
          // Swal.fire("Success!", "Data berhasil "+resSwal, "success");
          // $('#modal-lg').modal('hide')
          table()
        }
    });
  }
  $("#input-search").on("submit", function (e) {
    var dataString = $(this).serialize();
    console.log(dataString);
    $.ajax({
      type: "GET",
      url: baseUrl+"api/tower/search_json",
      data: dataString,
      success: function () {
        // Display message back to the user here
        // search()
        $('#example2').DataTable({
        "dom": 'Bfrtip',
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "bDestroy": true,
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": baseUrl+"api/tower/search_json?"+dataString,
            "dataType": "json",
            "type": "GET",
            "data":{ _token: "{{csrf_token()}}"}
        },
        "order":[0,'asc'],
        "columns": [
            // {data: 'DT_RowIndex', name: 'id'},
            {data: 'gid', name: 'gid'},
            {data: 'sk_imb'},
            {data: 'provider'},
            {data: 'kelurahan'},
            {data: 'kecamatan'},
            {data: 'tipe_tower'},
            {data: 'tinggi_tower'},
            {data: 'alamat_tower'},
            {data: 'sk_skrk'},
            {data: 'action', orderable: false, searcable: false}
        ],
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        // res = response;
        // console.log(res);
      }
    });
 
    e.preventDefault();
  });
</script>
</body>
</html>
