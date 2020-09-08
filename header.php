<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
        <!-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json" /> -->
        <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Signetic</title>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <nav class="navbar">
                    <a href="index.php" class="navbar__brand"
                        ><img
                            src="images/logo-signetic.svg"
                            alt="Signetic Logo"
                    /></a>
                    <div class="navbar__content">
                        <div class="nav__mobile">
                            <a href="index.php" class="navbar__brand"
                                ><img
                                    src="images/logo-signetic.svg"
                                    alt="Signetic Logo"
                            /></a>
                            <i class="icon icon-cross nav__close"></i>
                        </div>
                        <ul class="navbar__menu">
                            <li class="nav__item">
                                <a href="services" class="nav__link"
                                    >Services</a
                                >
                            </li>
                            <li class="nav__item">
                                <a href="learn" class="nav__link">Learn</a>
                            </li>
                            <li class="nav__item">
                                <a href="about" class="nav__link">About</a>
                            </li>
                        </ul>
                        <div class="navbar__cta">
                            <a
                                href="#contact__section"
                                class="reach-out btn btn-outline"
                                >Reach Out</a
                            >
                        </div>
                        <div class="nav__contact">
                            <div>
                                <p>
                                    1335 N Northlake Way, Suite #202<br />
                                    Seattle, WA 98103
                                </p>
                                Email:
                                <a href="mailto:info@signetic.com"
                                    >info@signetic.com</a
                                ><br />
                                Tel:
                                <a href="tel:+1 425-894-9610"
                                    >+1 425-894-9610</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="nav__trigger">
                        <i class="icon icon-menu"></i>
                    </div>
                </nav>
            </div>
        </header>
        <div class="main__content">