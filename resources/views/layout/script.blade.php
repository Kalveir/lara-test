   {{-- css --}}
   {{-- select 2 --}}
    <link href="{{ asset('/assets/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
   {{-- datatables --}}
    <link href="{{ asset('/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    {{-- Filepond --}}
    <link rel="stylesheet" href="{{ asset('/assets/js/filepond/dist/filepond.min.css') }}">
    {{-- Alertify --}}
    <link rel="stylesheet" href="{{ asset('/assets/js/alertify/css/alertify.min.css') }}">
    {{-- simple notify --}}
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/simple-notify/dist/simple-notify.css') }}" />

    <!-- Required Js -->
    <script src="{{ asset('/assets/js/vendor-all.min.j') }}s"></script>
    <script src="{{ asset('/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('/asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/assets/js/pcoded.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="{{ asset('/assets/js/plugins/clipboard.min.js') }}"></script>
    <script src="{{ asset('/assets/js/uikit.min.js') }}"></script>
    {{-- datatables --}}
    <script src="{{ asset('/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    {{-- select2 --}}
    <script src="{{ asset('/assets/vendor/select2/dist/js/select2.min.js') }}"></script>
    {{-- filepond --}}
    <script src="{{ asset('/assets/js/filepond/dist/filepond.min.js') }}"></script>
    {{-- alertify --}}
    <script src="{{ asset('/assets/js/alertify/alertify.min.js') }}"></script>
    {{-- simple notify --}}
    <script src="{{ asset('/assets/vendor/simple-notify/dist/simple-notify.min.js') }}"></script>



<!-- Apex Chart -->
<script src="{{ asset('/assets/js/plugins/apexcharts.min.js') }}"></script>
{{-- <script>
    $("body").append('<div class="fixed-button active"><a href="https://1.envato.market/VGznk" target="_blank" class="btn btn-md btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro</a> </div>');
</script> --}}


<!-- custom-chart js -->
<script src="{{ asset('/assets/js/pages/dashboard-sale.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.select2-multiple').select2();
    });
</script>
<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        $('#dataTableHover').DataTable();

        // Fokus pada input pencarian setelah DataTable diinisialisasi
        $('div.dataTables_filter input').focus();
    });
</script>

<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        $('#dataTableHover2').DataTable();

        // Fokus pada input pencarian setelah DataTable diinisialisasi
        $('div.dataTables_filter input').focus();
    });
</script>