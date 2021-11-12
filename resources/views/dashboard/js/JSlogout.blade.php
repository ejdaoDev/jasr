<script type="text/javascript">
    function logout() {
        Swal.fire({
            title: '¿Estas seguro que deseas cerrar sesión?',
            showConfirmButton: false,
            showDenyButton: true,
            showCancelButton: true,
            denyButtonText: `Cerrar`,
            cancelButtonText: `Cancelar`
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isDenied) {
                $.ajax({
                    url: 'logout',
                    method: 'GET'
                }).done();
                setTimeout(function(){ window.location.reload(); }, 1000);
            }
        });
    };
</script>