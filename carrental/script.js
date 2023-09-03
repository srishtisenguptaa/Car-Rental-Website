document.addEventListener("DOMContentLoaded", function () {
    const scrollButton = document.getElementById("scroll-button");
    const mainContent = document.querySelector("main-content");
  
    scrollButton.addEventListener("click", function () {
      mainContent.scrollIntoView({ behavior: "smooth" });
    });
  });
  