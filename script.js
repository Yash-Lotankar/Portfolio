document.addEventListener("DOMContentLoaded", function () {
    let progressBars = document.querySelectorAll(".progress");

    function showProgress() {
        progressBars.forEach((bar) => {
            let width = bar.getAttribute("data-width");
            bar.style.width = width;
        });
    }

    window.addEventListener("scroll", function () {
        let section = document.getElementById("skills");
        let sectionTop = section.getBoundingClientRect().top;
        let screenPosition = window.innerHeight / 1.2;

        if (sectionTop < screenPosition) {
            showProgress();
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const aboutSection = document.querySelector('.about');
    
    function revealOnScroll() {
        const scrollPosition = window.scrollY + window.innerHeight;
        if (scrollPosition > aboutSection.offsetTop + aboutSection.offsetHeight / 2) {
            aboutSection.classList.add('visible');
        }
    }

    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();
});

  function toggleMenu() {
    document.querySelector('nav ul').classList.toggle('show');
  }



