(function() {
   const items = document.querySelectorAll('.animation');
   const items2 = document.querySelectorAll('.timeline li');

   function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    } 
    
    function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
          items[i].classList.add("timeline2");
        }
      }
      for (var i = 0; i < items2.length; i++) {
         if (isElementInViewport(items2[i])) {
           items2[i].classList.add("in-view");
         }
       }
    }
  
    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
})();