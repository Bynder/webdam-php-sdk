<?php

/**
 * @file
 * Tests bynder\webdam\Entity\MiniUser.
 */

namespace bynder\webdam\tests;

use bynder\webdam\Entity\MiniUser;

class MiniUserEntityTest extends EntityTestBase {

  public function testEntity() {
    $json = $this->loadJson('miniuser');
    $miniuser = MiniUser::fromJson($json);
    $this->assertEquals("12345", $miniuser->id);
    $this->assertEquals("jdoe@example.com", $miniuser->email);
    $this->assertEquals("JohnDoe", $miniuser->name);
    $this->assertEquals("jdoe", $miniuser->username);
    $this->assertEquals($json, json_encode($miniuser, JSON_PRETTY_PRINT));
  }

}
