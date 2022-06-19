function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
  }

function alertFunction(isSesion) {
  if(isSesion) {
    window.location = "Proiect gros/WEB/view/Booking/index.html";
  }
  else
    alert('You are not logged in!');
}