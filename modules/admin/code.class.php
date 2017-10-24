<?php
include_once('../../libs/verification.class.php');
$code=new Verification();
$code=new verification(200, 200);
$code->setNoiseLine()->setNoisePoint()->setFontNum()->setFontSize()->setFontAngle()->setFontFamily()->createImage();