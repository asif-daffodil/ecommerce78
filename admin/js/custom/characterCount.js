const catDesTextarea = document.querySelector(".cat_des_textarea");
const showValueLength = document.querySelector(".show_value_length"),
  valueLength = showValueLength.querySelector(".value_length");

const catDesTextarea2 = document.querySelector(".cat_des_textarea2");
const showValueLength2 = document.querySelector(".show_value_length2"),
  valueLength2 = showValueLength2.querySelector(".value_length2");

const catDesTextarea3 = document.querySelector(".cat_des_textarea3");
const showValueLength3 = document.querySelector(".show_value_length3"),
  valueLength3 = showValueLength3.querySelector(".value_length3");

// ----------------------------------------------------------------
// ------------------ sub category description textarea -----------------
// ----------------------------------------------------------------

catDesTextarea.addEventListener("keyup", () => {
  const value = catDesTextarea.value.length;

  valueLength.innerHTML = value;

  showValueLength.classList.remove("text-danger");
  showValueLength.classList.remove("d-block");
  showValueLength.classList.add("d-none");

  if (value > 0) {
    showValueLength.classList.add("d-block");
    showValueLength.classList.remove("d-none");
  }
  if (value > 120) {
    showValueLength.classList.add("text-danger");
  }
});

// ----------------------------------------------------------------
// ------------------ sub cat description textarea -----------------
// ----------------------------------------------------------------

catDesTextarea2.addEventListener("keyup", () => {
  const value = catDesTextarea2.value.length;

  valueLength2.innerHTML = value;

  showValueLength2.classList.remove("text-danger");
  showValueLength2.classList.remove("d-block");
  showValueLength2.classList.add("d-none");

  if (value > 0) {
    showValueLength2.classList.add("d-block");
    showValueLength2.classList.remove("d-none");
  }
  if (value > 120) {
    showValueLength2.classList.add("text-danger");
  }
});

// ----------------------------------------------------------------
// ------------------ sub sub cat description textarea -----------------
// ----------------------------------------------------------------

catDesTextarea3.addEventListener("keyup", () => {
  const value = catDesTextarea3.value.length;

  valueLength3.innerHTML = value;

  showValueLength3.classList.remove("text-danger");
  showValueLength3.classList.remove("d-block");
  showValueLength3.classList.add("d-none");

  if (value > 0) {
    showValueLength3.classList.add("d-block");
    showValueLength3.classList.remove("d-none");
  }
  if (value > 120) {
    showValueLength3.classList.add("text-danger");
  }
});
