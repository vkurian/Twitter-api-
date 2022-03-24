function toggleClass(){
  let menu = document.querySelector(".mainMenu");
  menu.classlist.toggle("toggle");
}

Let hamburger = document.querySelector(".hamIcon");

hamburger.addEventListner("click", toggleClass);
