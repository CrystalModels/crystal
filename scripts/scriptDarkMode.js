const themeToggle = document.getElementById('theme-toggle-checkbox');
const body = document.body;
checkDarkMode();
themeToggle.addEventListener('change', function() {
  if (this.checked) {



    
    body.classList.add('dark-mode');
    setDm("true");
    
  } else {
    
   
      body.classList.remove('dark-mode');

      setDm("false");
      
    
    
  }
});

function setDm(value) {
  sessionStorage.setItem("darkMode", value);
}
function checkDarkMode() {
  const darkMode = sessionStorage.getItem("darkMode");

  if (darkMode === "true") {
    // Cambiar a modo oscuro
    document.body.classList.add("dark-mode");
    themeToggle.checked = true;
    // Aquí puedes agregar cualquier otro código relacionado con el modo oscuro
  }
   else if (darkMode === "false") {
    // Cambiar a modo claro
    document.body.classList.remove("dark-mode");
    // Aquí puedes agregar cualquier otro código relacionado con el modo claro
  }
}

