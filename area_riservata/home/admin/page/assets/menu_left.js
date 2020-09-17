$( document ).ready(function() {
  //acquisizione url
  let url=window.location.href;

  /* generazione linl per immagine logo + link */
  if (url.includes("page")) {
    $('#logo').attr('src', "../assets/images/logo-p.png");
    $('#link_logo').attr('href', "../");

  }else {
    $('#logo').attr('src', "assets/images/logo-p.png");
    $('#link_logo').attr('href', "./");
  }

  /* generazione linl link menu */
  if (url.includes("page")) {
    $('#link_clienti').attr('href', "./clienti.php");
  }else {
    $('#link_clienti').attr('href', "./page/clienti.php");
  }
});
