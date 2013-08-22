<?php

class SluggableBehaviorTest extends PHPUnit_Framework_TestCase
{
    public function testProperties()
    {
        $sluggable = new SluggableBehavior();
        $this->assertTrue(property_exists($sluggable, 'columns'));
        $this->assertTrue(property_exists($sluggable, 'unique'));
        $this->assertTrue(property_exists($sluggable, 'update'));
        $this->assertTrue(property_exists($sluggable, 'slugColumn'));
        $this->assertTrue(property_exists($sluggable, 'useInflector'));
        $this->assertTrue(property_exists($sluggable, 'toLower'));
        $this->assertTrue(property_exists($sluggable, 'toLower'));
        $this->assertTrue(property_exists($sluggable, '_defaultColumnsToCheck'));
    }

    public function testBeforeSave()
    {
        $event = Phake::mock('CEvent');
        $sluggable = new SluggableBehavior();
        $sluggable->beforeSave($event);
    }
}
