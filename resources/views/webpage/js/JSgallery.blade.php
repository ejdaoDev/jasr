<script type="text/javascript">
    var lastname = 'all';
    function selected(name){
        $('#'+name).toggleClass('portfolio-btn active');  
        $('#'+lastname).toggleClass('portfolio-btn active');
        lastname = name;
    }
</script>