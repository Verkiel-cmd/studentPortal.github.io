// Sidebar code
const sidebar = document.querySelector("#sidebar");
const toggleButton = document.querySelector("#toggle-btn");

// Auth Dropdown code
const authDropdown = document.querySelector("#auth");
const authButton = document.querySelector("#auth-btn");

// Multi-level Dropdown code
const multiDropdown = document.querySelector("#multi-two");
const multiButton = document.querySelector("#multi-btn");

// local storage for sidebar hover
if (localStorage.getItem("sidebarState") === "expanded") {
  sidebar.classList.add("expand");
} else {
  sidebar.classList.remove("expand");
}

// localStorage for auth dropdown independent move
if (localStorage.getItem("authDropdownState") === "expanded") {
  authDropdown.classList.add("show");
} else {
  authDropdown.classList.remove("show");
}

// localStorage for multi dropdown independent move
if (localStorage.getItem("multiDropdownState") === "expanded") {
  multiDropdown.classList.add("show");
} else {
  multiDropdown.classList.remove("show");
}

// Sidebar 
toggleButton.addEventListener("click", function() {
  sidebar.classList.toggle("expand");
  if (sidebar.classList.contains("expand")) {
    localStorage.setItem("sidebarState", "expanded");
  } else {
    localStorage.setItem("sidebarState", "collapsed");
  }
});

// Auth dropdown toggle
authButton.addEventListener("click", function() {
  authDropdown.classList.toggle("show");
  if (authDropdown.classList.contains("show")) {
    localStorage.setItem("authDropdownState", "expanded");
  } else {
    localStorage.setItem("authDropdownState", "collapsed");
  }
});

// Multi-level dropdown toggle
multiButton.addEventListener("click", function() {
  multiDropdown.classList.toggle("show");
  if (multiDropdown.classList.contains("show")) {
    localStorage.setItem("multiDropdownState", "expanded");
  } else {
    localStorage.setItem("multiDropdownState", "collapsed");
  }
});
