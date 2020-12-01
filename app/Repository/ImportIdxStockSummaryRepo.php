<?php

namespace App\Repository;

use App\Models\ImportIdxStockSummary;
use DateTime;

class ImportIdxStockSummaryRepo
{
    public function saveScrap($data)
    {
        $result = new ImportIdxStockSummary;
        $result->date_scrap = $data['date_scrap'];
        $result->idx_id_stock_summary = $data['IDStockSummary'];
        $result->idx_date = new DateTime($data['Date']);
        $result->idx_stock_code = $data['StockCode'];
        $result->idx_stock_name = $data['StockName'];
        $result->idx_remarks = $data['Remarks'];
        $result->idx_previous = $data['Previous'];
        $result->idx_open_price = $data['OpenPrice'];
        $result->idx_first_trade = $data['FirstTrade'];
        $result->idx_high = $data['High'];
        $result->idx_low = $data['Low'];
        $result->idx_close = $data['Close'];
        $result->idx_change = $data['Change'];
        $result->idx_volume = $data['Volume'];
        $result->idx_value = $data['Value'];
        $result->idx_frequency = $data['Frequency'];
        $result->idx_index_individual = $data['IndexIndividual'];
        $result->idx_offer = $data['Offer'];
        $result->idx_offer_volume = $data['OfferVolume'];
        $result->idx_bid = $data['Bid'];
        $result->idx_bid_volume = $data['BidVolume'];
        $result->idx_listed_shares = $data['ListedShares'];
        $result->idx_tradeble_shares = $data['TradebleShares'];
        $result->idx_weight_for_index = $data['WeightForIndex'];
        $result->idx_foreign_sell = $data['ForeignSell'];
        $result->idx_foreign_buy = $data['ForeignBuy'];
        $result->idx_delisting_date = $data['DelistingDate'];
        $result->idx_non_regular_volume = $data['NonRegularVolume'];
        $result->idx_non_regular_value = $data['NonRegularValue'];
        $result->idx_non_regular_frequency = $data['NonRegularFrequency'];
        $result->idx_persen = $data['persen'];
        $result->idx_percentage = $data['percentage'];
        $result->save();

        return $result;
    }

    public function deleteScarpByDate($date_scarp)
    {
        $results = ImportIdxStockSummary::where('date_scrap',$date_scarp)->get();
        foreach ($results as $result) {
            $result->delete();
        }
    }
}
