/*const turbolinksPersistScroll = () => {
  const persistScrollDataAttribute = 'turbolinks-persist-scroll';
  let scrollPosition = null;
  let enabled = false;
  document.addEventListener('turbolinks:before-visit', () => {
    if (enabled){
      scrollPosition = window.scrollY;
      console.log("SI");
  }else{
      scrollPosition = 0;
    enabled = false;
    //window.scrollTo(0, 0);
    console.log("NO");
}
  });
  
  document.addEventListener('turbolinks:load', () => {
    const elements = document.querySelectorAll(`[data-${persistScrollDataAttribute}="true"]`);
    for (let i = 0; i < elements.length; i++) {
      elements[i].addEventListener('click', () => {
        enabled = true;
      });
    }
    if (scrollPosition){
      window.scrollTo(0, scrollPosition);        
    }else{
        window.scrollTo(0, scrollPosition);
        console.log("subiendo al Top");
    }
        
  
  });
};

turbolinksPersistScroll();*/

 document.addEventListener('turbolinks:before-visit', () => {
     Turbolinks.clearCache();
     console.log("Limpiando Caché...");
 });
document.addEventListener('turbolinks:render', () => {
   window.scrollTo(0, 0);
    console.log("subiendo al top...");

  });


/*console.log("subiendo al Top");
Turbolinks.scroll = {};

$(document).on('click', '[data-turbolinks-scroll=false]', function(e) {
  Turbolinks.scroll['top'] = $('body').scrollTop();
  console.log("subiendo al Top");
});

// Use turbolinks:render so the scroll is reset when viewing a cached page too
$(document).on('turbolinks:render', function() {
  if (Turbolinks.scroll['top']) {
    $('body').scrollTop(Turbolinks.scroll['top']);
    console.log("subiendo al Top");
  }
  Turbolinks.scroll = {};
});*/