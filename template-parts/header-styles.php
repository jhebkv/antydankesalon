<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Lobster:400|League+Spartan:100,200,300,400,500,600,700,800,900|Aguafina+Script:400">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 121px;
}
.u-header .u-text-1 {
  font-size: 1.875rem;
  margin: 69px auto 0 60px;
}
.u-header .u-menu-1 {
  margin: -74px 162px 0 auto;
}
.u-header .u-nav-1 {
  font-weight: 400;
  font-family: "League Spartan";
  font-size: 1.25rem;
  text-transform: none;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-header .u-text-2 {
  font-size: 3.75rem;
  font-weight: 700;
  font-family: "Aguafina Script";
  margin: -62px 969px 0 -39px;
}
.u-header .u-btn-1 {
  background-image: none;
  font-family: "Aguafina Script";
  padding: 0;
}
.u-header .u-search-1 {
  height: auto;
  width: 32px;
  --open-duration: 0.35s;
  --overlay-color: #000000;
  --overlay-contrast-color: #ffffff;
  min-height: 32px;
  --open-width: 50%;
  margin: -75px 521px 0 auto;
}
.u-header .u-search-icon-1 {
  width: 30px;
  height: 30px;
  padding: 5px;
}
.u-header .u-btn-2 {
  background-image: none;
  border-style: solid;
  margin: -30px 10px 30px auto;
  padding: 8px 18px 9px 17px;
}
@media (max-width: 1199px) {
  .u-header .u-sheet-1 {
    min-height: 216px;
  }
  .u-header .u-text-1 {
    margin-top: 193px;
    margin-left: 60px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -102px;
    margin-right: 162px;
  }
  .u-header .u-text-2 {
    margin-top: -84px;
    margin-right: 769px;
    margin-left: -38px;
  }
  .u-header .u-search-1 {
    margin-top: -69px;
    margin-right: 521px;
  }
  .u-header .u-btn-2 {
    margin-top: -47px;
    margin-right: 0;
    margin-bottom: 60px;
    padding: 13px 30px 14px;
  }
}
@media (max-width: 991px) {
  .u-header .u-sheet-1 {
    min-height: 117px;
  }
  .u-header .u-text-1 {
    width: auto;
    margin-top: 68px;
    margin-left: 65px;
  }
  .u-header .u-menu-1 {
    margin-top: -86px;
    margin-right: 117px;
  }
  .u-header .u-text-2 {
    width: auto;
    margin-top: -55px;
    margin-right: 550px;
    margin-left: -39px;
  }
  .u-header .u-search-1 {
    margin-top: -77px;
    margin-right: 158px;
  }
  .u-header .u-btn-2 {
    margin-top: -41px;
    margin-right: -36px;
    margin-bottom: 43px;
  }
}
@media (max-width: 767px) {
  .u-header .u-sheet-1 {
    min-height: 219px;
  }
  .u-header .u-text-1 {
    font-size: 1.6666666666666665rem;
    margin-top: 145px;
  }
  .u-header .u-menu-1 {
    margin-top: -42px;
    margin-right: 117px;
  }
  .u-header .u-text-2 {
    font-size: 3.333333333333333rem;
    margin-top: -124px;
    margin-right: 370px;
    margin-left: -39px;
  }
  .u-header .u-search-1 {
    margin-top: -19px;
    margin-right: 158px;
  }
  .u-header .u-btn-2 {
    margin-top: -47px;
    margin-right: 0;
    margin-bottom: 60px;
  }
}
@media (max-width: 575px) {
  .u-header .u-sheet-1 {
    min-height: 114px;
  }
  .u-header .u-text-1 {
    margin-top: 68px;
    margin-left: 42px;
  }
  .u-header .u-menu-1 {
    margin-top: -96px;
    margin-right: 0;
  }
  .u-header .u-text-2 {
    margin-top: -36px;
    margin-right: 170px;
  }
  .u-header .u-search-1 {
    margin-top: -84px;
    margin-right: 41px;
  }
  .u-header .u-btn-2 {
    margin-top: 6px;
    margin-right: 0;
    margin-bottom: 19px;
    padding-top: 9px;
    padding-bottom: 10px;
  }
}</style>
