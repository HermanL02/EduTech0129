let currestSlide = -1;
var data, state;
let lastSlide = false;
window.addEventListener("message", function (event) {
  data = JSON.parse(event.data);

  // Make sure we're talking to a presentation
  if (data.namespace === "reveal") {
    // We only care about the slide changing. The 'ready' event
    // is sent in place of a 'slidechanged' for the very first
    // slide when the presentation loads.
    if (data.eventName === "slidechanged" || data.eventName === "ready") {
      // Dig out the presentation state, key properties:
      //   indexh: The index of the current horizontal slide
      //   indexv: The index of the current vertical slide (if any)
      //   indexf: The index of the current fragment (if any)
      var state = data.state;
      currestSlide = state.indexh;
    } else if (data.eventName === "callback") {
      if (data.result) {
        lastSlide = true;
      }
    }
  }
});

const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
  document.querySelector(".button").classList.toggle("darkMode");
  if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
  } else {
    modeText.innerText = "Dark mode";
  }
});

const emoji = document.querySelector(".slide-emoji");
const input = document.querySelector(".myinput");
const bar = document.querySelector(".progress-bar");
const thumb = document.querySelector(".thumb");
input.oninput = () => {
  let sliderValue = input.value;
  thumb.style.left = sliderValue + "%";
  bar.style.width = sliderValue + "%";
  if (sliderValue < 20) {
    emoji.style.marginTop = "0px";
    body.classList.add("angry");
    body.classList.remove("confuse");
    body.classList.remove("like");
  }
  if (sliderValue >= 20) {
    emoji.style.marginTop = "-140px";
    body.classList.add("confuse");
    body.classList.remove("angry");
    body.classList.remove("like");
  }
  if (sliderValue >= 40) {
    emoji.style.marginTop = "-280px";
  }
  if (sliderValue >= 60) {
    emoji.style.marginTop = "-420px";
    body.classList.add("like");
    body.classList.remove("confuse");
    body.classList.remove("angry");
  }
  if (sliderValue >= 80) {
    emoji.style.marginTop = "-560px";
  }
  console.log(sliderValue);
};

function update(str,page) {
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
  document.getElementById("txtHint").innerHTML = this.responseText;
  }
};
xhttp.open("GET", "processnote.php?complete="+str+"&page="+page, true);

xhttp.send();

}
var currentSlide2 = 0;
function addUp(str) {
  var xhttp = new XMLHttpRequest();
  str = document.getElementById("content").value;
  console.log(currentSlide2);
  xhttp.open("GET", "processnote.php?complete="+str+"&page="+currentSlide2, true);
  console.log("processnote.php?complete="+str+"&page="+currentSlide2);
  xhttp.send();
}

document.querySelector("iframe").addEventListener("mouseenter", function () {
  document.querySelector("iframe").contentWindow.postMessage(
    JSON.stringify({
      method: "isLastSlide",
    }),
    "*"
  );
  console.log(currestSlide);
  currentSlide2 = currestSlide;
  document.getElementById("page").value=currestSlide;
  console.log(currestSlide+"slide");
  update("display",currestSlide);
});//HOVER 

document.querySelector("iframe").addEventListener("mouseleave", function () {
  if (lastSlide === true) {
    document.querySelector(".button").classList.remove("hidden");
  }
});

const buttonElement = document.querySelector(".button");
buttonElement.addEventListener("click", function () {
  document.querySelector("iframe").classList.add("hidden");
  buttonElement.classList.add("hidden");
  document.querySelector(".wrapper").classList.remove("hidden");
  document.querySelector(".input").classList.add("hidden");
  document.getElementById("list-container").classList.add("hidden");
});

const sendDataButon = document.querySelector(".sendData");

sendDataButon.addEventListener("click",function(){
  var xhttp = new XMLHttpRequest();
  var str = document.getElementById("bt").value;
  xhttp.open("GET", "reactionAdd.php?reaction="+str, true);
  console.log("reactionAdd.php?reaction="+str);
  xhttp.send();
  document.querySelector(".wrapper").classList.add("hidden");
  window.location.href="analytics.php"; 
})


