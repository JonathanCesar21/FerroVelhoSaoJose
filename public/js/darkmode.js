var checkBox = document.getElementById("switch");

function ThemeMode(){
    if (checkBox.checked == true){
        document.getElementById("html").classList.add("dark-mode");
    
    } else {
        document.getElementById("html").classList.remove("dark-mode");
    }
  }
