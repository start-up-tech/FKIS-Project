<!DOCTYPE html>
<html>
  <head>
    <title>Request booking page</title>
    <link rel="stylesheet" href="booking.css">
  </head>

  <body>
    <div class="header">
      <div class="title" id="title"> </div>
      <nav><?php include '../styles/sidebarstaff.php'?>FK Inventory System</nav>
    </div>
<<<<<<< Updated upstream
         <h2>MAKE A BOOKING</h2>
=======
         <h2>BOOKING</h2>
       
>>>>>>> Stashed changes

       <div class="detail">
        <form action="insertbooking.php" method="post">
           <table>
               <tr>
                   <th>
                     <label>Staff ID:</label><br>
                     <input type="text" id="Staff_ID" name="Staff_ID"><br>
                   </th>
                   <th>
                        <label>Item:</label><br>
                        <input list="item" name="item">
                        <datalist id="item">
                          <option value="fk01">Printer</option>>
                          <option value="fk02">Printer ink</option>
                          <option value="fk03">A4 Paper</option>
                          <option value="fk04">Marker pen</option>
                          <option value="fk05">Stapler</option>
                          <option value="fk06">Paper Puncher</option>
                          <option value="fk07">Monitor</option>
                          <option value="fk08">Mouse</option>
                          <option value="fk09">Keyboard</option>
                        </datalist>
                    </th>
                    <th>
                        <label>Quantity:</label><br>
                        <input type="number" id="qty" name="qty"><br>  
                    </th> 
                    <th>
                        <label for="Requestdate">Request Date:</label><br>
                        <input type="date" id="Requestdate" name="Requestdate">
                    </th>
                 </tr>
           </table>
        
       </div>  
       <br>
       <button type="submit" style=" border-radius: 8px;
        font-size: 16px; background-color: maroon;
        border: none; color: white; padding: 15px 32px;
        text-align: center; text-decoration: none; display: inline-block;
        margin: 4px 2px; cursor: pointer;">Submit</button></form>  
        <a href="viewitem.php" class="button" style="float:right;">Back</a>
  </body>
   
   
</html>