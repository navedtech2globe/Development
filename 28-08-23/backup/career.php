<?php
session_start(); 
include("include/connection.php"); 
?>
<!doctype html>
<html>
<?php include("include/meta.php"); ?>
			
<body>
<?php include("include/header.php"); ?>

<div class="banner-outer inner-banner banner-1">
<div class="container">
	<div class="row">
    	<div class="col-xs-12">
        
        	<h1>Careers at Tech2Globe </h1>    
			
        </div>   
    </div>
</div>
</div>

<!-- banner end -->
<div class="breadcrumbBg">
  <div class="container">
    <div class="row">
      <ul class="breadcrumb">
        <li><a href="http://www.tech2globe.com/">Home</a></li>
        <li>Career</li>
      </ul>
    </div>
  </div>
</div>
<section class="container inner-page-content">
  <div class="row">
    <div class="col-md-9 col-xs-12">
      <h1> Careers at Tech2Globe </h1>      
      <p><strong>“Grow as we grow”</strong> Are you in search of doing exciting work in an environment you’re going to love? Are you interested to thrive on excellence? Are you a smart worker with passion to work? Are you eager and enjoy solving challenging problems? Want to work with a shrewd, committed team? Then we are the right employer for you. If you are interested in making a difference in the world, have talent and ready to face challenges and want to pursue a career in web designing, development and internet marketing, then you have golden opportunities waiting.Please visit our portfolio...</p>
      <div class="clearfix"></div>
            <!-- New Table -->
      <script>
      $(function() {
        $('#dm')
            .hide();
      });
      $(document).ready(function(){
        $("#applydg").click(function(){
          $("#dm").toggle();
        });
      });

      $( document ).ready(function() {
        $('.collapse').on('show.bs.collapse', function () {
          // hide all accordion except the clicked one
          $('.collapse').not(this).collapse('hide');
        });
      });
      </script>
      <div class="table-responsive">
      <?php
        $sql = "SELECT * FROM `job_ vacancy` Where `status` = 1 ORDER BY `id` DESC";
        //print_r($query);
        $query=mysqli_query($con, $sql) or die("DB Error!!");
        if(mysqli_num_rows($query)>0){
      ?>
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr class="maintr">
            <th>Vacancy For</th>
            <th>Work Experience</th>
            <th>Number Of Positions</th>
            <th>Apply Now</th>
            </tr>
          </thead>
          <tbody>
           <?php
            while($row=mysqli_fetch_array($query)){ 
             /* echo"<pre>";
              print_r($row);*/
            ?>  
            <tr>
              <td scope="row"><?php echo $row['job_title'];?></td>
              <td><?php echo $row['Work Experience'];?></td>
              <td><?php echo $row['number of positions'];?></td>
              <td><button data-toggle="collapse" data-target="#vacancy_dme_<?php echo $row['id'];?>" aria-expanded="false" aria-controls="vacancy_dme" data-parent="#vacancy">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_dme_<?php echo $row['id'];?>" data-parent="#accordion">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <?php 
                      $query1="SELECT id,state FROM state_list where id=".$row['location'];
                      $result1=mysqli_query($con,$query1);
                      $row1 = mysqli_fetch_assoc($result1);
                      ?>
                      <td scope="col" class="w-50"><?php echo $row1['state'];?></td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col"><?php echo $row['qualification'];?></td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col"><?php echo $row['Work Experience'];?></td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col"><?php echo $row['skills'];?></td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col"><?php echo $row['jobProfile'];?></td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="/career_form?jid=<?php echo $row['id'];?>" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr> 
            <?php
            } 
            ?>
          </tbody>
         <!-- <tbody>
            <tr>
              <td scope="row">Digital Marketing Executive</td>
              <td>1</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_dme" aria-expanded="false" aria-controls="vacancy_dme" data-parent="#vacancy">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_dme" data-parent="#accordion">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Business Development Executive</th>
              <td>1</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_bde" aria-expanded="false" aria-controls="vacancy_bde" data-parent="#vacancy">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_bde" data-parent="#accordion">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Digital Marketing Intern</th>
              <td>1</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_dmi" aria-expanded="false" aria-controls="vacancy_dmi" data-parent="#vacancy">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_dmi" data-parent="#accordion">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Business Development Intern</th>
              <td>1</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_bdi" aria-expanded="false" aria-controls="vacancy_bdi">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_bdi">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Dot Net Developer/ Senior Dot Net Developer</th>
              <td>3</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_dnd" aria-expanded="false" aria-controls="vacancy_dnd">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_dnd">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Angular JS Developer</th>
              <td>6</td>
              <td>2</td>
              <td><button data-toggle="collapse" data-target="#vacancy_ajd" aria-expanded="false" aria-controls="vacancy_ajd">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_ajd">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">React.Js and Angular Js Developer</th>
              <td>5</td>
              <td>2</td>
              <td><button data-toggle="collapse" data-target="#vacancy_rad" aria-expanded="false" aria-controls="vacancy_rad">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_rad">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Social Media Marketing Executive</th>
              <td>5</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_smme" aria-expanded="false" aria-controls="vacancy_smme">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_smme">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Senior Web cum Graphic Designer</th>
              <td>2</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_swgd" aria-expanded="false" aria-controls="vacancy_swgd">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_swgd">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Senior PHP Developer (Shopify and Magento)</th>
              <td>4</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_spd" aria-expanded="false" aria-controls="vacancy_spd">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_spd">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Process Associate-French Language</th>
              <td>1</td>
              <td>2</td>
              <td><button data-toggle="collapse" data-target="#vacancy_pafl" aria-expanded="false" aria-controls="vacancy_pafl">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_pafl">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Sr. Magento Developer</th>
              <td>3</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_smd" aria-expanded="false" aria-controls="vacancy_smd">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_smd">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Content Writer</th>
              <td>2</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_cw" aria-expanded="false" aria-controls="vacancy_cw">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_cw">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Team Lead -E-Commerce/Operations</th>
              <td>4</td>
              <td>1</td>
              <td><button data-toggle="collapse" data-target="#vacancy_tlec" aria-expanded="false" aria-controls="vacancy_tlec">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_tlec">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">E-Commerce Executive</th>
              <td>2</td>
              <td>2</td>
              <td><button data-toggle="collapse" data-target="#vacancy_ece" aria-expanded="false" aria-controls="vacancy_ece">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_ece">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Android App Developer</th>
              <td>3</td>
              <td>2</td>
              <td><button data-toggle="collapse" data-target="#vacancy_aad" aria-expanded="false" aria-controls="vacancy_aad">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_aad">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">IOS App Developer</th>
              <td>3</td>
              <td>2</td>
              <td><button data-toggle="collapse" data-target="#vacancy_ioap" aria-expanded="false" aria-controls="vacancy_ioap">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_ioap">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <th scope="row">Functional Manager</th>
              <td>3</td>
              <td>2</td>
              <td><button data-toggle="collapse" data-target="#vacancy_fm" aria-expanded="false" aria-controls="vacancy_fm">Apply Now</button></td>
            </tr>
            <tr class="collapse" id="vacancy_fm">
              <td colspan="4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th scope="col" class="w-50 bg-light"><strong>Location</strong></th>
                      <td scope="col" class="w-50">DELHI</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Qualification</strong></th>
                      <td scope="col">B.Tech/BCA</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Work Experience</strong></th>
                      <td scope="col">3</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Salary</strong></th>
                      <td scope="col">Best in the Industry</td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Required Skills/Experience</strong></th>
                      <td scope="col">* Detail oriented. Must have the ability to clearly identify issues and record them * Able to work effectively independently * Experience interfacing & troubleshooting with proprietary hardware and software </td>
                    </tr>
                    <tr>
                      <th scope="col" class="bg-light"><strong>Job Profile</strong></th>
                      <td scope="col">* Receive and review customer configuration information, being careful to note exceptions or issues * Communicate missing information needs to customer</td>
                    </tr>
                    <tr>
                      <td scope="col" colspan="2"><a href="https://tech2globe.com/career_form.php" class="btn btn-success">Apply Now</a></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

          </tbody> -->
        </table>
        <?php
        } 
        ?>
      </div>
      

    </div>

    <div class="col-md-3 col-xs-12 sidebar">
      <?php include("resources-about-us.php"); ?>
    </div>
	
	<!-- query form -->
	<?php include("include/query-form.php"); ?>
	<!-- query form -->   
	
    <!-- right side resources end -->
    <div class="clearfix"></div>
	 <br><br> 
  </div>
</section>
<!-- inner page content end -->

<?php include("include/inner-form.php"); ?>
<?php include("include/footer.php"); ?>
