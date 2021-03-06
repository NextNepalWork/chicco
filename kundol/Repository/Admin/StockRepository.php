<?php

namespace App\Repository\Admin;

use App\Contract\Admin\StockInterface;
use App\Http\Resources\Admin\Stock as StockResource;
use App\Models\Admin\Inventory;
use App\Models\Admin\Language;
use App\Models\Admin\Product;
use App\Traits\ApiResponser;
use Illuminate\Support\Collection;

class StockRepository implements StockInterface
{
    use ApiResponser;
    /**
     * @return Collection
     */
    public function all()
    {
        try {
            $stock = new Inventory;

            $languageId = Language::defaultLanguage()->value('id');
            if (isset($_GET['language_id']) && $_GET['language_id'] != '') {
                $language = Language::languageId($_GET['language_id'])->firstOrFail();
                $languageId = $language->id;
            }
            if (isset($_GET['getProduct']) && $_GET['getProduct'] == '1') {
                $stock = $stock->with('product.detail');
                $stock = $stock->with('product.detail', function ($querys) use ($languageId) {
                    $querys->where('language_id', $languageId);
                });
                // return $stock->toSql();
            }

            if (isset($_GET['limit']) && is_numeric($_GET['limit']) && $_GET['limit'] > 0) {
                $numOfResult = $_GET['limit'];
            } else {
                $numOfResult = 100;
            }

            if (isset($_GET['getWarehouse']) && $_GET['getWarehouse'] == '1') {
                $stock = $stock->with('warehouse');
            }

            $sortBy = ['stock_status'];
            $sortType = ['ASC', 'DESC', 'asc', 'desc'];
            if (isset($_GET['sortBy']) && $_GET['sortBy'] != '' && isset($_GET['sortType']) && $_GET['sortType'] != '' && in_array($_GET['sortBy'], $sortBy) && in_array($_GET['sortType'], $sortType)) {
                $stock = $stock->orderBy($_GET['sortBy'], $_GET['sortType']);
            }

            // return $stock->get();

            return $this->successResponse(StockResource::collection($stock->paginate($numOfResult)), 'Data Get Successfully!');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function show($stock)
    {
        $stock = Inventory::where('id', $stock->id);
        try {

            $languageId = Language::defaultLanguage()->value('id');
            if (isset($_GET['language_id']) && $_GET['language_id'] != '') {
                $language = Language::languageId($_GET['language_id'])->firstOrFail();
                $languageId = $language->id;
            }
            if (isset($_GET['getProduct']) && $_GET['getProduct'] == '1') {
                $stock = $stock->with('product.detail', function ($querys) use ($languageId) {
                    $querys->where('language_id', $languageId);
                });
            }

            if (isset($_GET['getWarehouse']) && $_GET['getWarehouse'] == '1') {
                $stock = $stock->with('warehouse');
            }
            return $this->successResponse(new StockResource($stock->firstOrFail()), 'Data Get Successfully!');
        } catch (Exception $e) {
            return $this->errorResponse();
        }
    }

    public function store(array $parms)
    {
        try {
            
            $product = Product::productId($parms['product_id'])->firstOrFail();
            if($product && isset($product->product_type)){
                if($product->product_type === 'simple'){
                    foreach ($parms['product_id'] as $i => $product_id) {
                        if (isset($parms['warehouse_id'][$i]) && isset($parms['stock_status'][$i]) && isset($parms['qty'][$i]) && $parms['qty'][$i] > 0) {
        
                            if($parms['warehouse_id'][$i] != null || $parms['stock_status'][$i] != null || $parms['qty'][$i] != 0){
                                $data['product_id'] = $product_id;
                                $data['warehouse_id'] = $parms['warehouse_id'][$i];
                                $data['stock_status'] = $parms['stock_status'][$i];
                                $data['qty'] = $parms['qty'][$i];
                                $data['stock_type'] = 'StockAdjustment';
                                $sql = new Inventory;
                                $sql = $sql->create($data);   
                            }
                           
                        }
        
                    }

                }else{
                    if (count($parms['product_id']) != count($parms['product_combination_id'])) {
                        return $this->errorResponse('All Variable Array Size Not Same!');
                    }
                    
                    foreach ($parms['product_id'] as $i => $product_id) {
                        if (isset($parms['warehouse_id'][$i]) && isset($parms['stock_status'][$i]) && isset($parms['qty'][$i]) && $parms['qty'][$i] > 0) {
        
                            if($parms['warehouse_id'][$i] != null || $parms['stock_status'][$i] != null || $parms['qty'][$i] != 0){
                                $data['product_id'] = $product_id;
                                $data['product_combination_id'] = $parms['product_combination_id'][$i];
                                $data['warehouse_id'] = $parms['warehouse_id'][$i];
                                $data['stock_status'] = $parms['stock_status'][$i];
                                $data['qty'] = $parms['qty'][$i];
                                $data['stock_type'] = 'StockAdjustment';
                                $sql = new Inventory;
                                $sql = $sql->create($data);   
                            }
                           
                        }
        
                    }
                }

            }
            
        } catch (Exception $e) {
            return $this->errorResponse();
        }

        if ($sql) {
            return $this->successResponse(new StockResource($sql), 'Stock Save Successfully!');
        } else {
            return $this->errorResponse();
        }
    }
}
