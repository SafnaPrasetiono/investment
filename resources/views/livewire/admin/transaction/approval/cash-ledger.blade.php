<div>
    @if (count($data) > 0)
        <div class="d-flex align-items-stretch" style="height: 70vh">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            @foreach ($dataKey as $item)
                                <th>{{ $item }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $Ditem)
                            <?php $dt = collect($Ditem); ?>
                            <tr>
                                @foreach ($dataKey as $item)
                                    @if ($item == 'Amount')
                                        <td class="text-nowrap text-end">
                                            {{ number_format(abs($dt[$item]), 2, ',', '.') }}</td>
                                    @else
                                        <td class="text-nowrap">{{ $dt[$item] }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="d-flex flex-column align-items-center justify-content-center w-100" style="height: 55vh">
            <i class="fa fa-dropbox fa-3x fa-fw" aria-hidden="true"></i>
            <h4>Tidak Ada Data!</h4>
        </div>
    @endif
</div>
