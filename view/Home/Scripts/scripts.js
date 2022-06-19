function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
  }

function alertFunction(isSesion) {
  alert(isSesion);
  alert('sigur ii bun ?');
  if(isSesion) {
    alert('Esti logat tank');
  }
  else
    alert('You are not logged in!');
}