let tabsBtn = document.querySelectorAll(".tab-btn");
let tabsContent = document.querySelectorAll(".tab-content");

function tabRemove() {
  tabsContent.forEach((item) => {
    item.classList.add("hidden");
  });
  tabsBtn.forEach((tab) => {
    tab.classList.remove("btn-primary");
    tab.classList.add("btn-secondary");
  });
}

function tabAdd(tabContent, item) {
  tabContent.classList.remove("hidden");
  item.classList.add("btn-primary");
  item.classList.remove("btn-secondary");
}

tabsBtn.forEach((item) => {
  item.addEventListener("click", () => {
    tabData = item.dataset.tab;
    let tabContent = document.querySelector(
      '.tab-content[data-tab="' + tabData + '"]'
    );
    tabRemove();
    tabAdd(tabContent, item);
  });
});
