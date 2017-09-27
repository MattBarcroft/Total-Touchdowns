<!doctype html>
<html lang = "en">
   <head>
      <meta charset = "utf-8">
      <title>jQuery UI Spinner functionality</title>
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

      <!-- CSS -->
      <style type = "text/css">
         #spinner-1 input {width: 20px}
      </style>
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#spinner-1" ).spinner();
         });
      </script>
   </head>

   <body>
      <!-- HTML -->
      <div id = "example">
         <input type = "text" id = "spinner-1" value = "0" />
      </div>
   </body>
</html>
