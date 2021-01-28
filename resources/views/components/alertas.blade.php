@if (session('estado'))
    <script>
        Swal.fire({
            icon: '{{session('estado')[0]}}',
            title: '{{session('estado')[1]}}',
            html: '{{session('estado')[2]}}',
            showCloseButton: true,
            showCancelButton: false,
            allowOutsideClick: true,
            timer: {{session('estado')[3] ?? 2000}}
        })
    </script>
@endif