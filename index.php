<?php
$req_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path_alias = ['about', 'faq', 'tellus', 'tellus-thanks', 'testimonies'];
for ($i = 0; $i < count($path_alias); $i++) if ($req_path == "/$path_alias[$i]") {
    header("Location: /$path_alias[$i].php");
    die();
}
include('components/testimonies-items.php');
include('components/journey-items.php');
?>

<!DOCTYPE html>
<html lang="en" style="overflow-y: hidden;">

<head>
    <?php
    $USE_BOOTSTRAP = true;
    require('components/head.php');
    ?>

    <link rel="stylesheet" href="assets/css/testimonies.css">
    <link rel="stylesheet" href="assets/css/ourjourney.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script>
      let activeProfile;

      function testimoniesImgClick(name) {
        if (name === activeProfile) {
          return;
        }
        const newImage = document.getElementById(name + "Photo");
		const newProfile = document.getElementById(name + "Profile");
        newImage.classList.add("profselector__img--active");
		newProfile.classList.remove("profdesc--hidden");
		
		const oldImage = document.getElementById(activeProfile + "Photo");
        const oldProfile = document.getElementById(activeProfile + "Profile");
		activeProfile = name;
		if(!oldImage || !oldProfile){
			return
		}
		oldImage.classList.remove("profselector__img--active");
        oldProfile.classList.add("profdesc--hidden");
      }
    </script>
</head>

<body>
    <div id="Preloader">
        <object data="assets/animations/LogoAnimationHIMTI.svg" class="Line"></object>
        <object data="assets/animations/LogoFillHIMTI.svg" class="Line"></object>
    </div>
    <?php $NAVBAR_SET_IMMERSIVE = true;
    require_once('components/navbar.php'); ?>
    <div id="carouselExampleIndicators" class="carousel slide carouselmain" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            // if ($CarouselData != null || count($CarouselData) != 0) {
                // $Number = 0;
                // foreach ($CarouselData as $row) {
                    // if ($Number == 0) {
                        // echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                // aria-current="true" aria-label="Slide 1"></button>';
                        // $Number += 1;
                    // } else {
                        // echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $Number . '"
                // aria-label="Slide ' . $Number + 1 . '"></button>';
                        // $Number += 1;
                    // }
                // }
            // } else {
                // echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
            // }
            ?>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <object data="assets/animations/OFOGAnimation.svg" type=""
                    style="background-color: black; border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;"></object>
            </div>
            <?php
            // in the db carousel is empty
            // $Number = 0;
            // if ($CarouselData != null || count($CarouselData) != 0) {
                // foreach ($CarouselData as $row) {
                    // if ($Number == 0) {
                        // echo '<div class="carousel-item active"><img class="d-block w-100 himti-header-img" src="' . $row['ImageLink'] . '" alt="' . $row['ImageName'] . '"></div>';
                        // $Number += 1;
                    // } else {
                        // echo '<div class="carousel-item"><img class="d-block w-100 himti-header-img" src="' . $row['ImageLink'] . '" alt="' . $row['ImageName'] . '"></div>';
                        // $Number += 1;
                    // }
                // }
            // } else {
                echo '';
            // }
            ?>

        </div>
        <?php
        // if ($CarouselData != null && count($CarouselData) > 1) {
            // echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            // data-bs-slide="prev">
            // <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            // <span class="visually-hidden">Previous</span>
        // </button>
        // <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            // data-bs-slide="next">
            // <span class="carousel-control-next-icon" aria-hidden="true"></span>
            // <span class="visually-hidden">Next</span>
        // </button>';
        // }
        ?>
    </div>

<div class="container mx-auto my-10 text-center himti-calendar">
    <h2 class="text-4xl font-bold mb-8 himti-title">Kalender Agustus 2025</h2>
    
    <!-- Gambar Kalender -->
    <div class="calendar-wrapper mb-8">
        <img src="assets/img/Kalender/kalender-agustus-2025.png"
             alt="Kalender Agustus 2025"
             class="w-[400px] max-w-full calendar-img" />
    </div>

    <!-- Tanggal Penting -->
    <div class="max-w-xs mx-auto p-2 rounded-lg important-dates-card text-left">
        <h3 class="card-title text-lg">
            <span class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </span>
            Tanggal Penting
        </h3>
        
        <div class="date-item">
            <span class="date-strong">17 Agustus:</span>
            <span>Hari Kemerdekaan RI ke-80</span>
        </div>
    </div>
</div>

      
    <div class="upcomingevent container">
        <div class="title">
            <span>Upcoming Events</span>
        </div>
        <div class="upcomingeventdata">
            <a href="https://techno.himtibinus.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 80%; display: flex; align-items: center;">
                        <!-- <img src="https://techno.himtibinus.or.id/asset/Logo%20TECHNO%202023.png" alt="" class="logo"> -->
                        <h2>Coming Soon!</h2>
                    </div>

                    <div class="upcomingeventitem shadow">
                        <!-- <p>Coming soon!</p> -->
                        <!-- <p data-countdown-enabled="true" data-countdown-timestamp="2023-09-10 13:00:00"></p> -->
                        <!-- <p>?? ?? 2024</p> -->
                    </div>
                </div>
            </a>
            <a href="https://hishot.himtibinus.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 75%; display: flex;">
                        <img sytle="height: 60%;" src="assets/img/events/HISHOT2024.png" alt="" class="logo">
                    </div>

                    <div class="upcomingeventitem shadow">
                        <p>HISHOT 2024: PROTECT</p>
                        <p data-countdown-enabled="true" data-countdown-timestamp="2023-07-29 13:00:00"></p>
                        <p>27 July 2024</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="mx-auto" style="max-width: 1536px">
      <h1 class="title">
        <span>TESTIMONIES</span>
      </h1>
      <br />
      <div class="d-flex container profwrapper shadow-lg">
        <div
          class="d-flex align-items-center profselector"
        >
		<?php
		$first = true;
		if($testimonies != NULL && count($testimonies) > 0){
			foreach ($testimonies as $testimony) {
				echo '
          		<img
            		id="', $testimony["id"], 'Photo"
            		onclick="testimoniesImgClick(\'', $testimony["id"], '\')"
            		class="profselector__img rounded-circle profselector__img', $first ? " profselector__img--active " : "",'"
            		src="assets/img/testimonies-thumbnail/', $testimony["id"], 'Photo.webp"
				/>';
				$first = false;
			}
		}
		?>
        </div>
	  	<?php
		if($testimonies != NULL && count($testimonies) > 0){
			// Active profile = pertama, kecuali kalo ada request.
			$first = true;
			$valid_ids = array(); //Validation biar ga ada XSS.
			foreach ($testimonies as $testimony) {
				echo '<div id="', $testimony["id"], 'Profile" class="profdesc shadow-lg', $first ? '' : ' profdesc--hidden', '">';
					echo '<div class="profdesc__summary">';
						echo '
						<img class="profdesc__sumimg" src="assets/img/testimonies-thumbnail/', $testimony["id"], 'Photo.webp"/> <br> <br>
						<h2 class="profdesc__name fw-bold">', $testimony["name"] ,'</h2>
						<h3 class="profdesc__job fs-6 fw-normal mb-4">', $testimony["job"], '</h3>
						<div class="profdesc__years"> Kepengurusan HIMTI: ', $testimony["active_years"], '</div>';
                        echo '<ul class="profdesc__experiences">';
                        foreach ($testimony['experiences'] as $experience){
                            echo '<li><b> ', $experience['experience'], '</b> (', $experience['year'] , ') </li>';
                        }
                        echo '</ul>';
					echo '</div>';
					echo '<div class="profdesc__story mt-4">', $testimony["testimony"],'</div>';
				echo'</div>';
				array_push($valid_ids, $testimony["id"]);
				if($first){
					echo '<script type="text/javascript">activeProfile="',$testimony["id"],'"</script>';
				}
				$first = false;
			}
			if(array_key_exists("profile", $_GET) && in_array($_GET["profile"], $valid_ids)){
				echo '<script type="text/javascript">testimoniesImgClick("',$_GET["profile"],'")</script>';
			}
		}
		?>
      </div>
    </div>
    
    <div class="ourarticle">
        <div class="title">
            <span>Our Articles</span>
        </div>
        <div class="container">
            <div class="row" id="RSSarticle">

            </div>

        </div>
        <div class="articledata d-flex" style="overflow-x: auto;">

        </div>

        <div class="viewtestimoni mt-3"><a href="https://student-activity.binus.ac.id/himti"
                class="btn btn-light btn-lg text-dark">View All Articles</a></div>
    </div>


    <div class="OURJOURNEY">
        <div class="title white">
            <span>Our Journey</span>
        </div>
        <div id="journeylist-container">
            <div id="journeylist-content">
                <?php 
                foreach($journeys as $journey){
                    echo '<div class="event">';
                    if ($journey["imgurl"] != NULL) :
                        // echo '<img id="journeylist-img" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '"/>';
                        // echo '<div id="data-year-img"' . base64_encode($journey['year']);
                    endif;
                    echo '<div id="data-year">
                        '. ($journey["year"]) . '
                    </div>';
                    echo '<div id="journey1-modal">
                    '. ($journey["journey"]) .'
                    </div></div>';
                }
                
                ?>
            </div>

        </div>
    </div>

    <div class="pattern">
        <object data="assets/img/Transition.svg" alt="pattern-contact" class="objectdata"></object>
    </div>
    <div class="gallery min-vh-100">
        <div class="title" style="padding-top: 0;">
            <span>Gallery</span>
        </div>
        <div class="container-lg pt-5">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <?php
                    for($i = 1; $i <= 6; $i++){
                        echo '<div class="col">
                            <img src="assets/img/gallery/'.$i.'.jpg" class="gallery-item" alt="gallery">
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="FAQ mb-5">
        <div class="title" style="padding-top: 0;">
            <span>FREQUENTLY ASKED QUESTIONS</span>
        </div>
        <div class="container col-sm-12 my-5">
            <div class="accordion" id="accordionSection">
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne">Apa
                            kepanjangan HIMTI BINUS?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseOne" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            HIMTI BINUS merupakan kepanjangan dari Himpunan
                            Mahasiswa Teknik Informatika Universitas Bina Nusantara.
                        </div>
                    </div>

                </div>
                <div class="accordion-item  mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">Ada
                            berapa komisi dan divisi dalam HIMTI?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            Di HIMTI BINUS sendiri terdapat tiga komisi yang terdiri dari dua divisi di tiap
                            komisi.<br>
                            Komisi 1 yaitu <b>‘Education’</b> terdiri dari divisi Academic Event dan divisi Responsi.
                            <br>Komisi
                            2 yaitu <b>‘Relation Expansion’</b> terdiri dari divisi Publication and Marketing dan divisi
                            HIMTI
                            Care.<br>
                            Komisi 3 yaitu <b>‘Research and Development’</b> terdiri dari divisi Creative and
                            Design
                            dan divisi Web Development.<br>
                            Terakhir, Komisi 4 yaitu <b>‘Resource Administration’</b> terdiri dari Supervisor 
                            dan Human Resource Development.<br>
                            <br>

                            Untuk penjelasan lebih lengkapnya lagi, kamu dapat mengunjungi laman <a href="https://student-activity.binus.ac.id/himti/commission-and-division/">ini</a>

                        </div>
                    </div>

                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">Mengapa
                            saya harus menjadi aktivis/pengurus HIMTI?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            Dengan menjadi aktivis/pengurus HIMTI, kamu bisa mendapatkan banyak sekali manfaat
                            seperti
                            menambah relasi, mengembangkan soft skill serta hard skill, bagaimana mengelola waktu
                            dengan
                            lebih baik, dan tentunya masih banyak lagi manfaat lainnya yang akan kamu rasakan ketika
                            sudah menjadi aktivis/pengurus.
                            Yakin gak mau join? :)

                        </div>
                    </div>

                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">Apakah
                            menjadi aktivis/pengurus HIMTI mengganggu aktivitas perkuliahan?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseFour" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            Tentu saja tidak. Dengan catatan, kamu dapat mengatur dan membagi waktu kamu dengan baik
                            mulai dari aktivitas perkuliahan, organisasi, dan beragam aktivitas lainnya. Time
                            management
                            yang baik itu penting, loh.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="viewtestimoni"><a href="/faq.php" class="btn btn-sm animated-button thar-three ">View All
                FAQs</a>
        </div>
    </div>

    <?php require_once('components/footer.php') ?>
    <script src="assets/js/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="assets/js/vanilla-tilt.min.js"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".upcomingeventrow"), {
        max: 25,
        speed: 400
    });

    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".upcomingeventrow"));
    </script>
    <script src="assets/js/RSShandle.js"></script>
</body>

</html>