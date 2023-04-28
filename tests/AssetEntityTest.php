<?php

/**
 * @file
 * Tests Bynder\webdam\Entity\Asset.
 */

namespace Bynder\webdam\tests;

use Bynder\webdam\Entity\Asset;

class AssetEntityTest extends EntityTestBase {

  public function testEntity() {
    $json = $this->loadJson('asset');
    $asset = Asset::fromJson($json);
    $this->assertEquals($json, json_encode($asset, JSON_PRETTY_PRINT));
  }

}
