<?php

namespace App\Http\Livewire\Admin\Transaction\Dealentry;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FixedIncome extends Component
{
    public $DataInstrument, $instrumentcode, $instrumentSname;
    public function ChoiseInstrument($instrumentcode, $instrumentname){
        // dd(trim($instrumentname));
        $this->instrumentcode = trim($instrumentcode);
        $this->instrumentSname = trim($instrumentname);
        $this->dispatchBrowserEvent('HideModelInstrument');
    }
    

    public $DataPortfolio, $foliocode, $folioname;
    public function ChoisePortfolio($foliocode, $folioname){
        $this->foliocode = trim($foliocode);
        $this->folioname = trim($folioname);
        $this->dispatchBrowserEvent('HideModelPortfolio');
    }

    public $DataCounterParty, $CPartyCode, $CPartyName;
    public function ChoiseCounterParty($CPartyCode, $CPartyName){
        $this->CPartyCode = trim($CPartyCode);
        $this->CPartyName = trim($CPartyName);
        $this->dispatchBrowserEvent('HideModelCounterParty');
    }


    public function render()
    {
        $this->DataInstrument = DB::select("exec dbo.[sp_EQTr_GetInstrument] @sCategory='FI',@sInitial='',@iErrorCode=0");
        $this->DataPortfolio = DB::select("exec dbo.[sp_MMTr_GetPortfolio] @sInstrumentCode='".$this->instrumentcode."',@iErrorCode=0");
        $this->DataCounterParty = DB::select("exec dbo.[sp_MMTr_GetAllCParty] @sInitial='',@iErrorCode=0");

        return view('livewire.admin.transaction.dealentry.fixed-income');
    }
}
