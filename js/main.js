let menu = document.querySelector(".menuBtn");

document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems, {});
});
menuBtn.addEventListener('onclick', function () {
  if (isNull(document.querySelector(".menu"))){
    let menuDiv = document.createElement("div");
    menuDiv.classList.add("menu");
    let menuOptions = document.createElement("ul");
    let content = ["Home", "Loja", "Reparos"];
    for(let i=0;i<4;i++){
      let li = document.createElement("li");
      let a = document.createElement("a");
      a.innerHTML = content[i];
      a.classList.add("menuOption");
      li.appendChild(a);
    }
  } else {
    document.querySelector(".menu").remove();
  }
});
