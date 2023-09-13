<!DOCTYPE html>
<html>

<head>
  <title> Search Ticket</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <style>
    .container {
      width: 600px;
      margin: 0 auto;
    }
  </style>

  <script>
    $(document).ready(function() {
      $("#fromDate").datepicker({
        dateFormat: "yy-mm-dd"
      });
      $("#toDate").datepicker({
        dateFormat: "yy-mm-dd"
      });

    });

    function searchTickets() {
      var fromDate = $("#fromDate").val();
      var toDate = $("#toDate").val();

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {


        if (this.readyState == 4 && this.status == 200) {
          $("#result").html(this.responseText);
        }
      }

      xhttp.open("GET", "filter.php?fromDate=" + fromDate + "&toDate=" + toDate, true);
      xhttp.send();

    }
  </script>

</head>

<body>

  <div class="container">
    <h1>Ticket search</h1>

    <p>
      <label for="">From Date:</label> <input type="text" id="fromDate" name="fromDate">
      <label for="">To Date:</label> <input type="text" id="toDate" name="toDate">
    </p>

    <p>
      <input type="submit" value="Search" onclick="searchTickets()">
    </p>

    <table id="result" border="1"></table>
  </div>

</body>

</html>