<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>

 <?php include 'side_bar.php'; ?>

				        <?php
							if(isset($_POST['submit'])){	
									if(!isset($_POST['pres_id'])){
										$_SESSION['pres_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['pres_id'] = $_POST['pres_id'];
									}if(!isset($_POST['vp_id'])){
										$_SESSION['vp_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['vp_id'] = $_POST['vp_id'];
									}if(!isset($_POST['sec_id'])){
										$_SESSION['sec_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['sec_id'] = $_POST['sec_id'];
									}if(!isset($_POST['tre_id'])){
										$_SESSION['tre_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['tre_id'] = $_POST['tre_id'];
									}if(!isset($_POST['aud_id'])){
										$_SESSION['aud_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['aud_id'] = $_POST['aud_id'];
									}if(!isset($_POST['mmo_id'])){
										$mmo = $_POST['mmo_id']= "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$mmo = $_POST['mmo_id'];
										$_SESSION['mmo_id'] = $_POST['mmo_id'];

									}if(!isset($_POST['p_id'])){
										// $_SESSION['p_id'] = "";
										$p=$_POST['p_id']="";
										
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$p = $_POST['p_id'];
										$_SESSION['p_id'] = $_POST['p_id'];
									}if(!isset($_POST['a_id'])){
										$activity=$_POST['a_id'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$activity = $_POST['a_id'];
										$_SESSION['a_id'] = $_POST['a_id'];
									}if(!isset($_POST['st'])){
										$_SESSION['st'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['st'] = $_POST['st'];
										$_SESSION['st'] = $_POST['st'];
									}if(!isset($_POST['nd'])){
										$_SESSION['nd'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['nd'] = $_POST['nd'];
										$_SESSION['nd'] = $_POST['nd'];
									}if(!isset($_POST['rd'])){
										$_SESSION['rd'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['rd'] = $_POST['rd'];
										$_SESSION['rd'] = $_POST['rd'];
									}if(!isset($_POST['th'])){
										$_SESSION['th'] = "";
										header("Location: vote.php?error=Choosecandidate");
									}else{
										$_SESSION['th'] = $_POST['th'];
										$_SESSION['th'] = $_POST['th'];
									}
								}

								
						?>
		<form method="post" action="submit_vote.php">			   
			<center>
			
			  <div class="col-lg-6"  >
			  <div class = "alert alert-info">
			  <!-- 	President area -->
			  <div class="panel panel-success">
				<div class="panel-heading"><center><h3>President</h3></center></div>
			  </div>
				<br />
				<?php
					if(!$_SESSION['pres_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%; ' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				</div>
				
				<!-- Vice President Area -->
				<div class = "alert alert-info" >
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>Vice President</h3></center></div>
				</div>
				<?php
					if(!$_SESSION['vp_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[vp_id]'")->fetch_array(); 
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%; ' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				</div>

				<!-- Secretary Area -->
				<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>Secretary</h3></center></div>
				</div>
				<br/>
				<?php
					if(!$_SESSION['sec_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[sec_id]'")->fetch_array(); 
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%; ' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
					
				</div>

				<!-- Treasurer Area -->
				<div class = "alert alert-info" >
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>Treasurer</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['tre_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[tre_id]'")->fetch_array(); 
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
				</div>

				<!-- Auditor Area -->
				<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>Auditor</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['aud_id']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[aud_id]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
				</div>

				<!-- Mass media Officer Area -->
				<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>Mass Media Officer</h3></center></div>
			    </div>
				<br />
				<?php
				foreach($mmo as $row1 =>$_SESSION['mmo']){
					
					if(!$mmo){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[mmo]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
					}
				?>
				
				</div>

				<!-- Peace Officer Area -->
				
				

				<div class = "alert alert-info" >
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>Peace Officer</h3></center></div>
			    </div>
				<br />
				<?php
				foreach($p as $row =>$_SESSION['value']){

					if(!$p){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id` = '$_SESSION[value]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				}
				?>
				</div>
			

				<!-- Activity Coordinator Area -->
				<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>Activity Coordinator</h3></center></div>
				</div>
				<br />
				<?php

				foreach($activity as $row1 =>$_SESSION['activity']){

					if(!$activity){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id`='$_SESSION[activity]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
					}
				?>
				
					
			</div>

			<!-- 1st -->
			<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>1st year liaison</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['st']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id`='$_SESSION[st]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
					
			</div>

					<!-- 2nd -->
					<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>2nd year liaison</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['nd']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id`='$_SESSION[nd]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
					
			</div>

				<!-- 3rd -->
				<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>3rd year liaison</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['rd']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id`='$_SESSION[rd]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
					
			</div>

				<!-- 4th -->
				<div class = "alert alert-info">
				<div class="panel panel-success">
				<div class="panel-heading"><center><h3>4th year liaison</h3></center></div>
				</div>
				<br />
				<?php
					if(!$_SESSION['th']){
					}else{
					$fetch = $conn->query("SELECT * FROM `tbl_candidate` WHERE `candidate_id`='$_SESSION[th]'")->fetch_array();
					echo "<img src = 'admin/".$fetch['img']."' style = 'width:15%;' /><br>".$fetch['firstname']."&nbsp".$fetch['lastname']."&nbsp".$fetch['year_level']."&nbsp".$fetch['department']."";
						}
				?>
				
					
			</div>
				
		</center>
	</form>
				<?php
					$self = $conn->query("SELECT * FROM voters");
					while($voter = $self->fetch_array()){
						$voters_id = $voter['voters_id'];
					}
				?>
				<center>
					<button  class="submit_vote">
					 <a style="text-decoration: none;" id="<?php echo $voters_id; ?>" href="#send_email_voters<?php echo $voters_id; ?>"<?php echo $voters_id?> data-toggle="modal">Submit Vote</a>
					</button>
					 	<?php include ('submit_vote_modal.php'); ?>
					<br><br>

					<button class="btn_back"><a  href = "vote.php" ><i class="icon-remove icon-large"></i>Back</a></button>
					<br><br>
				</center>


</body>

<?php include ('script.php');?>
</html>

