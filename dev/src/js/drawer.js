jQuery(function() {
  const hamburger = jQuery('#js-hamburger');
  const drawer = jQuery('#js-drawer');
  const drawerLink = jQuery('.c-drawer__link')
  hamburger.on('click',function(){
    hamburger.toggleClass("is-checked")
    drawer.toggleClass("is-checked")
  })
  drawerLink.on('click',function(){
    hamburger.toggleClass("is-checked")
    drawer.toggleClass("is-checked")
  })
});
