<?php

namespace Tests\Feature\Settings;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Setting;

class SettingFactoryTest extends TestCase
{
    
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
