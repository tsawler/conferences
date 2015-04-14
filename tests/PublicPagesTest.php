<?php

use App\User;

class PublicPagesTest extends TestCase {

    /**
     * Test the home page
     *
     * @return void
     */
    public function testHomepage()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }


    /**
     * Test for a not found page error
     *
     * @return void
     */
    public function test404()
    {
        $this->call('GET', '/dasfasfdasfdasfdsafdasfa');
        $this->assertResponseStatus(404);
    }


    /**
     * Test for login page
     *
     * @return void
     */
    public function testLoginPage()
    {
        $this->call('GET', '/login');
        $this->assertResponseOk();
    }


    /**
     * Test access to admin without login
     *
     * @return void
     */
    public function test302()
    {
        $this->call('GET', '/admin/dashboard');
        $this->assertResponseStatus(302);
    }


    /**
     * Test calling logout page
     */
    public function testLogout()
    {
        $user = User::find(1);
        $this->be($user);

        $this->call('GET', '/admin/logout');
        $this->assertResponseStatus(302);
        $this->assertRedirectedTo('/login');
        $this->assertSessionHas('message');
    }

}
