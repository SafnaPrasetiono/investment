<div>

    <div class="container-fluid">

        <div class="d-block rounded bg-white shadow p-3 mb-3">
            <h3 class="fw-bold mb-0">Deal Entry - Fixed Income</h3>
            <p class="mb-0">Wellcome in deal entry fixed income pages</p>
        </div>

        <div class="d-block rounded bg-white shadow p-3 mb-3">

            <div class="d-block rounded border p-2 mb-3">
                <div class="row g-3">
                    <div class="col-8">
                        <div class="row g-2 mb-1">
                            <div class="col-3">
                                <label for="#">Instrument</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control form-control-sm" disabled wire:model="instrumentcode">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control form-control-sm" disabled wire:model="instrumentSname">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#ModalFixedIncome">
                                    <i class="fas fa-search fa-xs fa-fw"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row g-2 mb-1">
                            <div class="col-3">
                                <label for="#">Portfolio</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control form-control-sm" disabled wire:model="foliocode">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control form-control-sm" disabled wire:model="folioname">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#ModalPortfolio">
                                    <i class="fas fa-search fa-xs fa-fw"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row g-2 mb-1">
                            <div class="col-3">
                                <label for="#">Counter Party</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control form-control-sm" disabled wire:model="CPartyCode">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control form-control-sm" disabled wire:model="CPartyName">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalCounterParty">
                                    <i class="fas fa-search fa-xs fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row g-2 mb-1">
                            <div class="col-5">
                                <label for="#">ISIN Code</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" disabled>
                            </div>
                        </div>
                        <div class="row g-2 mb-1">
                            <div class="col-5">
                                <label for="#">Sub Type</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" disabled>
                            </div>
                        </div>
                        <div class="row g-2 mb-1">
                            <div class="col-5">
                                <label for="#">Currency</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-block">
                <div class="row">
                    <div class="col-8">

                        <div class="d-block p-2 mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="#dtype" class="form-label">Deal Type</label>
                                    <select name="" id="dtype" class="form-select form-select-sm">
                                        <option value="BUY">Buy</option>
                                        <option value="SELL">Sell</option>
                                        <option value="IPO">Ipo</option>
                                        <option value="AMORT">Amort</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="#" class="form-label">Bank Account</label>
                                    <div class="d-flex">
                                        <input type="text" class="form-control form-control-sm rounded-end-0">
                                        <button class="btn btn-primary btn-sm rounded-start-0">
                                            <i class="fas fa-search fa-xs fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="#" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>

                        <div class="d-block rounded border p-2 mb-3">
                            <div class="row justify-content-center align-items-end">
                                <div class="col-4">
                                    <label for="#" class="form-label">Face Value Acq</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                                <div class="col-3">
                                    <label for="#" class="form-label">Seller Acq Price</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                                <div class="col-3">
                                    <label for="#" class="form-label">Seller Acq Date</label>
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-sm btn-primary w-100">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>

        </div>

    </div>




    {{-- INSTRUMENT MODAL --}}
    <div class="modal fade" id="ModalFixedIncome" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Instrument</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Instrument Code</th>
                                    <th>Instrument Name</th>
                                    <th>ISIN Code</th>
                                    <th>Sub Type Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($DataInstrument as $item)
                                    <?php $dt = collect($item); ?>
                                    <tr style="cursor: pointer"
                                        wire:click="ChoiseInstrument('{{ $dt['InstrumentCode'] }}', '{{ $dt['InstrumentSName'] }}')">
                                        <td>{{ $item->InstrumentCode }}</td>
                                        <td>{{ $item->InstrumentSName }}</td>
                                        <td>{{ $item->ISINCode }}</td>
                                        <td>{{ $item->SubTypeName }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PORTFOLIO MODAL --}}
    <div class="modal fade" id="ModalPortfolio" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Instrument</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Portfolio Code</th>
                                    <th>Portfolio Name</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($DataPortfolio as $itemp)
                                    <?php $dtp = collect($itemp); ?>
                                    <tr style="cursor: pointer"
                                        wire:click="ChoisePortfolio('{{ $dtp['PFolioCode'] }}', '{{ $dtp['PFolioSName'] }}')">
                                        <td>{{ $itemp->PFolioCode }}</td>
                                        <td>{{ $itemp->PFolioSName }}</td>
                                        <td>{{ $itemp->YearBeginDate }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- COUNTERPARTY MODAL --}}
    <div class="modal fade" id="ModalCounterParty" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Instrument</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Portfolio Code</th>
                                    <th>Portfolio Name</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($DataCounterParty as $itemc)
                                    <?php $dtc = collect($itemc); ?>
                                    <tr style="cursor: pointer"
                                        wire:click="ChoiseCounterParty('{{ $dtc['CPartyCode'] }}', '{{ $dtc['CPartyName'] }}')">
                                        <td>{{ $itemc->CPartyCode }}</td>
                                        <td>{{ $itemc->CPartyName }}</td>
                                        <td>{{ $itemc->CPartyTypeCode }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        // INSTRUMENT
        window.addEventListener('HideModelInstrument', () => {
            $('#ModalFixedIncome').modal("hide");
        })

        // PORTFOLIO
        window.addEventListener('HideModelPortfolio', () => {
            $('#ModalPortfolio').modal("hide");
        })
        
        // COUNTERPARTY
        window.addEventListener('HideModelCounterParty', () => {
            $('#ModalCounterParty').modal("hide");
        })
    </script>

</div>
