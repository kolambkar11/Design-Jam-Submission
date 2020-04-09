<div class="container p-0">
	<div class="col-sm-12 p-0"><hr class="mt-0 mb-3" /></div>
	<div class="container">
		<div id="accordion" class="accordion">
			<div class="card mb-0">
				<div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
					<a class="card-title"> Item 1 </a>
				</div>
				<div id="collapseOne" class="card-body collapse" data-parent="#accordion">
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">
						<label class="custom-control-label" for="customRadio">Custom radio</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
.accordion .card-header:after {
    font-family: 'FontAwesome';  
    content: "\f068";
    float: right; 
}
.accordion .card-header.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\f067"; 
}
</style>