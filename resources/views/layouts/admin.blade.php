<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('backend/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('backend/plugins/toastr/toastr.min.css')}}"> --}}
  <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
  <script src="{{asset('backend/plugins/bootstrap/bootstrap-notify.js')}}"></script>
  <style>
  body {
    position: relative; 
  }
  .rotate {
    -moz-transition: all .5s linear;
    -webkit-transition: all .5s linear;
    transition: all .5s linear;
  }
  .rotate.down {
      -moz-transform:rotate(90deg);
      -webkit-transform:rotate(90deg);
      transform:rotate(90deg);
  }
  /*.select2-container--bootstrap4 .select2-results>.select2-results__options{
    max-height: 32px;
  }*/
  .select2-container--default .select2-search--dropdown .select2-search__field{
    height: 32px!important;
  }
  </style>
  
</head>
<body data-spy="scroll" data-target="#list-card" data-offset="50" class="hold-transition sidebar-mini layout-fixed">
@if (session('status'))
  <script>
    color = 'success';

    $.notify({
      icon: "nc-icon nc-check-2",
      message: "{{session('status')}}"

    }, {
      type: color,
      timer: 1000,
      placement: {
        from: 'top',
        align: 'right'
      }
    });
  </script>
@endif
@if ($errors->any())
  @foreach ($errors->all() as $error)
    <script>
    color = 'danger';

    $.notify({
      icon: "nc-icon nc-simple-remove",
      message: "{{ $error }}"

    }, {
      type: color,
      timer: 5000,
      placement: {
        from: 'top',
        align: 'right'
      }
    });
  </script>
  @endforeach
@endif  
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
 -->
  <!-- Navbar -->
  @include('backend.includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="scroll-to">
    <!-- Content Header (Page header) -->
    @yield('content-header')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('backend.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('backend/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('backend/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script> --}}
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>

<script type="text/javascript">
  
  $(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(".summernote").summernote({
      height: 250
    });
    $('#master').on('click', function(e) {
     if($(this).is(':checked',true))  
     {
        $(".sub_chk").prop('checked', true);  
     } else {  
        $(".sub_chk").prop('checked',false);  
     }  
    });
    $('.delete_all').on('click', function(e) {
          var allVals = [];  
          $(".sub_chk:checked").each(function() {  
              allVals.push($(this).attr('data-id'));
          });  
          if(allVals.length <=0)  
          {  
             Toast.fire({
                icon: 'warning',
                title: 'Chưa chọn dòng nào để xóa !'
            });
          }  else {  


              var check = confirm("Bạn có chắt xóa những dòng đã chọn?");  
              if(check == true){  
                  var join_selected_values = allVals.join(","); 
                  $.ajax({
                      url: $(this).data('url'),
                      type: 'DELETE',
                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      data: 'ids='+join_selected_values,
                      success: function (data) {
                          if (data['success']) {
                              $(".sub_chk:checked").each(function() {  
                                  $(this).parents("tr").remove();
                              });
                              
                              Toast.fire({
                                  icon: 'success',
                                  title: data['success']
                              });
                          } else if (data['error']) {
                              
                          } else {
                              alert('Whoops Something went wrong!!');
                          }
                      },
                      error: function (data) {
                          alert(data.responseText);
                      }
                  });


                $.each(allVals, function( index, value ) {
                    $('table tr').filter("[data-row-id='" + value + "']").remove();
                });
              }  
          }  
      });
    // $(document).ready(function(){
    var phantrang = document.getElementById("PhanTrang");
    if(phantrang){
      $('#PhanTrang').DataTable({
          'language': {
              'sProcessing':   'Đang xử lý...',
              'sLengthMenu':   'Hiển thị _MENU_ dòng',
              'sZeroRecords':  'Không tìm thấy dòng nào phù hợp',
              'sInfo':         'Đang xem _START_ đến _END_ trong tổng số _TOTAL_ dòng',
              'sInfoEmpty':    'Đang xem 0 đến 0 trong tổng số 0 dòng',
              'sInfoFiltered': '(được lọc từ _MAX_ dòng)',
              'sInfoPostFix':  '',
              'sSearch':       'Tìm kiếm:',
              'paginate': {
                  'previous': '<i class="fas fa-chevron-left"></i>',
                  'next': '<i class="fas fa-chevron-right"></i>'
                },
              'sUrl':          ''

          }
      });
    }
    

  });    
     
</script>


@yield('js')
</body>
</html>
