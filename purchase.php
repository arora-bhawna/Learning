<?php
if ($_POST) {
	require 'pDB.php';
}
$states=require '../data/state.php';
$gst=require ('../data/gst.php');
require('../includes/db.php');
$unit = fetchAll("SELECT id, name name FROM unit");
$product = fetchAll("SELECT id, name name FROM productdb");
$suppliers = fetchAll("SELECT id, supplier_name,state,contact_number  FROM supplierdb");
require('../includes/header.php');
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<style type="text/css">
h1{
	font-family: cursive;
}
.header{
	font-size: 10px;
	padding: 0px;
	margin: 5px 5px 0px 5px;
color: white;
/*background-color:#00000000;*/
}
.body{
	padding: 10px;
	background-color: white;
	margin: 3px 3px 0px 3px;
}

.btn{
	background: black;
	color: #fff !important;
}
.btn:hover {
	background: #333;

}
.container{
font-size: 15px;
}
</style>
<div class="main">
	<div class="container">
		<h2> Purchase Product</h2>
		<form class="form-horizontal" method="POST">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h3>Invoice Info:</h3>
						<div class="col-md-3">
							<label for="po_number">PO Number</label>
						</div>
						<div class="col-md-6">
							<input id="po_number" class="form-control" type="integer" name="po_number">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3">
							<label for="po_date">PO Date</label>
						</div>
						<div class="col-md-6">
							<div class="input-append date form_datetime">
								<input name="purchase_date" size="16" type="text" class="form-control" placeholder="--Select Date--">
								<span class="add-on"><i class="icon-th"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<h3>Supplier Info:</h3>
						<div class="col-md-3">
							<label for="supplier_name">Supplier</label>
						</div>
						<div class="col-md-6">
							<select name="" id="" class="form-control">
								<option value="">--Supplier Name--</option>
								<?php foreach ($suppliers AS $supplier): ?>
								<option value="<?= $supplier->id ?>"><?= $supplier->supplier_name ?></option>
								<?php endforeach ?>
							</select>
						</div>	</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="supplier_state">Supplier State</label>
							</div>
							<div class="col-md-6">
								<select name="" id="" class="form-control">
								<option value="">--Supplier State--</option>
								<?php foreach ($suppliers AS $supplier): ?>
								<option value="<?= $supplier->id ?>"><?= $supplier->state ?></option>
								<?php endforeach ?>
							</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
								<label for="contact_number">Contact No.</label>
							</div>
							<div class="col-md-6">
								<select name="" id="" class="form-control">
								<option value="">--Supplier Contact Number--</option>
								<?php foreach ($suppliers AS $supplier): ?>
								<option value="<?= $supplier->id ?>"><?= $supplier->contact_number ?></option>
								<?php endforeach ?>
							</select>
							</div>
						</div>
						<div class="form-group">
							<h3>Payment Info:</h3>
							<div class="col-md-3">
							<label for="totalpayment">Total Payment</label>
							</div>
							<div class="col-md-6">
								<input id="totalpayment" class="form-control" type="integer" name="totalpayment">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
							<label for="paid">Paid</label>
							</div>
							<div class="col-md-6">
								<input id="paid" class="form-control" type="integer" name="paid">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3">
							<label for="due">Due</label>
							</div>
							<div class="col-md-6">
								<input id="due" class="form-control" type="integer" name="due">
							</div>
						</div>
							</div>
						<div class="col-md-6">
							<div class="form-group">
								<h3>Product Info:</h3>
								<div class="col-md-3">
									<label for="product_name" >Product Name</label>
								</div>
								<div class="col-md-6">
									<select name="" id="" class="form-control">
								<option value="">--Product Name--</option>
								<?php foreach ($product AS $supplier): ?>
								<option value="<?= $supplier->id ?>"><?= $supplier->name ?></option>
								<?php endforeach ?>
							</select>
								</div></div>
								<div class="form-group">
									<div class="col-md-3">
										<label for="hsncode">HSN Code</label>
									</div>
									<div class="col-md-6">
										<input id="hsncode" class="form-control" type="integer" name="hsncode">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label for="quantity">Quantity</label>
									</div>
									<div class="col-md-6">
										<input id="quantity" class="form-control" type="integer" name="quantity">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
											<label for="discount">Discount</label></div>
											<div class="col-md-6"><input id="discount" class="form-control" type="integer" name="discount" placeholder="0.00"></div>
										</div>
									<div class="form-group">
										<div class="col-md-3">
									<label for="purchase_unit">Purchase Unit</label></div>
								
									<div class="col-md-6">
										<select name="" id="" class="form-control">
											<option value="">--Purchase unit--</option>
											<?php foreach ($unit AS $units): ?>
											<option value="<?= $units->id ?>"><?= $units->name ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="form-group">
							        <div class="col-md-3">GST</label>
									</div>
									<div class="col-md-6">
											<select name="GST" id="GST" class="form-control">
												<option value="">-- GST --</option>
												<?php foreach($gst as $key => $GST): ?>
												<option value="<?= $key ?>"><?= $GST ?></option>
												<?php endforeach ?>
											</select></div>
										</div>
										<div class="form-group">
							        	<div class="col-md-3">
										<label for="CGST">CGST</label>
									</div>
										<div class="col-md-6">
											<input id="CGST" class="form-control" type="integer" name="CGST">
										</div>
										</div>
								<div class="form-group">
									<div class="col-md-3">
										<label for="SGST">SGST</label>
									</div>
									<div class="col-md-6">
										<input id="SGST" class="form-control" type="integer" name="SGST">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label for="IGST">IGST</label>
										</div>
										<div class="col-md-6"><input id="IGST" class="form-control" type="integer" name="IGST"></div></div>
										<div class="input-append date form_datetime">
											
											<span class="add-on"><i class="icon-th"></i></span>
										</div>
										<div class="form-group">
											<div class="col-md-3">
												<label for="CESS">CESS</label>
											</div>
											<div class="col-md-6"><input id="CESS" class="form-control" type="integer" name="CESS">
										</div>
									</div>
									
								<div class="form-group">
									<div class="col-md-3">
									<label for="reference_number">Reference Number</label>
								</div>
									<div class="col-md-6"><input id="reference_number" class="form-control" type="integer" name="reference_number"></div>
								</div>
								</div>
								</div>
							<hr>
								<button class="btn" onclick="return confirm('You want to save the file')">Save</button>
							<button class="btn" type="reset">Cancel</button>
							<button class="btn">Print</button></form>

							<?php
							if(isset($error)):?>
							<div class="alert alert-danger">
								<?=$error ?>
							</div>
							<?php endif; ?>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
							<script type="text/javascript">
								//javascript coding for validation on input boxes--
								$('form').submit(function(e) {
									$(this).find('input').each(function() {
										$(this).next('.help-block').remove();
										$(this).parents('.form-group').removeClass('has-error');
										if(!$(this).val()) {
											var help = $('<p />', { class: 'help-block', text: 'Field is required' })
												$(this).after(help).parents('.form-group').addClass('has-error');
												e.preventDefault();
											}
										})
									})
									//finish validation coding.
								//this is for GSt--
								var gstRates = {
								'0': {
									CGST: '',
									SGST: '',
									IGST: ''
								},
								'3': {
									CGST : '1.5',
									SGST : 1.5,
									IGST : 3
								},
								'5': {
									CGST : '2.5',
									SGST : 2.5,
									IGST : 5
								},
								'14':{
									CGST : '7.5',
									SGST :7.5,
									IGST : 14
								},
								'18':{
									CGST : 9.5,
									SGST : 9.5,
									IGST : 18
								},
								'28':{
									CGST : '14.5',
									SGST : 14.5,
									IGST : 28
								}
								}
								$('[name="GST"]').change(function() {
									var cRate = gstRates[$(this).val()];
									if(!cRate) return;
									for(var i in cRate) {
										$('#' + i).val(cRate[i]);
									}
								});
								$('form').keyup(function() {
									var costPrice = parseInt($('#cost_price').val() || 0),
										rate = parseInt($('#rate').val() || 0),
										gst = parseFloat($('#GST').val() || 0),
										sgst = parseFloat($('#SGST').val() || 0),
										cgst = parseFloat($('#CGST').val() || 0),
										igst = parseFloat($('#IGST').val() || 0),
										
										cess = parseFloat($('#cess').val() || 0);
									$('#cost_price').val(calculatePrice(rate, gst, sgst, cgst, igst, cess));
								})
								function calculatePrice(rate, gst, sgst, cgst, igst, cess) {
									console.log('a');
									return costPrice + ( rate * (sgst + cgst + igst + cess ) / 100);
								}
								// finish GST coding.
								// this is for calender--
								<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
								<script type="text/javascript">
								$(".form_datetime").datepicker({
								format: "yyyy-mm-dd",
								autoclose: true
								});
								//finish calender coding.
								// this is javascript coding for calender.
								src="https://code.jquery.com/jquery-2.2.4.min.js"
								integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
								crossorigin="anonymous"></script>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
								<script type="text/javascript">
								$(".form_datetime").datepicker({
								format: "yyyy-mm-dd",
								autoclose: true
								});
								//finish javascript coding for calender.
								</script>
							</body>