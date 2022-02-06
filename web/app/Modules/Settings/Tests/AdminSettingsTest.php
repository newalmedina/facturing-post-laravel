<?php

namespace App\Modules\Settings\Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Faker\Factory;
use Tests\ClavelBaseTestCase;
use Tests\CreatesApplication;

class AdminSettingsTest extends ClavelBaseTestCase
{
    use DatabaseMigrations;

    use CreatesApplication;
    public $baseUrl = 'http://localhost';

    protected $faker = null;

    public function setUp(): void
    {
        parent::setUp();

        Artisan::call('migrate');
        Artisan::call('db:seed', ['--class' => 'DatabaseSeeder', '--database' => 'sqlite']);

        $this->user = User::where('username', 'admin')->first();
        $this->faker = Factory::create();
    }

    /** @test */
    public function aGuestShouldNotSeeSettings()
    {
        $this->get(route('settings'))
            ->seePageIs(url('admin/login'));
    }

    /** @test */
    public function aAdminShouldChangeSettings()
    {
        $google_analytics_client_id = $this->faker->uuid;
        $google_recaptcha_id = $this->faker->uuid;

        $this
            ->actingAs($this->user)
            ->get('admin/settings')
            ->type($google_analytics_client_id, 'google_analytics_client_id')
            ->type($google_recaptcha_id, 'google_recaptcha_id')
            ->press('save')
            ->seePageIs('admin/settings')
            ->see($google_analytics_client_id)
            ->see($google_recaptcha_id);
    }

    public function tearDown(): void
    {
        Artisan::call('migrate:reset');
        parent::tearDown();
    }
}
