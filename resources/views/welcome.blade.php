<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>We Care For You Ministries</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
      <div class="container">
        <div class="row center-align" id="hero-text">
          <div class="col s8 offset-s2 center-align">Future Home Of</div>
          <div class="col s8 offset-s2 center-align">We Care For You Ministry</div>
          <div class="col s8 offset-s2 center-align">22261 White Hardee Blvd. Hardeeville, SC 29927</div>
        </div>

        <div class="center-align" id="link-gfm">
          <a href="https://www.gofundme.com/we-care-for-you-ministry">Go Fund Me</a>
        </div>

        <div class="divider"></div>

        <div class="row center-align" id="contact_form">
          <h3>Contact us!</h3>
          @csrf
          <div class="col s6 input-field offset-s3">
            <input type="text" id="name-input" class="autocomplete" name="name">
            <label for="autocomplete-input">Name</label>
          </div>
          <div class="col s6 input-field offset-s3">
            <input type="email" id="email-input" class="autocomplete" name="email" autocomplete="true">
            <label for="autocomplete-input">Email</label>
          </div>
          <div class="col s6 input-field offset-s3">
            <textarea id="textarea1" class="materialize-textarea" name="textarea1"></textarea>
            <label for="textarea1">Comment/Question</label>
          </div>
          <div class="col s6 input-field offset-s6">
            <button class="btn waves-effect waves-light" name="submit" id="submit">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(e) {

      });
    </script>
</html>
