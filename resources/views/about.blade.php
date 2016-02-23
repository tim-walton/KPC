@extends('app')
<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">About Us</h1>
        <p class="lead blog-description">Kansas Pathology Consultants, P.A. is an independent, physician owned laboratory specializing is Surgical Pathology and Cytology. We are accredited by the College of American Pathologists.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">A litte more about us..</h2>


                <p>We provide a full range of services to rural hospitals, surgery centers, physician practices, and specialty clinics in Kansas, Colorado, and surrounding areas.

                    As a physician owned practice, we are dedicated to providing our colleagues with superior services.

                    We strive for rapid turnaround time, quality reports with a personal touch. Our pathologists are available to answer your questions and meet any special request you may have.</p>
                <hr>
                <p>We are a professional association of Board Certified Anatomic and Clinical Pathologists, Cytopathologists, Radioisotopic Pathologist and Cytotechnologists with a dedicated support staff.
<br>
                    We are a Physician owned multi-state provider of Medical Pathology Services. We have maintained continuous voluntary accreditation with the College of American Pathologists since 1970. Our pathologists are all Board Certified and/or are Fellows of the College of American Pathologists (FCAP). We subscribe to ongoing self-inspection and ongoing educational programs in the realm of Surgical Pathology, Cytopathology and Clinical Consultative Services in Pathology. We are a member laboratory of the American Society of Cytopathology. Currently we hold physician licenses in Kansas, Nebraska, Colorado, Tennessee, Ohio, Illinois, New Mexico, Oklahoma, Texas. Our CLIA license is continuously maintained.
<br>
                    Our physician staff includes Megan P. Redelman, M.D., FCAP, who serves as our Medical Director, Debra K. Barns, M.D., Lyle J. Noordhoek, M.D., FCAP, our Staff Pathologists; and Ward M. Newcomb, M.D., FCAP, Staff Pathologist and President of Kansas Pathology Consultants, P.A. Our support staff is educated, experienced and capable, assisting the physicians and cytotechnologists to consistently produce quality services and reliable work products, on time and at a reasonable fee.
<br>
                    "The performance of one affects the performance of all."  Everyone at KPC works toward the goal of improving the products and services we provide to you and to the patients we serve. </p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            </div><!-- /.blog-post -->

            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>
</html>
