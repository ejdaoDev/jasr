<script type="text/javascript">

    //========= Tostadas
    $(document).ready(function () {
        $('.toast').toast('show');
    });



    //======== Inicio Slider
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

    //============== mampostería de isótopos js con imágenes cargadas
    imagesLoaded('#container', function () {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {
            // opciones
            itemSelector: '.grid-item',
            masonry: {
                // use el ancho exterior del medidor de cuadrícula para columnWidth, asi lo tengo
                columnWidth: '.grid-item'
            }
        });

        let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
        filterButtons.forEach(e =>
            e.addEventListener('click', () => {

                let filterValue = event.target.getAttribute('data-filter');
                iso.arrange({
                    filter: filterValue
                });
            })
        );
    });
</script>