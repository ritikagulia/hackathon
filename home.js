document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  const slideWidth = slides[0].offsetWidth;
  const totalSlides = slides.length;
  let currentIndex = 0;

  function slideTo(index) {
    if (index < 0 || index >= totalSlides) {
      // Handle index overflow by looping
      currentIndex = (index + totalSlides) % totalSlides;
    } else {
      currentIndex = index;
    }
    const offset = -slideWidth * currentIndex;
    slider.style.transform = `translateX(${offset}px)`;
  }

  function slideNext() {
    slideTo(currentIndex + 1);
  }

  function slidePrev() {
    slideTo(currentIndex - 1);
  }

  // Automatic sliding
  setInterval(slideNext, 3000); // Change slide every 3 seconds
});

const redirect = document.querySelector(".scholarshipCont");
redirect.addEventListener("click", function () {
  window.open(
    "https://www.buddy4study.com/scholarships?utm_source=header",
    "_blank"
  );
});

const redirect6 = document.querySelector(".coursesCont");
redirect6.addEventListener("click", function () {
  const targetSection = document.getElementById("onlinecourses");
  targetSection.scrollIntoView({ behavior: "smooth" });
});

const redirect7 = document.querySelector(".scholarshipCont");
redirect.addEventListener("click", function () {
  window.open(
    "https://www.buddy4study.com/scholarships?utm_source=header",
    "_blank"
  );
});

const redirect2 = document.querySelector("#courseera");
redirect2.addEventListener("click", function () {
  window.open(
    "https://www.coursera.org/browse/computer-science/software-development",
    "_blank"
  );
});

const redirect3 = document.querySelector("#linkedin");
redirect3.addEventListener("click", function () {
  window.open(
    "https://www.classcentral.com/report/linkedin-learning-free-learning-paths/#paths",
    "_blank"
  );
});

const redirect4 = document.querySelector("#udemy");
redirect4.addEventListener("click", function () {
  window.open("https://www.udemy.com/courses/free/", "_blank");
});

const redirect5 = document.querySelector("#skillshare");
redirect5.addEventListener("click", function () {
  window.open(
    "https://www.shiksha.com/online-courses/free-skillshare-courses-certification-training-v495?enModal=Y&regFlow=N",
    "_blank"
  );
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // When content is loaded, remove the 'loading' class from the body
  document.body.classList.add("loaded");
});

// document.addEventListener("DOMContentLoaded", function () {
//   const popup = document.querySelector(".popup");
//   popup.style.display = "block";
//   this.body.style.display = "flex";
//   this.body.style.justifyContent = "center";
// });

document.addEventListener("DOMContentLoaded", function () {
  // Select the popup container
  var popupContainer = document.getElementById("popup-container");

  // Make the popup visible
  popupContainer.style.display = "flex";
});

// JavaScript
function toggleScrolling(enableScroll) {
  const body = document.body;
  if (enableScroll) {
    body.classList.remove("body-no-scroll");
  } else {
    body.classList.add("body-no-scroll");
  }
}

// To disable scrolling
toggleScrolling(false);

// To enable scrolling
toggleScrolling(true);

const phrases = [
  "Unlock endless learning possibilities.",
  "Connect,Learn and grow together.",
  "Transform education,one click.",
];
const typingText = document.querySelector(".typing-text");

let index = 0;
let letterIndex = 0;

function type() {
  if (index === phrases.length) {
    index = 0;
    typingText.textContent = ""; // Clear the text content before starting a new phrase
    setTimeout(type, 1000); // Delay before typing the next phrase
    return;
  }

  if (letterIndex === phrases[index].length) {
    setTimeout(() => {
      backspace(); // Start backspacing before typing the next line
      setTimeout(() => {
        index++;
        letterIndex = 0;
        type();
      }, 1500); // Delay before typing the next phrase
    }, 2000); // Delay after typing each line
    return;
  }

  typingText.textContent += phrases[index][letterIndex];
  letterIndex++;
  setTimeout(type, 100);
}

function backspace() {
  const text = typingText.textContent;
  typingText.textContent = text.slice(0, -1);
  if (text.length > 0) {
    setTimeout(backspace, 20); // Adjust the backspace speed here
  }
}

type();
// Scroll to top button functionality
document.addEventListener("DOMContentLoaded", function() {
  var button = document.getElementById('button');
  window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
          button.style.display = 'block';
      } else {
          button.style.display = 'none';
      }
  });

  button.addEventListener('click', function() {
      window.scrollTo({
          top: 0,
          behavior: 'smooth'
      });
  });
});



