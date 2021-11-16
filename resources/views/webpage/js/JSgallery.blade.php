<script type="text/javascript">
    var lastname = 'one';
    function selectedItem(name) {
        $('#' + name).toggleClass('portfolio-btn active');
        $('#' + lastname).toggleClass('portfolio-btn active');
        lastname = name;
    }
    imagesLoaded('#container', function () {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {
            itemSelector: '.grid-item',
            masonry: {
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