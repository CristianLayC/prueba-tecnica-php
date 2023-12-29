<?php
    use PHPUnit\Framework\TestCase;

    final class UserTest extends TestCase{

        /** Prueba de constructor. **/
        public function testClassConstructor(){
            $user = new User('Cristian','laycarevic@gmail.com','123456');

            $this->assertSame('Cristian', $user->name);
            $this->assertSame('laycarevic@gmail.com', $user->email);
            $this->assertSame('123456', $user->password);
        }

        /** Pruba de getName(). **/
        public function testGetName(){
            $user = new User('Cristian','laycarevic@gmail.com','123456');
     
            $this->assertIsString($user->getName());
            $this->assertEquals('Cristian', $user->getName());
        }

        /** Pruba de getEmail(). **/
        public function testGetEmail(){
            $user = new User('Cristian','laycarevic@gmail.com','123456');
     
            $this->assertIsString($user->getEmail());
            $this->assertEquals('laycarevic@gmail.com', $user->getEmail());
        }

        /** Pruba de getPassword(). **/
        public function testGetPassword(){
            $user = new User('Cristian','laycarevic@gmail.com','123456');
     
            $this->assertIsString($user->getPassword());
            $this->assertEquals('123456', $user->getPassword());
        }
     
        /** Pruba de setName(). **/
        public function testSetName(){
            $user = new User();
            $user->setName('Cristian');

            $this->assertSame('Cristian', $user->name);
        }
     
        /** Pruba de setEmail(). **/
        public function testSetEmail(){
            $user = new User();
            $user->setEmail('laycarevic@gmail.com');

            $this->assertSame('laycarevic@gmail.com', $user->email);
        }
     
        /** Pruba de setPassword(). **/
        public function testSetPassword(){
            $user = new User();
            $user->setPassword('123456');

            $this->assertSame('123456', $user->password);
        }
    }
?>