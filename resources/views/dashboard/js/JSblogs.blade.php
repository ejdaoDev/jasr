<script type="text/javascript">
    function countCaracters(input,limit) {
      let value = document.getElementById(input).value;
      document.getElementById('count-'+input).innerHTML = '('+value.length+'/'+limit+')';
    };
</script>
