<?php

namespace Tests\Feature\Blog;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostManageTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public $user;
    public $category;

    /**
     * Ustawienia testu: tworzę użytkownika, wszystkie akcje wykonuje jako zalogowany użytkownik
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->category = Category::factory()->create();
        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    /**
     * @test
     * @return void
     */
    public function user_can_visit_create_post_page()
    {
        $response = $this->get('/admin/blog/posts/create');

        $response->assertOk();
        $response->assertSeeText('Dodaj nowy post');
    }

    /**
     * @test
     */
    public function user_can_visit_edit_post_page()
    {
        $this->withExceptionHandling();

        $post = Post::factory()->create(['category_id' => 1]);
        $response = $this->get('/admin/blog/posts/' . $post->id . '/edit');

        $response->assertOk();
    }

    /**
     * @test
     */
    public function user_can_add_post()
    {
        $post = Post::factory()->make(['category_id' => 1]);

        $response = $this->post('/admin/blog/posts/', $post->toArray());

        $response->assertCreated();
        $response->assertSessionDoesntHaveErrors();
        $response->assertRedirect('/admin/blog/posts');
        $this->assertDatabaseCount('posts', 1);
    }

    /**
     * @test
     */
    public function user_can_delete_post()
    {
        $post = Post::factory()->create(['category_id' => 1]);

        $response = $this->delete('/admin/blog/posts/' . $post->id, ['_token' => csrf_token()]);

        $response->assertSessionDoesntHaveErrors();
        $response->assertRedirect('/admin/blog/posts');
//        $this->assertSoftDeleted('posts', $post->toArray());


    }
}
