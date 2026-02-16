<?php
$BASE = isset($ICARE_BASE) ? $ICARE_BASE : '/Icare/Icare';
$events = [
  [
    'img'   => $BASE . '/assets/img/news-images/building-bonds-in-virtual-worlds.jpg',
    'tag'   => 'On Sale',
    'title' => 'Culmination of Community Immersions',
    'date'  => 'Mon • February 16, 2026 • 07:00 AM',
    'venue' => 'Partner Communities',
    'organizer' => 'Zosthenes D. Alicdan',
  ],
  [
    'img'   => $BASE . '/assets/img/news-images/celebrating-in-the-metaverse.jpg',
    'tag'   => 'On Sale',
    'title' => 'Midterm Survival Week',
    'date'  => 'Mon • February 15, 2026 • 10:00 AM',
    'venue' => 'Student Center',
    'organizer' => 'iCare Team',
  ],
  [
    'img'   => $BASE . '/assets/img/news-images/miles-virtual-world-valentines-special-edition.jpg',
    'tag'   => 'On Sale',
    'title' => 'Become a Tutor Hero',
    'date'  => 'Fri • February 28, 2026 • 02:00 PM',
    'venue' => 'Room 301',
    'organizer' => 'iCare Academic Team',
  ],
];
?>
<section id="tutorial" class="icare-bg-tutorial py-15 py-lg-20 position-relative overflow-hidden">
  <div class="app-container container-xxl position-relative">
    <div class="text-center mb-12 mb-lg-16">
      <div class="icare-badge mb-4">
        <span>✨ What's Happening? ✨</span>
      </div>
      <h2 class="display-5 display-lg-4 text-icare-green mb-4">
        Epic Events You <span class="text-icare-yellow fw-bold">Can't Miss!</span> 🎊
      </h2>
      <p class="fs-4 text-gray-600 mx-auto icare-max-w-md">
        Check out these awesome events! Click on the posters to see more details and sign up!
      </p>
    </div>
    <div class="row g-4 g-lg-6">
      <?php foreach ($events as $ev) : ?>
      <div class="col-md-6 col-lg-4">
        <div class="icare-event-card h-100">
          <div class="icare-event-img-wrap">
            <img src="<?php echo htmlspecialchars($ev['img']); ?>" alt="<?php echo htmlspecialchars($ev['title']); ?>">
          </div>
          <div class="icare-event-body">
            <span class="icare-event-tag"><?php echo htmlspecialchars($ev['tag']); ?></span>
            <h3 class="icare-event-title"><?php echo htmlspecialchars($ev['title']); ?></h3>
            <div class="icare-event-detail icare-event-date">
              <i class="ki-outline ki-calendar-2"></i>
              <span><?php echo htmlspecialchars($ev['date']); ?></span>
            </div>
            <div class="icare-event-detail">
              <i class="ki-outline ki-profile-user"></i>
              <span><?php echo htmlspecialchars($ev['venue']); ?></span>
            </div>
            <div class="icare-event-detail">
              <i class="ki-outline ki-phone"></i>
              <span><?php echo htmlspecialchars($ev['organizer']); ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
