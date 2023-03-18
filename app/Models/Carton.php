<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carton extends Model
{
    use HasFactory;

    public static function query_carton($awal, $akhir)
    {
        $data = DB::connection('erp')->select('exec sp_cal_carton_pack @buyer = ?, @bay = ?, @xBegin = ?, @xEnd = ?', array('H&M', 2, $awal, $akhir));
        return $data;
    }

    public static function query_assort()
    {
        $data = DB::connection('erp')->select("select top 1000 k.sID as sIndex, k.xFactBuyUnitQty as xtQty,k.xDefUnitFactQty as xxQty, k.xStockDoQty, a.sCode AS _Acce_Code, a.xKind AS _Acce_Kind, a.xName AS _Acce_Name, b.xSpec AS xSpec,
        b.xDesc AS xDesc, b.xColor, b.xSize, b.xOther, b.xPO, b.xStyleNo2 AS xStyleNo, a.xCIQKind AS _Acce_CIQ, b.xCustAcceryCode, b.xUse,
        cc.xSymbol AS _Cust_Symbol,  k.xFactBuyUnit as sUnit, c._Depot_code as xdepot, c._Depot_Name as xdepot_detail, v.xBuyNo AS xBuyNo, v.xBuyPrice as price,
        v.xBillInNo AS xNpb,
        d.xSymbol as supplier
        FROM rv_stocknew AS k WITH(NOLOCK) INNER JOIN rt_barcode AS b ON b.sID = k.rBC_ID
         INNER JOIN rv_accessory AS a ON a.sID = b.rAcce_ID
         INNER JOIN rv_place AS c ON c.sID = k.rPlace_ID  LEFT JOIN zt_customer AS cc ON b.rCust_ID = cc.sID
        LEFT JOIN rv_src AS v ON k.rBill_Type=v.rBill_Type AND k.rBill_mID=v.rBill_mID AND k.rBill_dID=v.rBill_dID
        LEFT JOIN zt_customer AS d ON b.rSupp_ID = d.sID
        where k.xDefUnitFactQty > 0 and cc.xSymbol = 'H&M' and a.sCode IN ('CB-0005', 'CB-0007', 'CB-0008' , 'CB-0009', 'CB-0010', 'CB-0011', 'CB-0012')
        ");
        return $data;
    }

    public static function query_target($p, $l, $t)
    {
        $data = DB::connection('erp')->select('exec sp_cal_carton_pack @buyer = ?, @bay = ?, @P = ?, @L = ?, @T = ?', array('TARGET', 3, $p, $l, $t));
        return $data;
    }
    public static function query_jcp($p, $l, $t)
    {
        $data = DB::connection('erp')->select('exec sp_cal_carton_pack @buyer = ?, @bay = ?, @P = ?, @L = ?, @T = ?', array('NEA-JCP', 3, $p, $l, $t));
        return $data;
    }

    public static function query_acce_target()
    {
        $data = DB::connection('erp')->select("select top 1000 k.sID as sIndex, k.xFactBuyUnitQty as xtQty,k.xDefUnitFactQty as xxQty, k.xStockDoQty, a.sCode AS _Acce_Code, a.xKind AS _Acce_Kind, a.xName AS _Acce_Name, b.xSpec AS xSpec,
        b.xDesc AS xDesc, b.xColor, b.xSize, b.xOther, b.xPO, b.xStyleNo2 AS xStyleNo, a.xCIQKind AS _Acce_CIQ, b.xCustAcceryCode, b.xUse,
        cc.xSymbol AS _Cust_Symbol,  k.xFactBuyUnit as sUnit, c._Depot_code as xdepot, c._Depot_Name as xdepot_detail, v.xBuyNo AS xBuyNo, v.xBuyPrice as price,
        v.xBillInNo AS xNpb,
        d.xSymbol as supplier
        FROM rv_stocknew AS k WITH(NOLOCK) INNER JOIN rt_barcode AS b ON b.sID = k.rBC_ID
         INNER JOIN rv_accessory AS a ON a.sID = b.rAcce_ID
         INNER JOIN rv_place AS c ON c.sID = k.rPlace_ID  LEFT JOIN zt_customer AS cc ON b.rCust_ID = cc.sID
        LEFT JOIN rv_src AS v ON k.rBill_Type=v.rBill_Type AND k.rBill_mID=v.rBill_mID AND k.rBill_dID=v.rBill_dID
        LEFT JOIN zt_customer AS d ON b.rSupp_ID = d.sID
        where k.xDefUnitFactQty > 0 and cc.xSymbol = 'TARGET' and a.sCode IN ('CB-0005', 'CB-0007', 'CB-0008' , 'CB-0009', 'CB-0010', 'CB-0011', 'CB-0012')
        ");
        return $data;
    }

    public static function query_acce_jcp()
    {
        $data = DB::connection('erp')->select("select top 1000 k.sID as sIndex, k.xFactBuyUnitQty as xtQty,k.xDefUnitFactQty as xxQty, k.xStockDoQty, a.sCode AS _Acce_Code, a.xKind AS _Acce_Kind, a.xName AS _Acce_Name, b.xSpec AS xSpec,
        b.xDesc AS xDesc, b.xColor, b.xSize, b.xOther, b.xPO, b.xStyleNo2 AS xStyleNo, a.xCIQKind AS _Acce_CIQ, b.xCustAcceryCode, b.xUse,
        cc.xSymbol AS _Cust_Symbol,  k.xFactBuyUnit as sUnit, c._Depot_code as xdepot, c._Depot_Name as xdepot_detail, v.xBuyNo AS xBuyNo, v.xBuyPrice as price,
        v.xBillInNo AS xNpb,
        d.xSymbol as supplier
        FROM rv_stocknew AS k WITH(NOLOCK) INNER JOIN rt_barcode AS b ON b.sID = k.rBC_ID
         INNER JOIN rv_accessory AS a ON a.sID = b.rAcce_ID
         INNER JOIN rv_place AS c ON c.sID = k.rPlace_ID  LEFT JOIN zt_customer AS cc ON b.rCust_ID = cc.sID
        LEFT JOIN rv_src AS v ON k.rBill_Type=v.rBill_Type AND k.rBill_mID=v.rBill_mID AND k.rBill_dID=v.rBill_dID
        LEFT JOIN zt_customer AS d ON b.rSupp_ID = d.sID
        where k.xDefUnitFactQty > 0 and cc.xSymbol = 'NEA-JCP' and a.sCode IN ('CB-0005', 'CB-0007', 'CB-0008' , 'CB-0009', 'CB-0010', 'CB-0011', 'CB-0012')
        ");
        return $data;
    }
}
