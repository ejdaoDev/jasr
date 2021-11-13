<script type="text/javascript">
    function deleteImage(id,image) {
        Swal.fire({
            title: '¿Estas seguro que deseas eliminar esta imagen?',
            showConfirmButton: false,
            showDenyButton: true,
            showCancelButton: true,
            denyButtonText: `Eliminar`,
            cancelButtonText: `Cancelar`
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isDenied) {
                $.ajax({
                    url: 'delete-image/'+id+'/'+image,
                    method: 'GET'
                }).done();
                setTimeout(function(){ window.location.reload(); }, 1000);
                
            }
        });
    };
</script>