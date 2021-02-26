<!--************************************
		Banner Start
*************************************-->
<!-- <div class="tg-banner tg-haslayout">
	<div class="tg-imglayer">
		<img src="images/bg-pattran.png" alt="image desctription">
	</div>
	<div class="container">
		<div class="row">
			<div class="tg-banner-content tg-haslayout">
				<div class="tg-pagetitle">
					<h1>Procurement Plan</h1>
				</div>
				<ol class="tg-breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Procurement Plan</li>
				</ol>
			</div>
		</div>
	</div>
</div> -->
<!--************************************
		Banner End
*************************************-->
<!--************************************
		Main Start
*************************************-->

<style>
.btn-primary {
    color: #fff;
    background-color: #1e315d;
    border-color: #ffcc33;;
}
</style>
<main id="tg-main" class="tg-main tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="tg-section-name">
				<h2>FONT SIZE</h2>
			</div>
			<div class="col-sm-11 col-xs-11 pull-right">
				<div class="row">
				        <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      
                  </div>
                </div>
			</div>


					<div class="table-responsive">
					 <div class="panel-body">
            <div class="form-group">
                <label for="sel1">Select Size:</label>
                <select name="state" class="form-control" id="sel1" onchange="changeSize(this);">
                     <option>12</option>
  <option>14</option>
  <option>16</option>
                </select>
				<div id="demo">
DEMO
</div>
            </div>


            
			
		<!--	<div  class="form-group">
			 <button type="button" id="splitbutton "class="btn btn-primary" data-dismiss="modal">submit</button>
			</div>-->
</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</main>
<script>
function changeSize(n) {
    var s = document.getElementById('zmain');
    s.style.fontSize = n.value + 'px'
}
</script>

                   