<?php

namespace Tests\Feature\Blog;

use App\Models\Blog\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryManageTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public $user;

    /**
     * Ustawienia testu: tworzę użytkownika, wszystkie akcje wykonuje jako zalogowany użytkownik
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    /**
     * @test
     * @return void
     */
    public function user_can_visit_create_page()
    {
        $response = $this->get('/admin/blog/categories/create');

        $response->assertOk();
        $response->assertSeeText('Dodaj nową kategorię');
    }

    /**
     * @test
     */
    public function user_can_visit_edit_category_page()
    {
        $this->withExceptionHandling();

        $category = Category::factory()->create();
        $response = $this->get('/admin/blog/categories/' . $category->id . '/edit');

        $response->assertOk();
    }

    /**
     * @test
     */
    public function user_can_add_category()
    {
        $category = Category::factory()->make();

        $response = $this->post('/admin/blog/categories/', $category->toArray());

        $response->assertCreated();
        $response->assertSessionDoesntHaveErrors();
        $response->assertRedirect('/admin/blog/categories');
        $this->assertDatabaseCount('categories', 1);
    }

    /**
     * @test
     */
    public function user_can_delete_category()
    {
        $category = Category::factory()->create();

        $response = $this->delete('/admin/blog/categories/' . $category->id, ['_token' => csrf_token()]);

        $response->assertSessionDoesntHaveErrors();
        $response->assertRedirect('/admin/blog/categories');
        $this->assertDatabaseCount('categories', 0);
  }

    /**
     * @test
     */
    public function user_can_update_category()
    {
        Category::factory()->create();

        $category = Category::find(1);

        $response = $this->put('/admin/blog/categories/' . $category->id, [
            'name' => 'zmiana nazwy'
        ]);

        $response->assertSessionDoesntHaveErrors();
        $response->assertRedirect('/admin/blog/categories');
    }

}
