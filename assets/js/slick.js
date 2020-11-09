// get bg from data-background https://www.solodev.com/blog/web-design/adding-a-hero-slider-to-your-homepage-using-slick-slider.stml
$(document).ready(function() {
    if ($('[data-background]').length > 0) {
         $('[data-background]').each(function() {
           var $background, $backgroundmobile, $this;
           $this = $(this);
           $background = $(this).attr('data-background');
           $backgroundmobile = $(this).attr('data-background-mobile');
           if ($this.attr('data-background').substr(0, 1) === '#') {
             return $this.css('background-color', $background);
           } else if ($this.attr('data-background-mobile') && device.mobile()) {
             return $this.css('background-image', 'url(' + $backgroundmobile + ')');
           } else {
             return $this.css('background-image', 'url(' + $background + ')');
           }
         });
       }
     });
//Slick
$('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });

$('.main-slick').slick(
    {
        dots: false,
        arrow: false,
        //speed: 300,
        infinite: true,
        slidesToShow: 1,
        draggable: false,
        autoplay: true,
        autoplaySpeed: 6000

    }
)
