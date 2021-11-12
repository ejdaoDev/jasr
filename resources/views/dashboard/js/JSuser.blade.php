<script type="text/javascript">
    function lock(user) {
        Swal.fire({
            title: '¿Deseas bloquear al usuario '+user.firstname+' '+user.firstlastname+'?',
            showConfirmButton: false,
            showDenyButton: true,
            showCancelButton: true,
            denyButtonText: `Bloquear`,
            cancelButtonText: `Cancelar`
        }).then((result) => {
            if (result.isDenied) {
                $.ajax({
                    url: 'inactivateUser/'+user.id,
                    method: 'GET'
                }).done();
                setTimeout(function(){ window.location.reload(); }, 500);
            }
        });
    };
    
    function unlock(user) {
        Swal.fire({
            title: '¿Deseas desbloquear al usuario '+user.firstname+' '+user.firstlastname+'?',
            showConfirmButton: true,
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: `Desbloquear`,
            cancelButtonText: `Cancelar`
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'activateUser/'+user.id,
                    method: 'GET'
                }).done();
                setTimeout(function(){ window.location.reload(); }, 500);
            }
        });
    };
</script>