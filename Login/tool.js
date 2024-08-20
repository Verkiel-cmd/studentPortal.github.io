const logregBox = document.querySelector('.log-reg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    logregBox.classList.add('active');
});

loginLink.addEventListener('click', () => {
    logregBox.classList.remove('active');
});
const dropbtn = document.querySelector('.dropbtn');
const dropdownContent = document.querySelector('.dropdown-content');

let isOpen = false; // Variable to track dropdown state (open/closed)

dropbtn.addEventListener('click', function() {
  isOpen = !isOpen; // Toggle isOpen state on each click

  if (isOpen) {
    dropdownContent.style.display = 'block';
  } else {
    dropdownContent.style.display = 'none';
  }
});

