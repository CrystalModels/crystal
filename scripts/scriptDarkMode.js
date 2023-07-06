// JavaScript
const themeToggle = document.getElementById('theme-toggle-checkbox');
const body = document.body;

themeToggle.addEventListener('change', function() {
  if (this.checked) {
    body.classList.add('dark-mode');
  } else {
    body.classList.remove('dark-mode');
  }
});
