<?php

namespace Database\Seeders;

use App\Models\GuideArticle;
use Illuminate\Database\Seeder;

class GuideArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'First-Time Umrah Traveller: What to Pack and Prepare',
                'slug' => 'first-time-umrah-traveller-what-to-pack',
                'category' => 'Religious Travel',
                'excerpt' => 'A practical checklist for pilgrims preparing for their first Umrah journey, from documentation to daily essentials.',
                'body' => "Preparing for Umrah involves more than packing a suitcase — it's about arriving spiritually and physically ready.\n\n**Documentation:** Ensure your passport has at least six months' validity, and confirm your pilgrimage visa is processed through a licensed agent.\n\n**What to pack:** Comfortable, well worn-in walking shoes; modest, breathable clothing; a small first-aid kit; and any personal medication in its original packaging.\n\n**Health:** Check whether any vaccinations are currently required, and consult your doctor if you have existing health conditions before a long journey.\n\n**On arrival:** Follow the guidance of your group leader and official pilgrimage authorities regarding rites, crowd movement, and prayer timings.\n\nOur team is on hand throughout your journey to help with logistics, so you can focus on your worship.",
                'read_time' => '4 min read',
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Dubai on a Mid-Range Budget: A Practical Guide',
                'slug' => 'dubai-mid-range-budget-guide',
                'category' => 'Budget Travel',
                'excerpt' => 'How to experience Dubai\'s highlights without an unlimited budget — where to stay, eat, and save.',
                'body' => "Dubai has a reputation for luxury, but it's entirely possible to enjoy the city on a mid-range budget with some planning.\n\n**Accommodation:** Areas like Deira and Bur Dubai offer comfortable 3–4 star hotels at a fraction of beachfront resort prices, with easy metro access to major attractions.\n\n**Getting around:** The Dubai Metro is inexpensive and covers most tourist areas; a rechargeable Nol card makes travel simple.\n\n**Free and low-cost activities:** The Dubai Fountain show is free, and areas like Al Fahidi Historic District and the souks offer rich experiences without an entry fee.\n\n**Eating well for less:** Old Dubai's small restaurants and food stalls offer excellent value alongside the city's fine-dining scene.\n\nAsk our consultants about mid-range package options when planning your trip.",
                'read_time' => '5 min read',
                'published_at' => now()->subDays(20),
            ],
        ];

        foreach ($articles as $article) {
            GuideArticle::updateOrCreate(['slug' => $article['slug']], $article);
        }
    }
}
