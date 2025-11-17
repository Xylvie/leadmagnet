<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/')->setLastModificationDate(now())->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)->setPriority(1.0))
            ->add(Url::create('/dashboard')->setLastModificationDate(now())->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)->setPriority(0.8))
            ->add(Url::create('/leads/create')->setLastModificationDate(now())->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)->setPriority(0.6))
            ->writeToFile(public_path('sitemap.xml'));
    }
}
