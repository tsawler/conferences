<?php

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

}
