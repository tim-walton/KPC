@extends('app')
<!-- Header Carousel -->
<header >
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->

    <!-- /.row -->
    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Meet The Doctors<br>
                <small>Our physician staff includes Megan P. Redelman, M.D., FCAP, who serves as our Medical Director,  Debra K. Barns, M.D., Lyle J. Noordhoek, M.D., FCAP, our Staff Pathologists, and Ward M. Newcomb, M.D., FCAP, Staff Pathologist and President of Kansas Pathology Consultants, P.A.  Our support staff is educated, experienced and capable, assisting the physicians and cytotechnologists in order to consistently produce quality services and reliable work products on time and at a reasonable fee.  </small></h2>
        </div>
        <div class="row">
            <div class="col-xs-6 col-lg-6 text-center">
                <h3>Megan P. Redelman, M.D., FCAP</h3>
                <p><img src="images/1.jpg" class="img-thumbnail"></p>
                <p><small>Certified by the American Board of Pathology in Anatomic Pathology, Clinical Pathology and Cytopathology</small></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-6 text-center">
                <h3>Ward M. Newcomb, M.D., FCAP</h3>
                <p><img src="images/2.jpg" class="img-thumbnail"></p>
                <p><small>Certified by the American Board of Pathology in Anatomic, Clinical , and Radioisotope Pathology<br>
                        Previous Secretary-Treasurer, Vice-President and president of the Kansas Medical Society<br>
                        Former President of the Kansas Society of Pathologists</small></p>
            </div><!--/.col-xs-6.col-lg-4-->
        </div>

        <div class="row">

                <div class="col-xs-6 col-lg-6 text-center">
                    <h3>Lyle J. Noordhoek, M.D., FCAP</h3>
                    <p><img src="images/4.jpg" class="img-thumbnail"></p>
                    <p><small>Certified by the American Board of Pathology in Anatomic and Clinical Pathology</small></p>
                </div><!--/.col-xs-6.col-lg-4-->
                <div class="col-xs-6 col-lg-6 text-center">
                    <h3>Debra K. Barns, M.D.</h3>
                    <p><img src="images/3.jpg" class="img-thumbnail"></p>
                    <p><small>Certified by the American Board of Pathology in Anatomic Pathology and Cytopathology</small></p>
                </div>

        </div>
    </div>
    <!-- /.row -->



    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Looking for our client login?</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="#">Login Here</a>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

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
