<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <title>{{ $CompanyInfo->name }} | {{ $pageTitle }}</title>
        @include('admin.dependency.medicio')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased" style="font-family : Prompt">

        <!-- ======= Top Bar ======= -->
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> ในเวลาราชการ จันทร์ - ศุกร์, 8:30 ถึง 16:30 นอกเวลาราชการรับเฉพาะผู้ป่วยฉุกเฉิน
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> โทร 053-475293
            </div>
            </div>
        </div>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

            <a href="{{ $app['url']->to('/') }}" class="logo me-auto"><img src="{{url('medicio/assets/img/head_logo.png')}}" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li><a class="nav-link scrollto " href="#hero" style="font-family : Prompt">หน้าแรก</a></li>
                <li><a class="nav-link scrollto" href="#about" style="font-family : Prompt">เกี่ยวกับเรา</a></li>
                <li><a class="nav-link scrollto" href="#services" style="font-family : Prompt">บริการของเรา</a></li>
                <li><a class="nav-link scrollto" href="#departments" style="font-family : Prompt">แผนกบริการ</a></li>
                <li><a class="nav-link scrollto" href="#doctors" style="font-family : Prompt">แพทย์</a></li>
                <li class="dropdown"><a href="#" style="font-family : Prompt"><span>ระบบบริการ</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="#" style="font-family : Prompt">ระบบ BackOffice</a></li>
                    
                    <li><a href="#" style="font-family : Prompt">ระบบจัดการความเสี่ยง</a></li>
                    <li><a href="#" style="font-family : Prompt">ระบบคลาวด์ PHRO-DRIVE</a></li>
                    <li><a href="#" style="font-family : Prompt">เว็บเมล รพ.พร้าว</a></li>
                    <li class="dropdown"><a href="#" style="font-family : Prompt"><span>สำหรับ คปสอ.พร้ว</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                        <li><a href="#" style="font-family : Prompt">ระบบแผนงานโครงการ</a></li>
                        <li><a href="#" style="font-family : Prompt">ระแบบข้อมูลสุขภาพ</a></li>
                        </ul>
                    </li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact" style="font-family : Prompt">ติดต่อเรา</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ route('login') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">สำหรับ</span> เจ้าหน้าที่</a>

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{url('medicio/assets/img/slide/front_hospital.jpg')}})">
                <div class="container">
                    <h2 style="font-family : Prompt">ยินดีต้อนรับท่านเข้าสู่ <span>โรงพยาบาลพร้าว</span></h2>
                    <p>โรงพยาบาลพร้าว เป็นโรงพยาบาลประจำอำเภอพร้าว ที่มีขนาด 60 เตียง ให้บริการประชาชนในอำเภอพร้าว อำเภอพร้าวมีประชากร รวม 54,902 คน ชาย 27,386 คน หญิง 27,516 คน จำนวนครัวเรือน
15,532 หลังคาเรือน มีชาวเขา 5 เผ่า ประกอบด้วย กระเหรี่ยง ,ลีซอ ,มูเซอ ,ม้ง ,อีก้อ รวม 6,379 คน โดยมีความหนาแน่นของประชากร 41.72 คน/ตร.กม.</p>
                    <a href="#about" class="btn-get-started scrollto" style="font-family : Prompt">อ่านเพิ่มเติม</a>
                </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{url('medicio/assets/img/slide/opd.jpg')}})">
                <div class="container">
                    <h2 style="font-family : Prompt">แผนกบริการผู้ป่วยนอก</h2>
                    <p>อาคารอิสระไพโรจน์ ให้บริการผู้ป่วยนอก ห้องตรวจแพทย์ 4 ห้อง และห้องอุบัติเหตุฉุกเฉิน คลินิกผู้สูงอายุ คลินิกวาฟารีน ฯลฯ</p>
                    <a href="#about" class="btn-get-started scrollto" style="font-family : Prompt">อ่านเพิ่มเติม</a>
                </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{url('medicio/assets/img/slide/ipd.jpg')}})">
                <div class="container">
                    <h2 style="font-family : Prompt">แผนกบริการผู้ป่วยใน</h2>
                    <p>อาคารหลวงพ่อดาบส สุมโน ตึกผู้ป่วยใน 2 ชั้น ชั้นที่ 1 ให้บริการผู้ป่วยในหญิง และห้องแยกโรค ชั้นที่ 2 ให้บริการผู้ป่วยในชาย และห้องพระสงฆ์ รวมจำนวนเตียงทั้งหมด 58 เตียง</p>
                    <a href="#about" class="btn-get-started scrollto" style="font-family : Prompt">อ่านเพิ่มเติม</a>
                </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            </div>
        </section><!-- End Hero -->

                <main id="main">

            <!-- ======= Featured Services Section ======= -->
            <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title" style="font-family : Prompt"><a href="">แพทย์</a></h4>
                    <p class="description">เรามีแพทย์ 7 ท่าน พร้อมให้บริการการผู้ป่วยนอกและผู้ป่วยใน</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title" style="font-family : Prompt"><a href="">เภสัชกร</a></h4>
                    <p class="description">เรามีเภสัชกร 6 ท่าน พร้อมให้คำปรึกษาด้านยา และการแพทย์แผนไทย</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-thermometer"></i></div>
                    <h4 class="title" style="font-family : Prompt"><a href="">เทคนิคการแพทย์</a></h4>
                    <p class="description">เรามีเครื่องมือตรวจเลือด ที่ทันสมัย ให้ผลการตรวจรวดเร็ว</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title" style="font-family : Prompt"><a href="">รังสีการแพทย์</a></h4>
                    <p class="description">เรามีเครื่อง X-Ray ที่ทันสมัย พร้อมให้บริการทั้งในและนอกสถานที่</p>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Featured Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                <h3 style="font-family : Prompt">บริการการแพทย์ฉุกเฉิน EMS</h3>
                <p> โรงพยาบาลพร้าว มีบริการทางการแพทย์ฉุกเฉิน EMS รับส่งผู้ป่วยภาวะฉุกเฉิน </p>
                <a class="cta-btn scrollto" href="#appointment" style="font-family : Prompt">เหตุด่วน เหตุฉุกเฉิน โทร. 1669!!!</a>
                </div>

            </div>
            </section><!-- End Cta Section -->

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-family : Prompt">เกี่ยวกับเรา</h2>
                <p>โรงพยาบาลพร้าว ก่อตั้งขึ้นเป็นเวลา 63 ปี เมื่อวันที่ 1 กันยายน 2503 โดยเริ่มจากเป็นสถานีอนามัยชั้น 1 ในปัจจุบันเป็นโรงพยาบาลชุมชนขนาด 60 เตียง ระดับ F2</p>
                </div>

                <div class="row">
                
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3 style="font-family : Prompt">วิสัยทัศน์</h3>
                        <p class="fst-italic">
                        "เป็นโรงพยาบาลชุมชนที่ได้มาตรฐาน โดยการมีส่วนร่วมของทุกภาคส่วน เพื่อประชาชนสุขภาพดี เจ้าหน้าที่มีความสุข"
                        </p><br/>
                        <h3 style="font-family : Prompt">พันธกิจ</h3>
                        <ul>
                        <li><i class="bi bi-1-circle-fill"></i> จัดระบบการดูแลผู้ป่วยทุกกลุ่มโรคแบบบูรณาการให้มีคุณภาพและมาตรฐาน</li>
                        <li><i class="bi bi-2-circle-fill"></i> ส่งเสริมการมีส่วนร่วมของภาคีเครือข่ายสุขภาพเพื่อพัฒนาระบบบริการ</li>
                        <li><i class="bi bi-3-circle-fill"></i> จัดระบบบริหารจัดการให้ได้มาตรฐานและมีธรรมาภิบาล</li>
                        <li><i class="bi bi-4-circle-fill"></i> จัดระบบการบริหารจัดการบุคลากรให้มีประสิทธิภาพ</li>
                        <li><i class="bi bi-5-circle-fill"></i> จัดระบบโครงสร้างสิ่งแวดล้อมของโรงพยาบาลให้ได้มาตรฐานและมีความปลอดภัย</li>
                        <li><i class="bi bi-6-circle-fill"></i> ใช้เทคโนโลยีสารสนเทศในการบริหารจัดการระบบสุขภาพ</li>
                        </ul><br/>
                        <h3 style="font-family : Prompt">HUG PHRAO</h3>
                        <ul>
                        <li><i class="bi bi-check-circle"></i> Honesty Unity Generous : ซื่อสัตย์ สามัคคี มีน้ำใจ</li>
                        <li><i class="bi bi-check-circle"></i> Patient Center Approach : ยึดคนไข้เป็นศูนย์กลาง</li>
                        <li><i class="bi bi-check-circle"></i> Happy heart : สร้างความสุขแก่ผู้ให้และผู้รับบริการ</li>
                        <li><i class="bi bi-check-circle"></i> Relationship : สานสัมพันธ์ที่ดี</li>
                        <li><i class="bi bi-check-circle"></i> Active Learning : มีการเรียนรู้จากงานประจำ</li>
                        <li><i class="bi bi-check-circle"></i> Organizational Participation : ร่วมแรง ร่วมใจ ทำเพื่อประชาชน</li>
                        </ul><br/>
                        <p>
                        <h3 style="font-family : Prompt">นายแพทย์นพดล บุญเฉลย </h3>รักษาการในตำแหน่ง ผู้อำนวยการโรงพยาบาลพร้าว <br/>คำกล่าวผู้อำนวยการ <span class="fst-italic">"ขอให้บริการประชาชน ดุจบิดร มารดา คนในครอบครัว"</span>
                        </p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{url('medicio/assets/img/01.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
            </section><!-- End About Us Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="fas fa-user-md"></i>
                    <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>

                    <p style="font-family : Prompt"><strong>แพทย์</strong> เวชศาสตร์ครอบครัว, ฝั่งเข็ม, และอายุรกรรม</p>
                    <a href="#" style="font-family : Prompt">รายละเอียด &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="far fa-hospital"></i>
                    <span data-purecounter-start="0" data-purecounter-end="174" data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-family : Prompt"><strong>เจ้าหน้าที่</strong> สหสาขาวิชาชีพ, และเจ้าหน้าที่อื่นๆ</p>
                    <a href="#" style="font-family : Prompt">รายละเอียด &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="fas fa-flask"></i>
                    <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-family : Prompt"><strong>บริจารตรวจ LAB</strong> ตรวจบันทึกผลด้วยระบบอัตโนมัติ LIS</p>
                    <a href="#" style="font-family : Prompt">รายละเอียด &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="fas fa-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-family : Prompt"><strong>รางวัลมาตรฐาน</strong> ผ่านมาตรฐาน HA, Green Hospital</p>
                    <a href="#" style="font-family : Prompt">รายละเอียด &raquo;</a>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Counts Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <div class="icon-box mt-5 mt-lg-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Paperless</h4>
                    <p>สำนักงานไร้กระดาษ</p>
                    </div>
                    <div class="icon-box mt-5">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Online Service</h4>
                    <p>บริการจองคิวออนไลน์</p>
                    </div>
                    <div class="icon-box mt-5">
                    <i class="bx bx-images"></i>
                    <h4>X-Ray Digital</h4>
                    <p>บริการรังสีการแพทย์ด้วยภาพดิจิทัล</p>
                    </div>
                    <div class="icon-box mt-5">
                    <i class="bx bx-shield"></i>
                    <h4>Cyber Security</h4>
                    <p>ระบบป้องกันความปลอดภัยของข้อมูลผู้ป่วย</p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url({{url("medicio/assets/img/features.jpg")}});' data-aos="zoom-in"></div>
                </div>

            </div>
            </section><!-- End Features Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-family : Prompt">การให้บริการตรวจรักษา</h2>
                <p>การให้บริการในโรงพยาบาล เรามีคลินิกบริการผู้ป่วยนอกมากมาย โดยมีบริการดังนี้</p>
                </div>

                <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title"><a href="">บริการตรวจรักษาโรคทั่วไป</a></h4>
                    <p class="description">บริการตรวจรักษาโรคทั่วไปในเวลาราชการ ตั้งแต่เวลา 08:00น. - 16:00น.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title"><a href="">บริการด้านปฐมภูมิและองค์รวม</a></h4>
                    <p class="description">บริการคลินิกประจำวัน สามารถตรวจสอบวันให้บริการได้ตามตารางให้บริการคลินิก</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4 class="title"><a href="">ห้องอุบัติเหตุและฉุกเฉิน</a></h4>
                    <p class="description">เปิดบริการตลอด 24 ชั่วโมง สายด่วนฉุกเฉิน 1669</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title"><a href="">บริการคลินิกทันตกรรม</a></h4>
                    <p class="description">บริการคลินิกทันตกรรมในเวลาราชการ ตั้งแต่เวลา 08:00น. - 16:00น.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                    <h4 class="title"><a href="">บริการแพทย์แผนไทย และกายภาพบำบัด</a></h4>
                    <p class="description">บริการแพทย์แผนไทย และกายภาพบำบัดในเวลาราชการ ตั้งแต่เวลา 08:00น. - 16:00น.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4 class="title"><a href="">หน่วยบริการฉีดวัคซีน</a></h4>
                    <p class="description">หน่วยบริการฉีดวัคซีน สามารถตรวจสอบวันให้บริการได้ตามตารางการฉีดวัคซีน</p>
                </div>
                </div>

            </div>
            </section><!-- End Services Section -->

            <!-- ======= Departments Section ======= -->
            <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-family : Prompt">แผนกบริการ</h2>
                <p>โรงพยาบาลพร้าว เรามีแผนกบริการสุขภาพที่สำคัญและครอบคลุมบริการทั้งผู้ป่วยนอก ผู้ป่วยใน รักษาโรคในช่องปาก ฟื้นฟูร่างกาย และการแพทย์ทางเลือก</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4 style="font-family : Prompt">แผนกบริการผู้ป่วยนอกและใน</h4>
                        <p>แยกตึกบริการผู้ป่วยนอก และผู้ป่วยใน พร้อมให้บริการฉุกเฉิน 24 ชั่วโมง</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4 style="font-family : Prompt">แผนกทันตกรรม</h4>
                        <p>บริการตรวจรักษาโรคในช่องปาก อุด ถอน และฟันเทียม</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4 style="font-family : Prompt">แผนกกายภาพบำบัด</h4>
                        <p>ฟื้นฟูร่างกาย ด้วยอุปกรณ์กายภาพบำบัดที่ทันสมัย</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <h4 style="font-family : Prompt">แผนกแพทย์แผนไทย</h4>
                        <p>บริการนวดแผนไทย ฝังเข็ม และทับหม้อเหลือหญิงหลังคลอด</p>
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <h3 style="font-family : Prompt">แผนกบริการผู้ป่วยนอกและใน</h3>
                        <p class="fst-italic">บริการแผนกผู้ป่วยนอกในเวลาราชการ 8.30 น. - 16.30 น. ผู้ป่วยอุบัติเหตุและฉุกเฉิน 24 ชั่วโมง และบริการผู้ป่วยในแยกตึกนอน ชาย/หญิง หลังคลอด</p>
                        <img src="{{url('medicio/assets/img/departments-1.jpg')}}" alt="" class="img-fluid">
                        <p>เรามีบริการแพทย์ออกตรวจผู้ป่วยนอก 8.30 น. เป็นต้นไป แพทย์เวรในห้องฉุกเฉิน แพทย์ประจำคลินิก ความดันโลหิตสูง เบาหวาน วาฟารีน บริการตรวจเลือดและ X-Ray ด้วยเครื่องมือที่ทันสมัย อีกทั้งยังใช้ระบบส่งต่อผู้ป่วยระหว่างโรงพยาบาล ด้วยรถพยาบาบที่มีเครื่องทางการแพทย์ครบครัน </p>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <h3 style="font-family : Prompt">แผนกทันตกรรม</h3>
                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                        <img src="{{url('medicio/assets/img/departments-2.jpg')}}" alt="" class="img-fluid">
                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <h3 style="font-family : Prompt">แผนกกายภาพบำบัด</h3>
                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                        <img src="{{url('medicio/assets/img/departments-3.jpg')}}" alt="" class="img-fluid">
                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <h3 style="font-family : Prompt">แผนกแพทย์แผนไทย</h3>
                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                        <img src="{{url('medicio/assets/img/departments-4.jpg')}}" alt="" class="img-fluid">
                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </section><!-- End Departments Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-family : Prompt">คำชมจากผู้รับบริการ</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{url('medicio/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{url('medicio/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{url('medicio/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{url('medicio/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{url('medicio/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
                </div>

            </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Doctors Section ======= -->
            <section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-family : Prompt">แพทย์</h2>
                <p>โรงพยาบาลพร้าว มีแพทย์ประจำโรงพยาบาล 7 ท่าน เรามีแพทย์เวชศาตร์ครอบครับ ฝังเข็ม และอายุรแพทย์</p>
                </div>

                <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{url('medicio/assets/img/doctors/01.png')}}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 style="font-family : Prompt">นายแพทย์นพดล  บุญเฉลย</h4>
                        <span>เวชศาสตร์ครอบครัว และฝังเข็ม</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="{{url('medicio/assets/img/doctors/doctors-1.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 style="font-family : Prompt">นายแพทย์ปริญญา  พลเสน</h4>
                        <span>เวชศาสตร์ครอบครัว</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="{{url('medicio/assets/img/doctors/doctors-3.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 style="font-family : Prompt">นายแพทย์วริศ  ประพุทธ์พิทยา</h4>
                        <span>อายุรแพทย์</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="{{url('medicio/assets/img/doctors/doctors-4.jpg')}}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>แพทย์หญิงวิสาขลัคน์  ทับทิม</h4>
                        <span>อายุรแพทย์</span>
                    </div>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Doctors Section -->

            <!-- ======= Gallery Section ======= -->
            <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-family : Prompt">รอบรั้วโรงพยาบาล</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-1.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-1.jpg')}}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-2.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-2.jpg')}}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-3.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-3.jpg')}}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-4.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-4.jpg')}}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-5.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-5.jpg')}}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-6.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-6.jpg')}}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-7.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-7.jpg')}}" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="{{url('medicio/assets/img/gallery/gallery-8.jpg')}}"><img src="{{url('medicio/assets/img/gallery/gallery-8.jpg')}}" class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
                </div>

            </div>
            </section><!-- End Gallery Section -->

            <!-- ======= Frequently Asked Questioins Section ======= -->
            <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-family : Prompt">คำถามที่ถามบ่อย</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                    </div>
                </li>

                </ul>

            </div>
            </section><!-- End Frequently Asked Questioins Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                <h2 style="font-family : Prompt">ติดต่อเรา</h2>
                <p>โรงพยาบาลพร้าว ตั้งอยู่ถนนรอบเวียง ทิศตะวันตก ติดกับโรงเรียนเรียนแจ่งกู่เรือง และสำนักงานสาธารณสุขอำเภอพร้าว</p>
                </div>

            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.039619687159!2d99.19755867503505!3d19.367437081898025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d75530904af679%3A0x45d196fca20afa13!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4Lie4Lij4LmJ4Liy4Lin!5e0!3m2!1sth!2sth!4v1701689150635!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                <div class="col-lg-6">

                    <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3 style="font-family : Prompt">ที่อยู่</h3>
                        <p>181 หมู่ 4 ต.เวียง อ.พร้าว จ.เชียงใหม่ 50190</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3 style="font-family : Prompt">อีเมล</h3>
                        <p>saraban@phraohospital.go.th<br>contact@phraohospital.go.th</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3 style="font-family : Prompt">หมายเลขโทรศัพท์</h3>
                        <p>โทรศัพท์ 053-475293<br>โทรสาร 053-474773</p>
                        </div>
                    </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อ-สกุล" required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="อีเมล" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="หัวข้อ" required="">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="6" placeholder="ข้อความเนื้อหา" required=""></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">ส่งข้อความถึงเรา</button></div>
                    </form>
                </div>

                </div>

            </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        {{-- ============= Footer Copyright ============= --}}
        @include('admin.includes.medicio_footer')

        {{-- ============= <script></script> tag below code ============= --}}
        @include('admin.includes.medicio_script')
    </body>
</html>
