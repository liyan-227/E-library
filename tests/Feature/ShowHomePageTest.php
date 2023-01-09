<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\News;
use Tests\TestCase;

class ShowHomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     * @param  int  $id
     * @return void
     */
    public function test_post()
    {
        $response = $this->get('/news', [NewsApiController::class, 'index']);
        $response->assertStatus(200);
        $response = $this->post('news',[
            'title' => 'berita terkini',
            'picture' => 'www.beritaterkini.com',
            'content' => 'berisi berita terupdate',
          ]);S
    
    }
   
  public function test_destroy()
  { $response = $this->get('/news', [NewsApiController::class, 'index']);
    $response->assertStatus(200);
    $response = $this->deleteJson('news',[
        'title' => 'berita terkini',
        'picture' => 'www.beritaterkini.com',
        'content' => 'berisi berita terupdate',
      ]);
  }
}
