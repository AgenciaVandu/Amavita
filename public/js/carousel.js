window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'),{
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        dots: '.carousel__indicadores',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        },
        responsive: [
            {
              // screens greater than >= 775px
              breakpoint: 800,
              settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: '2',
                slidesToScroll: '1',
              }
            },{
              // screens greater than >= 1024px
              breakpoint: 904,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25
              }
            }
          ]
    });

});

window.addEventListener('load', function(){
  new Glider(document.querySelector('.carousel__lista1'),{
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      dots: '.carousel__indicadores1',
      arrows: {
          prev: '.carousel__anterior1',
          next: '.carousel__siguiente1'
      },
      responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 800,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: '2',
              slidesToScroll: '1',
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 904,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25
            }
          }
        ]
  });

});

window.addEventListener('load', function(){
  new Glider(document.querySelector('.carousel__lista3'),{
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      dots: '.carousel__indicadores3',
      arrows: {
          prev: '.carousel__anterior3',
          next: '.carousel__siguiente3'
      },
      responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 800,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: '2',
              slidesToScroll: '1',
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 904,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25
            }
          }
        ]
  });

});

window.addEventListener('load', function(){
  new Glider(document.querySelector('.carousel__lista4'),{
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      dots: '.carousel__indicadores4',
      arrows: {
          prev: '.carousel__anterior4',
          next: '.carousel__siguiente4'
      },
      responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 800,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: '2',
              slidesToScroll: '1',
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 904,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25
            }
          }
        ]
  });

});
