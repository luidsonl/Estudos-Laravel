<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Setting;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;

class SettingsControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_store_a_setting_via_controller()
    {
        $controller = new SettingController();

        $request = Request::create('/settings', 'POST', [
            'key' => 'site_name',
            'value' => 'My Website',
        ]);

        $response = $controller->store($request);

        $this->assertDatabaseHas('settings', [
            'key' => 'site_name',
            'value' => 'My Website',
        ]);
        $this->assertEquals(201, $response->getStatusCode());
    }

    /** @test */
    public function it_can_show_a_setting_via_controller()
    {
        $setting = Setting::factory()->create([
            'key' => 'site_name',
            'value' => 'My Website',
        ]);

        $controller = new SettingController();

        $response = $controller->show($setting->id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($setting->toArray(), $response->getOriginalContent());
    }

    /** @test */
    public function it_can_update_a_setting_via_controller()
    {
        $setting = Setting::factory()->create([
            'key' => 'site_name',
            'value' => 'Old Website',
        ]);

        $controller = new SettingController();

        $request = Request::create('/settings/' . $setting->id, 'PUT', [
            'key' => 'site_name',
            'value' => 'Updated Website',
        ]);

        $response = $controller->update($request, $setting->id);

        $this->assertDatabaseHas('settings', [
            'key' => 'site_name',
            'value' => 'Updated Website',
        ]);
        $this->assertEquals(200, $response->getStatusCode());
    }

    /** @test */
    public function it_can_delete_a_setting_via_controller()
    {
        $setting = Setting::factory()->create([
            'key' => 'site_name',
            'value' => 'My Website',
        ]);

        $controller = new SettingController();

        $response = $controller->destroy($setting->id);

        $this->assertDatabaseMissing('settings', ['id' => $setting->id]);
        $this->assertEquals(204, $response->getStatusCode());
    }
}
