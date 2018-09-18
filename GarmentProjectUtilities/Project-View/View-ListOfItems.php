<html>
	<head>
		<?php
			include ('../Project-Process/Connector.php');

			$kode= $_POST['id'];
			if($kode> 0) {
				$nama = $cuil['itemname'];
				$harga = $cuil['price'];
				$tipe = $cuil['types'];
				$stok = $cuil['stock'];
			}

			$batas=15;
			$halaman=$_GET['halaman'];
			$posisi=null;
			if(empty($halaman)){
				$posisi=0;
				$halaman=1;
			}else{
				$posisi=($halaman-1)* $batas;
			}

			$sql="select * from dataitem limit $posisi,$batas ";
			$query=mysqli_query($konek, $sql);

			$sql1="select * from dataitem WHERE id=".$kode;
			$query1=mysqli_query($konek, $sql1);
			$dataa=mysqli_fetch_array($query1);

			$counter = 0;

			//Edited
				$file = file_get_contents("../Project-Process/Converter.php");
				$json = json_decode($file, true);

			//End Edited
		?>
		<script src="../js/modal.js"></script>
		<script src="../js/transition.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			    var panels = $('.user-infos');
			    var panelsButton = $('.dropdown-user');
			    panels.hide();

			    //Click dropdown
			    panelsButton.click(function() {
			        //get data-for attribute
			        var dataFor = $(this).attr('data-for');
			        var idFor = $(dataFor);

			        //current button
			        var currentButton = $(this);
			        idFor.slideToggle(400, function() {
			            //Completed slidetoggle
			            if(idFor.is(':visible'))
			            {
			                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
			            }
			            else
			            {
			                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
			            }
			        })
			    });
		    	$('[data-toggle="tooltip"]').tooltip();
			    // $('button').click(function(e) {
			    //     e.preventDefault();
			    //     alert("This is a demo.\n :-)");
			    // });
			    $('#radioBtn a').on('click', function(){
				    var sel = $(this).data('title');
				    var tog = $(this).data('toggle');
				    $('#'+tog).prop('value', sel);

				    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
				    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
				});
				$('#radioBtn2 a').on('click', function(){
				    var sel = $(this).data('title');
				    var tog = $(this).data('toggle');
				    $('#'+tog).prop('value', sel);

				    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
				    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
				});
				$('.btn-number').click(function(e){
				    e.preventDefault();

				    fieldName = $(this).attr('data-field');
				    type      = $(this).attr('data-type');
				    var input = $("input[name='"+fieldName+"']");
				    var currentVal = parseInt(input.val());
				    if (!isNaN(currentVal)) {
				        if(type == 'minus') {

				            if(currentVal > input.attr('min')) {
				                input.val(currentVal - 1).change();
				            }
				            if(parseInt(input.val()) == input.attr('min')) {
				                $(this).attr('disabled', true);
				            }

				        } else if(type == 'plus') {

				            if(currentVal < input.attr('max')) {
				                input.val(currentVal + 1).change();
				            }
				            if(parseInt(input.val()) == input.attr('max')) {
				                $(this).attr('disabled', true);
				            }

				        }
				    } else {
				        input.val(0);
				    }
				});

				$('.input-number').focusin(function(){
				   $(this).data('oldValue', $(this).val());
				});

				$('.input-number').change(function() {
				    minValue =  parseInt($(this).attr('min'));
				    maxValue =  parseInt($(this).attr('max'));
				    valueCurrent = parseInt($(this).val());

				    name = $(this).attr('name');
				    if(valueCurrent >= minValue) {
				        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
				    } else {
				        alert('Sorry, the minimum value was reached');
				        $(this).val($(this).data('oldValue'));
				    }
				    if(valueCurrent <= maxValue) {
				        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
				    } else {
				        alert('Sorry, the maximum value was reached');
				        $(this).val($(this).data('oldValue'));
				    }
				});

				$(".input-number").keydown(function (e) {
			        // Allow: backspace, delete, tab, escape, enter and .
			        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
			             // Allow: Ctrl+A
			            (e.keyCode == 65 && e.ctrlKey === true) ||
			             // Allow: home, end, left, right
			            (e.keyCode >= 35 && e.keyCode <= 39)) {
			                 // let it happen, don't do anything
			                 return;
			        }
			        // Ensure that it is a number and stop the keypress
			        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			            e.preventDefault();
			        }
			    });
			});
		</script>
		<style type="text/css">
			span.glyphicon-edit {
			    font-size: 1.2em;
			}
			.table-striped tbody tr:hover > td{
				background: #EEE;
			}
			.filter-col{
			    padding-left:10px;
			    padding-right:10px;
			}
			.center{
				width: 150px;
				margin: 40px auto;
			}

			#scroll-hide{
			  overflow:hidden;
			}
			#scroll-hide .inner{
			  overflow:auto;
			  margin:20px;
			  padding-right:20px;
			}
		</style>
	</head>
	<body>
		<div id="scroll-hide">
			<div class="inner">
				<table>
					<tr>
						<td width="1100"><b>List Of Items</b></td>
						<td width=""><input type="submit" href="#" data-toggle="modal" class="btn btn-success" name="login" data-target="#myModal" value="+"></td>
					</tr>
				</table>
				<table>
					<tr>
						<td>
							<div class="col-xs-pull-1">
						        <div id="filter-panel" class="collapse filter-panel">
						            <div class="panel panel-default">
						                <div class="panel-body">
						                    <form class="form-inline" role="form">
						                        <div class="form-group">
						                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Rows per page:</label>
						                            <select id="pref-perpage" class="form-control">
						                                <option value="2">2</option>
						                                <option value="3">3</option>
						                                <option value="4">4</option>
						                                <option value="5">5</option>
						                                <option value="6">6</option>
						                                <option value="7">7</option>
						                                <option value="8">8</option>
						                                <option value="9">9</option>
						                                <option value="10">10</option>
						                                <option value="15">15</option>
						                                <option value="20">20</option>
						                                <option value="30">30</option>
						                                <option value="40">40</option>
						                                <option value="50">50</option>
						                                <option selected="selected" value="100">100</option>
						                                <option value="200">200</option>
						                                <option value="300">300</option>
						                                <option value="400">400</option>
						                                <option value="500">500</option>
						                                <option value="1000">1000</option>
						                            </select>
						                        </div> <!-- form group [rows] -->
						                        <div class="form-group">
						                            <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
						                            <input type="text" class="form-control input-sm" id="pref-search">
						                        </div><!-- form group [search] -->
						                        <div class="form-group">
						                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Order by:</label>
						                            <select id="pref-orderby" class="form-control">
						                                <option>Descendent</option>
						                            </select>
						                        </div>
						                        <div class="form-group">
						                            <button type="submit" class="btn btn-default filter-col">
						                                <span class="glyphicon glyphicon-record"></span> Save Settings
						                            </button>
						                        </div>
						                    </form>
						                </div>
						            </div>
						        </div>
						        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
						            <span class="glyphicon glyphicon-cog"></span> Advanced Search
						        </button>
							</div>
						</td>
					</tr>
				</table>
				<table class="table table-striped">
					<thead>
						<tr>
							<td>
								<br>
							</td>
						</tr>
					<tr>
						<td width="50"><center><b>No.</td>
						<td width="300"><center><b>Item Name</td>
						<td width="200"><center><b>Price/Item</td>
						<td width="160"><center><b>Types</td>
						<td width="160"><center><b>Stock Item</td>
						<td width="200"><center><b>Action</td>
					</tr>
					</thead>
					<?php while ($data=mysqli_fetch_array($query)){
						$counter++;
						?>
							<tbody>
							<tr>
								<td width="50"><center><?php echo $counter;?></td>
								<td width="300"><?php echo $data[1];?></td>
								<td width="200"><center><?php echo $data[2];?></td>
								<td width="160"><center><?php echo $data[3];?></td>
								<td width="160"><center><?php echo $data[4];?></td>
								<td><center>
									<a href="" id="" data-target="#myModal1" data-original-title="Edit this user" data-toggle="modal" type="button" class="btn btn-sm btn-warning" value="<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i></a>
				                    <a href="../Project-Process/RemoveItems.php?id=<?php echo $data[0];?>" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
								</td>
							</tr>
							</tbody>
						<?php
					}?>
				</table>
				<ul class="pagination">
					<li>
						<?php
							$sql_paging = mysqli_query($konek, "select id from dataitem");
							$jmldata = mysqli_num_rows($sql_paging);
							$jumlah_halaman = ceil($jmldata / $batas);
							for($i = 1; $i <= $jumlah_halaman; $i++)
								if($i != $halaman) {
									echo "<a href=View-Home.php?page=View-ListOfItems&halaman=$i>$i</a>";
								}
							mysqli_close();?>
						<br>
						<b>Total Item : <?php echo $jmldata;?></b>
					</li>
				</ul>
			</div>
		</div>
	</body>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><b>Add New Item</b></h4>
				</div>
				<div class="modal-body">
					<form id="signupform" class="form-horizontal" role="form" action="../Project-Process/CreateNewItem.php" method="POST">
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Item Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="itemname" placeholder="Name Of Item" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Price/item</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="price" placeholder="Price Of Item" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Types</label>
                            <div class="col-sm-7 col-md-7">
				    			<div class="input-group">
				    				<div id="radioBtn" class="btn-group">
				    					<a class="btn btn-primary btn-sm active" data-toggle="types" data-title="Pcs" value="PCS">PCS</a>
				    					<a class="btn btn-primary btn-sm notActive" data-toggle="types" data-title="Pack" value="PACK">PACK</a>
				    				</div>
				    				<input type="hidden" name="types" id="types" value="Pcs">
				    			</div>
				    		</div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Stock Item</label>
                            <div class="col-sm-7 col-md-4">
                            <div class="input-group">
					          <span class="input-group-btn">
					              <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="stock">
					                <span class="glyphicon glyphicon-minus"></span>
					              </button>
					          </span>
					          <input type="text" name="stock" class="form-control input-number" value="10" min="1" max="1000000">
					          <span class="input-group-btn">
					              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="stock">
					                  <span class="glyphicon glyphicon-plus"></span>
					              </button>
					          </span>
					      </div></div>
                        </div>

				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-Warning" name="addnew" value="Submit"></input>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!--FORM MODAL EDIT-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><b>Edit Item</b></h4>
				</div>
				<div class="modal-body">
					<form id="signupform" class="form-horizontal" role="form" action="../Project-Process/UpdateItem.php" method="POST">
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Item Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="itemname" placeholder="Name Of Item" value="<?php echo $nama;?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Price/item</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="price" placeholder="Price Of Item" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Types</label>
                            <div class="col-sm-7 col-md-7">
				    			<div class="input-group">
				    				<div id="radioBtn2" class="btn-group">
				    					<!-- <a class="btn btn-primary btn-sm notActive" data-toggle="type" data-title="Pcs" value="PCS">PCS</a> -->
				    					<a class="btn btn-primary btn-sm active" data-toggle="type" data-title="Pcs" value="PCS">PCS</a>
				    					<a class="btn btn-primary btn-sm notActive" data-toggle="type" data-title="Pack" value="PACK">PACK</a>
				    				</div>
				    				<input type="hidden" name="type" id="type" value="Pcs">
				    			</div>
				    		</div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Stock Item</label>
                            <div class="col-sm-7 col-md-4">
                            <div class="input-group">
					          <span class="input-group-btn">
					              <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="stock">
					                <span class="glyphicon glyphicon-minus"></span>
					              </button>
					          </span>
					          <input type="text" name="stock" class="form-control input-number" value="10" min="1" max="1000000">
					          <span class="input-group-btn">
					              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="stock">
					                  <span class="glyphicon glyphicon-plus"></span>
					              </button>
					          </span>
					      </div></div>
                        </div>

				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-Warning" name="addnew" value="Submit"></input>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div></form>
			</div>
		</div>
	</div>
