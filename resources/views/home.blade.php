<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>DATA MENARA 
            {{-- &amp; Laravel by Keenthemes --}}
        </title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		{{-- <meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" /> --}}
		{{-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" /> --}}
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		{{-- <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> --}}
		<link href="{{asset("assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset("assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
		<link href="{{asset("assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-stretch justify-content-between">
							<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-0 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Data Menara</h1>
                                <!--end::Title-->
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-300 border-start mx-4"></span>
                                <!--end::Separator-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="#" class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    {{-- <li class="breadcrumb-item text-dark">Only Header</li> --}}
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								<div class="row g-5 g-xl-8">
									<!--begin::Col-->
									<div class="col-xl-12">
										<!--begin::Tables Widget 5-->
										<div class="card card-xxl-stretch mb-5 mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Tabel Data Menara</span>
													<span class="text-muted mt-1 fw-bold fs-7">List Semua Data Menara</span>
												</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-3">
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_table_widget_5_tab_3">
														<!--begin::Table container-->
														<div id="kt_datatable_example_5" class="table-responsive">
															<table class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                                                <thead>
                                                                    <tr class="fw-bolder fs-6 text-gray-800 px-7 border-bottom-2 border-gray-200">
                                                                        <th>GID</th>
                                                                    </tr>
                                                                </thead>
                                                                {{-- <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                </tbody> --}}
                                                            </table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tables Widget 5-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2021©</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset("assets/plugins/global/plugins.bundle.js")}}"></script>
		<script src="{{asset("assets/js/scripts.bundle.js")}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js")}}"></script>
		<script src="{{asset("assets/plugins/custom/datatables/datatables.bundle.js")}}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{asset("assets/js/custom/widgets.js")}}"></script>
		<script src="{{asset("assets/js/custom/apps/chat/chat.js")}}"></script>
		<script src="{{asset("assets/js/custom/modals/upgrade-plan.js")}}"></script>
		<script src="{{asset("assets/js/custom/modals/create-app.js")}}"></script>
		<script src="{{asset("assets/js/custom/modals/users-search.js")}}"></script>
        <script src="{{asset('custom.js')}}"></script>
        <script src="{{asset('ewp.js')}}"></script>
        <script src="{{asset('pico.js')}}"></script>
		<!--end::Page Custom Javascript-->
        <script>
            let baseUrl = "{{asset('/')}}";
            // console.log(baseUrl + "tower/json");
            document.getElementById("kt_datatable_example_5").innerHTML = ewpTable({
                targetId: "dttb-data-menara",
                class: "table table-row-bordered bg-default table-head-custom table-vertical-center",
                column: [
                { name: "No", width: "10" },
                { name: "Provider", width: "20" },
                // { name: "Prespektif", width: "35" },
                // { name: "Status", width: "15" },
                // { name: "Action", width: "15" },
                ],
            });
            geekDatatables({
                target: "#dttb-data-menara",
                url: baseUrl + "api/tower/json",
                sorting: [0, "asc"],
                apiKey: "data",
                serverSide : "false",
                column: [
                {
                    col: "id", 
                    mid: true,
                    mod: {
                    aTargets: [0],
                    bSortable:false,
                    mRender: function (data, type, full,draw) {

                        var row = draw.row;
                        var start = draw.settings._iDisplayStart;
                        var length = draw.settings._iDisplayLength;

                        var counter = start + 1 + row;

                        return counter;
                        // return data;
                    },
                    },
                },
                {
                    col: "provider", 
                    mid: true,
                    mod: {
                    aTargets: [1],
                    bSortable:false,
                    mRender: function (data, type, full,draw) {
                        // console.log(data)
                        return data
                    },
                    },
                },
                // {
                //     col: "name", 
                //     mid: true,
                //     mod: {
                //     aTargets: [2],
                //     bSortable:false,
                //     mRender: function (data, type, full,draw) {
                //         return noNull(data)
                //     },
                //     },
                // },
                // {
                //     col: "id", 
                //     mid: true,
                //     mod: {
                //     aTargets: [3],
                //     bSortable:false,
                //     mRender: function (data, type, full,draw) {
                //         let is_active=full.status=="1"?"checked='checked'":""

                //         let htmlStatus=`
                //             <div style="padding: 0 3rem;">
                //                 <div class="form-check form-switch form-check-custom form-check-solid">
                //                     <input class="form-check-input" type="checkbox" value="" id="check-`+data+`" `+is_active+` onclick="changeStatus(`+data+`)"/>
                //                     <label class="form-check-label" for="chk-switch"></label>
                //                 </div>
                //             </div>`
                //         return htmlStatus
                //     },
                //     },
                // },
                // {
                //     col: "id",
                //     mid: true,
                //     mod: {
                //     aTargets: [-1],
                //     bSortable:false,
                //     mRender: function (data, type, full) {
                //         var btn = `
                //         <button class="btn btn-icon btn-color-warning btn-active-light-warning"  onclick="edit(`+data+`)" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Indikator Perilaku">
                //             <i class="bi bi-pencil-fill"></i>
                //         </button>
                //         `
                //         return btn
                //     },
                //     },
                // },
                ],
            });
            // $("#kt_datatable_example_5").DataTable({
            // "ajax": {
            //     url: '{{ route('tower.json') }}',
            // },
            // "columns" : [
            //     { data: 'gid' },
            //     // { data: 'Name' },
            //     // { data: 'Email' },
            //     // { data: 'Company' },
            //     // { data: 'CreditCardNumber' },
            //     // { data: 'Datetime' },
            //     // { data: null },
            // ],
            // "language": {
            // "lengthMenu": "Show _MENU_",
            // },
            // "dom":
            // "<'row'" +
            // "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            // "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            // ">" +

            // "<'table-responsive'tr>" +

            // "<'row'" +
            // "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            // "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            // ">"
            // });
            
        </script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>