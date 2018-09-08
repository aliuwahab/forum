<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class ReadThreadsTest extends TestCase
{

    use DatabaseMigrations;


    public function setUp()
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }


    /** @test */
    function a_user_can_browse_threads()
    {
        $this->get('/threads')
            ->assertSee($this->thread->title);

//        $response->assertStatus(200);


    }


    /** @test */
    function a_user_can_view_a_thread()
    {

        $this->get('/threads/'.$this->thread->id)
            ->assertSee($this->thread->title);

    }



    /** @test */
    function a_user_can_reead_replies_associated_with_a_thread()
    {

        $reply = factory('App\Reply')->create(['thread_id' => $this->thread->id]);

       $this->get('/threads/'.$this->thread->id)
            ->assertSee($reply->body);

    }










//    /**
//     * A basic test example.
//     *
//     * @return void
//     */
//    public function testBasicTest()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }


}
