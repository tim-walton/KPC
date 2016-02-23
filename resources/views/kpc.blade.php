@extends('app')

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Kansas Pathology Consultants P.A.');"></div>
            <div class="carousel-caption">

            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Inustry Leading Technology');"></div>
            <div class="carousel-caption">

            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Dedicated staff');"></div>
            <div class="carousel-caption">

            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Kansas Pathology Consultants P.A.
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i>Who We Are</h4>
                </div>
                <div class="panel-body">
                    <p>Kansas Pathology Consultants P.A. is a professional association of Board Certified Anatomic and Clinical Pathologists, Cytopathologists, Cytotechnologists with a dedicated support staff.  KPC is an independent, physician owned laboratory.
<br><br><br>
                        </p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> What We Do</h4>
                </div>
                <div class="panel-body">
                    <p>

                        At KPC we partner with Health Care Professionals in Clinics and Hospitals to provide Surgical Pathology, Cytology and Consultative services for superior patient care outcomes. We provide a full range of services to physician practices, surgery centers, rural hospitals and specialty clinics in Kansas and the surrounding areas.



                    </p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> Beyond Expected</h4>
                </div>
                <div class="panel-body">
                    <p>  We strive to provide rapid diagnosis for patients and referring physicians with our Fine Needle Aspiration services and on-site Frozen Sections. We strive for quality reports with a personal touch. Our pathologists are available to answer your questions and meet any special requests you may have.


                    </p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Expanded Services</h2>
        </div>
        <div class="col-md-6">
            <p>Expanded Services from KPC include:</p>

            <ul>
                <li><strong>EMR Interface Options</strong>
                </li>
                <li>Web-Based Ordering & Reporting</li>
                <li>Dedicated Client Service Department</li>
                <li>Professional Dedicated Courier Service</li>
                <li>Patient Letter for Negative Pap</li>
                <li>Pathologists and Cytotechnologists       available to speak with clients</li>
                <li>HPV & Gonorrhea/Chlamydia testing
                    from Thin Prep&trade; Pap Collection</li>
                <li>Quarterly Newsletter</li>
            </ul>

        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="images/cars.jpg" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Looking for our Client Login?</p>
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
                <p>Copyright &copy; Kansas Pathology Consultants P.A. | Powered by CloudInk, Inc.</p>
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
