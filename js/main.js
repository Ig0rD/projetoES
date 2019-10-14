let menu = document.querySelector(".menuBtn");

document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems, {});
});
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {});
});
// menu.addEventListener('click', function () {
//   console.log("clicado");
//   if (document.querySelector(".menu") == null){
//     console.log("condicao");
//     let menuDiv = document.createElement("div");
//     menuDiv.classList.add("menu");
//     let menuOptions = document.createElement("ul");
//     let content = ["Home", "Loja", "Reparos"];
//     for(let i=0;i<3;i++){
//       let li = document.createElement("li");
//       let a = document.createElement("a");
//       a.innerHTML = content[i];
//       a.classList.add("menuOption");
//       li.appendChild(a);
//       menuOptions.appendChild(li);
//     }
//     menuDiv.appendChild(menuOptions);
//     document.body.appendChild(menuDiv);
//   } else {
//     document.querySelector(".menu").remove();
//     console.log("teste")
//   }
// });
