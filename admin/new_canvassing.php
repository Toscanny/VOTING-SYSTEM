
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
            	<br><br>
            	<?php
            		require '../dbconnector/dbcon.php';
            		$years = $conn->query("SELECT year FROM `tbl_partylist`")->fetch_array();
            	?>
                     <div class="panel panel-default">
                        <div class="panel-heading">
							<h4 class="modal-title" id="myModalLabel">         
								<div class="panel panel-default">
									
									<div id="panel1" class="panel-heading">
										<center>
											<div class="logos">
									<img style="width: 6pc;" src="logo/scclogo.png">
											</div><p class="report">STUDENT COUNCIL ORGANIZATION<br>SAINT CECILIA'S COLLEGE-CEBU, INC.</p><br>
										
										SCO Election Reports <?php echo $years['year']; ?>
										</div>
										</center>    
									</div>
							</h4>
                        </div>

						
					<br/>

                       <form method="post" action="sort.php?page=sort">			
							<select name="position" id="position" class = "form-control sedra1 pull-left" style = "width:300px;margin-left:19px; ">
								<option readonly>Sort by Position</option>
								<option>President</option>
								<option>Vice President</option>
								<option>Secretary</option>
								<option>Treasurer</option>
								<option>Auditor</option>
								<option>Mass Media Officer</option>
								<option>Peace Officer</option>
								<option>Activity Coordinator</option>		
								<option>1st Year Liaison</option>	
								<option>2nd Year Liaison</option>	
								<option>3rd Year Liaison</option>	
								<option>4th Year Liaison</option>	
													
							</select>

							&nbsp;
							&nbsp;
							<button id ="sort" class = "btn btn-success"><i class="fa fa-sort"></i> Sort
							</button>
							<script>
								
							</script>
							<button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print
							</button>
								<button type="button" style = "margin-right:14px;" id ="print1" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> <a href="new_candidate_finalList.php?page=finalReports" style="text-decoration: none; color: white;">Final List</a>
								</button>
							

						</form>	
                        <div class="panel-body">							                            		
										<!-- President Area -->		
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>PRESIDENT</b></td>
												</thead>
											</table>
										<table class="table table-striped table-bordered table-hover ">
												
										
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL PRESIDENTS VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
											require '../dbconnector/dbcon.php';
											$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'president' and status = 'approved'");
											while($fetch = $query->fetch_array()){	
													$id = $fetch['candidate_id'];										
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'" );
													$query2 = $conn->query("SELECT COUNT(tbl_candidate.candidate_id)  as 'percentage1' FROM votes INNER JOIN tbl_candidate ON votes.candidate_id = tbl_candidate.candidate_id WHERE tbl_candidate.position = 'president'" );
													$query3 = $conn->query("SELECT candidate_id, COUNT(*) * 100.0 /  (SELECT COUNT(*) FROM votes) AS Percent FROM votes GROUP BY candidate_id ORDER BY candidate_id;");													// $query3 = $conn->query("SELECT candidate_id, total CAST(candidate_id * 100) / total AS 'Percentage2') AS 'Percentage2' FROM votes " );
													// $query3 = $conn->query("SELECT candidate_id, (SELECT COUNT(*) * 100 AS 'Percentage2') AS 'Percentage2' FROM votes");
													$fetch1 = $query1->fetch_assoc();
													$fetch2 = $query2->fetch_assoc();
													$fetch3 = $query3->fetch_assoc();

										
												?>
												<tbody>
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer; " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch2 ['percentage1'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch3 ['Percent'].'%';?></td>
												<?php }?>
												</tbody>
														
														
										</table>

										<!-- Vice President Area	 -->
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>VICE PRESIDENT</b></td>
												</thead>
											</table>

									 	<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'vice president' and status = 'approved'");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
												
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;  " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										<!-- Secretary Area -->
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>SECRETARY</b></td>
												</thead>
											</table>

										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'secretary' and status = 'approved' ");
												while($fetch = $query->fetch_array()){					
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
											
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer; " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										<!-- Treasurer Area -->			
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>TREASURER</b></td>
												</thead>
											</table>

										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'treasurer' and status = 'approved' ");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>


										<!-- Auditor Area -->													
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>AUDITOR</b></td>
												</thead>
											</table>
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'auditor' and status = 'approved'");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;"> 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
										</table>	
										
										<!-- Mass Media Officer Area	 -->			
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>MASS MEDIA OFFICER</b></td>
												</thead>
											</table>
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Mass Media Officer' and status = 'approved'");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>		
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										
										<!-- Peace Officer Area -->				
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>PEACE OFFICER</b></td>
												</thead>
											</table>
										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'peace officer' and status = 'approved'");
												while($fetch = $query->fetch_array()){
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>

													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer; " > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										
										<!-- Activity Coordinator Area -->				
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>ACTIVITY COORDINATOR</b></td>
												</thead>
											</table>

										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'activity coordinator' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										<!-- 1st year liaison -->
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>LIAISON 1ST YEAR</b></td>
												</thead>
											</table>

										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 1st year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										<!-- 2nd year liaison -->
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>LIAISON 2ND YEAR</b></td>
												</thead>
											</table>

										<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 2nd year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	
										<!-- 3rd year liaison -->
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>LIAISON 3RD YEAR</b></td>
												</thead>
											</table>

													<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>Percentage (%)</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 3rd year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>	

										<!-- 4th year liaison -->
											<table class="table table-striped table-bordered table-hover ">
												<thead>
												<td style = "width:100%; text-align:center"class = "alert alert"><b>LIAISON 4TH YEAR</b></td>
												</thead>
											</table>

											<table class="table table-striped table-bordered table-hover ">
												<thead>

													<td style = "width:120px;" class = "alert alert"><b>IMAGE</b></td>
													<td style = "width:600px;"class = "alert alert"><b>CANDIDATE NAME</b></td>
													<td style = "width:90px; "class = "alert alert"><b>DEPARTMENT</b></td>
													<td style = "width:90px; text-align:center"class = "alert alert" ><b>TOTAL VOTES</b></td>
												
												</thead>
												<?php
												require '../dbconnector/dbcon.php';
												$query = $conn->query("SELECT * FROM tbl_candidate WHERE position = 'Liaison 4th year' and status = 'approved'");
												while($fetch = $query->fetch_array())
												{
													$id = $fetch['candidate_id'];
													$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
													$fetch1 = $query1->fetch_assoc();
										
												?>
												<tbody>
												
													<td><img id="img" src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; cursor: pointer;" > 
													<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']. " ";?></td>
													<td><?php echo $fetch ['department'];?></td>
													<td style = "width:20px; text-align:center"><?php echo $fetch1 ['total'];?></td>
												<?php }?>
												</tbody>
												
												
										</table>

									</div>				
		   					 </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    

    <?php include ('script.php');?>

</body>

</html>

