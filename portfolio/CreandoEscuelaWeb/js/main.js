$('.modaal-ajax').modaal({
  type: 'ajax'
});

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  wrapAround: true,
  cellAlign: 'left',
  contain: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
  // options
});