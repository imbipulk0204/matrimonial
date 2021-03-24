<form  style="" class="form-horizontal" method="post" action="payment/paytm/paytmKit/pgRedirect.php">
    <h1> Check Out </h1>
		  
	<div class="form-group">
				
					<label for="name" class="control-label">NAME:</label>
					<input style="width:30%" class="form-control" id="INDUSTRY_TYPE_ID" tabindex="1" maxlength="50" size="60"
						autocomplete="off"
						value="<?php echo $name; ?>"disabled >

						<input id="INDUSTRY_TYPE_ID" tabindex="1" maxlength="50" size="60"
						name="INDUSTRY_TYPE_ID" autocomplete="off"
						value="<?php echo $name; ?>" hidden >
					
					<!-- <td>2</td> -->
					<label>ID:</label>
					<input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12"  autocomplete="off" value="<?php echo $id; ?>"disabled >
				
					<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $id; ?>" hidden >
				
					<!-- <td>1</td> -->
					<label>ORDER_NO:</label>
					<input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						 autocomplete="off"
						value="<?php echo "ORDS" . rand(10000, 99999999) ?>" disabled>

						<input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo "ORDS" . rand(10000, 99999999) ?>" hidden>
					
					<!-- <td>5</td> -->
					<<label>AMOUNT:</label>
					<input class="form-control" title="TXN_AMOUNT" tabindex="10"
						type="text" 
						value="<?php echo $amount; ?>"disabled>

						
					<input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount; ?>"hidden>
				
				
				
					
					

			
				
		
		<input class="btn btn-primary" value="CheckOut" type="submit"	onclick="">
	</div>
    </form>