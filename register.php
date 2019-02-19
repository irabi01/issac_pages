<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="assets/w3.css">
    <link rel="stylesheet" href="assets/font/css/font-awesome.min.css">
  </head>
  <body>

    <div class="register_container">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 center_column_register">
            <div class="register_content w3-card-4">
              <div class="register_page">
                <h1>Sign Up</h1>
                <hr>
                <form id="regForm" action="#" method="post">
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                  <!-- <h2>Name:</h2> -->
                  <div class="form-group">
                    <p><input type="text" placeholder="First name..." oninput="this.className = ''" class="form-control"></p>
                  </div>
                  <div class="form-group">
                    <p><input type="text" placeholder="Last name..." oninput="this.className = ''" class="form-control"></p>
                  </div>
                </div>

                <div class="tab">
                  <!-- <h2>Contact Info:</h2> -->
                 <div class="form-group">
                   <p><input  type="email" placeholder="E-mail..." oninput="this.className = ''" class="form-control"></p>
                 </div>
                 <div class="form-group">
                   <p><input  type="text" placeholder="Phone..." oninput="this.className = ''" class="form-control"></p>
                 </div>
                </div>

                <div class="tab">
                  <!-- <h2>Birthday:</h2> -->
                 <div class="form-group">
                   <p><input  type="date" placeholder="dd" oninput="this.className = ''" class="form-control"></p>
                 </div>
                 <!-- <div class="form-group">
                   <p><input  type="text" placeholder="mm" oninput="this.className = ''" class="form-control"></p>
                 </div>
                 <div class="form-group">
                   <p><input  type="text" placeholder="yyyy" oninput="this.className = ''" class="form-control"></p>
                 </div> -->
                </div>

                <div class="tab">
                  <!-- <h2>Login Info:</h2> -->
                 <div class="form-group">
                   <p><input type="text" placeholder="Username..." oninput="this.className = ''" class="form-control"></p>
                 </div>
                 <div class="form-group">
                   <p><input type="password" placeholder="Password..." oninput="this.className = ''" class="form-control"></p>
                 </div>
                </div>

                <div style="overflow:auto;">
                 <div style="float:right;">
                   <div class="form-group">
                     <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-sm btn-primary">Previous</button>
                     <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-sm btn-info">Next</button>
                   </div>
                 </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:10px;">
                 <span class="step"></span>
                 <span class="step"></span>
                 <span class="step"></span>
                 <span class="step"></span>
                </div>
                <div class="horizontal_rule">
                  <hr>
                  <p>Have an account? <a href="index.php" style="color:#fff; font-weight:bold">Log in</a></p>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
    var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
      // This function will display the specified tab of the form ...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      // ... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      // ... and run a function that displays the correct step indicator:
      fixStepIndicator(n)
      }

      function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form... :
      if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
      }

      function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
      }

      function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class to the current step:
      x[n].className += " active";
      }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jqueryfile.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
