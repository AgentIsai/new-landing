<?php
require_once __DIR__ . '/getTranslations.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo( getTranslation( 'header-logo-text' ) ); ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://meta.miraheze.org/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">
			<img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Logo" style="height:3em; width:3em; padding:0.5em;">
			<?php echo getTranslation( 'header-logo-text' ); ?>
		</a>
                <a class="btn btn-primary" href="https://meta.miraheze.org/wiki/Special:CreateAccount">Sign Up</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-2 text-uppercase">
					<?php echo getTranslation( 'welcome-text' ); ?>
				</h1>
                            <h5 class="mb-3 font-weight-light">
					<?php echo getTranslation( 'description-text' ); ?>
				</h5>
                        </div>
                        <center><div class="btn-group" role="group">
                            <a class="btn btn-xl btn-outline-light" href="https://meta.miraheze.org/wiki/Special:CreateAccount">
                                <i class="bi bi-box-arrow-in-right"></i>
                                <?php echo( getTranslation( 'join-text' ) ); ?>
                            </a>
                            <a class="btn btn-xl btn-outline-light" href="https://donate.miraheze.org">
                                <i class="bi bi-cash-coin"></i>
                                <?php echo( getTranslation( 'donate-text' ) ); ?>
                            </a>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-xl btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    More
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div></center>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3><?php echo( getTranslation( 'features-mediawiki' ) ); ?></h3>
                            <p class="lead mb-0"><?php echo( getTranslation( 'features-mediawiki-desc' ) ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3><?php echo( getTranslation( 'features-not-for-profit-text' ) ); ?></h3>
                            <p class="lead mb-0"><?php echo( getTranslation( 'features-not-for-profit-desc' ) ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3><?php echo( getTranslation( 'features-community-text' ) ); ?></h3>
                            <p class="lead mb-0"><?php echo( getTranslation( 'features-community-desc' ) ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/discussion.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2><?php echo( getTranslation( 'showcase-community' ) ); ?></h2>
                        <p class="lead mb-0"><?php echo( getTranslation( 'showcase-community-desc' ) ); ?></p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2><?php echo( getTranslation( 'showcase-updates' ) ); ?></h2>
                        <p class="lead mb-0"><?php echo( getTranslation( 'showcase-updates-desc' ) ); ?></p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/adfree.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2><?php echo( getTranslation( 'showcase-free' ) ); ?></h2>
                        <p class="lead mb-0"><?php echo( getTranslation( 'showcase-free-desc' ) ); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Terms_of_Use"><?php echo( getTranslation( 'footer-terms' ) ); ?></a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy"><?php echo( getTranslation( 'footer-privacy-policy' ) ); ?></a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Meta:General_disclaimer"><?php echo( getTranslation( 'footer-disclaimers' ) ); ?></a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy#4._Cookies"><?php echo( getTranslation( 'footer-cookie' ) ); ?></a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center"><?php echo( getTranslation( 'footer-contact' ) ); ?></a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ"><?php echo( getTranslation( 'footer-faq' ) ); ?></a></li>
			    </ul>
                        <p class="text-muted small mb-4 mb-lg-0"><?php echo( getTranslation( 'footer-desc' ) ); ?></p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.facebook.com/miraheze/"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="https://twitter.com/miraheze"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://miraheze.org/discord"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
