function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
  }

function alertFunction(isSesion) {
  if(isSesion) {
    window.location.href = '../Booking/index.html';
  }
  else
    alert('You are not logged in!');
}