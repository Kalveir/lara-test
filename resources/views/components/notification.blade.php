@if(Session::has('alert'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Notify({
                status: '{{ Session::get("alert.type") }}', // Jenis notifikasi: success, error, info, warning
                title: "Notification", // Judul notifikasi
                text: '{{ Session::get("alert.message") }}', // Pesan notifikasi
                effect: 'fade', // Efek animasi
                speed: 200, // Kecepatan animasi
                autoclose: true, // Notifikasi ditutup otomatis
                autotimeout: 5000, // Durasi sebelum ditutup otomatis
                position: 'right', // Posisi notifikasi
            });
        });
    </script>
@endif