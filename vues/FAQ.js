let Question1 = document.getElementById("Question1");
let Question2 = document.getElementById("Question2");
let Question3 = document.getElementById("Question3");
let Question4 = document.getElementById("Question4");
let Q1 = document.getElementById("Q1");
let Q2 = document.getElementById("Q2");
let Q3 = document.getElementById("Q3");
let Q4 = document.getElementById("Q4");
Question1.addEventListener("click", () => {
  if(getComputedStyle(Q1).display != "none"){
    Q1.style.display = "none";
  } else {
    Q1.style.display = "block";
  }
})
Question2.addEventListener("click", () => {
  if(getComputedStyle(Q2).display != "none"){
    Q2.style.display = "none";
  } else {
    Q2.style.display = "block";
  }
})
Question3.addEventListener("click", () => {
  if(getComputedStyle(Q3).display != "none"){
    Q3.style.display = "none";
  } else {
    Q3.style.display = "block";
  }
})
Question4.addEventListener("click", () => {
  if(getComputedStyle(Q4).display != "none"){
    Q4.style.display = "none";
  } else {
    Q4.style.display = "block";
  }
})
