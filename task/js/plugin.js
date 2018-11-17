

    $(document).ready(function() {
     
    $(".app-slider").owlCarousel({
			margin: 10,
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 500,
			 dots: true,
            center: true,
           
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        });
		
		
	
     
    });

