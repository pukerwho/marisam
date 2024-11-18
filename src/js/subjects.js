//BLOG SUBJECTS
let blogSubjects = document.querySelector(".single-subjects");
let blogH2 = document.querySelectorAll(".single .content h2");
let blogSubjectsBlock = document.querySelector(".single-subjects-inner");
let blogH2Array = [];

if (blogH2.length > 0) {
  blogSubjects.style.display = "inline-block";
}

if (blogH2) {
  for (const [index, bH2] of blogH2.entries()) {
    bH2.id = "s" + index;
    let tempH2 = bH2.innerText;
    blogH2Array.push(tempH2);
  }
}

for (const [index, bH2Ar] of blogH2Array.entries()) {
  let tempH2Li = document.createElement("li");
  let tempH2A = document.createElement("a");
  tempH2Li.className = "mb-1";
  tempH2A.innerHTML = bH2Ar;
  tempH2A.href = "#s" + index;
  tempH2Li.append(tempH2A);
  blogSubjectsBlock.append(tempH2Li);
}

let anchors = document.querySelectorAll('.single-subjects-inner a[href*="#"]');

for (anchor of anchors) {
  if (anchor) {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      anchorId = this.getAttribute("href");
      yOffset = -30;
      element = document.querySelector(anchorId);
      console.log(element);
      y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

      window.scrollTo({ top: y, behavior: "smooth" });
    });
  }
}
