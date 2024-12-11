let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick =() =>{
    navbar.classList.toggle('active');
}

let searchForm  = document.querySelector('.navbar');

document.querySelector('#search-btn').onclick =() =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');

}

window.onscroll = () =>{
    navbar.classList.remove('active');
searchForm.classList.remove('active');
}

// ADD JS
document.querySelectorAll(".php-email-form").forEach((form) => {
    form.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
   
      const formData = new FormData(this);
      const sentMessage = this.querySelector(".sent-message");
      const errorMessage = this.querySelector(".error-message");
   
      // Clear previous messages
      sentMessage.style.display = "none";
      errorMessage.style.display = "none";
   
      fetch(this.action, {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.status === "success") {
            sentMessage.textContent = data.message;
            sentMessage.style.display = "block";
            this.reset(); // Clear the form
          } else {
            errorMessage.textContent =
              data.message || "An error occurred. Please try again.";
            errorMessage.style.display = "block";
          }
        })
        .catch(() => {
          errorMessage.textContent =
            "A network error occurred. Please check your connection and try again.";
          errorMessage.style.display = "block";
        });
    });
  });