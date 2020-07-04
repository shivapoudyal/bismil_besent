<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="enquiryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
					<div class="blok quotes">
						<div class="blok-title">
							<span>SCHEDULE</span> <br>A FREE INSPECTION
						</div>
						<form action="#" class="form-contact shake" id="contactForm"  data-toggle="validator">
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Enter Name *" required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Enter Email *" required>
								<div class="help-block with-errors"></div>
							</div>
                                                    
                                                        <div class="form-group">
                                                            <input type="text" class="form-control number" maxlength="10" minlength="10" id="mobile" placeholder="Enter Mobile Number *" required>
								<div class="help-block with-errors"></div>
							</div>
                                                    
                                                         <div class="form-group">
                                                             <select class="form-control " style="height: 40px; color: #CEA686" required>
                                                                <option value="">Select Service </option>
                                                                <?php 
                                                                foreach(enquiryForm_services as $val){
                                                                    echo "<option>$val</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                             <div class="help-block with-errors"></div>
							</div>
<!--							<div class="form-group">
								 <textarea id="message" class="form-control" rows="4" placeholder="Enter Your Message *" required></textarea>
								<div class="help-block with-errors"></div>
							</div>-->
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-default">ASK A QUOTE</button>
							</div>
						</form>
						<div class="icon"><span class="fa fa-calendar skyblueThemeColor"></span></div>	
					</div>
				</div>
</div>
<!--Modal: Login with Avatar Form-->

<style>
    .modal {
    overflow-y: auto;
}

.modal-open {
    overflow: auto;
}

.modal-open[style] {
    padding-right: 0px !important;
}
</style>