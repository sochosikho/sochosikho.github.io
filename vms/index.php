<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Visitors</title>
<link href="css/home.css" rel="stylesheet" type="text/css">
</head>

<body>
  
    <div class="container" align="center">
    
     <div>
    <table width="2300" height="auto" border="0">
    <tr>
   <td align="right"><div><img src="images/3.png" width="150" height="150" alt=""/></div></td>
   <td align="left"><div class="visitors"><font color=#F1F800>Visitor Management System</font></div></td>
    </table>
    
    <div  id="menu">
    <ul>
		<li><a href="home.html">Visitors</a></li>
    	<li><a href="checkin.html">Check-In</a></li>
    	<li><a href="#checkout">Check-Out</a></li>
    	<li><a href="#report">Report</a></li>
    	<li><a href="login.html">Log In</a></li>
    	<li><a href="#logout">Log Out</a></li>
	</ul>
   </div>
   
   
    <div class="slider">
    <figure>
	<div class="slider">
	<img src="slider/1.jpg" alt="" width="685px" height="600px">
	</div>
	<div class="slider">
	<img src="slider/2.jpg" alt="" width="685px" height="600px">
	</div>
	 <div class="slider">
	<img src="slider/4.jpg" alt="" width="685px" height="600px">
	</div>
	 <div class="slider">
	<img src="slider/5.jpg" alt="" width="685px" height="600px">
	</div>
	 <div class="slider">
	<img src="slider/6.jpg" alt="" width="685px" height="600px">
	</div>
    </figure>
	</div>
    
    
      <div>
      <div class="box">
    	<pre><input id="search" type="search" name="search" required placeholder="search..."/><input class="sbutton" type="submit" value="GO"></pre>
      </div>
    </div>
    
  
   
   <form action="add_data.php" method="post" enctype="multipart/form-data">
  <table border="0" height="auto"> 
  <tr> 
  
  <td>
  <div align="left">
    <div class="information">
    
    
    <fieldset>
		<legend><font color=#F1F800>Visitor's Information</font></legend>
    <font color=#94FF48>
    
     <table width="400" height="400" border="0" align="center">
     	<tr>
     		<td>Id :</td>
     		<td><input class="heighttext" type="text" name="id"></td>
     	</tr>
     	<tr>
     		<td>Name :</td>
     		<td><input class="heighttext" type="text" name="name"></td>
     	</tr>
     	<tr>
     		<td>Mobile No :</td>
     		<td><input class="heighttext" type="text" maxlength="10" name="mobileno"></td>
     	</tr>
     	<tr>
     		<td>Email :</td>
     		<td><input class="heighttext" type="email" name="email"></td>
     	</tr>
     	<tr>
     		<td>Vehicle No :</td>
     		<td><input class="heighttext" type="text" name="vehicleno"></td>
     	</tr>
     	<tr>
     		<td>Company :</td>
     	<td><input class="heighttext" type="text" name="company"></td>
     	</tr>
     	<tr>
     		<td>Remarks :</td>
     		<td><input class="heighttext" type="text" name="remarks"></td>
		 </tr>
     </table>
    </font>
    </fieldset>
  
	  </div>
   
  
  <div class="reference">
  
    <fieldset>
		<legend><font color=#F1F800>Reference</font></legend>
    <font color=#94FF48>
     
      <table width="400" height="200" border="0" align="center">
      <tr>
     	 <td>Id :</td>
     	 <td><input class="heighttext" type="text" name=""></td>
      </tr>
      <tr>
     	 <td>Company :</td>
     	 <td><input class="heighttext" type="text" name=""></td>
      </tr>
      <tr>
      	<td>Department :</td>
      	<td><input class="heighttext" type="text" name=""></td>
      </tr>
      <tr>
     	 <td>Contact No :</td>
     	 <td><input class="heighttext" type="text" maxlength="10" name=""></td>
      </tr>
	 </table>
	</font>
    </fieldset>
 
  </div>
  </div>
  </td> 
  
   <td>
   <div class="time">
  
    <fieldset>
    <font color=#94FF48>
     
      <table width="400" height="450" border="0" align="center">
      <tr>
     		<td>In-Time :</td>
     		<td><input class="heighttext" type="time" name="intime"></td>
     	</tr>
     	<tr>
     		<td>Out-Time :</td>
     		<td><input class="heighttext" type="time" name="outtime"></td>
     	</tr>
        
     	<tr>
     		<td>Storage :</td>
     		<td> <select name="storage">
            <option value="">---select storage---</option>
            <option value="cd">CD</option>
            <option value="pendrive">Pen Drive</option>
            <option value="dvd">DVD</option>
            <option value="harddisk">Hard Disk</option>
            </select></td>
     	</tr>
     	<tr>
     		<td>Accessories :</td>
		</tr>
        <tr>
            <td></td>
     		<td><font color=#3DBF00><input type="checkbox" name="accessories[]" value="mobile">Mobile<br><br>
            <input type="checkbox" name="accessories[]" value="laptop">Laptop<br><br>
            <input type="checkbox" name="accessories[]" value="camera">Camera<br><br>
            <input type="checkbox" name="accessories[]" value="others">Others
            </td>
        </tr></font>
        <tr>
     		<td>Photo :</td>
     		<td><input type="file" name="photo"></td>
     	</tr>
	 </table>
	
	</font>
    </fieldset>
	 
  </div>
  </td> 
  
  </tr>
  </table>
  
  	
  	<br><br><br><br><br><br><br><br><br><br><br>
   	<pre>   <input class="button" type="submit" value="Submit" name="save">  <input class="button" type="submit" value="Print">
      </pre>
   </form> 
    	
    	   	   	
  <footer>
    <pre> <br><br><br><br><br><font color=#94FF48>Designed By :</font><font color=#FFF7F7> Vickey,Prem,Ranjan,Om Prakash</font>                                                                                 <font color=#94FF48>Powered By :</font> <font color=#FFF7F7><strong></strong>RSG Software Services Pvt. Ltd.</font></pre>
	
	</footer>
	
</pre>

   </div>
</body>
</html>
