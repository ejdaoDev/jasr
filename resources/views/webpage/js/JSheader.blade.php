<script type="text/javascript">
    $(document).ready(function () {
        if (document.location.href === ('http://localhost/jasr/public/') || document.location.href.includes('#inicio') || document.location.href === ('https://jasrdesarrolloweb.com/')) {
            $('#link-inicio').toggleClass('page-scroll active');
        }
        if (document.location.href.includes('#servicios')) {
            $('#link-servicios').toggleClass('page-scroll active');
        }
        if (document.location.href.includes(localStorage.getItem('selectedLink'))) {
            $('#link-' + localStorage.getItem('selectedLink')).toggleClass('page-scroll active');
        }
        if (document.location.href.includes(localStorage.getItem('subselectedLink'))) {
            $('#' + localStorage.getItem('subselectedLink')).toggleClass('nav-item active');
        }
    });
    function selectedLink(name) {
        localStorage.setItem('selectedLink', name);
    }
    function subselectedLink(name) {
        localStorage.setItem('subselectedLink', name);
    }
    function selectServicios() {
        window.location.href='#servicios';
    }
</script>