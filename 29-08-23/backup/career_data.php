
<?php
//echo "++++++";
//die; 
//ini_set('post_max_size' , '100M');
//ini_set('upload_max_filesize' , '100M');
include('admin/connect_db.php');
		if(isset($_POST['submit']))
		{
			// echo "<pre>";
			// print_r($_FILES);
			//echo count($_FILES['file']['name']);
			// for($i=0; $i< count($_FILES['file']['name']); $i++)
			// {
						// echo "<pre>";
						// print_r($_FILES['file']['name']);
					$target_path = "uploads/";
					//$ext = explode('.', basename( $_FILES['file']['name'][$i]));
					//$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext)-1]; 
					 $target_path = $target_path.$_FILES['file']['name'];
                     
					if(@move_uploaded_file($_FILES['file']['tmp_name'], $target_path))
						{
						 
						 $first_name=$_REQUEST['First_Name'];
						 $last_name=$_REQUEST['Last_Name'];
					     $Email_Address=$_REQUEST['Email_Address'];
						 $Portfolio=$_REQUEST['Portfolio'];
						 $vacancy_id=$_REQUEST['vacancy_id'];
						 $Salary=$_REQUEST['Salary'];
						 $StartDate=$_REQUEST['StartDate'];
						 $Phone=$_REQUEST['Phone'];
						 $Fax=$_REQUEST['Fax'];
						 $Organization=$_REQUEST['Organization'];
						 $comment=$_REQUEST['comment'];
						 $date = date('Y-m-d h:i:s');
						 $imgName = $_FILES['file']['name'];
						 $job_id = $_POST['job_id'];
								 $query = "INSERT INTO `jobrequest` (first_name,last_name,email,Portfolio,` vacancy_id`,salary,startdate,phoneNo,faxNo,fileuploadName,lastCompany,comment,applyDate,status)
                                         VALUES ('$first_name','$last_name','$Email_Address','$Portfolio','$vacancy_id','$Salary','$StartDate','$Phone','$Fax','$imgName','$Organization','$comment','$date','1')";
									
							 $result =  mysqli_query($con,$query);
							 
								    
									//echo $result; die;
								
								
									if($result=='1')
									{
										 $selectJobTitle = "SELECT `job_title` FROM `job_ vacancy` WHERE id = '".$vacancy_id."'";
										$getTitle = mysqli_query($con,$selectJobTitle);
										if($row = mysqli_fetch_array($getTitle))
										{
											$jobTitle = $row['job_title'];
											//print_r($jobTitle);die;
										}	
											
										
											   $name = $_POST['First_Name']." ".$_POST['Last_Name'];
											   $email = $_POST['Email_Address'];
											   $vacancy_id = $jobTitle;
											   $Phone = $_POST['Phone'];			
											   $message = "Hello Admin \n\n We have received a new Job request details are\n\n Name: ".$name."\n Email: ".$email."\n Contact Number: ".$Phone. "\n Job request for: ".$vacancy_id;
											   $subject = "Job Application";
											   $file = fopen('uploads/'.$_FILES['file']['name'], "r" );
											   $size = filesize('uploads/'.$file_name);
											   $content = fread( $file, $size);
				   
											   $encoded_content = chunk_split( base64_encode($content));
											   $num = md5( time() );
											   $from = "noreply@tech2globe.com";
											   $to = "subh.singh866897@gmail.com";
											   # Define the main headers.
											   $header = "From: $from \r\n";
											   $header .= "MIME-Version: 1.0\r\n";
											   $header .= "Content-Type: multipart/mixed; ";
											   $header .= "boundary=$num\r\n";
											   $header .= "--$num\r\n";
											 
											   # Define the message section
											   $header .= "Content-Type: text/plain\r\n";
											   $header .= "Content-Transfer-Encoding:8bit\r\n\n";
											   $header .= "$message\r\n";
											   
											   $header .= "--$num\r\n";
											 
											   # Define the attachment section
											   $header .= "Content-Type:  multipart/mixed; ";
											   $header .= "name=\"attachment.docx\"\r\n";
											   $header .= "Content-Transfer-Encoding:base64\r\n";
											   $header .= "Content-Disposition:attachment; ";
											   $header .= "filename=\"$file_name\"\r\n\n";
											   $header .= "$encoded_content\r\n";
											   $header .= "--$num--";
											 
											   # Send email now
											   $retval = mail ( $to, $subject, $message, $header );	
																			
													?>
											  <script>
											  
											  window.location = "career_form.php?id=<?php echo $job_id; ?>&message=1"
											  
											  </script>
											  
											  <?php }
						
													else
													{
														?>
														<script>window.location = "career_form.php?id=<?php echo $job_id; ?>&message=2"</script>
						  
												<?php
													}
							}
						
					else
					{
						//echo "There was an error uploading the file, please try again!";
					}
	
	}
	
	else
		
	{
		//echo "not submit";	
	}
?>
