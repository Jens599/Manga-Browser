const carousel_images = document.querySelector(".carousel_images");
const top_carousel_images = document.querySelector(".top_carousel_images");
const details = document.querySelector(".wrapper");
const totalImages = 4;
index = 0;
visibleNumber = Math.floor(window.innerWidth / 300);
topIndex = 0;
const imageSlider = document.querySelector(".top_carousel");
setWidth();

const lBtn = document.querySelector(".lBtn");
const rBtn = document.querySelector(".rBtn");

const l_top = document.querySelector(".l_top");
const r_top = document.querySelector(".r_top");

lBtn.addEventListener("click", function (e) {
  index = index == 0 ? totalImages : index - 1;
  translate(index, carousel_images, 500);
  translate(index, details, 500);
});

rBtn.addEventListener("click", function (e) {
  index = index == totalImages ? 0 : index + 1;
  translate(index, carousel_images, 500);
  translate(index, details, 500);
});

l_top.addEventListener("click", function (e) {
  topIndex = topIndex == 0 ? 7 - visibleNumber : topIndex - 1;
  translate(topIndex, top_carousel_images, 300);
  console.log(visibleNumber);
});

r_top.addEventListener("click", function (e) {
  topIndex = topIndex == 7 - visibleNumber ? 0 : topIndex + 1;
  translate(topIndex, top_carousel_images, 300);
  console.log(visibleNumber);
});

function translate(index, element, width) {
  const expression = `translateX(-${index * width}px)`;
  element.style.transform = expression;
}

window.addEventListener("resize", function () {
  visibleNumber = Math.floor(window.innerWidth / 300);
  setWidth();
});

function setWidth() {
  const width = visibleNumber * 300;
  imageSlider.style.width = `${width}px`;
  topIndex = 0;
  translate(topIndex, top_carousel_images, 300);
}
