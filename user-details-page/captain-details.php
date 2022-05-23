
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up Form</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah')
            .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
</head>

<body>

  <div class="main">
    <p class="type">captain</p>
    <div class="container">
      <form method="POST" id="signup-form" class="signup-form" action="#">
        <div>
          <h3>Personal info</h3>
          <fieldset>
            <h2>Personal information</h2>
            <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
            <div class="fieldset-content">
              <div class="form-row">
                <label class="form-label">Name</label>
                <div class="form-flex">
                  <div class="form-group">
                    <input type="text" name="first_name" id="first_name" />
                    <span class="text-input">First</span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="last_name" id="last_name" />
                    <span class="text-input">Last</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" />
                <span class="text-input">Example :<span> Jeff@gmail.com</span></span>
              </div>
              <div class="form-group">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" maxlength="13" minlength="13" />
                <span class="text-input">Example :<span> +962__________</span></span>
              </div>
              <div class="form-date">
                <label for="birth_date" class="form-label">Birth Date</label>
                <div class="form-date-group">
                  <div class="form-date-item">
                    <select id="birth_date" name="birth_date"></select>
                    <span class="text-input">DD</span>
                  </div>
                  <div class="form-date-item">
                    <select id="birth_month" name="birth_month"></select>
                    <span class="text-input">MM</span>
                  </div>
                  <div class="form-date-item">
                    <select id="birth_year" name="birth_year"></select>
                    <span class="text-input">YYYY</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="major" class="form-label">Major</label>
                <input type="text" name="major" id="major" maxlength="100" />
                <span class="text-input">Example :<span> Software Engineering</span></span>
              </div>
            </div>
          </fieldset>

          <h3>Upload Personal Photo</h3>
          <fieldset>
            <h2>Personal Photo</h2>
            <p class="desc">Please upload your photo and proceed to next step so we can build your account</p>
            <div class="fieldset-content">
              <div class="form-row">
                <div class="form-flex">
                  <div class="form-group">
                    <label for="image" class="form-label img-label">Upload Your Image<br>
                      <img id="blah" src="images/img_avatar.png" alt="your image" onerror='this.src="images/img_avatar.png"' />
                    </label>
                    <input type='file' onchange="readURL(this);" id="image" name="image" accept="image/png, image/gif, image/jpeg" />
                    <span class="text-input">Accepted :<span style="color: #333333; font-weight: 500;"> png, gif, jpg,
                        jpeg</span></span>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>

          <h3>Introude Yourself</h3>
          <fieldset>
            <h2>Introude Yourself</h2>
            <p class="desc">Show yourself to reach the future</p>
            <div class="fieldset-content">
              <div class="form-row">
                <div class="form-flex">
                  <div class="form-group">
                    <label class="form-label" for="info">Write about yourself</label>
                    <textarea name="info" id="info"></textarea>
                  </div>
                </div>
              </div>
          </fieldset>
        </div>
      </form>
    </div>

  </div>

  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
  <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
  <script src="vendor/minimalist-picker/dobpicker.js"></script>
  <script src="vendor/nouislider/nouislider.min.js"></script>
  <script src="vendor/wnumb/wNumb.js"></script>
  <script src="js/main.js"></script>
</body>

</html>