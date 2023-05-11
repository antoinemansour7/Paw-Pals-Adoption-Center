<!DOCTYPE html>
<html lang="en">
  
<head>
  <title>Give Away a Pet</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/Project/mystyleq8.css">
  
</head>


  <body>
    <aside class="side-menu">
        <nav>
          <ul>
            <li><a href="A1_Q8.html">Home page</a></li>
           
            <li><a href="Q8_Browse.html">Browse Available Pets</a></li>
          
            <li><a href="Q8_Find.html">Find a dog/cat</a></li>
           
            <li><a href="Q8_DCare.html">Dog Care</a></li>
            
            <li><a href="Q8_CCare.html">Cat Care</a></li>
            
            <li><a href="Q8_Giveaway.html">Have a pet to give away</a></li>
           
            <li><a href="Q8_Contact.html">Contact Us</a></li>
          </ul>
        </nav>
      </aside>
      <?php include("header.php") ?>
      
      
    
    <form id="f2">
        <fieldset id="maintext"  >  
       <legend>List a Dog or Cat for Adoption!</legend>
       What kind of pet do you have?<br>
       
       <input type="radio" name="test" id="cat" >Cat
       
       <input type="radio" name="test" id="dog" >Dog
       
       <br><br>
       
       What is the breed of your Dog/Cat?
       <br>
       <input type="text" name="test2" id="type" >
       
       <input type="radio" name="test2" id="other" > Rather not say

       <input type="radio" name="test2" id="mix" > Mix Breed (Please specify which ones in the Text Field!)
       <br><br>
       
       What is the gender of your pet?
       <br>
       <input type="radio" name="test3" id="male" >Male
       <input type="radio" name="test3" id="female" >Female
       <input type="radio" name="test3" id="other2" > Rather not say
       <br><br>
       How old is your pet? 
       <br>
       <select name="age" id="age" >
           <option value="lessthen4">0-4 year(s) old</option>
           <option value="lessthen10">5-10 years old </option>
           <option value="more10">10+ years old </option>
       </select>
       <br><br>
       Can your pet get along with:<br>
       <input type="checkbox" name="othercats" id="malee">Other Cats <br>
       <input type="checkbox" name="otherdogs" id="femalee">Other Dogs<br>
       <input type="checkbox" name="littlechildren" id="Child"> Children
       <br><br>
        Please give us some interesting facts about your animal! (Optional)<br>
<input type="text" name="interestingfact" id="interestingfact"><br><br>

What is your First and Last name?<br>
<input type="text" name="FirstName" id="FirstName" >
<input type="text" name="LastName" id="LastName" >
<br><br>
What is the E-mail address you can be reached at?<br>
<input type="text" name="email" id="email"><br>

        </fieldset>

        <script>
          document.getElementById("f2").addEventListener("submit", function(event) {
            var isValid = true;
          
            // Check if the radio buttons have been selected
            if (!document.getElementById("cat").checked && !document.getElementById("dog").checked) {
              isValid = false;
            }
          
            // Check if the text input has been filled out
            if (document.getElementById("type").value === "" && !document.getElementById("other").checked && !document.getElementById("mix").checked) {
              isValid = false;
            }
          
            // Check if the radio buttons have been selected
            if (!document.getElementById("male").checked && !document.getElementById("female").checked && !document.getElementById("other2").checked) {
              isValid = false;
            }
          
            // Check if the select input has been filled out
            if (document.getElementById("age").value === "") {
              isValid = false;
            }
          
            // Check if at least one checkbox has been selected
            if (!document.getElementById("malee").checked && !document.getElementById("femalee").checked && !document.getElementById("Child").checked) {
              isValid = false;
            }

            if (document.getElementById("FirstName").value === "") {
              isValid = false;
            }

            if (document.getElementById("LastName").value === "") {
              isValid = false;
            }


            if (document.getElementById("email").value === "") {
              isValid = false;
            }
          
            // If any required field is empty, prevent the form from being submitted
            if (!isValid) {
              event.preventDefault();
              alert("Please fill out all required fields.");
            }
          });
          console.log()
        </script>

        <script>
const form = document.querySelector('#f2');
const emailInput = document.querySelector('#email');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const emailValue = emailInput.value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailRegex.test(emailValue)) {
    alert('Please enter a valid email address.');
    return;
  }

  // If the email address is valid, you can submit the form.
  form.submit();
});



        </script>




       
       <br><br><br>
       Thank you for filling up the servey!
       <br><br>
       <input type="Submit" value="Submit">
       <input type="reset">
       </form>











<footer>
    <p id="disclaimer"><a href="#" onclick="alert('Privacy/Disclaimer Statement: Your information will not be sold or misused, and the website builder is protected from any incorrect information posted by a pet owner, etc.')">Privacy and Disclaimer Statement</a></p>
  </footer>
  </body>