<?php
    use PHPUnit\Framework\TestCase;
    require 'welcome.php';
    class WelcomeTest extends TestCase {
        protected function setUp(){
            $this->welcome = new Welcome();
        }
   
        protected function tearDown(){
            $this->welcome = Null;
        }
        
        public function testGreet(){
            $result = $this->welcome->greet();
            $this->assertEquals("Welcome to Devops on AWS",$result);
        }
    }

