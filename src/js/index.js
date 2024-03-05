document.addEventListener("DOMContentLoaded", function () {
  const homeSection = document.getElementById("home");
  homeSection.style.display = "block";
  homeSection.classList.add("active-section");

  const navLinks = document.querySelectorAll("nav a");

  navLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      event.preventDefault();

      const targetSectionId = link.getAttribute("href").substring(1);

      if (targetSectionId !== "home") {
        const isLoggedIn = false;

        if (!isLoggedIn) {
          alert("Anda harus login terlebih dahulu.");
          return;
        }
      }

      document.querySelectorAll("section").forEach(function (section) {
        section.style.display = "none";
        section.classList.remove("active-section");
      });

      const targetSection = document.getElementById(targetSectionId);
      if (targetSection) {
        targetSection.style.display = "block";
        targetSection.classList.add("active-section");
      }
    });
  });
});

function openLoginOverlay() {
  document.getElementById("loginOverlay").style.display = "flex";
}

function closeLoginOverlay() {
  document.getElementById("loginOverlay").style.display = "none";
}
