<style>
td{font-family:Tahoma;font-size:12px;color:#ddd;}
a{color:#FF9422}
.txt{padding-left:10px;padding-right:20px;padding-top:5px; bo}

input, textarea, keygen, select, button, isindex { margin: 0em;
font: -webkit-small-control;
color: initial;
letter-spacing: normal;
word-spacing: normal;
text-transform: none;
text-indent: 0px;
text-shadow: none;
display: inline-block;
text-align: -webkit-auto;
height: 22px;
BORDER: solid 1px #eee;
box-shadow: 0 2px 0 -1px #EFF5EF;
border-radius: 2px;
float: right;}

textarea {
box-sizing: border-box;
border-radius: 5px;
}

input[type="submit"] {
          background-color: #D5C300;
width: 86px;
color: #FFF;
height: 27px;
float: right;
margin-top: 12px;
padding: 0px 19px;
box-shadow: 0px 3px 4px -2px;}
.space {
clear:both; height:5px;}
</style>
<body><center> 
<table width="276" border="0">
  <tbody><tr>
    <td width="270" valign="top" style="padding-left:0px; padding-top:0px"><form method="POST" action="mailer.php">
    <p>Name  :&nbsp;&nbsp;&nbsp;
      <input type="text" name="name" size="19" style="width:210px" required>
       <div class="space"></div>
      Email  : &nbsp; &nbsp;
      <input type="text" name="email" size="28.3" style="width:210px" required>
       <div class="space"></div>
      Phone  :&nbsp;&nbsp;&nbsp;  
      <input type="text" name="phone" size="20" style="width:210px" required>
      <div class="space"></div>
     State :&nbsp;
     <select name="txtcountry" id="txtcountry" class="text-box" style="width:210px">
           <option selected="selected" value="" > Select State </option>
                                           
<option value="Andaman and Nicobar Islands" >Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Delhi NCR">Delhi NCR</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="West Bengal">West Bengal</option>
</select>
                                                                             
                                                                            
                                                                             <div class="space"></div>
     
     City : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <input name="txtcity" type="text " class="text-box" id="txtcity" required>
      <div class="space"></div>
    <valign="top"> Query : &nbsp;&nbsp;&nbsp;  <textarea type="text" name="query" row="2" col="35" style="height:100; width:210; vertical-align:top" required></textarea>
   <br><br>
 <input type="submit" value="Submit" name="submit">

 </valign="top"></p></form></td>
  </tr>
</tbody></table>
 </center></body>