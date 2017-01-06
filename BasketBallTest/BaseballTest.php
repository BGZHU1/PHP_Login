<?php

//require'C:\xampp\htdocs\UnitTest\BasketBallTest\Baseball.php';
		

class BaseballTest extends PHPUnit_Framework_TestCase
{
  public function testCalAvgEquals(){
  	$atbats=389;
  	$hits=129;
  	$baseball = new Baseball();
  	$result=$baseball->calc_avg($atbats,$hits);
  	$expectedresult=$hits/$atbats;
  	$this->assertEquals($expectedresult,$result);
  	
  }
  
  public function testCalAvgEquals2(){
  	$atbats=389;
  	$hits=129;
  	$baseball = new Ball();
  	$result=$baseball->calc_avg($atbats,$hits);
  	$expectedresult=$hits/$atbats;
  	$this->assertEquals($expectedresult,$result);
  	
  }
    
}