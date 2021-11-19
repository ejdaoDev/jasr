<script type="text/javascript">
    $(document).ready(function () {
        let Width = window.innerWidth;
        if (Width >= 768 && Width <= 991) {
            $('#pushmenu').click();
        }
        if (document.location.href.includes('home')) {
            localStorage.removeItem('sidebarModuleSelected');
            localStorage.removeItem('sidebarOptionSelected');
        }
        $('#' + localStorage.getItem('sidebarModuleSelected') + '-accordion').toggleClass('menu-open');
        $('#' + localStorage.getItem('sidebarModuleSelected') + '-link').toggleClass('active');
        $('#' + localStorage.getItem('sidebarOptionSelected')).toggleClass('active');
    });
    function sidebarOptionSelected(module, name) {
        localStorage.setItem('sidebarModuleSelected', module);
        localStorage.setItem('sidebarOptionSelected', name);
    }
</script>