// smooth scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// teknologi carousel
$(".teknologi-carousel").owlCarousel({
  loop: true,
  margin: 38,
  nav: false,
  dots: true,
  autoplay: true,
  autoplayTimeout: 2000,
  lazyLoad: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

// sertifikasi carousel
$(".sertifikasi-carousel").owlCarousel({
  loop: true,
  margin: 38,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayTimeout: 3000,
  navText: [
    '<span class="iconify" data-icon="akar-icons:chevron-left" data-inline="false"></span>',
    '<span class="iconify" data-icon="akar-icons:chevron-right" data-inline="false"></span>',
  ],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 2,
    },
  },
});
