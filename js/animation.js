window.addEventListener('load', function(){

    console.log("oui animation");
  
   /* let element = document.getElementsByClassName('entry-title');
    element.classList.add("mystyle");*/

   let elmtitre = document.querySelector('.site-branding .site-title');
    elmtitre.classList.add('boutonfade');

    let elmstitre = document.querySelector('.site-branding .site-description');
    elmstitre.classList.add('translation');
    //.classList.add("barre");

})