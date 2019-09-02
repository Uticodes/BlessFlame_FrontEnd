
<?php
						if(isset($_POST['submit'])){
							include 'config.php';
							$firstname=$_POST['firstname'];
							$lastname=$_POST['lastname'];
							$email=$_POST['email'];
							$phone=$_POST['phone'];
							$message=$_POST['message'];

					$qry= "INSERT INTO contact_form_info (firstname,lastname,email,phone,message)
							VALUES('$firstname','$lastname','$email','$phone','$message')";
					$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Sent Successfully \");
											window.location = (\"contact-us.html\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\" Failed. Try Again\");
											window.location = (\"contact-us.html\")
											</script>";
							}
						}

					  ?>