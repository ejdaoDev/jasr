<script type="text/javascript">
    $(document).ready(function () {
        if(document.location.href.includes('home')){
            localStorage.removeItem('sidebarModuleSelected');
        localStorage.removeItem('sidebarOptionSelected');
        };
        $('#' + localStorage.getItem('sidebarModuleSelected') + '-accordion').toggleClass('menu-open');
        $('#' + localStorage.getItem('sidebarModuleSelected') + '-link').toggleClass('active');
        $('#' + localStorage.getItem('sidebarOptionSelected')).toggleClass('active');
    });


    function sidebarOptionSelected(module, name) {
        localStorage.setItem('sidebarModuleSelected', module);
        localStorage.setItem('sidebarOptionSelected', name);
    }
</script>