<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Migration</h3>
                <p class="text-subtitle text-muted">Migration data history karyawan in or out barrier</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Barrier</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>


    <section class="section">

        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <h5 class="card-title">Import File (Excel)</h5> 
                        </div>
                        <div class="col-md-6 col-6">
                            <button type="button" class="btn btn-warning float-end"><i class="fa-sharp fa-light fa-gear"></i> aSave</button>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <input id="fileSelect" class="form-control" type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

<script>
    $(function() {

    })
    $('#fileSelect').change(function name(params) {
        var file = this.files[0];
        var fileType = file.type;
        var allowedTypes = ["text/csv", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.ms-excel"];
        if (allowedTypes.indexOf(fileType) == -1) {
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: 'File type not allowed, please use allowed  format',
            })
            $(this).val("");
            return false;
        }
    })
    
</script>
