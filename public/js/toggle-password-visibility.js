(function() {
    "use strict";
  
    document.addEventListener("click", (e) => {
      let btn = e.target;
  
      if (!btn.classList.contains("btn-toggle-password-visibility")) {
        return;
      }
  
      let input;
  
      for (let item of btn.parentNode.parentNode.children) {
        if (input) {
          break;
        }
  
        if (item.classList.contains("form-control")) {
          input = item;
          break;
        }
  
        if (item.classList.contains("form-floating")) {
          for (let floatingItem of item.children) {
            if (floatingItem.classList.contains("form-control")) {
              input = floatingItem;
              break;
            }
          }
        }
      }
  
      if (!input || typeof input.type === "undefined") {
        return;
      }
  
      if (input.type === "password") {
        input.type = "text";
      } else if (input.type === "text") {
        input.type = "password";
      }
    });
  })();