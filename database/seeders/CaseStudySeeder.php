<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studies = [
            // TODO: Copy these from your deployed website admin panel
            // Template format:
            // [
            //     'title' => 'Case Study Title',
            //     'location' => 'Metro Manila',
            //     'date_implemented' => '2025-01-15',
            //     'partner' => 'DOST-PCIEERD',
            //     'duration' => '6 months',
            //     'description' => 'Case study description...',
            //     'image' => '/images/uploads/case1.jpg',
            // ],
            [
                 'title' => 'Coastal Weather Alert System',
                 'location' => 'Guiuan, Eastern Samar',
                 'date_implemented' => '2025-01-15',
                 'partner' => 'Municipality of Guiuan Disaster Risk Reduction and Management Office (DRRMO)',
                 'duration' => 'January 2024 – June 2024',
                 'description' => '<p>Guiuan, a coastal town often affected by typhoons and storm surges, needed a real-time system to monitor wind conditions and sea weather for both residents and local fishermen.</p>
<p style="margin-bottom: 30px;">
<p><strong>WEHLO Solution:</strong></p>

<p>A weather station was installed near the shoreline, delivering live updates on wind speed, direction, humidity, and rainfall. Local authorities could issue community alerts ahead of severe weather events.</p>
<p style="margin-bottom: 30px;">
<p><strong>Results:</strong></p>
<p style="margin-bottom: 10px;">
<ul>
<li>30+ early advisories issued in the first 6 months</li>
<li>Enhanced safety protocols for fishing communities</li>
<li>Increased community trust in local disaster communication systems</li>
</ul>
<p style="margin-bottom: 30px;">
<p><strong>Key Features Used:</strong></p>
<p style="margin-bottom: 10px;">
<ul>
<li> Wind Speed & Direction Sensors</li>
<li> Severe Weather Alert System</li>
<li> 24/7 Remote Access via Web Dashboard</li>
</ul>',
                 'image' => '/images/uploads/wehlo-case1.png',
            ],
            [
                 'title' => 'Rainfall Level Mapping for Agriculture',
                 'location' => 'Nueva Ecija',
                 'date_implemented' => '2025-06-15',
                 'partner' => 'Nueva Ecija Provincial Agriculture Office',
                 'duration' => 'October 2023 – April 2024',
                 'description' => '<p>Farmers in Nueva Ecija faced unpredictable planting schedules due to erratic rainfall patterns. Traditional methods of rainfall tracking were inaccurate and delayed.</p>
<p style="margin-bottom: 30px;">
<p><strong>WEHLO Solution:</strong></p>

<p>WEHLO deployed rainfall monitoring stations across key agricultural zones, collecting localized precipitation data and visualizing it on a live dashboard accessible by agricultural officers and cooperatives.</p>
<p style="margin-bottom: 30px;">
<p><strong>Results:</strong></p>

<ul>
<li>Improved decision-making on planting and harvesting schedules</li>
<li>Early warnings helped avoid crop damage due to excessive rain</li>
<li>Collaboration with the Department of Agriculture enabled regional climate advisories</li>
</ul>
<p style="margin-bottom: 30px;">
<p><strong>Key Features Used:</strong></p>
<p style="margin-bottom: 10px;">
<ul>
<li> Rainfall Level Sensors</li>
<li> Interactive Rainfall Mapping</li>
<li> Weekly & Monthly Trend Reports</li>
</ul>',
                 'image' => '/images/uploads/wehlo-case2.png',
            ],
            [
                 'title' => 'Flood Monitoring for Barangay San Roque',
                 'location' => 'Barangay San Roque, Marikina City',
                 'date_implemented' => '2025-06-15',
                 'partner' => 'Barangay San Roque Local Government Unit (LGU)',
                 'duration' => 'February 2024 - June 2025',
                 'description' => '<p>Barangay San Roque, located near the Marikina River, has long been vulnerable to flash floods during heavy rains. The community faced challenges with delayed alerts and lacked access to reliable flood forecasting.</p>
<p style="margin-bottom: 30px;">
<p><strong>WEHLO Solution:</strong></p>

<p>Through WEHLO&rsquo;s localized hydromet sensor station, flood levels and rainfall intensity were monitored in real-time. The system was configured to automatically issue alerts when river water levels approached critical thresholds.</p>
<p style="margin-bottom: 30px;">
<p><strong>Results:</strong></p>
<p style="margin-bottom: 10px;">
<ul>
<li>40% faster alert response time for barangay officials and residents</li>
<li>Reduction in flood-related damage to households and infrastructure</li>
<li>Enhanced coordination with the Marikina DRRMO (Disaster Risk Reduction and Management Office)</li>
</ul>
<p style="margin-bottom: 30px;">
<p><strong>Key Features Used:</strong></p>
<p style="margin-bottom: 10px;">
<ul>
<li> River Water Level Sensor</li>
<li> SMS & Dashboard Alert System</li>
<li> Historical Rainfall and Flood Pattern Analytics</li>
</ul>',
                 'image' => '/images/uploads/wehlo-case3.png',
            ],
            [
                 'title' => 'Community Weather Watch: Enhancing Mountain Weather Preparedness in Baguio City',
                 'location' => 'Baguio City, Benguet',
                 'date_implemented' => '2025-06-19',
                 'partner' => 'Baguio City Local Government Unit (LGU)',
                 'duration' => '6 months pilot phase',
                 'description' => '<p><strong>Overview</strong></p>
<p style="margin-bottom: 30px;">
<p>National weather forecasts often fail to capture the rapid temperature shifts and heavy fog density unique to high-altitude mountain barangays. WEHLO launched the Community Weather Watch pilot to provide Baguio City with localized, real-time data, transforming how the city manages its unique climate risks.</p>

<p><strong>Objectives</strong></p>
<p style="margin-bottom: 10px;">

<p>The initiative aimed to deliver precision monitoring by providing real-time temperature and humidity data to remote areas. It sought to establish direct-to-citizen SMS early warning systems and enable schools and households to plan around volatile weather. Ultimately, the goal was to provide local government units with actionable insights through hyper-local micro-climate analytics.</p>
<p style="margin-bottom: 30px;">
<p><strong>Solutions Deployed</strong></p>
<p style="margin-bottom: 10px;">

<p>WEHLO installed multi-parameter weather stations with integrated fog and humidity sensors across five key barangays. To manage this data, the team deployed 24/7 cloud-based dashboards for city officials to monitor atmospheric shifts in real time. Additionally, the project developed automated, community-friendly SMS alert templates for immediate hazard notification.</p>
<p style="margin-bottom: 30px;">

<p><strong>Impact and Results</strong></p>
<p style="margin-bottom: 10px;">

<ul>
<li>The pilot achieved a <strong>70% reduction</strong> in unanticipated cold-related health incidents due to better-informed community preparation.</li>
<li>Over <strong>4,000 residents</strong> subscribed to the automated SMS alert system within the initial phase.</li>
<li>More than <strong>10 schools</strong> now use real-time fog data to adjust class schedules and transport safety.</li>
<li>Average weather warning lead times improved by <strong>1.5 hours</strong>.</li>
</ul>
<p style="margin-bottom: 30px;">
<p><strong>Lessons and Future Roadmap</strong></p>

<p>The pilot demonstrated that community training and feedback loops are essential for successful data adoption. Moving forward, WEHLO plans to scale the sensor network to neighboring high-altitude municipalities across Benguet. The team is also exploring the integration of specialized monitoring for frost and soil moisture in rural farming barangays and formalizing data feeds into long-term city resilience strategies.</p>',
                 'image' => '/images/uploads/wehlo-case4.png',
            ]
        ];

        foreach ($studies as $study) {
            CaseStudy::firstOrCreate(
                ['title' => $study['title']],
                $study
            );
        }
    }
}
