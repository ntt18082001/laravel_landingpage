(function () {
   const items = document.querySelectorAll('.animation');
   const items2 = document.querySelectorAll('.timeline li');
   const items3 = document.querySelectorAll('.tp');
   const items4 = document.querySelectorAll('.about');
   const items5 = document.querySelectorAll('.staff');

   function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      if ($(window).width() > 767) {
         return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
         );
      } else {
         return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
         );
      }
   }

   function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
         if (isElementInViewport(items[i])) {
            items[i].classList.add("timeline2");
         } else {
            items[i].classList.remove("timeline2");
         }
      }
      for (var i = 0; i < items2.length; i++) {
         if (isElementInViewport(items2[i])) {
            items2[i].classList.add("in-view");
         } else {
            items2[i].classList.remove("in-view");
         }
      }
      for (var i = 0; i < items3.length; i++) {
         if (isElementInViewport(items3[i])) {
            items3[i].classList.add(`animation-tp${i + 1}`);
         } else {
            items3[i].classList.remove(`animation-tp${i + 1}`);
         }
      }
      for (var i = 0; i < items4.length; i++) {
         if (isElementInViewport(items4[i])) {
            items4[i].classList.add(`animation-about${i + 1}`);
         } else {
            items4[i].classList.remove(`animation-about${i + 1}`);
         }
      }
      for (var i = 0; i < items5.length; i++) {
         if (isElementInViewport(items5[i])) {
            items5[i].classList.add(`animation-staff${i + 1}`);
         } else {
            items5[i].classList.remove(`animation-staff${i + 1}`);
         }
      }
   }

   // listen for events
   window.addEventListener("load", callbackFunc);
   window.addEventListener("resize", callbackFunc);
   window.addEventListener("scroll", callbackFunc);
})();