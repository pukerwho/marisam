var $ = require("jquery");

// Modals
function openModal(attrModal) {
  $(".modal[data-modal=" + attrModal + "]").addClass("open");
  $(".modal-bg").removeClass("hidden");
  $("body").addClass("overflow-hidden");
}

function closeModal(attrModal) {
  $(".modal").removeClass("open");
  $(".modal-bg").addClass("hidden");
  $("body").removeClass("overflow-hidden");
}

$(".modal-js").on("click", function (e) {
  var clickModalData = $(this).data("modal");
  var clickModalTitle = $(this).data("title");
  openModal(clickModalData);
});

$(".modal-close-js").on("click", function () {
  closeModal();
});

document.addEventListener("click", function (e) {
  if (e.target.classList.value === "modal open") {
    closeModal();
  }
});
