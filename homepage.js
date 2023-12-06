const arrows = document.querySelectorAll(".arrow");
const bookLists = document.querySelectorAll(".book-list");

arrows.forEach((arrow, i) => {
  const itemNumber = bookLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 300);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      const currentTransform = bookLists[i].style.transform || "translateX(0)";
      const currentXValue = parseFloat(currentTransform.match(/-?\d+/)[0]);
      bookLists[i].style.transform = `translateX(${currentXValue - 300}px)`;
    } else {
      bookLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(Math.floor(window.innerWidth / 270));
});

// TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container, .book-list-title, .navbar-container, .sidebar, .left-menu-icon, .toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});
