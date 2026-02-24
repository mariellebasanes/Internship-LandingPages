<?php
// Use icon-style images stored under GcoConnect/assets/img/GCO Assets/
$assetsBase = isset($GCO_BASE) ? $GCO_BASE . 'assets/img/GCO Assets' : 'assets/img/GCO Assets';
$tests = [
  [
    'name' => 'Emotional Quotient',
    'img' => 'counseling.png',
    'desc' => "Measures the ability to recognize, understand, and manage one's own emotions and the emotions of others; focuses on emotional awareness, empathy, and self-regulation.",
  ],
  [
    'name' => 'Intelligence',
    'img' => 'test_results_interpretation.png',
    'desc' => "Evaluates cognitive abilities such as reasoning, memory, problem-solving, and analytical thinking to estimate overall intellectual functioning.",
  ],
  [
    'name' => 'Self-Concept',
    'img' => 'family_dynamics.png',
    'desc' => "Examines how individuals view themselves—their abilities, identity, and self-worth—to understand factors influencing confidence and motivation.",
  ],
  [
    'name' => 'Personality',
    'img' => 'social_adjustment.png',
    'desc' => "Assesses patterns of thinking, feeling, and behavior to understand personality traits and role/environment compatibility.",
  ],
  [
    'name' => 'Learning Difficulties',
    'img' => 'request_for_recommendation.png',
    'desc' => "Detects possible learning challenges (e.g., reading, writing, math, attention) to support early intervention.",
  ],
  [
    'name' => 'Adjustment Concerns',
    'img' => 'mental_health_support.png',
    'desc' => "Identifies emotional, social, or behavioral difficulties that may affect one's ability to adapt to situations or environments.",
  ],
  [
    'name' => 'Study Attitude and Methods',
    'img' => 'intake-interview.png',
    'desc' => "Evaluates motivation, learning habits, study strategies, and overall attitudes toward school to identify academic strengths and improvement areas.",
  ],
  [
    'name' => 'Non-standardized Tests',
    'img' => 'referred_by_counselor.png',
    'desc' => "Open-source or online-sourced tests that provide additional evidences for emerging student concerns, as necessary.",
  ],
  [
    'name' => 'Career Tests',
    'img' => 'psychological-test.png',
    'desc' => "Examine interests, skills, and abilities related to career to guide career development and pathing.",
  ],
];
?>
<section class="gco-section gco-psych">
  <div class="gco-container">
    <div class="text-center mb-5">
      <span class="gco-badge">PSYCHOLOGICAL TESTS</span>
      <h2 class="gco-heading-xl text-white mt-3 mb-3">Available <span class="text-white" style="opacity:.85">Assessment Tools</span></h2>
      <p class="text-white mx-auto mb-0" style="opacity:.9;max-width:36rem;">Comprehensive testing services to support your <u>personal growth</u></p>
    </div>
    <div class="gco-grid-2">
      <?php foreach ($tests as $t): ?>
      <div class="gco-psych-card">
        <div class="d-flex align-items-start gap-3">
          <div class="gco-psych-icon flex-shrink-0">
            <img src="<?= $assetsBase . '/' . htmlspecialchars($t['img']) ?>" alt="<?= htmlspecialchars($t['name']) ?>" style="width:2.25rem;height:2.25rem;object-fit:contain;">
          </div>
          <div>
            <h3 class="gco-psych-title text-white"><?= htmlspecialchars($t['name']) ?></h3>
            <p class="gco-psych-desc text-white mb-0"><?= htmlspecialchars($t['desc']) ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
