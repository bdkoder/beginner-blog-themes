<?php 

/*
Template Name: Contact Page
*/

get_header(); ?>




                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Main Column -->
                            <div class="col-md-9">
                                <!-- Main Content -->
                                <div class="headline">
                                    <h2>Contact Form</h2>
                                </div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit landitiis.</p>
                                <br>
                                <!-- Contact Form -->


    


                                <form action="" method="post">
                                    <label>Name</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input name="name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <label>Email
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input name="email" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <label>Message</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-8 col-md-offset-0">
                                            <textarea name="message" rows="8" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <p>
                                        <button name="submit" type="submit" class="btn btn-primary">Send Message</button>
                                    </p>
                                </form>
                                <!-- End Contact Form -->
                                <!-- End Main Content -->
                            </div>
                            <!-- End Main Column -->
                            <!-- Side Column -->
                            <div class="col-md-3">
                                <!-- Recent Posts -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Contact Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, no cetero voluptatum est, audire sensibus maiestatis vis et. Vitae audire prodesset an his. Nulla ubique omnesque in sit.</p>
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa-phone color-primary"></i>+353-44-55-66</li>
                                            <li>
                                                <i class="fa-envelope color-primary"></i>info@example.com</li>
                                            <li>
                                                <i class="fa-home color-primary"></i>http://www.example.com</li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <strong class="color-primary">Monday-Friday:</strong>9am to 6pm</li>
                                            <li>
                                                <strong class="color-primary">Saturday:</strong>10am to 3pm</li>
                                            <li>
                                                <strong class="color-primary">Sunday:</strong>Closed</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End recent Posts -->
                                <!-- About -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">About</h3>
                                    </div>
                                    <div class="panel-body">
                                        Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
                                    </div>
                                </div>
                                <!-- End About -->
                            </div>
                            <!-- End Side Column -->
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                   


    <?php get_footer() ?>


                                <?php



if(isset($_POST['submit'])) {


$msg = 'Name: ' .$_POST['name'] ."\n"
    .'Email: ' .$_POST['email'] ."\n"
    .'Comment: ' ."\n" .$_POST['message'];

mail('coder@shahidul.net','Website Message', $msg);

header('location: index.php');

} else {
  // do other code block
  //header('Location: error.php');
  exit(0);
}


?>