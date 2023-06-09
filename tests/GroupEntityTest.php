<?php

/**
 * @file
 * Tests Bynder\webdam\Entity\Group.
 */

namespace Bynder\webdam\tests;

use Bynder\webdam\Entity\Group;

class GroupEntityTest extends EntityTestBase {

  public function testEntity() {
    $json = $this->loadJson('group');
    $group = Group::fromJson($json);
    $this->assertEquals("12345", $group->id);
    $this->assertEquals("GroupName", $group->name);
    $this->assertEquals("GroupDescription", $group->description);
    $this->assertEquals("Administrator", $group->role);
    $this->assertEquals(123, $group->numusers);
    $this->assertEquals($json, json_encode($group, JSON_PRETTY_PRINT));
  }

}
