<?php
include 'src/repositories/UserRepository.php';
use PHPUnit\Framework\TestCase;

final class RepositoryTest extends TestCase{
  
    /** Prueba de inserción de usuario en repositorio. **/
    public function testAddUser(): void
    {
        $userRepository = new UserRepository();
        $user = new User('Cristian', 'laycarevic@gmail.com', '123456');

        $userRepository->addUser($user);

        $this->assertCount(1, $userRepository->getUsers());
    }

    /** Prueba de eliminado de usuario en repositorio. **/
    public function testDeleteUser(): void
    {
        $userRepository = new UserRepository();
        $user = new User('Cristian', 'laycarevic@gmail.com', '123456');

        $userRepository->addUser($user);
        $userRepository->deleteUser($user);

        $this->assertCount(0, $userRepository->getUsers());
    }

    /** Prueba de eliminación por e-mail de usuario en repositorio. **/
    public function testDeleteByEmail()
    {
        $userRepository = new UserRepository();
        $user1 = new User('Cristian', 'laycarevic@gmail.com', '123456');
        $user2 = new User('John Doe', 'johndoe@example.com', '123456');

        $userRepository->addUser($user1);
        $userRepository->addUser($user2);

        $userRepository->deleteByEmail('johndoe@example.com');

        $this->assertCount(1, $userRepository->getUsers());
        $this->assertEquals($user1, $userRepository->getUsers()[0]);
    }

    /** Prueba de actualización de usuario en repositorio. **/
    public function testUpdateUser()
    {
        $userRepository = new UserRepository();
        $user = new User('Cristian', 'laycarevic@gmail.com', '123456');

        $userRepository->addUser($user);

        $updatedUser = new User('Jane Doe', 'janedoe@example.com', '123456');
        $userRepository->updateUser($updatedUser, 0);

        $this->assertEquals($updatedUser, $userRepository->getUsers()[0]);
    }

    /** Prueba de búsqueda de usuario por e-mail, almacenado en repositorio. **/
    public function testFindUserByEmail()
    {
        $userRepository = new UserRepository();
        $user1 = new User('Cristian', 'laycarevic@gmail.com', '123456');
        $user2 = new User('Jane Doe', 'janedoe@example.com', '123456');

        $userRepository->addUser($user1);
        $userRepository->addUser($user2);

        $foundUser = $userRepository->findUserByEmail('laycarevic@gmail.com');

        $this->assertEquals($user1, $foundUser);
    }

    /** Prueba de búsqueda de usuario por nombre, almacenado en repositorio. **/
    public function testFindUserByName()
    {
        $userRepository = new UserRepository();
        $user1 = new User('Cristian', 'laycarevic@gmail.com', '123456');
        $user2 = new User('Jane Doe', 'janedoe@example.com', '123456');

        $userRepository->addUser($user1);
        $userRepository->addUser($user2);

        $foundUser = $userRepository->findUserByName('Jane Doe');

        $this->assertEquals($user2, $foundUser);
    }
}
