<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About game Love and Deepspace</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
     <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#home"
          ><span class="text-primary"> Love And Deepspace</span></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About game</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#characters"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Characters
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#xavier">Xavier</a></li>
                <li><a class="dropdown-item" href="#zayne">Zayne</a></li>
                <li><a class="dropdown-item" href="#rafayel">Rafayel</a></li>
                <li><a class="dropdown-item" href="#sylus">Sylus</a></li>
                <li><a class="dropdown-item" href="#caleb">Caleb</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End -->

    <!-- Carousel -->
    <div id="home" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#home"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#home"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#home"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#home"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
        <button
          type="button"
          data-bs-target="#home"
          data-bs-slide-to="4"
          aria-label="Slide 5"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/1.webp" class="d-block w-100" alt="xavier" />
        </div>
        <div class="carousel-item">
          <img src="img/2.webp" class="d-block w-100" alt="zayne" />
        </div>
        <div class="carousel-item">
          <img src="img/3.webp" class="d-block w-100" alt="rafayel" />
        </div>
        <div class="carousel-item">
          <img src="img/4.webp" class="d-block w-100" alt="xavier" />
        </div>
        <div class="carousel-item">
          <img src="img/5.webp" class="d-block w-100" alt="zayne" />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#home"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#home"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End -->

    <!-- About game -->
    <section id="about" class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <h2 class="text-center mb-4 section-title">About Game</h2>
            <p class="about-text">
              Love and Deepspace is the first 3D otome game, which replaces
              semi-anime 2D character design with semi-realistic 3D modeling. It
              also allows customizing the female protagonist, both in appearance
              and voice. This 3D art style makes the game more immersive and has
              contributed to its widespread popularity. It follows a free-to-play
              pattern while monetized by gacha and in-game purchases such as gift
              packs, monthly cards and characters' costumes. Love and Deepspace
              merges intense monster-hunting gameplay with a sci-fi universe
              setting, where "love knows no bounds". It provides the opportunity
              to establish relationships with five love interests, who are Xavier,
              Rafayel, Zayne, Sylus, and Caleb. Players take the role of a
              Deepspace Hunter, wielding a superpower known as Evol to confront
              the cosmic beings known as Wanderers. The love interests serve as
              supporting characters, which players will naturally connect with
              throughout their journey. The gameplay features action-RPG combat,
              allowing players to team up with their chosen love interest to take
              down Wanderers using combinations and light parrying mechanics. It
              presents its story through visual novel segments at times and fully
              animated, voiced cutscenes at others.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End -->

     <!-- Card Characters -->
       <section id="characters" class="py-5 bg-light">
        <div class="container">
          <div class="row text-center mb-4">
            <div class="col">
              <h2 class="section-title">Characters</h2>
              <div class="underline"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4" id="xavier">
              <div class="card">
                <img src="img/xavierprofil.jpeg" class="card-img-top" alt="prince charming">
                <div class="card-body">
                  <h5 class="card-title">Xavier</h5>
                  <p class="card-text">Xavier is a calm and caring individual. Noted by both the Player and other characters, Xavier does not exude many facial expressions. Often, instead, opting for a neutral expression with little to no change in his tone of voice. However, in his dates and memories, Xavier exhibits more emotion with the Player, often teasing her and showcasing his affection and care for her in private. Xavier has a boyish, endearing and otherworldly charm due to his awkward speech, mannerisms and lack of awareness of social norms. His usual lack of emotional expression is often undercut by his often ridiculous nature to fall asleep in inappropriate settings such as the initial meeting with the Player, where Xavier was asleep when she found him. Despite his initial impressions with the Player leading her to see Xavier as somewhat cold, he often shows his care for her well-being by putting himself on the line for her and seeming compliant to demands. On dates while playing Kitty Cards or the Claw Machine, Xavier will often give the player a choice between letting him go first or letting herself go. He will rarely refuse the player if she wants to switch at any point of the game. During Kitty Cards Xavier will often fall asleep allowing the player to switch her kitty cards to her advantage. Xavier occasionally shows a darker side when required, thoroughly familiar with how the underworld works in the N109 zone. He has a large bounty placed on him under his alter-ego Lumiere for eliminating a number of gangs that were trading in illegally modified protocores. Xavier shows grace to his ex-Backtracker teammates from Philos, but has proven to be willing to eliminate ongoing threat.</p>
                  <a href="#" class="btn btn-primary">Learn more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4" id="zayne">
              <div class="card">
                <img src="img/zayneprofil.jpeg" class="card-img-top" alt="Nonchalant God">
                <div class="card-body">
                  <h5 class="card-title">Zayne</h5>
                  <p class="card-text"> Zayne is a pragmatic and stoic individual. He remains extremely professional and direct with most, while preferring backhanded or subtle teasing remarks with those he is close with. If he does any wrong he is quick to take accountability. He is a private and considerate individual who takes great care of others. Despite his fondness for animals, they tend to avoid him. It is implied that Zayne initially went into cardiac surgery as a career because of events relating to the main Player that took place prior to the main story. Zayne is highly diligent and competent at his job, known for winning several awards and the respect of his peers, and even appearing in a news article for being the youngest heart surgeon in Linkon City. Outside the main story and in cards or dates, Zayne displays a more affectionate personality and enjoys reminiscing his shared childhood with the Player. He is also openly physically affectionate, often boldly holding or even kissing the Player. During dates when playing the Claw Machine, Zayne will often opt to let the Player play first. When playing the Claw Machine, he will commonly refuse the Player if they ask to switch, though he occasionally relents. If during Kitty Cards the player acts “cute”, Zayne may be convinced to swap cards with the Player.</p>
                  <a href="#" class="btn btn-primary">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4" id="rafayel">
              <div class="card">
                <img src="img/rafayelprofil.jpeg" class="card-img-top" alt="Sea God">
                <div class="card-body">
                  <h5 class="card-title">Rafayel</h5>
                  <p class="card-text"> Rafayel presents himself in a friendly and carefree manner, often teasing the Player or acting clingy toward her. His behavior can sometimes come across as childish and petulant, especially when he brushes off his responsibilities in favor of whatever happens to capture his attention. He has a tendency to flake out on events organized for him by Thomas, his manager, with excuses like swimming in the ocean, eating seafood, or collecting shells—which he later grinds down into unique pigments for his artwork. Despite his playful and somewhat immature demeanor, Rafayel harbors a deep and complex hatred for humanity, though this animosity doesn't extend to the Player. He loves her deeply, and while he treats most humans with a neutral indifference, he will show hostility if they threaten or disturb him, the Player, or other Lemurians. His aloofness often veers into apathy, making him seem emotionally distant to those other than the Player, yet he can be charismatic with others when the situation calls for it. Rafayel is knowledgeable about the N109 zone and its operations, and as the Player uncovers more about his past—the ambiguity of his actions and motivations grows. His morals are murky, and his true intentions remain unclear, adding a layer of complexity to his otherwise enigmatic persona.</p>
                  <a href="#" class="btn btn-primary">Learn more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4" id="sylus">
              <div class="card">
                <img src="img/sylusprofil.jpeg" class="card-img-top" alt="Leader of Onychinus">
                <div class="card-body">
                  <h5 class="card-title">Sylus</h5>
                  <p class="card-text">Sylus is confident and direct. He rarely perceives anyone as a real threat because he is usually the most powerful person in the room. Even in dangerous situations, he remains calm and self-assured. Sylus hates being bored and appears to be a bit of a thrill seeker; preferring to use fast motorcycles, jump out of planes, and use explosives to deal with problems on multiple occasions. He is unforgiving to his enemies, but never uses undue force against the weak as his understanding of power dynamics is nuanced. Analytical and strategic, Sylus always plans several steps ahead, anticipating every possible outcome for any situation he faces. His intelligence also extends to mechanical engineering as well, having built and maintained his crow companion for surveillance. Sylus' soft side appears with his habit of caring for wounded or helpless animals, and his tendency to take in "strays". His bonds with the twins (Luke and Kieran), Mephisto, and now the Player all show he is more vulnerable than he lets on. Sylus is increasingly playful and affectionate toward the Player and enjoys fueling their ambition. He encourages the Player to boss him around and supports their efforts in developing and growing their own power, building their confidence. He sometimes teases the Player and speaks so smugly that it is hard to tell if he is being mocking or genuine, but the answer is usually both.</p>
                  <a href="#" class="btn btn-primary">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4" id="caleb">
              <div class="card">
                <img src="img/calebprofil.jpeg" class="card-img-top" alt="Stalker guy">
                <div class="card-body">
                  <h5 class="card-title">Caleb</h5>
                  <p class="card-text"> Caleb - is depicted as either the childhood friend (NA/EU servers) or the adopted brother (CN/JP/KR servers) of the Player. He was adopted alongside the Player by Josephine, who he refers to as "Gran," though they have no blood relation. As a child, he had a love of planes. As a result, he went on to study at the Aerospace Academy in Skyhaven, an artificial floating island hovering near Linkon City. Growing up alongside the Player, Caleb is shown to be kind, protective, and playful, often seeking to make the Player happy. Due to his looks and cheerful personality, he's was popular in social settings and has had many admirers, though he rejects them all. Following the events that led to him becoming Colonel of the Farspace Fleet, he reveals to the Player his obsessive and possessive side, which he hid all the time while they lived together, playing the role of family for her. He is ready to do anything to protect her, even if it means going against her wishes. As a Colonel, he is cold, calculated, and highly respected amongst the Farspace Fleet, though he is shown to receive some backlash from other high ranking personnel. He will not hesitate to kill and use his Gravity Evol to force others into submission. He is comfortable threatening others with death, especially when it comes to the Player's safety or threats to his position in the Fleet.</p>
                  <a href="#" class="btn btn-primary">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </section>
    <!-- End -->

    <!-- Footer -->
    <footer>
      <p class="text-center">Created by Ni Putu Prilka Kristia Wasinta</p>
    </footer>
    <!-- End -->
  </body>
</html>