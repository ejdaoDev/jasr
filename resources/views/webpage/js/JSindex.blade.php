<script type="text/javascript">
    $(document).ready(function () {
        currentChange();
    });
    $("#money").change(function () {
        currentChange();
    });
    function currentChange() {
        let type = document.getElementById("money").value;
        if (type === 'USD') {
            document.getElementById('price1').innerHTML = '210';
            document.getElementById('price2').innerHTML = '380';
            document.getElementById('price3').innerHTML = '650';
            document.getElementById('exchange1').innerHTML = 'USD';
            document.getElementById('exchange2').innerHTML = 'USD';
            document.getElementById('exchange3').innerHTML = 'USD';
        }
        if (type === 'COP') {
            document.getElementById('price1').innerHTML = '800,000';
            document.getElementById('price2').innerHTML = '1,500,000';
            document.getElementById('price3').innerHTML = '2,500,000';
            document.getElementById('exchange1').innerHTML = 'COP';
            document.getElementById('exchange2').innerHTML = 'COP';
            document.getElementById('exchange3').innerHTML = 'COP';
        }
    }
    var slider = new tns({
        container: '.home-slider',
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: true,
        controls: false,
        controlsText: [
            '<i class="lni lni-arrow-left prev"></i>',
            '<i class="lni lni-arrow-right next"></i>'
        ],
        responsive: {
            1200: {
                items: 1
            },
            992: {
                items: 1
            },
            0: {
                items: 1
            }
        }
    });
</script>