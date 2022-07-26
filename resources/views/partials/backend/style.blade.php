<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap 4 RTL -->
  <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
  <!-- Custom style for RTL -->
  <link rel="stylesheet" href="{{asset('assets/backend/dist/css/custom.css')}}">

  {{-- <script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: "Delete?",
            icon: 'question',
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                let token = $('meta[name="csrf-token"]').attr('content');
                let _url = `/users/delete/${id}`;

                $.ajax({
                    type: 'POST',
                    url: _url,
                    data: {_token: token},
                    success: function (resp) {
                        if (resp.success) {
                            swal.fire("Done!", resp.message, "success");
                            location.reload();
                        } else {
                            swal.fire("Error!", 'Sumething went wrong.', "error");
                        }
                    },
                    error: function (resp) {
                        swal.fire("Error!", 'Sumething went wrong.', "error");
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script> --}}
  @yield('style')
