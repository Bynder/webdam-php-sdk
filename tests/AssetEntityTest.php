<?php

/**
 * @file
 * Tests bynder\webdam\Entity\Asset.
 */

namespace bynder\webdam\tests;

use bynder\webdam\Entity\Asset;

class AssetEntityTest extends EntityTestBase {

  public function testEntity() {
    $json = $this->loadJson('asset');
    $asset = Asset::fromJson($json);
    $this->assertEquals($json, json_encode($asset, JSON_PRETTY_PRINT));
  }

}
