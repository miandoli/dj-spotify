<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testAddUser() {
      $this->withoutMiddleware();
      $this->withoutExceptionHandling();

      $this->post('/user/add', [
        'refresh_token' => "sddfsdfsdf",
        'account_token' => "asdasdasd",
        'username' => "sauceboi"
      ])->assertStatus(200);
    }

    public function testCreateParty() {
      $this->withoutMiddleware();
      $this->withoutExceptionHandling();

      $this->post('/party/create', [
        "name" => "Luke"
      ])->assertStatus(200);

      

    }
}
