@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded',()=>{

                    Swal.fire({
            icon: 'success',
            title: 'Sucesso!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    });
    </script>
@endif
