<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $banners = [
            [
                // Banner 1: Option A - Clean image only, no overlay (image has own content)
                'title' => '',
                'description' => '',
                'image' => '/images/Homepage/wehlo-banner1.png',
                'show_gradient' => false,
            ],
            [
                // Banner 2: Option B - With gradient for text readability
                'title' => 'Smart Environmental Monitoring',
                'description' => '<p>Track weather, flood levels, and atmospheric conditions with precision-powered by localized data and resilient infrastructure.</p>',
                'image' => '/images/Homepage/wehlo-banner2.png',
                'cta_primary_text' => 'Explore Platform',
                'cta_primary_link' => '/platform',
                'cta_secondary_text' => 'View Success Stories',
                'cta_secondary_link' => '/cases',
                'show_gradient' => true,
            ],
            [
                // Banner 3: Option B - With gradient for text readability
                'title' => 'Local Climate Tracking',
                'description' => '<p>Real-time weather intelligence for disaster preparedness and community resilience.</p>',
                'image' => '/images/Homepage/wehlo-banner3.png',
                'cta_primary_text' => 'Learn More',
                'cta_primary_link' => '/about_us',
                'cta_secondary_text' => 'Contact Us',
                'cta_secondary_link' => '/contact_us',
                'show_gradient' => true,
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}
