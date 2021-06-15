function myFunction() {
  var x = document.getElementById("dropdown");
  if (x.style.display === "block") {
    
  } else {
    x.style.display = "block";
  }
  
  var x = document.getElementById("dropdown-content");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}