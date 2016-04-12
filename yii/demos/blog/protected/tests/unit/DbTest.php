<?php

class DbTest extends CTestCase
{

    public function testConnection()
    {
        $this->assertNotNull(Yii::app()->dbm->connectionString);
    }
}