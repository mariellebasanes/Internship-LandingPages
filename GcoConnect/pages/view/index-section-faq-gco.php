<?php
$faqs = [
  ['q' => 'Is the GCO available to everyone?', 'a' => 'Yes! The Guidance and Counseling Office is available to all enrolled students. Whether you need academic support, personal counseling, or career guidance, our doors are always open.'],
  ['q' => 'Is all of your counselors certified?', 'a' => 'Absolutely. All our counselors are licensed professionals with advanced degrees in psychology, counseling, or related fields. They undergo continuous training to provide the best support possible.'],
  ['q' => 'What is your price?', 'a' => 'All GCO services are completely FREE for enrolled students. This is part of our commitment to student wellbeing and success.'],
  ['q' => 'How do I get set up and started now?', 'a' => "Getting started is easy! Simply click the 'Book an Appointment' button above, select the service you need, fill in your basic information, choose a time slot, and you're all set. You'll receive a confirmation email with all the details."],
  ['q' => 'What if I need to reschedule my appointment?', 'a' => "No problem! You can reschedule your appointment up to 24 hours before your scheduled time. Simply contact our office via email or phone, and we'll help you find a new time that works for you."],
  ['q' => 'How long does each session last?', 'a' => 'Session duration varies by service type. Interviews typically last 30-45 minutes, counseling sessions are 50-60 minutes, and psychological assessments can take 1-2 hours depending on the test.'],
];
?>
<section class="gco-section gco-faq position-relative">
  <div class="gco-container">
    <div class="text-center mb-5">
      <span class="gco-badge gco-badge-light">FAQ</span>
      <h2 class="gco-heading-xl mt-3 mb-3">Frequently Asked <span class="gco-heading-highlight">Questions</span></h2>
      <p class="gco-text-muted mx-auto" style="max-width:36rem;">Find answers to common questions about our <span class="gco-heading-highlight">counseling services</span></p>
    </div>
    <div class="mx-auto" style="max-width:56rem;">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="gco-faq-item" data-faq>
        <button type="button" class="gco-faq-trigger" aria-expanded="false" aria-controls="faq-<?= $i ?>" id="faq-trigger-<?= $i ?>">
          <?= htmlspecialchars($faq['q']) ?>
        </button>
        <div class="gco-faq-content" id="faq-<?= $i ?>" role="region" aria-labelledby="faq-trigger-<?= $i ?>">
          <?= htmlspecialchars($faq['a']) ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
(function() {
  document.querySelectorAll('.gco-faq-item').forEach(function(item) {
    var trigger = item.querySelector('.gco-faq-trigger');
    trigger.addEventListener('click', function() {
      var open = item.classList.contains('open');
      document.querySelectorAll('.gco-faq-item').forEach(function(i) { i.classList.remove('open'); i.querySelector('.gco-faq-trigger').setAttribute('aria-expanded', 'false'); });
      if (!open) {
        item.classList.add('open');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });
})();
</script>
