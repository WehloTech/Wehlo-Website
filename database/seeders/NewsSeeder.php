<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create categories first
        $categories = [
            'Community Engagement',
            'Technology & Innovation',
            'Government & Policy | Disaster Preparedness',
        ];

        $categoryModels = [];
        foreach ($categories as $catName) {
            $categoryModels[$catName] = Category::create(['name' => $catName]);
        }

        $posts = [
            [
                'title' => 'Introducing: WEHLO for EVERY JUAN',
                'slug' => 'introducing-wehlo-for-every-juan',
                'location' => ' Manila, Philippines',
                'date_implemented' => '2025-06-25',
                'category' => 'Community Engagement',
                'description' => '<p><strong>MANILA, Philippines</strong> — In an era of increasing climate volatility, localized data has become the frontline of disaster risk reduction. Recognizing this need, WEHLO today announced the launch of <strong>WEHLO for EVERY JUAN</strong>, a strategic community service program designed to democratize access to high-precision weather intelligence across the archipelago.</p>

<p>The initiative facilitates a public-private partnership model, allowing stakeholders to bridge the gap between high-end meteorological technology and the local government units (LGUs) that need them most.</p>
<p style="margin-bottom: 30px;">
<p><strong>A Shared Responsibility Model</strong></p>

<p>The program operates on a collaborative sustainability framework, ensuring that the technology is not only deployed but maintained for long-term utility:</p>
<p style="margin-bottom: 10px;">
<p><strong>The Sponsor:</strong> Individuals, alumni groups, civic organizations, or private corporations provide the capital for one WEHLO Automated Weather Station unit at a preferential, subsidized rate.</p>
<p style="margin-bottom: 10px;">
<p><strong>The Beneficiary (LGU/Community):</strong> The recipient LGU commits to the ongoing operational costs, including maintenance and the essential web portal subscription.</p>
<p style="margin-bottom: 10px;">
<p><strong>The Impact:</strong> This synergy provides the community with real-time, impact-based weather data, crucial for flood forecasting, agricultural scheduling, and infrastructure safety.</p>
<p style="margin-bottom: 30px;">
<p><strong>Engineering Resilience Through Data</strong></p>

<p>While traditional weather reports provide regional overviews, WEHLO&rsquo;s localized stations offer hyper-local insights. By placing hardware directly within vulnerable communities, the EVERY JUAN program empowers local leaders to make data-driven decisions that protect both property and lives.</p>

<p><em>&ldquo;We are not just deploying hardware; we are building a network of safety,&rdquo;</em> says the WEHLO Team. <em>&ldquo;Localized data is the difference between a reactive response and proactive preparedness.&rdquo;</em></p>
<p style="margin-bottom: 30px;">
<p><strong>How to Participate</strong></p>

<p>WEHLO invites private sector partners and civic leaders to lead the charge in disaster preparedness. By sponsoring a station, organizations can leave a measurable legacy of safety and climate resilience in their chosen communities.</p>
<p style="margin-bottom: 10px;">
<p>For partnership inquiries and technical specifications:<br/>Please contact our program coordinators at <strong>inquiries@wehlo.net</strong> to learn how you can bring localized weather intelligence to your community.</p>',
                'image' => '/images/uploads/wehlo-blog1.png',
            ],
            [
                'title' => 'Tech Spotlight: Inside the WEHLO Real-Time Data Ecosystem',
                'slug' => 'tech-spotlight-wehlo-real-time-data-ecosystem',
                'location' => ' Manila, Philippines',
                'date_implemented' => '2025-06-19',
                'category' => 'Technology & Innovation',
                'description' => '<p><strong>MANILA, Philippines</strong> — As climate uncertainty increases, the ability to interpret environmental data in real time has become a critical asset for local governance. At the center of WEHLO&rsquo;s disaster mitigation suite is its <strong>Real-Time Data Dashboard</strong>, a sophisticated yet accessible interface designed to bridge the gap between raw sensor output and decisive community action.</p>
<p style="margin-bottom: 30px;">
<p><strong>Centralizing Localized Intelligence</strong></p>

<p>The WEHLO dashboard is engineered for high-stakes environments where clarity and speed are paramount. Unlike broad regional forecasts, the platform provides a hyper-local view of environmental conditions, allowing for surgical precision in disaster response and resource management.</p>
<p style="margin-bottom: 30px;">
<p><strong>Key Functional Modules</strong></p>
<p style="margin-bottom: 10px;">
<p><strong>Dynamic Sensor Telemetry</strong><br/>The dashboard streams live data directly from the field, including precipitation volume, humidity levels, barometric pressure, and wind velocity. This ensures that users are operating on information that is minutes&mdash;not hours&mdash;old.</p>
<p style="margin-bottom: 10px;">
<p><strong>Geospatial Visualization</strong><br/>Integrated interactive maps allow users to monitor multiple stations simultaneously. This provides a comprehensive macro-view of weather movements and water level rises across specific jurisdictions or neighboring regions.</p>
<p style="margin-bottom: 10px;">
<p><strong>Predictive Historical Analytics</strong><br/>Beyond live monitoring, the system catalogs historical trends. This allows researchers and urban planners to analyze daily, weekly, or monthly patterns to support long-term infrastructure and climate resilience planning.</p>
<p style="margin-bottom: 10px;">
<p><strong>Automated Threshold Alerts</strong><br/>A core safety feature of the ecosystem is the ability to configure custom triggers. When rainfall intensity or water levels reach critical pre-set stages, the system automatically dispatches warnings to relevant stakeholders to initiate emergency protocols.</p>
<p style="margin-bottom: 10px;">
<p><strong>Cross-Sector Utility</strong></p>
<p style="margin-bottom: 10px;">
<p>The versatility of the WEHLO platform has made it an essential tool for a diverse range of professional sectors. <strong>Local Government Units (LGUs) and DRRM Offices</strong> utilize the platform to orchestrate early warning systems and localized evacuation protocols. Meanwhile, <strong>Agricultural Officers</strong> leverage the data to provide farmers with precise windows for planting and harvesting based on localized soil and air moisture.</p>

<p>The system also serves <strong>Academic Institutions</strong> as a primary data source for climate behavior studies, while <strong>NGOs and First Responders</strong> rely on the dashboard to coordinate logistics and field operations during active weather events.</p>
<p style="margin-bottom: 10px;">
<p><strong>Redefining Actionable Data</strong></p>

<p>What distinguishes the WEHLO dashboard is its commitment to <em>localized insights</em>. By moving away from general national modeling and focusing on community-specific data, the platform ensures that decision-makers are not reacting to distant sensors.</p>

<p>Optimized for both desktop and mobile environments, the dashboard is secured with enterprise-grade protocols, ensuring that official data remains protected while remaining accessible to those on the front lines.</p>',
                'image' => '/images/uploads/wehlo-blog2.png',
            ],
            [
                'title' => 'Philippine LGUs Adopt WEHLO Data to Modernize Disaster Response Frameworks',
                'slug' => 'philippine-lgus-adopt-wehlo-data',
                'location' => 'Manila, Philippines',
                'date_implemented' => '2025-06-20',
                'category' => 'Government & Policy | Disaster Preparedness',
                'description' => '<p><strong>MANILA, Philippines</strong> — Local Government Units (LGUs) across the Philippines are increasingly pivoting toward data-driven governance to combat the escalating threats of climate change. By integrating WEHLO&rsquo;s real-time environmental intelligence into their <strong>Disaster Risk Reduction and Management (DRRM)</strong> protocols, local authorities are significantly enhancing their ability to protect lives and infrastructure.</p>

<p>The transition from traditional, broad-spectrum forecasting to WEHLO&rsquo;s localized monitoring allows for a more surgical approach to emergency response, specifically in high-risk flood zones and coastal municipalities.</p>
<p style="margin-bottom: 30px;">

<p><strong>Strengthening the Early Warning Chain</strong></p>
<p style="margin-bottom: 10px;">

<p>The integration of WEHLO technology addresses the <em>&ldquo;last mile&rdquo;</em> of disaster communication. By placing precision sensors within the community, LGUs have gained three critical strategic advantages:</p>
<p style="margin-bottom: 10px;">

<p><strong>Hyperlocal Situational Awareness</strong><br/>Unlike national weather reports that cover entire regions, WEHLO stations provide granular data on rainfall intensity, wind velocity, and river levels specific to a single municipality or barangay. This level of detail is essential for identifying micro-climates that may experience flash flooding even when neighboring areas remain dry.</p>
<p style="margin-bottom: 10px;">

<p><strong>Accelerated Alert Dissemination</strong><br/>The platform&rsquo;s automated trigger system allows DRRM teams to bypass manual assessment delays. Once a predetermined threshold is reached—such as critical water levels or extreme precipitation—automated alerts are dispatched immediately, providing residents with the lead time necessary for orderly evacuation.</p>
<p style="margin-bottom: 10px;">

<p><strong>Strategic Resource Allocation</strong><br/>Utilizing historical data stored within the WEHLO ecosystem, urban planners can identify recurring vulnerable zones. This intelligence enables LGUs to pre-position rescue equipment, medical supplies, and personnel in areas most likely to be isolated during a storm.</p>
<p style="margin-bottom: 10px;">

<p><strong>Impact Study: Efficiency Gains in Marikina City</strong></p>
<p style="margin-bottom: 30px;">

<p>The practical application of this technology is already yielding measurable results. In Marikina City, Barangay San Roque has reported a <strong>40% reduction</strong> in flood response times since the full integration of WEHLO alerts into their community warning system.</p>
<p style="margin-bottom: 10px;">

<p>By receiving early warnings via a dedicated dashboard and SMS alerts, the barangay&rsquo;s DRRM team can now initiate preemptive measures and secure critical infrastructure before water levels reach peak heights. This shift from reactive to proactive intervention has become a benchmark for neighboring communities.</p>
<p style="margin-bottom: 30px;">
<p><strong>Shifting Toward Proactive Governance</strong></p>
<p style="margin-bottom: 10px;">
<p>As climate-related risks become more frequent and severe, the adoption of localized, high-fidelity data tools is no longer a luxury but a necessity for public safety. LGUs leveraging the WEHLO ecosystem are setting a new standard for resilience, proving that real-time intelligence is the most effective tool for mitigating the impact of natural disasters.</p>
<p style="margin-bottom: 10px;">
<p>Through the marriage of technology and local policy, WEHLO is helping Philippine communities move beyond traditional disaster management and toward a future of <em>informed, proactive governance</em>.</p>',
                'image' => '/images/uploads/wehlo-blog3.png',
            ],
            [
                'title' => 'DOST and Mapúa University Launch WEHLO to Strengthen Local Weather Monitoringg',
                'slug' => 'dost-and-mapúa-university-launch-wehlo-to-strengthen-local-weather-monitoring',
                'location' => ' Taguig City, Philippines',
                'date_implemented' => '2025-06-21',
                'category' => 'Technology & Innovation',
                'description' => '<p><strong>MANILA, Philippines</strong> — To boost the country’s disaster resilience and preparedness for La Niña, the <strong>Department of Science and Technology (DOST)</strong>, in partnership with <strong>Mapúa University</strong>, has officially launched the <strong>Localized Weather, Environment, and Hydromet Monitoring System (WEHLO)</strong>.</p>
<p style="margin-bottom: 10px;">

<p>The PHP 15-million initiative was developed under the DOSTs <strong>Collaborative Research and Development to Leverage Philippine Economy (CRADLE)</strong> program and is designed to enhance <strong>localized weather tracking and environmental monitoring</strong> in vulnerable areas across the country.</p>
<p style="margin-bottom: 30px;">

<p><strong>Real-Time, Community-Based Monitoring</strong></p>
<p style="margin-bottom: 10px;">
<p>WEHLO is a tech-driven platform equipped with sensors and software that gather <strong>real-time data</strong> on rainfall, temperature, humidity, wind speed, and air quality. It empowers local government units (LGUs), particularly those in <strong>disaster-prone areas</strong>, to monitor hydrometeorological changes and respond more efficiently.</p>
<p style="margin-bottom: 10px;">

<p>“Localized data can save lives. Through WEHLO, communities will have access to timely, accurate information that helps them prepare for extreme weather events,” said <strong>DOST Secretary Renato Solidum Jr.</strong></p>
<p style="margin-bottom: 30px;">

<p><strong>Bridging Research and Local Needs</strong></p>
<p style="margin-bottom: 10px;">
<p>The system is currently deployed in select municipalities, particularly in <strong>low-lying and flood-prone areas</strong>, as part of a broader initiative to integrate <strong>research-based solutions</strong> into governance and local planning.</p>
<p style="margin-bottom:10px;">

<p><strong>Mapúa University</strong>, recognized for its strengths in engineering and information technology, served as the lead implementer and technical developer of the platform. According to <strong>Dr. Francis Aldrine Uy</strong> of Mapúa, “WEHLO is more than a tool — it’s a bridge between science and community resilience.”</p>
<p style="margin-bottom: 30px;">

<p><strong>Future of Forecasting in the Philippines</strong></p>
<p style="margin-bottom: 10px;">
<p>As climate change continues to increase the frequency and intensity of extreme weather events, innovations like WEHLO are seen as <strong>critical components of sustainable disaster management</strong>. The DOST plans to expand deployment nationwide, prioritizing <strong>agricultural zones and high-risk communities</strong>.</p>
<p style="margin-bottom: 10px;">

<p>Beyond LGUs, the system is also expected to support <strong>dam operators, emergency response teams, and educational institutions</strong> that rely on consistent, localized environmental data for decision-making and research.</p>
<p style="margin-bottom: 30px;">

<p><strong>Read more:</strong> Full article from Philippine News Agency (PNA) <a href="https://www.pna.gov.ph/articles/1225994" target="_blank">here</a></p>
<p style="margin-bottom: 10px;">

<p><strong>Tags:</strong> #WEHLO #DOST #MapuaUniversity #ClimateResilience #WeatherMonitoring #LaNina #DisasterPreparedness</p>
',
                'image' => '/images/uploads/wehlo-blog4.png',
            ]
        ];

        foreach ($posts as $post) {
            $categoryName = $post['category'];
            unset($post['category']);

            if (empty($post['slug'])) {
                $post['slug'] = Str::slug($post['title']);
            }

            $news = News::create($post);

            // Attach category
            if (isset($categoryModels[$categoryName])) {
                $news->categories()->attach($categoryModels[$categoryName]->id);
            }
        }
    }
}
