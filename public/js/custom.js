// This js is for calendar
(function () {

  const stepsEls = document.querySelectorAll('.progress-steps .step');
  function updateProgress(step) {
    stepsEls.forEach(s => {
      const n = Number(s.getAttribute('data-step'));
      s.classList.remove('active', 'complete');
      if (step > n) s.classList.add('complete');
      if (step === n) s.classList.add('active');
    });
    document.querySelectorAll('.step-panel').forEach(p => {
      p.style.display = (Number(p.getAttribute('data-panel')) === step) ? 'block' : 'none';
    });
  }

  let currentStep = 1;
  updateProgress(currentStep);

  // --- Service selection UI ---
  document.querySelectorAll('.svc').forEach(el => {
    el.addEventListener('click', () => {
      document.querySelectorAll('.svc').forEach(x => x.classList.remove('active'));
      el.classList.add('active');
    });
  });

  // --- Barber selection UI ---
  document.querySelectorAll('.barber').forEach(el => {
    el.addEventListener('click', () => {
      document.querySelectorAll('.barber').forEach(x => x.classList.remove('active'));
      el.classList.add('active');
    });
  });

  // --- Navigation ---
  document.getElementById('toStep2')?.addEventListener('click', () => {
    currentStep = 2;
    updateProgress(currentStep);
  });

  document.getElementById('backTo1')?.addEventListener('click', () => {
    currentStep = 1;
    updateProgress(currentStep);
  });

  document.getElementById('toStep3')?.addEventListener('click', () => {
    currentStep = 3;
    updateProgress(currentStep);
  });

  document.getElementById('backTo2')?.addEventListener('click', () => {
    currentStep = 2;
    updateProgress(currentStep);
  });

  // --- Confirm (dummy) ---
  document.getElementById('confirmBooking')?.addEventListener('click', () => {
    currentStep = 4;
    updateProgress(currentStep);
  });

  // --- Restart (reload page) ---
  document.getElementById('goNew')?.addEventListener('click', () => {
    location.reload();
  });

  // --- Calendar setup ---
  const calendarGrid = document.getElementById('calendarGrid');
  const calMonthLabel = document.getElementById('calMonthLabel');
  let current = new Date();

  const availability = {};
  (function fillAvailability() {
    const d = new Date();
    const start = new Date(d.getFullYear(), d.getMonth(), 1);
    for (let i = 0; i < 60; i++) {
      const dt = new Date(start.getFullYear(), start.getMonth(), 1 + i);
      const key = iso(dt);
      availability[key] = (dt.getDay() !== 0 && dt.getDay() !== 6)
        ? (Math.random() > 0.2)
        : (Math.random() > 0.7);
    }
  })();

  function drawCalendar(date) {
    if (!calendarGrid) return;
    calendarGrid.innerHTML = '';
    const year = date.getFullYear();
    const month = date.getMonth();
    calMonthLabel.innerText = date.toLocaleString(undefined, { month: 'long', year: 'numeric' });

    const firstDay = new Date(year, month, 1);
    const startWeekday = (firstDay.getDay() + 6) % 7;
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const prevLast = new Date(year, month, 0).getDate();

    // prev month filler
    for (let i = 0; i < startWeekday; i++) {
      const day = prevLast - (startWeekday - 1) + i;
      const el = document.createElement('div');
      el.className = 'cal-day cal-day--muted';
      el.innerText = day;
      calendarGrid.appendChild(el);
    }

    // days of current month
    for (let d = 1; d <= daysInMonth; d++) {
      const el = document.createElement('div');
      const dt = new Date(year, month, d);
      const key = iso(dt);
      const isAvailable = availability[key] || false;
      el.className = 'cal-day ' + (isAvailable ? 'available' : 'unavailable');
      el.innerText = d;
      el.title = isAvailable ? 'Available' : 'Unavailable';

      el.addEventListener('mouseenter', () => {
        if (isAvailable) el.style.background = 'linear-gradient(180deg,var(--accent), #f7cfa3)';
      });
      el.addEventListener('mouseleave', () => {
        el.style.background = '';
      });

      el.addEventListener('click', () => {
        if (!isAvailable) {
          alert('No availability on this date.');
          return;
        }
        document.querySelectorAll('.cal-day').forEach(x => x.classList.remove('selected'));
        el.classList.add('selected');
      });

      calendarGrid.appendChild(el);
    }

    // trailing filler
    const totalCells = calendarGrid.children.length;
    const need = (totalCells % 7 === 0) ? 0 : (7 - (totalCells % 7));
    for (let i = 1; i <= need; i++) {
      const el = document.createElement('div');
      el.className = 'cal-day cal-day--muted';
      el.innerText = i;
      calendarGrid.appendChild(el);
    }
  }

  // --- Month nav ---
  document.getElementById('prevMonth')?.addEventListener('click', () => {
    current = new Date(current.getFullYear(), current.getMonth() - 1, 1);
    drawCalendar(current);
  });

  document.getElementById('nextMonth')?.addEventListener('click', () => {
    current = new Date(current.getFullYear(), current.getMonth() + 1, 1);
    drawCalendar(current);
  });

  function iso(d) {
    const y = d.getFullYear();
    const m = String(d.getMonth() + 1).padStart(2, '0');
    const dd = String(d.getDate()).padStart(2, '0');
    return `${y}-${m}-${dd}`;
  }

  // --- Dummy time slots ---
  function loadTimeSlotsForDate() {
    const container = document.getElementById('timeSlots');
    if (!container) return;
    container.innerHTML = '';
    const sample = ['09:00 am', '10:00 am', '11:00 am', '12:30 pm', '02:00 pm', '03:30 pm', '05:00 pm'];
    sample.forEach(t => {
      const el = document.createElement('div');
      el.className = 'slot available';
      el.innerText = t;
      el.addEventListener('click', () => {
        document.querySelectorAll('.slot').forEach(x => x.classList.remove('selected'));
        el.classList.add('selected');
      });
      container.appendChild(el);
    });
  }

  // --- Init ---
  drawCalendar(current);
  loadTimeSlotsForDate();

  // step click backward navigation
  stepsEls.forEach(s => {
    s.addEventListener('click', () => {
      const n = Number(s.getAttribute('data-step'));
      if (n < currentStep) {
        currentStep = n;
        updateProgress(currentStep);
      }
    });
  });
})();
// This js is for calendar



// This js is for menu
$(document).on("click", ".hamburger-menu", function () {
  $("body").toggleClass("hamburger-navigation-active");
  $(".hamburger-menu svg").toggleClass("opened");
});
// This js is for menu

// This js is for tilt animation
$(document).ready(function () {
  $(".tilt").tilt({
    maxGlare: 1,
    maxTilt: 3,
    transition: true,
  });
});
// This js is for tilt animation

// This js is for video play and pause
document.querySelectorAll(".hour-card").forEach((card) => {
  const video = card.querySelector(".hour-video");
  const playPauseBtn = card.querySelector(".play-pause");

  playPauseBtn.addEventListener("click", (e) => {
    e.preventDefault();

    if (video.paused) {
      document.querySelectorAll(".hour-video").forEach((v) => v.pause());
      document
        .querySelectorAll(".hour-card")
        .forEach((c) => c.classList.remove("playing"));

      video.play();
      card.classList.add("playing");
    } else {
      video.pause();
      card.classList.remove("playing");
    }
  });

  video.addEventListener("ended", () => {
    card.classList.remove("playing");
  });
});
// This js is for video play and pause

// this js is for aos animation
function handleAOS() {
  if (typeof AOS !== "undefined") {
    if (window.innerWidth > 768) {
      AOS.init();
    } else {
      const aosElements = document.querySelectorAll("[data-aos]");
      aosElements.forEach((el) => {
        el.removeAttribute("data-aos");
        el.style.opacity = 1;
        el.style.transform = "none";
      });
    }
  } else {
    console.warn("AOS is not loaded.");
  }
}

document.addEventListener("DOMContentLoaded", () => {
  handleAOS();

  window.addEventListener("resize", () => {
    handleAOS();
  });
});
// this js is for aos animation

// this js is for loader
$(window).on("load", function () {
  var width = 100,
    perfData = window.performance.timing,
    EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
    time = parseInt((EstimatedTime / 1000) % 60) * 60;

  $(".loadbar").animate({ width: width + "%" }, time);

  function animateValue(id, start, end, duration) {
    var range = end - start,
      current = start,
      increment = end > start ? 1 : -1,
      stepTime = Math.abs(Math.floor(duration / range)),
      obj = $(id);

    var timer = setInterval(function () {
      current += increment;
      $(obj).text(current + "%");
      if (current == end) clearInterval(timer);
    }, stepTime);
  }

  setTimeout(function () {
    $("body").addClass("page-loaded");
  }, time);

  if ($.fn.counterUp) {
    $(".counter1").counterUp({ delay: 10 });
    $(".counter").counterUp({ delay: 10 });
  }
});

// this js is for loader

// Testi slider start
$(".testi-slider").slick({
  arrows: true,
  dots: false,
  infinite: true,
  speed: 300,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
setInterval(function () {
  let next_img = $(".testi-box.slick-slide.slick-current")
    .next()
    .find(".testi-img>img")
    .attr("src");
  let prev_img = $(".testi-box.slick-slide.slick-current")
    .prev()
    .find(".testi-img>img")
    .attr("src");
  $(".testi-slider button.slick-prev").css(
    "background-image",
    "url(" + prev_img + ")"
  );
  $(".testi-slider button.slick-next").css(
    "background-image",
    "url(" + next_img + ")"
  );
}, 100);
var $status = $(".start_number1");
var $slickElement = $(".testi-slider");
$slickElement.on(
  "init reInit afterChange",
  function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $status.text("0" + i + "");
  }
);
var $slider = $(".testi-slider");
var $progressBar = $(".progress3");
var $progressBarLabel = $(".slider__label");
$slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
  var calc = (nextSlide / (slick.slideCount - 1)) * 100;
  $progressBar
    .css("background-size", calc + "% 100%")
    .attr("aria-valuenow", calc);
  $progressBarLabel.text(calc + "% completed");
});
// Testi slider  end

// wow animation js
$(function () {
  new WOW().init();
});
// wow animation js

// this js is for Active Menu
function highlightActiveMenu() {
  // Get current page filename
  let currentPage = window.location.pathname.split("/").pop().toLowerCase();

  if (
    currentPage === "" ||
    currentPage === "index" ||
    currentPage === "index.html"
  ) {
    currentPage = "index.html";
  }

  $("#menu li a").each(function () {
    let linkPage = $(this).attr("href").toLowerCase();

    if (linkPage === currentPage) {
      $(this).addClass("active");
    } else {
      $(this).removeClass("active");
    }
  });
}
// this js is for Active Menu

// Password Hide Start
function togglePasswordVisibility(toggleButton) {
  $(toggleButton).toggleClass("fa-eye fa-eye-slash");
  var input = $($(toggleButton).attr("toggle"));
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
}
// Attach event listener
$(document).on("click", ".toggle-password", function () {
  togglePasswordVisibility(this);
});
// Password Hide End
