<?php

namespace App\Http\Livewire\Admin\Transaction\Approval\Detail;

use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FixedIncome extends Component
{
    public $DealNo, $Data, $DealPrice;

    public function DealPrice(){
        try{
            DB::table('TDealAcqPrice')->create([
                'Dealno' => $this->DealNo,
                'Facevalue' => $this->DealNo,
                'AcqPrice' => $this->DealNo,
                'SellAcqDate' => $this->DealNo
            ])->save();
        }catch(Exception $ex){
            $this->dispatchBrowserEvent('MError', ['message' => 'Error insert to database, Contact your IT!']);
        }
    }
    
    

    

    public function render()
    {
        $this->Data = DB::select("EXEC Rev_Get_Detail_Deal_Approval @DealNo='".$this->DealNo."', @Category='FI'");
        $this->DealPrice = DB::table('TDealAcqPrice')->where('DealNo', $this->DealNo)->get();
        // dd($this->data);
        // dd($DealPrice);
        return view('livewire.admin.transaction.approval.detail.fixed-income');
    }
}
