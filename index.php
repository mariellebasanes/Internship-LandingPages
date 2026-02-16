<?php
/**
 * iCare landing entry – structure and assets follow sample folder.
 * Redirects to Icare/Icare for the main app.
 */
define('MBG', TRUE);
define('ICARE_BASE', '/Icare/Icare');

$icare_root = __DIR__ . '/Icare';
$functions_path = $icare_root . '/functions-new.php';
if (!is_file($functions_path)) {
  $functions_path = $_SERVER['DOCUMENT_ROOT'] . '/Icare/sample/functions-new.php';
}
if (!is_file($functions_path)) {
  $functions_path = $_SERVER['DOCUMENT_ROOT'] . '/sample/functions-new.php';
}
if (!is_file($functions_path)) {
  header('Content-Type: text/plain; charset=utf-8');
  die('iCare: functions-new.php not found.');
}
require_once $functions_path;

$META_TITLE = "iCare - Academic Support at FEU Tech";
$META_DESC = "Free tutoring, study groups, and academic support for FEU Tech students. Your study buddy awaits!";
$ICARE_HOME = '/Icare/';
$ICARE_PARTIALS = $icare_root . '/partials';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php HEAD_ESSENTIALS(); ?>
</head>
<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" data-kt-app-layout="light-header" class="app-default">
  <?php include $ICARE_PARTIALS . '/_page-loader.php'; ?>
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
      <?php include $ICARE_PARTIALS . '/_header-landing.php'; ?>
      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          <div class="d-flex flex-column flex-column-fluid">
            <main>
              <?php include $ICARE_PARTIALS . '/_index-hero.php'; ?>
              <div class="app-container container-xxl">
                <?php include $ICARE_PARTIALS . '/_index-about.php'; ?>
                <?php include $ICARE_PARTIALS . '/_index-services.php'; ?>
                <?php include $ICARE_PARTIALS . '/_index-tutorial.php'; ?>
                <?php include $ICARE_PARTIALS . '/_index-faculties.php'; ?>
                <?php include $ICARE_PARTIALS . '/_index-feedback.php'; ?>
                <?php include $ICARE_PARTIALS . '/_index-faq.php'; ?>
                <?php include $ICARE_PARTIALS . '/_index-learnmore.php'; ?>
              </div>
            </main>
          </div>
          <?php include $ICARE_PARTIALS . '/_footer-landing.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <?php include $ICARE_PARTIALS . '/_scrolltop.php'; ?>
  <script src="<?php echo htmlspecialchars(ICARE_BASE); ?>/assets/plugins/global/plugins.bundle.js"></script>
  <script src="<?php echo htmlspecialchars(ICARE_BASE); ?>/assets/js/scripts.bundle.v2.01.js"></script>
</body>
</html>
