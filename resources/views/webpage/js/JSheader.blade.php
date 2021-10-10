<script type="text/javascript">
    if (document.location.href === ('http://localhost/webpage/public/')) {
        $('#inicio').toggleClass('page-scroll active');
    } else {
        $('#inicio').toggleClass('page-scroll');
    }

    function selected(name) {
        localStorage.setItem('selected', name);
    }

    if (document.location.href.includes(localStorage.getItem('selected'))) {
        $('#' + localStorage.getItem('selected')).toggleClass('page-scroll active');
    }

    function subselected(name) {
        localStorage.setItem('subselected', name);
        console.log(localStorage.getItem('subselected'));
    }

    if (document.location.href.includes(localStorage.getItem('subselected'))) {
        $('#' + localStorage.getItem('subselected')).toggleClass('nav-item active');
    }
</script>