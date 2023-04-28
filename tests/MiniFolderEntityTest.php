<?php

/**
 * @file
 * Tests Bynder\webdam\Entity\MiniFolder.
 */

namespace Bynder\webdam\tests;

use Bynder\webdam\Entity\MiniFolder;

class MiniFolderEntityTest extends EntityTestBase {

  public function testEntity() {
    $json = $this->loadJson('minifolder');
    $minifolder = MiniFolder::fromJson($json);
    $this->assertEquals("12345", $minifolder->id);
    $this->assertEquals("testFolder", $minifolder->name);
    $this->assertEquals($json, json_encode($minifolder, JSON_PRETTY_PRINT));
  }

}
