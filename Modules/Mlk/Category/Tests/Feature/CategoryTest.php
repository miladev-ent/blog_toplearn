<?php

namespace Mlk\Category\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mlk\Category\Models\Category;
use Mlk\Role\Database\Seeders\PermissionSeeder;
use Mlk\Role\Models\Permission;
use Mlk\User\Models\User;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test admin user can see category index page.
     *
     * @return void
     */
    public function test_admin_user_can_see_category_index_page()
    {
        $this->callSeeder();
        $this->createUserWithLogin();
        $this->givePermission();

        $response = $this->get(route('categories.index'));
        $response->assertViewIs('Category::index');
        $response->assertViewHas('categories');
    }

    /**
     * Test guest user can not see category index page.
     *
     * @return void
     */
    public function test_guest_user_not_can_see_category_index_page()
    {
        $this->callSeeder();
        $this->createUserWithLogin();

        $this->get(route('categories.index'))->assertStatus(403);
    }

    /**
     * Test admin user can see category create page.
     *
     * @return void
     */
    public function test_admin_user_can_see_category_create_page()
    {
        $this->callSeeder();
        $this->createUserWithLogin();
        $this->givePermission();

        $response = $this->get(route('categories.create'));
        $response->assertViewIs('Category::create');
        $response->assertViewHas('categories');
    }

    /**
     * Test guest user can not see category create page.
     *
     * @return void
     */
    public function test_guest_user_not_can_see_category_create_page()
    {
        $this->callSeeder();
        $this->createUserWithLogin();

        $this->get(route('categories.create'))->assertStatus(403);
    }

    /**
     * Test admin user can store new category.
     *
     * @test
     * @return void
     */
    public function admin_user_can_store_new_category()
    {
        $this->callSeeder();
        $this->createUserWithLogin();
        $this->givePermission();

        $title = $this->faker->title;
        $response = $this->post(route('categories.store'), [
            'parent_id' => null,
            'title' => $title,
            'keywords' => $this->faker->name,
            'description' => $this->faker->text,
            'status' => Category::STATUS_ACTIVE,
        ]);
        $response->assertRedirect(route('categories.index'));
        $response->assertSessionHas('success_message');

        $this->assertDatabaseCount('categories', 1);
        $this->assertDatabaseHas('categories', ['title' => $title]);
        $this->assertEquals(1, Category::query()->count());
    }

    /**
     * Test guest user can not store new category.
     *
     * @test
     * @return void
     */
    public function guest_user_can_not_store_new_category()
    {
        $this->callSeeder();
        $this->createUserWithLogin();

        $title = $this->faker->title;
        $response = $this->post(route('categories.store'), [
            'parent_id' => null,
            'title' => $title,
            'keywords' => $this->faker->name,
            'description' => $this->faker->text,
            'status' => Category::STATUS_ACTIVE,
        ]);
        $response->assertStatus(403);
        $response->assertSessionMissing('success_message');

        $this->assertDatabaseCount('categories', 0);
        $this->assertDatabaseMissing('categories', ['title' => $title]);
        $this->assertEquals(0, Category::query()->count());
    }

    # Private methods

    /**
     * Create user & login.
     *
     * @return void
     */
    private function createUserWithLogin(): void
    {
        auth()->login(User::factory()->create());
    }

    /**
     * Give permission to user.
     *
     * @return void
     */
    private function givePermission()
    {
        auth()->user()->givePermissionTo(Permission::PERMISSION_CATEGORIES);
    }

    /**
     * Call seeder.
     *
     * @return void
     */
    private function callSeeder(): void
    {
        $this->seed(PermissionSeeder::class);
    }
}
