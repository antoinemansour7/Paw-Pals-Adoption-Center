<!DOCTYPE html>
<html lang="en">
  
<head>
 
  <meta charset="UTF-8">
  <title>Find a Pet</title>
  <link rel="stylesheet" href="/Project/mystyleq8.css">

 
</head>


<body style="background-color: whitesmoke;">
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
  
  <br>

 




  

  <form id="f1">
 <fieldset id="maintext" style="border-color: rgb(165, 85, 42); border-width: 5px;border-style: solid; ">  
<legend>Find a Dog or Cat for Adoption!</legend>
What kind of pet are you looking for?<br>

<input type="radio" name="test" id="cat" >Cat

<input type="radio" name="test" id="dog" >Dog

<br><br>

What breed are you looking for your future Dog/Cat?
<br>

<input type="text" name="test2" id="type" >

<input type="radio" name="test2" id="other" > Rather not say


<br><br>

What gender would you prefer for your future pet?
<br>
<input type="radio" name="test3" id="male" >Male
<input type="radio" name="test3" id="female" >Female
<input type="radio" name="test3" id="other2" > Rather not say
<br><br>
How old do you want your futur pet to be? 
<br>
<select name="age" id="age" >
    <option value="lessthen20">0-4 year(s) old</option>
    <option value="lessthen40">5-10 years old </option>
    <option value="lessthen70">10+ years old </option>
</select>
<br><br>
Do you want the pet to get along with:<br>
<input type="checkbox" name="othercats" id="malee" >Other Cats <br>
<input type="checkbox" name="otherdogs" id="femalee" >Other Dogs<br>
<input type="checkbox" name="littlechildren" id="Child" > Children

 </fieldset>

<br><br><br>
Thank you for filling up the servey!
<br><br>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>


<script>
  document.getElementById("f1").addEventListener("submit", function(event) {
    var isValid = true;
  
    // Check if the radio buttons have been selected
    if (!document.getElementById("cat").checked && !document.getElementById("dog").checked) {
      isValid = false;
    }
  
    // Check if the text input has been filled out
    if (document.getElementById("type").value === "" && !document.getElementById("other").checked) {
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
  
    // If any required field is empty, prevent the form from being submitted
    if (!isValid) {
      event.preventDefault();
      alert("Please fill out all required fields.");
    }
  });
  console.log()
</script>
  



<?php include("footer.php") ?>
</body>
</html>
