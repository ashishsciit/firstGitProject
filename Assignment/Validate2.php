<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8"> 
		<title>Javascrip Form validation</title>
			<!--<script type="text/javascript">
				function check_info(){
						var Username = document.getElementById('textbox').value;
						var Password = document.getElementById('textbox2').value;
						
						
						if(Username=="" || Password=="")
						{
							alert('Please fill All Fields !');
							return false;
						}
						else
						{
							return true;
						}
					
					}
			</script>-->
	</head>
	<body>
		<script src="SValidation.js"></script>
			<form method="post" name="registration" onSubmit="return formValidation()" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td>First Name:</td>
            	<td>
                	<input type="text" name="firstname" id="textbox" value="<?php echo $rs_upd['f_name'];?>"/>
                   
                </td>
            </tr>
            
            <tr>
            	<td>Last Name:</td>
            	<td>
                	<input type="text" name="lastname" id="textbox" value="<?php echo $rs_upd['l_name'];?>"/>
                
                </td>
            </tr>
            
           
            
            <tr>
            	<td>Place Of Brith:</td>
                <td>
                	<input type="text" name="Pob1" id="textbox" value="<?php echo $rs_upd['Pob1'];?> "/>
                
                </td>
            </tr>
            <tr>
            	<td>Address:</td>
            	<td>
                	<textarea name="address" cols="22" rows="3"> <?php echo $rs_upd['address'];?></textarea>
    			</td>
        	</tr>
            
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_upd" value="Update" id="button-in"  />
                </td>
            </tr>
		</table>
   </div>
 
	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	
            
            <tr>
            	<td>Phone:</td>
            	<td>
                	<input type="text" name="Mobno" id="textbox" value="<?php echo $rs_upd['phone'];?>" />
                </td>
            </tr>
            
            <tr>
            	<td>E-mail:</td>
                <td>
                	<input type="text" name="email"  id="textbox" value="<?php echo $rs_upd['email'];?> "/>
                </td>
            </tr>
            
            <tr>
            	<td>Note:</td>
                <td>
                	<textarea name="notetxt" cols="22" rows="5"><?php echo $rs_upd['note'];?></textarea>
                </td>
            </tr>
			 <tr>
            	<td>Gender:</td>
                <td>
                	<input type="radio" name="gender" value="Male" <?php if($rs_upd['gender']=="Male") echo "checked";?> />Male
                    <input type="radio" name="gender" value="Female" <?php if($rs_upd['gender']=="Female") echo "checked";?>/>Female
                </td>
            </tr>
            
            <tr>
            	<td>Date Of Birth:</td>
                <td>
                	<select name="yy" >
                    	<option>years</option>
                    	
                        <?php
							$sel="";
							for($i=1985;$i<=2015;$i++){	
								if($i==$y){
									$sel="selected='selected'";}
								else
								$sel="";
							echo"<option value='$i' $sel>$i </option>";
							}
							
						?>
                       
                	</select>
                    -
                    <select name="mm">
                    	<option>Month</option>
						<?php
							$sel="";
                            $mm=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","NOv","Dec");
                            $i=0;
                            foreach($mm as $mon){
                                $i++;
									if($i==$m){
										$sel=$sel="selected='selected'";}
									else
										$sel="";
                                echo"<option value='$i' $sel> $mon</option>";		
                            }
                        ?>
                    </select>
                    -
                    <select name="dd">
                    	<option>Date</option>
						<?php
						$sel="";
                        for($i=1;$i<=31;$i++){
							if($i==$d){
								$sel=$sel="selected='selected'";}
							else
								$sel="";
                        ?>
                        <option value="<?php echo $i ;?>"<?php echo $sel?> >
                        <?php
                        if($i<10)
                            echo"0"."$i" ;
                        else
                            echo"$i";	
							  
						?>
						</option>	
						<?php 
						}?>
					</select>
                </td>
            </tr>
    	</table>
  </div>
    </form>
	</body>
 </html>
