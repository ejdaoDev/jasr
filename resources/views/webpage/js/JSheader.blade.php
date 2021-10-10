<script type="text/javascript">
     if (document.location.href === ('http://localhost/webpage/public/')) {
        $('#inicio').toggleClass('page-scroll active');
        console.log("inicio");
    } else {
        $('#inicio').toggleClass('page-scroll');
    }
    
    function selected(name){
        localStorage.setItem('selected',name);
    }
    
    if (document.location.href.includes(localStorage.getItem('selected'))) {
        $('#'+localStorage.getItem('selected')).toggleClass('page-scroll active');
        localStorage.removeItem('selected');
    }  
</script>