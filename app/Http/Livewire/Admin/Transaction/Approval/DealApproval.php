<?php

namespace App\Http\Livewire\Admin\Transaction\Approval;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DealApproval extends Component
{
    public $dataCtgFund, $data, $dataKey;
    public $ctgCode, $sDate, $eDate, $typeApp;
    public $checkedId = [];
    public $selected = false;

    protected $listeners = [
        'postAdded' => 'selectedAll',
        'Unchecklis' => 'unSelected',
        // 'ShowModal' => 'ShowDetailModel'
    ];

    public function searched()
    {
        $data = DB::select("exec Rev_Get_Deal_Approval @CategoryCode='" . $this->ctgCode . "', @startDate='" . $this->sDate . "', @endDate='" . $this->eDate . "', @Approved='" . $this->typeApp . "'");
        if (count($data) > 0) {
            $this->dataKey = collect($data[0])->keys();
            $this->data = collect($data)->toArray();
            // dd($this->data);
        }
    }

    public function selectedAll()
    {
        if ($this->selected == true) {
            $this->checkedId = [];
            foreach ($this->data as $it) {
                if($it['Approved'] == "No"){
                    array_push($this->checkedId, $it["InstrumentCode"]);
                }
            }
        } else {
            $this->checkedId = [];
        }
    }



    public $DealNo;
    // OPEN DETAIL
    public function OpenDetail($DealNo)
    {
        $this->DealNo = $DealNo;
        $this->dispatchBrowserEvent('ShowDetailModel');
        // $dataDetail = DB::select("exec Rev_Get_Detail_Deal_Approval @DealNo='" . $DealNo . "', @Category='FI'");

    }







    public function render()
    {
        $this->dataCtgFund = DB::select("exec Rev_TCategory_SelectAll");
        return view('livewire.admin.transaction.approval.deal-approval');
    }
}
