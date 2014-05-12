<?php

require_once dirname(__FILE__) . '/config.php';

class OsclassTest extends PHPUnit_Extensions_SeleniumTestCase
{

    protected $captureScreenshotOnFailure = TRUE;
    protected $screenshotPath = TEST_IMAGE_PATH;
    protected $screenshotUrl = TEST_IMAGE_URL;


  protected function setUp()
  {
    $this->setBrowser("*firefox");
    $this->setBrowserUrl(TEST_SERVER_URL);
  }


}
