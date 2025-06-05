<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: linear-gradient(to bottom, #ffffff, #f2f2f2);
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
}
.u-header .u-sheet-1 {
  min-height: 98px;
}
.u-header .u-image-1 {
  width: 126px;
  height: 64px;
  margin: 17px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -44px 176px 0 auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-header .u-btn-1 {
  background-image: none;
  margin: -43px 0 24px auto;
  padding: 13px 30px 15px;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    margin-top: -44px;
    margin-right: 176px;
  }
  .u-header .u-nav-1 {
    letter-spacing: normal;
  }
  .u-header .u-btn-1 {
    margin-right: 0;
  }
}
@media (max-width: 575px) {
  .u-header .u-image-1 {
    margin-top: 18px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -49px;
    margin-right: 106px;
  }
  .u-header .u-btn-1 {
    margin-top: -30px;
    margin-bottom: 33px;
    padding: 4px 10px 4px 8px;
  }
}</style>
