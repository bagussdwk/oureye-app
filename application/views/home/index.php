<!doctype html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('template/frontEnd/'); ?>img/oureye-icon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('template/frontEnd/'); ?>img/oureye-icon-16x16.png">
    <meta name="author" content="Bagus Dwi Kurniawan">
    <title>OurEye</title>
    <link rel="stylesheet" href="<?= base_url('template/frontEnd/'); ?>css/theme.min.css">
    <link href="<?= base_url('assets'); ?>/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <style>
        /* inter-300 - latin */
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local(''),
                url('./fonts/inter-v12-latin-300.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('./fonts/inter-v12-latin-300.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: local(''),
                url('./fonts/inter-v12-latin-500.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('./fonts/inter-v12-latin-500.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local(''),
                url('./fonts/inter-v12-latin-700.woff2') format('woff2'),
                /* Chrome 26+, Opera 23+, Firefox 39+ */
                url('./fonts/inter-v12-latin-700.woff') format('woff');
            /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navScroll">

    <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
        <div class="container">
            <a class="navbar-brand pe-4 fs-4" href="<?= base_url(); ?>">
                <i class="fas fa-eye"></i>
                <span class="ms-1 fw-bolder">OurEye</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link active" href="<?= base_url('home'); ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">
                            About us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/article'); ?>">
                            Artikel
                        </a>
                    </li>
                    <?php
                    if ($this->session->userdata('email')) {
                        $log = 'Logout';
                        $url = 'logout';
                        $link = base_url('user');
                        $menu = '<li class="nav-item">' . '<a class="nav-link" href=" ' . $link . '">' . "Profile" . '</a>' . '</li>';
                    } else {
                        $log = 'Sign in';
                        $url = '';
                        $menu = '';
                    }
                    ?>
                    <?= $menu; ?>
                </ul>
                <div>
                    <a href="<?= base_url("auth/" . $url); ?>" class="link-dark pb-1 link-fancy me-2">
                        <span><?= $log; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="w-100 overflow-hidden bg-gray-100" id="top">

            <div class="container position-relative">
                <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left" style="opacity: 0.2; background-image: url(<?= base_url('assets/'); ?>background.png);">

                </div>
                <div class="row">

                    <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
                        <h2 class="display-5 fw-bold my-5">SP Diagnosa Penyakit Mata Pada Manusia dengan Metode Bayes</h2>
                        <p class="lead">Website ini berupa sistem pakar yang berguna untuk mendiagnosa mata. Ayo mulai diagnosa, dan periksa penyakit apa yang anda alami!</p>
                        <a href="<?= base_url('home/diagnosa'); ?>" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5">Mulai Diagnosa</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="small py-vh-3 w-100 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-lg-1 border-end" data-aos="fade-up">
                        <div class="d-flex">
                            <div class="col-md-9 flex-fill">
                                <h1 class="h1 my-5 text-center">Data Penyakit Mata</h1>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($penyakit as $p) : ?>
                        <div class="col-md-3 col-lg-1 border-end" data-aos="fade-up">
                            <div class="d-flex">

                                <div class="col-md-9 flex-fill">
                                    <h3 class="h5 my-2"><?= $p['nama_penyakit']; ?></h3>
                                    <p><?= $p['informasi']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="py-vh-4 bg-gray-100 w-100 overflow-hidden" id="aboutus">
            <div class="container">

                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="row gx-5 d-flex">
                            <div class="col-md-11">
                                <div class="shadow ratio ratio-16x9 rounded bg-cover bp-center align-self-end" data-aos="fade-right" style="background-image: url(<?= base_url('template/frontEnd/'); ?>img/webp/mata2.webp);--bs-aspect-ratio: 50%;">
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end" data-aos="fade-up" style="background-image: url(<?= base_url('template/frontEnd/'); ?>img/webp/mata3.webp);">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center" data-aos="fade-left" style="background-image: url(<?= base_url('template/frontEnd/'); ?>img/webp/mata1.webp);--bs-aspect-ratio: 150%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="py-5 border-top border-dark" data-aos="fade-left">Sistem Pakar - Diagnosa Penyakit Mata</h3>
                        <p data-aos="fade-left" data-aos-delay="200">Sistem pakar adalah suatu sistem yang menggunakan pengetahuan manusia dimana pengetahuan manusia tersebut dimasukan kedalam sebuah komputer dan kemudian digunakan untuk menyelesaikan masalah-masalah yang biasanya membutuhkan kepakaran atau keahlian manusia.
                        </p>
                        <p>
                            <a href="#" class="link-fancy link-dark" data-aos="fade-left" data-aos-delay="400">Learn more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-vh-4 bg-gray-900 text-light w-100 overflow-hidden" id="contact">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-9 text-center" data-aos="fade">
                            <!--Section: Contact v.2-->
                            <section class="mb-4">

                                <!--Section heading-->
                                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                                <!--Section description-->
                                <p class="text-center w-responsive mx-auto mb-5">Apakah Anda memiliki pertanyaan? Harap jangan ragu untuk menghubungi kami secara langsung. Kami akan kembali kepada Anda dalam hitungan jam untuk membantu Anda.</p>

                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-9 mb-md-0 mb-5">
                                        <form id="contact-form" name="contact-form" action="" method="POST">

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-3">
                                                        <input type="text" id="name" name="name" class="form-control">
                                                        <label for="name" class="">Your name</label>
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-3">
                                                        <input type="text" id="email" name="email" class="form-control">
                                                        <label for="email" class="">Your email</label>
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-3">
                                                        <input type="text" id="subject" name="subject" class="form-control">
                                                        <label for="subject" class="">Subject</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-12 mb-3">

                                                    <div class="md-form">
                                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                        <label for="message">Your message</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--Grid row-->

                                        </form>

                                        <div class="text-center text-md-left">
                                            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                                        </div>
                                        <div class="status"></div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-3 text-center">
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                                <p>Yogyakarta, IND</p>
                                            </li>

                                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                                <p>+ 0822 5117 0241</p>
                                            </li>

                                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                                <p>oureye@gmail.com</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Grid column-->
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="container text-center py-3 small"> Made by <a href="<?= base_url(); ?>" class="link-fancy" target="_blank">oureye.com</a> ||| Copyright &copy OurEye <?= date('Y'); ?>
        </div>
    </footer>

    <script src="<?= base_url('template/frontEnd/'); ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('template/frontEnd/'); ?>js/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // values from 0 to 3000, with step 50ms
        });
    </script>

    <script>
        let scrollpos = window.scrollY
        const header = document.querySelector(".navbar")
        const header_height = header.offsetHeight

        const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
        const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

        window.addEventListener('scroll', function() {
            scrollpos = window.scrollY;

            if (scrollpos >= header_height) {
                add_class_on_scroll()
            } else {
                remove_class_on_scroll()
            }

            console.log(scrollpos)
        })
    </script>

</body>

</html>