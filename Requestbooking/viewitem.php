<!DOCTYPE html>
<html>
  <head>
    <title>Item page</title>
    <link rel="stylesheet" href="booking.css">
  </head>

  <body>
    <div class="header">
      <div class="title" id="title"> </div>
      <h1 style="text-align: center;"> Make a booking</h1>
    </div>

         <h2>Items</h2>
         
  <div class="gallery">
    <a target="_blank" href="printer.png">
      <img src="printer.png" alt="Printer" width="300" height="200">
    </a>
    <div class="desc">Printer</div>
    </div>


    <div class="gallery">
        <a target="_blank" href="printer ink.jpg">
        <img src="printer ink.jpg" alt="Printer ink" width="300" height="200">
        </a>
        <div class="desc">Printer ink (2 boxer, 1 black, 1 colour)</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="monitor.png">
        <img src="monitor.png" alt="Monitor" width="300" height="200">
        </a>
        <div class="desc">Monitor</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="mouse.png">
        <img src="mouse.png" alt="Mouse" width="300" height="200">
        </a>
        <div class="desc"> Wireless mouse</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="keyboard.jpg">
        <img src="keyboard.jpg" alt="Keyboard" width="300" height="200">
        </a>
        <div class="desc">Keyboard</div>
    </div>
    
    <div class="gallery">
        <a target="_blank" href="A4 paper 1.jpg">
        <img src="A4 paper 1.jpg" alt="A4 Paper" width="300" height="200">
        </a>
        <div class="desc">A4 Paper ( 500 sheets, 80gsm)</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="marker pen.jpg">
        <img src="marker pen.jpg" alt="Marker pen" width="300" height="200">
        </a>
        <div class="desc">Marker pen come with 3 colour per packet</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="stapler.jpg">
        <img src="stapler.jpg" alt="Stapler" width="300" height="200">
        </a>
        <div class="desc">Stapler come with 2 boxes of bullet</div>
    </div>
   
    <div class="gallery">
        <a target="_blank" href="paper puncher.png">
        <img src="paper puncher.png" alt="Paper puncher" width="300" height="200">
        </a>
        <div class="desc">Two holes paper puncher</div>
    </div><br>
    <table>
    <tr>
    <th><a href="reqbooking.php" class="button">Book now</a> </th>
    <th>
    <form action="cancelbooking.php" method="post">
        <br>
      <label style="border-radius: 8px;
      font-size: 16px; background-color: maroon;
      border: none; color: white; padding: 15px 32px;
      text-align: center; text-decoration: none; display: inline-block;
      margin: 4px 2px;">Staff ID to Cancel Booking:</label><br>
      <input type="text" id="Staff_ID" name="Staff_ID">
      <input type="submit" value="Submit">
        </form>
    </th>
    </tr>
    </table>
 </body>
</html>
