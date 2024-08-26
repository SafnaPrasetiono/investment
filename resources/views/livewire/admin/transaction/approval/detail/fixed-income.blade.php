<div>
    <div class="overflow-y-auto p-2" style="height: 70vh">

        <div class="d-block rounded border p-2 mb-3">
            <div class="row g-3">
                <div class="col-8">
                    <div class="row g-2 mb-1">
                        <div class="col-3">
                            <label for="#">Instrument</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->InstrumentCode }}">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->InstrumentSName }}">
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col-3">
                            <label for="#">Portfolio</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->FolioCode }}">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->PFolioSName }}">
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col-3">
                            <label for="#">Counter Party</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->CPartyCode }}">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->CPartyName }}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row g-2 mb-1">
                        <div class="col-5">
                            <label for="#">ISIN Code</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->ISINCode }}">
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col-5">
                            <label for="#">Sub Type</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->SubTypeName }}">
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col-5">
                            <label for="#">Currency</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control form-control-sm" disabled value="{{ $Data[0]->CurrencyCode }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-block">
            <div class="row">
                <div class="col-8">

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
