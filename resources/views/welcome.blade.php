<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MDU 22-23</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    </head>
    <body>

    <div id="top" class="bg-dark py-2">
        <ul class="nav justify-content-center">
            <li class="nav-item text-white-50 mx-4">
                <ion-icon name="navigate"></ion-icon>
                923 12th Ave S, STE 103, Onalaska, WI 54650
            </li>
            <li class="nav-item text-white-50 mx-4">
                <ion-icon name="call"></ion-icon>
                608.779.4642
            </li>
            <li class="nav-item text-white-50 mx-4">
                <ion-icon name="mail"></ion-icon>
                mistysdance@gmail.com
            </li>
        </ul>
    </div>



    <div class="d-lg-none d-flex justify-content-center pt-3 bg-white">
        <a class="navbar-brand" href="/"><img src="/images/mdu-logo.png" alt="" style="max-width: 257px;"></a>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="d-none d-lg-block nav-item mx-2">
                        <a class="nav-link" href="#">
                            <img src="/images/mdu-logo.png" alt="" style="max-width: 257px;">
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">SUMMER</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">SCHEDULE</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">REGISTER</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">BOUTIQUE</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">ALUMNI</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="" class="nav-link">
                            <div class="btn btn-danger shadow">Find Your Class</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="position: relative;" class="d-none d-md-block">
        <h2 id="great-txt">
            You <span class="text-red">belong</span> here <ion-icon name="heart"></ion-icon>
            <br>
            <span style="font-size: 0.5em; font-weight: normal;">Your child will fall in love with dance with our classes for ages 2-18!</span>
        </h2>
{{--        <h2 id="great-txt-mobile" class="d-block d-md-none">--}}
{{--            you <span class="text-red">belong</span> here <ion-icon name="heart"></ion-icon>--}}
{{--            <br>--}}
{{--            <span style="font-size: 0.5em; font-weight: normal;">Your child will fall in love with dance with our classes for ages 2-18!</span>--}}
{{--        </h2>--}}
        <div style="position:absolute; bottom: 22%; left: 50%; transform: translate(-50%, -50%);">
            <a href=""><div class="shadow btn btn-lg btn-danger">Find Your Class</div></a>
        </div>
        <img src="/images/dance-makes-great-kids-crop.jpg" alt="" class="img-fluid" style="z-index: 0;">
    </div>

    <div class="d-block d-md-none">
        <div class="container">
            <p class="text-center" style="font-size: 1.5em;">
                <strong>You <span class="text-red">belong</span> here <ion-icon name="heart"></ion-icon></strong>
                <br>
                <small>Your child will fall in love with dance with our classes for ages 2-18!</small>
            </p>
        </div>
        <img src="/images/dance-makes-great-kids-crop.jpg" alt="" class="img-fluid" style="z-index: 0;">
    </div>

    <div class="bg-red py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex justify-content-center">
                    <div class="text-center text-white">
                        <div class="fw-bold" style="font-size: 1.5em;">FREE TRIAL CLASS</div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nihil quisquam voluptatum.</div>
                    </div>
                </div>
                <div class="col-sm d-flex justify-content-center align-items-center">
                    <form action="">
                        <div class="row g-0 align-items-center">
                            <div class="col-auto mx-0">
                                <input type="email" id="inputEmail" class="form-control mx-0" placeholder="Email">
                            </div>
                            <div class="col-auto mx-0">
                                <button type="submit" id="buttonSubmit" class="btn btn-flip-danger fw-bold shadow mx-0">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-5">
        <div class="container my-5">
            <h2 style="font-size: 2.75em;" class="fw-bold">Dance makes GREAT kids!</h2>
            <p style="font-size: 1.75em;">
                From your child’s first class to their graduation performance, your child with thrive! At MDU dance classes are More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
            </p>
        </div>
    </div>

    <div class="bg-blue py-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-sm text-center mt-5">
                    <img class="review-img shadow mb-2" src="/images/review-andrea-linder.png" alt="">
                    <div class="fw-bold">Andrea Linder</div>
                    <div>
                        Misty's Dance has been an amazing place for my daughter to not only make friends but to find confidence in herself. They value all who walk through there doors and always greet you with a smile. I couldn't ask for a better place for my little girl to grow and learn through dance. Misty's Dance is definitely More Than Just Great Dancing! ❤
                    </div>
                </div>
                <div class="col-sm text-center mt-5">
                    <img class="review-img shadow mb-2" src="/images/review-kari-robinson.png" alt="">
                    <div class="fw-bold">Kari Robinson</div>
                    <div>
                        My daughter and I LOVE Misty's Dance and all the personnel and instructors there.  We have always felt more than welcome walking in the door.  Everyone has a smile on their face.   They are professional, organized and great role models for our youth.  Plus they are doing all they can to keep a safe & clean environment amidst COVID-19!!
                    </div>
                </div>
                <div class="col-sm text-center mt-5">
                    <img class="review-img shadow mb-2" src="/images/review-sarah-fecht.png" alt="">
                    <div class="fw-bold">Sarah Fecht</div>
                    <div>
                        Some companies create catchy tag lines because they sound good, rhyme well, or are memorable.  MDU's - more than just great dance tag line speaks to the core of who they are.  This studio's focus is on building character, creating confidence, and improving the mental & physical strength in the lives that they touch.  I'm so thankful we found this studio and that my children are gaining life skills that will propel them into a successful adulthood.
                    </div>
                </div>
                <div class="col-sm text-center mt-5">
                    <img class="review-img shadow mb-2" src="/images/review-jean-arends.png" alt="">
                    <div class="fw-bold">Jean Arends</div>
                    <div>
                        When I switched my girls over to Misty's Dance three years ago it meant driving an 1 hr one way for each day they danced. At the time that was two days a week. Last year two on my boys also asked to begin dancing and they loved it as well. The girls cannot see themselves not participating in dance each year. Even when the classrooms were closed the speed with which the studio was able to adapt and offer Virtual Classes was amazing! Thank you Misty I have 2 girls who have no interest in dancing anywhere else!
                    </div>
                </div>
                <div class="col-sm text-center mt-5">
                    <img class="review-img shadow mb-2" src="/images/review-elizabeth-bruns.png" alt="">
                    <div class="fw-bold">Elizabeth Bruns</div>
                    <div>
                        We couldn't be more pleased with the quality of instruction at Misty's Dance Unlimited. Our girls have grown so much in their dance knowledge and skill. They look so forward to class and learning from quality instructors who have wonderful, caring personalities. Misty is a role model to all the students and staff with her dancing talent, public speaking, and delightful personality. We are so thankful to have this classy studio in the area.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 my-5">
        <h2 style="font-size: 2.75em;" class="fw-bold text-center">Parents <ion-icon name="heart"></ion-icon> Misty's...</h2>
        <div class="row" style="font-size: 1.5em;">
            <div class="col-sm d-flex justify-content-center">
                <p>
                    <ion-icon name="heart-outline"></ion-icon> Sprung Floors
                    <br><ion-icon name="heart-outline"></ion-icon> Secured Facility
                    <br><ion-icon name="heart-outline"></ion-icon> Study Areas
                </p>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <p>
                    <ion-icon name="heart-outline"></ion-icon> Written Curriculum
                    <br><ion-icon name="heart-outline"></ion-icon> Background Checked
                    <br><ion-icon name="heart-outline"></ion-icon> CPR Trained
                </p>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <p>
                    <ion-icon name="heart-outline"></ion-icon> Full-Time Admin
                    <br><ion-icon name="heart-outline"></ion-icon> YPAD Certified
                    <br><ion-icon name="heart-outline"></ion-icon> Community Service
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="btn btn-lg btn-danger shadow">Learn More</div>
        </div>
    </div>

    <div class="bg-red text-white py-5">
        <div class="container my-5">
{{--            <h2 class="fw-bold text-center" style="font-size: 2.75em;">By the numbers...</h2>--}}
            <div class="row" style="font-size: 1.5em;">
                <div class="col-sm text-center d-flex align-items-center justify-content-center"><p class="py-5">25 years of instruction</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-left: 1px solid white;"><p class="py-5">100+ classes per week</p></div>
                <div class="d-md-none"><hr></div>
                <div class="col-sm text-center d-flex align-items-center justify-content-center" style="border-left: 1px solid white;"><p class="py-5">21,000+ sq. ft. facility</p></div>
            </div>
        </div>
    </div>

    <div class="container py-5 my-5">
        <h2 class="fw-bold text-center" style="font-size: 2.75em;">If you let me dance...</h2>
        <div class="d-flex justify-content-center">
            <video poster="/images/if-you-let-me-dance-poster.png" src="/images/if-you-let-me-dance.mp4" type="video/mp4" controls="" class="shadow rounded" style="max-width: 950px; width: 100%; height: auto;"></video>
        </div>
    </div>

    <div class="bg-red py-5">
        <div class="container my-5">
            <h2 class="fw-bold text-center text-white" style="font-size: 2.75em;">Our classes</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
{{--                <div class="col-sm mt-4" style="position: relative;">--}}
{{--                    <img src="/images/class-little.jpg" alt="little medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">--}}
{{--                    <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 1-4</div>--}}
{{--                </div>--}}
                <div class="col-sm mt-4" style="position: relative;">
                    <div class="d-flex justify-content-center">
                        <img src="/images/class-little-medium.jpg" alt="little medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">
                        <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 1-4</div>
                    </div>
                </div>
                <div class="col-sm mt-4" style="position: relative;">
                    <div class="d-flex justify-content-center">
                        <img src="/images/class-medium.jpeg" alt="medium dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">
                        <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 5-8</div>
                    </div>
                </div>
                <div class="col-sm mt-4" style="position: relative;">
                    <div class="d-flex justify-content-center">
                        <img src="/images/class-medium-big.jpg" alt="medium big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">
                        <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">Ages 9+</div>
                    </div>
                </div>
                <div class="col-sm mt-4" style="position: relative;">
                    <div class="d-flex justify-content-center">
                        <img src="/images/class-big.jpg" alt="big dancer" class="img-fluid shadow rounded" style="height: 428px; width: auto; object-fit: cover; object-position: center;">
                        <div class="btn btn-lg btn-flip-danger text-white shadow" style="position: absolute; bottom: 7.5%; left: 50%; transform: translateX(-50%); width: 75%;">More Programs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="d-flex justify-content-center mb-0">
                            <img src="/images/darbys-dancers-logo.jpeg" alt="darbys dancers logo" class="img-fluid">
                        </div>
                        <h2 class="text-center mt-0 mb-3">Featured Program</h2>
                        <p class="mb-5">
                            Misty’s Dance Unlimited (MDU) is proud to offer through a chapter of the national non-profit organization <strong>Darby’s Dancers</strong>! Darby's Dancers is an opportunity for children with special needs to participate in the performing arts through dance education.
                            <br><br>
                            Dancers in the program gain confidence, coordination, strength and lifelong friends, all while feeling like a star.  Our youth volunteers learn important lessons in responsibility and friendship by providing one-on-one assistance their dancer.
                            <br><br>
                            The charitable contributions of youth volunteers, dance instructors, and MDU provide dance classes, supplies and costumes to dancers with special needs at no cost to their parents.
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="/images/darbys-1.jpg" alt="darbys dancer on stage" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue py-5">
        <div class="container my-5">
            <div class="text-center text-white" style="font-size: 1.5em;">
                We have been extremely pleased with the level of instruction & care shown at Misty's Dance Unlimited.  My daughter has been dancing at MDU for 6 years.  She started in the Kiddance/KidTap program & is now in the Pre-Professional ballet program.  The staff care just as much about the kids as people, as dancers.
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <img class="review-img shadow mt-2" src="/images/review-sandy-helfrich.png" alt="">
                <div class="fw-bold mx-3">Sandy Helfrich</div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: auto; height: 250px; filter: invert(1);">
                    </div>
                    <h2 class="text-center">MDU is a Safer Studio™</h2>
                    <p>
                        MDU focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="width: auto; height: 250px;">
                    </div>
                    <h2 class="text-center">MDU is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container my-5 py-5">
            <h2 class="text-center">See what dance can do for your child!</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 py-4">
                <div class="col-sm">
                    <div class="next-step mx-1 shadow py-5">
                        <p class="txt-green">Ready To Leap In?</p>
                        <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank"
                           class="">
                            <div class="shadow btn btn-lg btn-green btn-family">&#10097; Enroll today!</div>
                        </a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="next-step mx-1 shadow py-5">
                        <p class="txt-blue">Want To Give It A Try?</p>
                        <div>
                            <button type="button" class="shadow btn btn-lg btn-blue btn-family"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="next-step mx-1 shadow py-5">
                        <p class="txt-pink">Still Have Questions?</p>
                        <a href="#footer" class="">
                            <div class="shadow btn btn-lg btn-pink btn-family">&#10097; Contact Us!</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue py-5">
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-6">
                <div class="col d-flex align-items-center justify-content-center text-center px-2" id="main-review-stars">
                    <div>
                        <p style="font-size: 1.5em;" class="fw-bold mb-0">OUTSTANDING 4.9/5</p>
                        <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        <p style="color: lightgray;"><small>based on <strong>54</strong> reviews</small></p>
                    </div>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>They teach dance, but stress the importance of being a kind, hard working individual.</strong></small></p>
                    <p class="mb-0"><small>They care about each student as a person, not just a dancer.</small></p>
                    <div style="width: 30px; height: 1px; background: lightgray;" class="my-1"></div>
                    <p style="color:lightgray;"><small>Heather Storbeck</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>We love that this studio values character and modesty, along with excellence in dance.</strong></small></p>
                    <p class="mb-0"><small>The teachers have encouraged and nurtured our girls in their love of dance.</small></p>
                    <div style="width: 30px; height: 1px; background: lightgray;" class="my-1"></div>
                    <p style="color:lightgray;"><small>Shari Peterson</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>My daughter loves the relationships she has built with other kids her age.</strong></small></p>
                    <p class="mb-0"><small>She looks forward to dance each night and had become a stronger more confident dancer</small></p>
                    <div style="width: 30px; height: 1px; background: lightgray;" class="my-1"></div>
                    <p style="color:lightgray;"><small>Natasha Remis</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>Very clean and nice dance studio.</strong></small></p>
                    <p class="mb-0"><small>Our granddaughter is 22 months old and we got to watch her dance so it was awesome!</small></p>
                    <div style="width: 30px; height: 1px; background: lightgray;" class="my-1"></div>
                    <p style="color:lightgray;"><small>Randy Schroeder</small></p>
                </div>
                <div class="col px-2" id="review-stars">
                    <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                    <p class="mb-0"><small><strong>Our young woman is nurtured and challenged as a dancer, a student, a leader and a friend</strong></small></p>
                    <p class="mb-0"><small>A place in addition to their home and school that children are safe, cared for, and are able to grow</small></p>
                    <div style="width: 30px; height: 1px; background: lightgray;" class="my-1"></div>
                    <p style="color:lightgray;"><small>Janet Holter</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 py-5" id="brand">
        <h2 class="text-center fw-bold" style="font-size: 2.75em;">Proudly partnering with these outstanding organizations</h2>
        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-3">
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/partner1.jpeg" alt="logo"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/partner4.png" alt="logo"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/partner2.png" alt="logo"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/partner3.png" alt="logo"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/logo-a-chance-to-dance.png" alt="logo"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/logo-coulee-parenting.jpg" alt="logo"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/logo-weber-center.png" alt="logo" style="filter: invert(100%);"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/partner9.png" alt="logo"></div></div>
            <div class="col p-0 d-flex align-items-center justify-content-center"><div><img src="/images/logo-willow-and-grace.png" alt="logo"></div></div>
        </div>
    </div>

    <div class="my-5">
        <div class="d-flex justify-content-center">
            <a href="">
                <div class="btn btn-lg btn-danger shadow">Find Your Class</div>
            </a>
        </div>
    </div>

    <div class="bg-dark text-white pb-5">
        <div class="container" id="footer">
            <div class="pt-5">
                <div class="row m-0 p-0">
                    <div class="col-sm-4 mt-3">
                        <p class="lead">CONTACT</p>
                        <ul class="list-group" id="footer-list">
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="navigate"></ion-icon>
                                923 12th Ave S, STE 103, Onalaska, WI 54650
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="call"></ion-icon>
                                608.779.4642
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="mail"></ion-icon>
                                mistysdance@gmail.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 mt-3">
                        <p class="lead">SOCIAL</p>
                        <div class="d-flex d-inline">
                            <div class="d-inline">
                                <a class="nav-link text-white p-0" href="https://www.facebook.com/mistysdance/" target="_blank">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-3" href="https://www.instagram.com/mistysdance/" target="_blank">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <p class="lead">MORE LINKS</p>
                        <div class="row">
                            <div class="col-sm">
                                <ul class="list-group" id="footer-list">
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSdWfWLOlYApj7IwSztFfUXLcR0qFVOJYg8YAFOu5gqbUAkQqg/viewform" target="_blank">Absence Reporting</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/events">Calendar of Events</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/pl">Private Lessons</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="list-group" id="footer-list">
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="https://forms.gle/trR2amJYHtqGYLAc9" target="_blank">Student Lockers</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSfzEyUJ7xwdSlv_IMNtLznZo1Lwk5jH0yfAKQZ32jGRpuWdCw/viewform?c=0&w=1" target="_blank">Performance Request</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/studio">Studio</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/employment">Employment</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="list-group" id="footer-list">
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/promotions">Promos</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/posts">Blog</a>
                                    </li>
{{--                                    @guest--}}
{{--                                        <li class="list-group-item px-0 border-0">--}}
{{--                                            <a class="text-decoration-none txt-blue" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                        </li>--}}
{{--                                    @else--}}
{{--                                        <li class="list-group-item px-0 border-0 dropdown">--}}
{{--                                            <a class="text-decoration-none txt-blue" href="{{ route('logout') }}"--}}
{{--                                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                                {{ __('Logout') }}--}}
{{--                                            </a>--}}
{{--                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                                @csrf--}}
{{--                                            </form>--}}
{{--                                        </li>--}}
{{--                                    @endguest--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom" class="bg-dark text-white-50 text-center pt-3">
        © 2022 Misty's Dance Unlimited
    </div>
    <p id="credit" class="bg-dark text-center pb-3 m-0">
        <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
    </p>
    <div id="bottom"></div>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
