<?php

namespace App\Http\Livewire\Admin\Transaction\Approval;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SecFlow extends Component
{
    public $DealNo;
    public $data, $dataKey;

    public function mount()
    {
        $this->data = DB::select("EXEC Rev_Get_Detail_Deal_Approval_Table @DealNo='". $this->DealNo ."', @type='SecFlow'");
        if(count($this->data) > 0){
            $this->dataKey = collect($this->data[0])->keys();
        }
        // dd($this->data);
    }
    public function render()
    {
        return view('livewire.admin.transaction.approval.sec-flow');
    }
}
