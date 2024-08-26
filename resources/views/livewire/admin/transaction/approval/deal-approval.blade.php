<div>
    <div class="container-fluid">
        <div class="row g-3">


            <div class="col-12">
                <div class="d-block rounded bg-white shadow p-3">
                    <h3 class="fw-bold mb-0">Deal Approval</h3>
                    <p class="mb-0">Wellcome in deal approval pages</p>
                </div>
            </div>

            {{-- FORM --}}
            <div class="col-12">
                <form wire:submit.prevent="searched" class="d-block rounded bg-white shadow p-3">
                    <div class="row g-3">

                        <div class="col-6">
                            <div class="row g-3">

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <label class="form-label" for="#Categori">Categori</label>
                                        </div>
                                        <div class="col-8">
                                            <select wire:model="ctgCode" id="Categori" class="form-select">
                                                @foreach ($dataCtgFund as $item)
                                                    <option value="{{ $item->CategoryCode }}">{{ $item->CategoryName }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <label for="trade" class="form-label">Trade Date</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="row g-2">
                                                <div class="col-6">
                                                    <input type="date" wire:model="sDate" id="trade"
                                                        class="form-control">
                                                </div>
                                                <div class="col-6">
                                                    <input type="date" wire:model="eDate" id="trade"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <label class="form-label" for="#TypeApproval">Type Approval</label>
                                        </div>
                                        <div class="col-8">
                                            <select wire:model="typeApp" id="TypeApproval" class="form-select">
                                                <option value="BOOT">Boot</option>
                                                <option value="TRUE">Approved</option>
                                                <option value="FALSE">Not Approved</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-6">

                        </div>

                        <div class="col-12">
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary px-4">
                                    <span class="px-2">Search</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>


            {{-- TABLE --}}
            @if (is_null($data))
                <div class="col-12">
                    <div class="d-block justify-content-center align-items center bg-white rounded shadow p-3">
                        <div class="text-center border rounded p-4">
                            <i class="fa-regular fa-boxes-stacked fa-fw fa-5x"></i>
                            <h2>Oops!!!</h2>
                            <h3>Sorry Data Not Fund!</h3>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12">
                    <div class="d-block bg-white rounded shadow p-3">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-sm">
                                <thead class="table-light">
                                    <tr>
                                        <th class="px-2">
                                            <input type="checkbox" wire:model="selected"
                                                wire:click="$emit('postAdded')">
                                        </th>
                                        @foreach ($dataKey as $item)
                                            <th class="px-2">{{ $item }}</th>
                                        @endforeach
                                        <th class="px-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <?php $datap = (array) $item; ?>
                                        <tr>
                                            <th class="px-2">
                                                <input type="checkbox" wire:model="checkedId"
                                                    wire:click="$emit('Unchecklis')"
                                                    value="{{ $datap['InstrumentCode'] }}" class="checklist">
                                            </th>
                                            @foreach ($dataKey as $ket)
                                                @if ($ket == 'Face_Value' or $ket == 'CapitalCost' or $ket == 'Accrued_Interest' or $ket == 'SettleAmount')
                                                    <td class="text-nowrap text-end px-3">
                                                        {{ number_format($datap[$ket], 2, ',', '.') }}</td>
                                                @else
                                                    <td class="text-nowrap px-2">{{ $datap[$ket] }}</td>
                                                @endif
                                            @endforeach
                                            <td>
                                                <button
                                                    wire:click="OpenDetail('{{ $datap['DealNo'] }}', '{{ $typeApp }}')"
                                                    class="btn btn-primary btn-sm rounded-pill px-2"
                                                    type="button">Detail</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between bg-white rounded shadow p-3">
                        <div class="d-flex">
                            <p class="fw-bold mb-0">Total Record :</p>
                            <span class="ms-2">{{ count($data) }}</span>
                        </div>
                        <div>
                            {{ var_export($checkedId) }}
                        </div>
                        <button type="button" wire:click="kontol" class="btn btn-primary btn-sm px-5">Approved</button>
                    </div>
                </div>
            @endif


        </div>
    </div>



    {{-- MODAL --}}
    <div id="myModal" class="modal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex justify-content-between py-2 px-3">
                    <p class="fw-bold mb-0">Deal Fixed Income</p>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link rounded-0 active" data-bs-toggle="tab" data-bs-target="#nav-home"
                                type="button">General</button>
                            <button class="nav-link rounded-0" data-bs-toggle="tab" data-bs-target="#CashFlow"
                                type="button">Cash Flow</button>
                            <button class="nav-link rounded-0" data-bs-toggle="tab" data-bs-target="#SecFlow"
                                type="button">Security Flow</button>
                            <button class="nav-link rounded-0" data-bs-toggle="tab" data-bs-target="#CashLedger"
                                type="button">Cash Ledger</button>
                            <button class="nav-link rounded-0" data-bs-toggle="tab" data-bs-target="#SecLedger"
                                type="button">Security Ledger</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home">
                            @if ($DealNo)
                                @if ($ctgCode == 'FI')
                                    @livewire('admin.transaction.detail.fixed-income', ['DealNo' => $DealNo])
                                @endif
                            @endif
                        </div>
                        <div class="tab-pane fade" id="CashFlow">
                            @if ($DealNo)
                                @livewire('admin.transaction.cash-flow', ['DealNo' => $DealNo])
                            @endif
                        </div>
                        <div class="tab-pane fade" id="SecFlow">
                            @if ($DealNo)
                                @livewire('admin.transaction.sec-flow', ['DealNo' => $DealNo])
                            @endif
                        </div>
                        <div class="tab-pane fade" id="CashLedger">
                            @if ($DealNo)
                                @livewire('admin.transaction.cash-ledger', ['DealNo' => $DealNo])
                            @endif
                        </div>
                        <div class="tab-pane fade" id="SecLedger">
                            @if ($DealNo)
                                @livewire('admin.transaction.sec-ledger', ['DealNo' => $DealNo])
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="loading" wire:loading.flex wire:target="OpenDetail">
        <div class="loading-stage">
            <div class="📦"></div>
            <div class="📦"></div>
            <div class="📦"></div>
            <div class="📦"></div>
            <div class="📦"></div>
        </div>
    </div>


    <script>
        window.addEventListener('ShowDetailModel', () => {
            $('#myModal').modal("show");
        })
    </script>
</div>
