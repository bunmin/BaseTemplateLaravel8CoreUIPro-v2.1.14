<?php

namespace App\Console\Commands;

use App\Notifications\ScraperFailNotification;
use App\Repository\ImportIdxStockSummaryRepo;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\http;
use Illuminate\Support\Facades\Notification;

class ScrapeIDX extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:idx';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrap Idx data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $idxStockSummaryRepo = new ImportIdxStockSummaryRepo();

        $date_scrap = date("Ymd", strtotime("-1 days"));
        $recordsTotal = 1;
        $url = "https://www.idx.co.id/umbraco/Surface/TradingSummary/GetStockSummary?date=$date_scrap&length=$recordsTotal";
        $response = Http::get($url);

        //this phase 1 scraper, mean page failed loaded
        if ($response->json() == null) {
            $email = config('app.mail_receiver_alert');
            $information = collect(
                [
                    "phase" => 1,
                    "date_scrap" => $date_scrap,
                    "url" => $url,
                ]
            );
            Notification::route('mail', $email)->notify(new ScraperFailNotification($information));

            return;
        };

        //this phase 2 scraper, mean data not founded
        $recordsTotal = $response->json()['recordsTotal'];
        if ($recordsTotal <= 0) {
            $email = config('app.mail_receiver_alert');
            $information = collect(
                [
                    "phase" => 2,
                    "date_scrap" => $date_scrap,
                    "url" => $url,
                ]
            );
            Notification::route('mail', $email)->notify(new ScraperFailNotification($information));

            return;
        };

        $url = "https://www.idx.co.id/umbraco/Surface/TradingSummary/GetStockSummary?date=$date_scrap&length=$recordsTotal";
        $response = Http::get($url);
        $datas = $response->json()['data'];

        //first : delete old data with same date_scrap
        $idxStockSummaryRepo->deleteScarpByDate($date_scrap);

        //second : insert data scraped
        foreach ($datas as $data) {
            $data['date_scrap'] = $date_scrap;

            $idxStockSummaryRepo->saveScrap($data);
        }

        echo "====Import Done====";
        return;
    }
}
