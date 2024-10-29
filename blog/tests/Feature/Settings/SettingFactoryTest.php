<?php

namespace Tests\Feature\Settings;

use Tests\TestCase;
use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettingFactoryTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_creates_valid_setting_using_factory()
    {
        $setting = Setting::factory()->create();

        $this->assertDatabaseHas('settings', [
            'id' => $setting->id,
            'key' => $setting->key,
            'value' => $setting->value,
        ]);
    }
}
