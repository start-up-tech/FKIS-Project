<!DOCTYPE html>
<html>
  <head>
    <title>Request booking page</title>
    <link rel="stylesheet" href="booking.css">
  </head>

  <body>
    <div class="header">
      <div class="title" id="title"> </div>
      <h1 style="text-align: center;"><?php include '../styles/Sidebar.php'?> Make a booking</h1>
    </div>
         <h2>BOOKING</h2>
       <div class="detail">
        <form action="insertbooking.php" method="post">
           <table>
               <tr>
                   <th>
                     <label>Staff ID:</label><br>
                     <input type="text" id="staffid" name="staffid"><br>
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
                        </datalist>
                    </th>
                    <th>
                        <label>Quantity:</label><br>
                        <input type="number" id="qty" name="qty"><br>  
                    </th> 
                 </tr>
           </table>
        
       </div>  
       <br>
       <button type="submit">Submit</button></form>
  </body>
   
   
  </html>