<header>
      <h3 id="date">Current Date and Time:</h3>
      <p id="datetime"></p>
    
      <script>
        function updateTime() {
          const now = new Date();
          const datetime = document.getElementById('datetime');
          datetime.innerHTML = now.toLocaleString();
        }
        
  
        setInterval(updateTime, 1000);
      </script>
      <img id="pic1" class="logo"  src="/ASSIGNMENT2/img/Logo.jpg" height="100" width="125" alt="Paw Pals Adoption logo"  onclick="location.href='/ASSIGNMENT1/A1_Q8.html'">
      <h1 id="mainintro">Paw Pals Adoption Center </h1> 
    
      
    </header>