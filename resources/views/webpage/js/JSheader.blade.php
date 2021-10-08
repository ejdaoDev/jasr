<script type="text/javascript">
    function selected(name){
        localStorage.setItem('selected',name);
    }
    if (document.location.href === ('http://localhost/webpage/public/')) {
        $('#inicio').toggleClass('page-scroll active');
    } else {
        $('#inicio').toggleClass('page-scroll');
    }
    
    if (document.location.href.includes(localStorage.getItem('selected'))) {
        $('#'+localStorage.getItem('selected')).toggleClass('page-scroll active');
        localStorage.removeItem('selected')
    }
    
    
    
      
   
</script>