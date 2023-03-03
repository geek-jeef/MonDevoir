<section>
    
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Table</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Table -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Basic Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="basic-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-dark mt-5">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-basic-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-dark mt-5">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Table -->
            <!-- BEGIN: Bordered Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Bordered Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#bordered-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="bordered-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-bordered-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-bordered-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Bordered Table -->
            <!-- BEGIN: Hoverable Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Hoverable Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#hoverable-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="hoverable-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-hoverable-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-hoverable-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Hoverable Table -->
            <!-- BEGIN: Table Row States -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Table Row States</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#row-states-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="row-states-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-primary text-white">
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr class="bg-danger text-white">
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr class="bg-warning">
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-row-states-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-row-states-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-primary text-white">
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr class="bg-danger text-white">
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr class="bg-warning">
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Row States -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Table Head Options -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Table Head Options</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#head-options-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="head-options-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table mt-5">
                                <thead class="table-light">
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-head-options-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-head-options-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table mt-5">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Table Head Options -->
            <!-- BEGIN: Responsive Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Responsive Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#responsive-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="responsive-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                        <th class="whitespace-nowrap">Email</th>
                                        <th class="whitespace-nowrap">Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="whitespace-nowrap">1</td>
                                        <td class="whitespace-nowrap">Angelina</td>
                                        <td class="whitespace-nowrap">Jolie</td>
                                        <td class="whitespace-nowrap">@angelinajolie</td>
                                        <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            260 W. Storm Street New York, NY 10025.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap">2</td>
                                        <td class="whitespace-nowrap">Brad</td>
                                        <td class="whitespace-nowrap">Pitt</td>
                                        <td class="whitespace-nowrap">@bradpitt</td>
                                        <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            47 Division St. Buffalo, NY 14241.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap">3</td>
                                        <td class="whitespace-nowrap">Charlie</td>
                                        <td class="whitespace-nowrap">Hunnam</td>
                                        <td class="whitespace-nowrap">@charliehunnam</td>
                                        <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                                        <td class="whitespace-nowrap">
                                            8023 Amerige Street Harriman, NY 10926.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-responsive-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-responsive-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                        <th class="whitespace-nowrap">Email</th>
                                                        <th class="whitespace-nowrap">Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="whitespace-nowrap">1</td>
                                                        <td class="whitespace-nowrap">Angelina</td>
                                                        <td class="whitespace-nowrap">Jolie</td>
                                                        <td class="whitespace-nowrap">@angelinajolie</td>
                                                        <td class="whitespace-nowrap">angelinajolie@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            260 W. Storm Street New York, NY 10025.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="whitespace-nowrap">2</td>
                                                        <td class="whitespace-nowrap">Brad</td>
                                                        <td class="whitespace-nowrap">Pitt</td>
                                                        <td class="whitespace-nowrap">@bradpitt</td>
                                                        <td class="whitespace-nowrap">bradpitt@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            47 Division St. Buffalo, NY 14241.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="whitespace-nowrap">3</td>
                                                        <td class="whitespace-nowrap">Charlie</td>
                                                        <td class="whitespace-nowrap">Hunnam</td>
                                                        <td class="whitespace-nowrap">@charliehunnam</td>
                                                        <td class="whitespace-nowrap">charliehunnam@gmail.com</td>
                                                        <td class="whitespace-nowrap">
                                                            8023 Amerige Street Harriman, NY 10926.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Responsive Table -->
            <!-- BEGIN: Small Table -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Small Table</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#small-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="small-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-small-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-small-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Small Table -->
            <!-- BEGIN: Striped Rows -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                    <h2 class="font-medium text-base mr-auto">Striped Rows</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#striped-rows-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="striped-rows-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">First Name</th>
                                        <th class="whitespace-nowrap">Last Name</th>
                                        <th class="whitespace-nowrap">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Angelina</td>
                                        <td>Jolie</td>
                                        <td>@angelinajolie</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Brad</td>
                                        <td>Pitt</td>
                                        <td>@bradpitt</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Charlie</td>
                                        <td>Hunnam</td>
                                        <td>@charliehunnam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-striped-rows-table" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-striped-rows-table">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="overflow-x-auto">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="whitespace-nowrap">#</th>
                                                        <th class="whitespace-nowrap">First Name</th>
                                                        <th class="whitespace-nowrap">Last Name</th>
                                                        <th class="whitespace-nowrap">Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Angelina</td>
                                                        <td>Jolie</td>
                                                        <td>@angelinajolie</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Brad</td>
                                                        <td>Pitt</td>
                                                        <td>@bradpitt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Charlie</td>
                                                        <td>Hunnam</td>
                                                        <td>@charliehunnam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Striped Rows -->
        </div>
    </div>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tabulator</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Add New Product</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> New Category
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> New Group
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                <div class="sm:flex items-center sm:mr-4">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                    <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                        <option value="name">Name</option>
                        <option value="category">Category</option>
                        <option value="remaining_stock">Remaining Stock</option>
                    </select>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                    <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                        <option value="like" selected>like</option>
                        <option value="=">=</option>
                        <option value="<">&lt;</option>
                        <option value="<=">&lt;=</option>
                        <option value=">">></option>
                        <option value=">=">>=</option>
                        <option value="!=">!=</option>
                    </select>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                    <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0"  placeholder="Search...">
                </div>
                <div class="mt-2 xl:mt-0">
                    <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Go</button>
                    <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
                </div>
            </form>
            <div class="flex mt-5 sm:mt-0">
                <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
                    <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print
                </button>
                <div class="dropdown w-1/2 sm:w-auto">
                    <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
                        <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export <i data-feather="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export CSV
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-json" href="javascript:;" class="dropdown-item">
                                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export JSON
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-html" href="javascript:;" class="dropdown-item">
                                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export HTML
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto scrollbar-hidden">
            <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
        </div>
    </div>
    <!-- END: HTML Table Data -->

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Modal</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Blank Modal -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Blank Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#blank-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="blank-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        This is totally awesome blank modal!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-blank-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-blank-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body p-10 text-center">
                                                        This is totally awesome blank modal!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Blank Modal -->
            <!-- BEGIN: Modal Size -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Modal Size</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input data-target="#modal-size" class="show-code form-check-input mr-0 ml-3" type="checkbox" id="show-example-2">
                    </div>
                </div>
                <div id="modal-size" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Small Modal Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#small-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Small Modal</a>
                            <!-- END: Small Modal Toggle -->
                            <!-- BEGIN: Medium Modal Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#medium-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Medium Modal</a>
                            <!-- END: Medium Modal Toggle -->
                            <!-- BEGIN: Large Modal Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Large Modal</a>
                            <!-- END: Large Modal Toggle -->
                            <!-- BEGIN: Super Large Modal Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Superlarge Modal</a>
                            <!-- END: Super Large Modal Toggle -->
                        </div>
                        <!-- BEGIN: Small Modal Content -->
                        <div id="small-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        This is totally awesome small modal!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Small Modal Content -->
                        <!-- BEGIN: Medium Modal Content -->
                        <div id="medium-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        This is totally awesome medium modal!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Medium Modal Content -->
                        <!-- BEGIN: Large Modal Content -->
                        <div id="large-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        This is totally awesome large modal!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Large Modal Content -->
                        <!-- BEGIN: Super Large Modal Content -->
                        <div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        This is totally awesome superlarge modal!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Super Large Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-modal-size" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-modal-size" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <!-- BEGIN: Small Modal Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#small-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Small Modal</a>
                                            <!-- END: Small Modal Toggle -->
                                            <!-- BEGIN: Medium Modal Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#medium-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Medium Modal</a>
                                            <!-- END: Medium Modal Toggle -->
                                            <!-- BEGIN: Large Modal Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Large Modal</a>
                                            <!-- END: Large Modal Toggle -->
                                            <!-- BEGIN: Super Large Modal Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview" class="btn btn-primary mr-1 mb-2">Show Superlarge Modal</a>
                                            <!-- END: Super Large Modal Toggle -->
                                        </div>
                                        <!-- BEGIN: Small Modal Content -->
                                        <div id="small-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body p-10 text-center">
                                                        This is totally awesome small modal!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Small Modal Content -->
                                        <!-- BEGIN: Medium Modal Content -->
                                        <div id="medium-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body p-10 text-center">
                                                        This is totally awesome medium modal!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Medium Modal Content -->
                                        <!-- BEGIN: Large Modal Content -->
                                        <div id="large-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body p-10 text-center">
                                                        This is totally awesome large modal!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Large Modal Content -->
                                        <!-- BEGIN: Super Large Modal Content -->
                                        <div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-body p-10 text-center">
                                                        This is totally awesome superlarge modal!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Super Large Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Size -->
            <!-- BEGIN: Programmatically Show/Hide Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#programmatically-show-hide-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="programmatically-show-hide-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Show Modal Toggle -->
                        <div class="text-center">
                            <a id="programmatically-show-modal" href="javascript:;" class="btn btn-primary mr-1 mb-2">Show Modal</a>
                        </div>
                        <!-- END: Show Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="programmatically-modal" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        <!-- BEGIN: Hide Modal Toggle -->
                                        <a id="programmatically-hide-modal" href="javascript:;" class="btn btn-primary mr-1">Hide Modal</a>
                                        <!-- END: Hide Modal Toggle -->
                                        <!-- BEGIN: Toggle Modal Toggle -->
                                        <a id="programmatically-toggle-modal" href="javascript:;" class="btn btn-primary mr-1">Toggle Modal</a>
                                        <!-- END: Toggle Modal Toggle -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-programmatically-show-hide-modal-js" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-modal-js" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Show Modal Toggle -->
                                        <div class="text-center">
                                            <a id="programmatically-show-modal" href="javascript:;" class="btn btn-primary mr-1 mb-2">Show Modal</a>
                                        </div>
                                        <!-- END: Show Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="programmatically-modal" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body p-10 text-center">
                                                        <!-- BEGIN: Hide Modal Toggle -->
                                                        <a id="programmatically-hide-modal" href="javascript:;" class="btn btn-primary mr-1">Hide Modal</a>
                                                        <!-- END: Hide Modal Toggle -->
                                                        <!-- BEGIN: Toggle Modal Toggle -->
                                                        <a id="programmatically-toggle-modal" href="javascript:;" class="btn btn-primary mr-1">Toggle Modal</a>
                                                        <!-- END: Toggle Modal Toggle -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-programmatically-show-hide-modal-html" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-modal-html" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Show modal
                                        const el = document.querySelector("#programmatically-modal");
                                        const modal = tailwind.Modal.getOrCreateInstance(el);
                                        modal.show();

                                        // Hide modal
                                        const el = document.querySelector("#programmatically-modal");
                                        const modal = tailwind.Modal.getOrCreateInstance(el);
                                        modal.hide();

                                        // Toggle modal
                                        const el = document.querySelector("#programmatically-modal");
                                        const modal = tailwind.Modal.getOrCreateInstance(el);
                                        modal.toggle();
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Programmatically Show/Hide Modal -->
            <!-- BEGIN: Warning Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Warning Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#warning-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="warning-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#warning-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="warning-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-feather="x-circle" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Oops...</div>
                                            <div class="text-slate-500 mt-2">Something went wrong!</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn w-24 btn-primary">Ok</button>
                                        </div>
                                        <div class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400">
                                            <a href="" class="text-primary">Why do I have this issue?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-warning-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-warning-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#warning-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="warning-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-center">
                                                            <i data-feather="x-circle" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                                                            <div class="text-3xl mt-5">Oops...</div>
                                                            <div class="text-slate-500 mt-2">Something went wrong!</div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-tw-dismiss="modal" class="btn w-24 btn-primary">Ok</button>
                                                        </div>
                                                        <div class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400">
                                                            <a href="" class="text-primary">Why do I have this issue?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Warning Modal -->
            <!-- BEGIN: Modal With Close Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Modal With Close Button</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#button-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="button-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#button-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <a data-tw-dismiss="modal" href="javascript:;">
                                        <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                                    </a>
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-feather="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Modal Example</div>
                                            <div class="text-slate-500 mt-2">Modal with close button</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-button-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#button-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-tw-dismiss="modal" href="javascript:;">
                                                        <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                                                    </a>
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-center">
                                                            <i data-feather="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                                            <div class="text-3xl mt-5">Modal Example</div>
                                                            <div class="text-slate-500 mt-2">Modal with close button</div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal With Close Button -->
            <!-- BEGIN: Static Backdrop Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Static Backdrop Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-11">Show example code</label>
                        <input id="show-example-11" data-target="#static-backdrop-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="static-backdrop-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body px-5 py-10">
                                        <div class="text-center">
                                            <div class="mb-5">I will not close if you click outside me. Don't even try to press escape key.</div>
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-button-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body px-5 py-10">
                                                        <div class="text-center">
                                                            <div class="mb-5">I will not close if you click outside me. Don\'t even try to press escape key.</div>
                                                            <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Static Backdrop Modal -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Overlapping Modal -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Overlapping Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#overlapping-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="overlapping-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#overlapping-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="overlapping-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body px-5 py-10">
                                        <div class="text-center">
                                            <div class="mb-5">Click button bellow to show overlapping modal!</div>
                                            <!-- BEGIN: Overlapping Modal Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#next-overlapping-modal-preview" class="btn btn-primary">Show Overlapping Modal</a>
                                            <!-- END: Overlapping Modal Toggle -->
                                        </div>
                                        <!-- BEGIN: Overlapping Modal Content -->
                                        <div id="next-overlapping-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        This is totally awesome overlapping modal!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Overlapping Modal Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-overlapping-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-overlapping-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#overlapping-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="overlapping-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body px-5 py-10">
                                                        <div class="text-center">
                                                            <div class="mb-5">Click button bellow to show overlapping modal!</div>
                                                            <!-- BEGIN: Overlapping Modal Toggle -->
                                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#next-overlapping-modal-preview" class="btn btn-primary">Show Overlapping Modal</a>
                                                            <!-- END: Overlapping Modal Toggle -->
                                                        </div>
                                                        <!-- BEGIN: Overlapping Modal Content -->
                                                        <div id="next-overlapping-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center">
                                                                        This is totally awesome overlapping modal!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: Overlapping Modal Content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Overlapping Modal -->
            <!-- BEGIN: Header & Footer Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Header & Footer Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#header-footer-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="header-footer-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- BEGIN: Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                        </button>
                                        <div class="dropdown sm:hidden">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                            </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="javascript:;" class="dropdown-item">
                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Modal Header -->
                                    <!-- BEGIN: Modal Body -->
                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-1" class="form-label">From</label>
                                            <input id="modal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-2" class="form-label">To</label>
                                            <input id="modal-form-2" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-3" class="form-label">Subject</label>
                                            <input id="modal-form-3" type="text" class="form-control" placeholder="Important Meeting">
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-4" class="form-label">Has the Words</label>
                                            <input id="modal-form-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-5" class="form-label">Doesn't Have</label>
                                            <input id="modal-form-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-6" class="form-label">Size</label>
                                            <select id="modal-form-6" class="form-select">
                                                <option>10</option>
                                                <option>25</option>
                                                <option>35</option>
                                                <option>50</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- END: Modal Body -->
                                    <!-- BEGIN: Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                        <button type="button" class="btn btn-primary w-20">Send</button>
                                    </div>
                                    <!-- END: Modal Footer -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-footer-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-header-footer-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- BEGIN: Modal Header -->
                                                    <div class="modal-header">
                                                        <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
                                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </button>
                                                        <div class="dropdown sm:hidden">
                                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                                            </a>
                                                            <div class="dropdown-menu w-40">
                                                                <ul class="dropdown-content">
                                                                    <li>
                                                                        <a href="javascript:;" class="dropdown-item">
                                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Modal Header -->
                                                    <!-- BEGIN: Modal Body -->
                                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-form-1" class="form-label">From</label>
                                                            <input id="modal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-form-2" class="form-label">To</label>
                                                            <input id="modal-form-2" type="text" class="form-control" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-form-3" class="form-label">Subject</label>
                                                            <input id="modal-form-3" type="text" class="form-control" placeholder="Important Meeting">
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-form-4" class="form-label">Has the Words</label>
                                                            <input id="modal-form-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-form-5" class="form-label">Doesn\'t Have</label>
                                                            <input id="modal-form-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-form-6" class="form-label">Size</label>
                                                            <select id="modal-form-6" class="form-select">
                                                                <option>10</option>
                                                                <option>25</option>
                                                                <option>35</option>
                                                                <option>50</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- END: Modal Body -->
                                                    <!-- BEGIN: Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                                        <button type="button" class="btn btn-primary w-20">Send</button>
                                                    </div>
                                                    <!-- END: Modal Footer -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Header & Footer Modal -->
            <!-- BEGIN: Delete Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Delete Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#delete-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="delete-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-feather="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                            <button type="button" class="btn btn-danger w-24">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-delete-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-delete-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-center">
                                                            <i data-feather="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                            <div class="text-3xl mt-5">Are you sure?</div>
                                                            <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                                            <button type="button" class="btn btn-danger w-24">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Delete Modal -->
            <!-- BEGIN: Success Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Success Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-9">Show example code</label>
                        <input id="show-example-9" data-target="#success-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="success-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#success-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="success-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-feather="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Good job!</div>
                                            <div class="text-slate-500 mt-2">You clicked the button!</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-success-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-success-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#success-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="success-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="p-5 text-center">
                                                            <i data-feather="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                                            <div class="text-3xl mt-5">Good job!</div>
                                                            <div class="text-slate-500 mt-2">You clicked the button!</div>
                                                        </div>
                                                        <div class="px-5 pb-8 text-center">
                                                            <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Success Modal -->
            <!-- BEGIN: Tiny Slider Modal -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Tiny Slider Modal</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-10">Show example code</label>
                        <input id="show-example-10" data-target="#tiny-slider-modal" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="tiny-slider-modal" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#tiny-slider-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="tiny-slider-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="mx-6">
                                            <div class="center-mode">
                                                <div class="h-56 px-2">
                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                        <img alt="" src="{{ asset('dist/images/' . $fakers[0]['images'][0]) }}" />
                                                    </div>
                                                </div>
                                                <div class="h-56 px-2">
                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                        <img alt="" src="{{ asset('dist/images/' . $fakers[0]['images'][1]) }}" />
                                                    </div>
                                                </div>
                                                <div class="h-56 px-2">
                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                        <img alt="" src="{{ asset('dist/images/' . $fakers[0]['images'][2]) }}" />
                                                    </div>
                                                </div>
                                                <div class="h-56 px-2">
                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                        <img alt="" src="{{ asset('dist/images/' . $fakers[0]['images'][3]) }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-tiny-slider-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-tiny-slider-modal" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#tiny-slider-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="tiny-slider-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="mx-6">
                                                            <div class="center-mode">
                                                                <div class="h-56 px-2">
                                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                                        <img alt="" src="' . asset('dist/images/' . $fakers[0]['images'][0]) . '" />
                                                                    </div>
                                                                </div>
                                                                <div class="h-56 px-2">
                                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                                        <img alt="" src="' . asset('dist/images/' . $fakers[0]['images'][1]) . '" />
                                                                    </div>
                                                                </div>
                                                                <div class="h-56 px-2">
                                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                                        <img alt="" src="' . asset('dist/images/' . $fakers[0]['images'][2]) . '" />
                                                                    </div>
                                                                </div>
                                                                <div class="h-56 px-2">
                                                                    <div class="h-full image-fit rounded-md overflow-hidden">
                                                                        <img alt="" src="' . asset('dist/images/' . $fakers[0]['images'][3]) . '" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Tiny Slider Modal -->
        </div>
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Slide Over</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Blank Slide Over -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Blank Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#blank-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="blank-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="basic-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Blank Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome blank slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-blank-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-blank-slide-over" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Slide Over Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="basic-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Blank Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome blank slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Blank Slide Over -->
            <!-- BEGIN: Slide Over Size -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Slide Over Size</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#slide-over-size" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="slide-over-size" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Small Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#small-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Small Slide Over</a>
                            <!-- END: Small Slide Over Toggle -->
                            <!-- BEGIN: Medium Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#medium-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Medium Slide Over</a>
                            <!-- END: Medium Slide Over Toggle -->
                            <!-- BEGIN: Large Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Large Slide Over</a>
                            <!-- END: Large Slide Over Toggle -->
                            <!-- BEGIN: Super Large Slide Over Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Superlarge Slide Over</a>
                            <!-- END: Super Large Slide Over Toggle -->
                        </div>
                        <!-- BEGIN: Small Slide Over Content -->
                        <div id="small-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Small Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome small slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Small Slide Over Content -->
                        <!-- BEGIN: Medium Slide Over Content -->
                        <div id="medium-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Medium Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome medium slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Medium Slide Over Content -->
                        <!-- BEGIN: Large Slide Over Content -->
                        <div id="large-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Large Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome large slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Large Slide Over Content -->
                        <!-- BEGIN: Super Large Slide Over Content -->
                        <div id="superlarge-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Superlarge Slide Over</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome superlarge slide over!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Super Large Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-slide-over-size" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-slide-over-size" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <!-- BEGIN: Small Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#small-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Small Slide Over</a>
                                            <!-- END: Small Slide Over Toggle -->
                                            <!-- BEGIN: Medium Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#medium-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Medium Slide Over</a>
                                            <!-- END: Medium Slide Over Toggle -->
                                            <!-- BEGIN: Large Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Large Slide Over</a>
                                            <!-- END: Large Slide Over Toggle -->
                                            <!-- BEGIN: Super Large Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-slide-over-size-preview" class="btn btn-primary mr-1 mb-2">Show Superlarge Slide Over</a>
                                            <!-- END: Super Large Slide Over Toggle -->
                                        </div>
                                        <!-- BEGIN: Small Slide Over Content -->
                                        <div id="small-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Small Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome small slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Small Slide Over Content -->
                                        <!-- BEGIN: Medium Slide Over Content -->
                                        <div id="medium-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Medium Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome medium slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Medium Slide Over Content -->
                                        <!-- BEGIN: Large Slide Over Content -->
                                        <div id="large-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Large Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome large slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Large Slide Over Content -->
                                        <!-- BEGIN: Super Large Slide Over Content -->
                                        <div id="superlarge-slide-over-size-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Superlarge Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome superlarge slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Super Large Slide Over Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Slide Over Size -->
            <!-- BEGIN: Programmatically Show/Hide Slide Over -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#programmatically-show-hide-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="programmatically-show-hide-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Show Slide Over Toggle -->
                        <div class="text-center">
                            <a id="programmatically-show-slide-over" href="javascript:;" class="btn btn-primary mr-1 mb-2">Show Slide Over</a>
                        </div>
                        <!-- END: Show Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="programmatically-slide-over" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Slide Over</h2>
                                    </div>
                                    <div class="modal-body p-10 text-center">
                                        <!-- BEGIN: Hide Slide Over Toggle -->
                                        <a id="programmatically-hide-slide-over" href="javascript:;" class="btn btn-primary mr-1">Hide Slide Over</a>
                                        <!-- END: Hide Slide Over Toggle -->
                                        <!-- BEGIN: Toggle Slide Over Toggle -->
                                        <a id="programmatically-toggle-slide-over" href="javascript:;" class="btn btn-primary mr-1 mt-2 sm:mt-0">Toggle Slide Over</a>
                                        <!-- END: Toggle Slide Over Toggle -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-programmatically-show-hide-slide-over-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-slide-over-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Show Slide Over Toggle -->
                                        <div class="text-center">
                                            <a id="programmatically-show-slide-over" href="javascript:;" class="btn btn-primary mr-1 mb-2">Show Slide Over</a>
                                        </div>
                                        <!-- END: Show Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="programmatically-slide-over" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body p-10 text-center">
                                                        <!-- BEGIN: Hide Slide Over Toggle -->
                                                        <a id="programmatically-hide-slide-over" href="javascript:;" class="btn btn-primary mr-1">Hide Slide Over</a>
                                                        <!-- END: Hide Slide Over Toggle -->
                                                        <!-- BEGIN: Toggle Slide Over Toggle -->
                                                        <a id="programmatically-toggle-slide-over" href="javascript:;" class="btn btn-primary mr-1 mt-2 sm:mt-0">Toggle Slide Over</a>
                                                        <!-- END: Toggle Slide Over Toggle -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-programmatically-show-hide-slide-over-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-slide-over-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Show slide over
                                        const el = document.querySelector("#programmatically-slide-over");
                                        const slideOver = tailwind.Modal.getOrCreateInstance(el);
                                        slideOver.show();

                                        // Hide slide over
                                        const el = document.querySelector("#programmatically-slide-over");
                                        const slideOver = tailwind.Modal.getOrCreateInstance(el);
                                        slideOver.hide();

                                        // Toggle slide over
                                        const el = document.querySelector("#programmatically-slide-over");
                                        const slideOver = tailwind.Modal.getOrCreateInstance(el);
                                        slideOver.toggle();
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Programmatically Show/Hide Slide Over -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Slide Over With Close Button -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Slide Over With Close Button</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#button-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="button-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#button-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="button-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <a data-tw-dismiss="modal" href="javascript:;">
                                        <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                                    </a>
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Slide Over With Close Button</h2>
                                    </div>
                                    <div class="modal-body">
                                        This is totally awesome slide over with close button!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-button-slide-over" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#button-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="button-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-tw-dismiss="modal" href="javascript:;">
                                                        <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                                                    </a>
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Slide Over With Close Button</h2>
                                                    </div>
                                                    <div class="modal-body">
                                                        This is totally awesome slide over with close button!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Slide Over With Close Button -->
            <!-- BEGIN: Overlapping Slide Over -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#overlapping-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="overlapping-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#overlapping-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-5">
                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                    </div>
                                    <div class="modal-body px-5 py-10">
                                        <div class="text-center">
                                            <div class="mb-5">Click button bellow to show overlapping slide over!</div>
                                            <!-- BEGIN: Overlapping Slide Over Toggle -->
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#next-overlapping-slide-over-preview" class="btn btn-primary">Show Overlapping Slide Over</a>
                                            <!-- END: Overlapping Slide Over Toggle -->
                                        </div>
                                        <!-- BEGIN: Overlapping Slide Over Content -->
                                        <div id="next-overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        This is totally awesome overlapping slide over!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Overlapping Slide Over Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-overlapping-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-overlapping-slide-over" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Slide Over Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#overlapping-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-5">
                                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                                    </div>
                                                    <div class="modal-body px-5 py-10">
                                                        <div class="text-center">
                                                            <div class="mb-5">Click button bellow to show overlapping slide over!</div>
                                                            <!-- BEGIN: Overlapping Slide Over Toggle -->
                                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#next-overlapping-slide-over-preview" class="btn btn-primary">Show Overlapping Slide Over</a>
                                                            <!-- END: Overlapping Slide Over Toggle -->
                                                        </div>
                                                        <!-- BEGIN: Overlapping Slide Over Content -->
                                                        <div id="next-overlapping-slide-over-preview" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-5">
                                                                        <h2 class="font-medium text-base mr-auto">Overlapping Slide Over</h2>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        This is totally awesome overlapping slide over!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: Overlapping Slide Over Content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Overlapping Slide Over -->
            <!-- BEGIN: Header & Footer Slide Over -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Header & Footer Slide Over</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#header-footer-slide-over" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="header-footer-slide-over" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <div id="header-footer-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <a data-tw-dismiss="modal" href="javascript:;">
                                        <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                                    </a>
                                    <!-- BEGIN: Slide Over Header -->
                                    <div class="modal-header">
                                        <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                        </button>
                                        <div class="dropdown sm:hidden">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                            </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="javascript:;" class="dropdown-item">
                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Slide Over Header -->
                                    <!-- BEGIN: Slide Over Body -->
                                    <div class="modal-body">
                                        <div>
                                            <label for="modal-form-1" class="form-label">From</label>
                                            <input id="modal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-2" class="form-label">To</label>
                                            <input id="modal-form-2" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-3" class="form-label">Subject</label>
                                            <input id="modal-form-3" type="text" class="form-control" placeholder="Important Meeting">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-4" class="form-label">Has the Words</label>
                                            <input id="modal-form-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-5" class="form-label">Doesn't Have</label>
                                            <input id="modal-form-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modal-form-6" class="form-label">Size</label>
                                            <select id="modal-form-6" class="form-select">
                                                <option>10</option>
                                                <option>25</option>
                                                <option>35</option>
                                                <option>50</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- END: Slide Over Body -->
                                    <!-- BEGIN: Slide Over Footer -->
                                    <div class="modal-footer w-full absolute bottom-0">
                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                        <button type="button" class="btn btn-primary w-20">Send</button>
                                    </div>
                                    <!-- END: Slide Over Footer -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Slide Over Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-footer-slide-over" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-header-footer-slide-over" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Slide Over Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-slide-over-preview" class="btn btn-primary">Show Slide Over</a>
                                        </div>
                                        <!-- END: Slide Over Toggle -->
                                        <!-- BEGIN: Slide Over Content -->
                                        <div id="header-footer-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <a data-tw-dismiss="modal" href="javascript:;">
                                                        <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                                                    </a>
                                                    <!-- BEGIN: Slide Over Header -->
                                                    <div class="modal-header">
                                                        <h2 class="font-medium text-base mr-auto">Broadcast Message</h2>
                                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </button>
                                                        <div class="dropdown sm:hidden">
                                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                                            </a>
                                                            <div class="dropdown-menu w-40">
                                                                <ul class="dropdown-content">
                                                                    <li>
                                                                        <a href="javascript:;" class="dropdown-item">
                                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Slide Over Header -->
                                                    <!-- BEGIN: Slide Over Body -->
                                                    <div class="modal-body">
                                                        <div>
                                                            <label for="modal-form-1" class="form-label">From</label>
                                                            <input id="modal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-2" class="form-label">To</label>
                                                            <input id="modal-form-2" type="text" class="form-control" placeholder="example@gmail.com">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-3" class="form-label">Subject</label>
                                                            <input id="modal-form-3" type="text" class="form-control" placeholder="Important Meeting">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-4" class="form-label">Has the Words</label>
                                                            <input id="modal-form-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-5" class="form-label">Doesn\'t Have</label>
                                                            <input id="modal-form-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="modal-form-6" class="form-label">Size</label>
                                                            <select id="modal-form-6" class="form-select">
                                                                <option>10</option>
                                                                <option>25</option>
                                                                <option>35</option>
                                                                <option>50</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- END: Slide Over Body -->
                                                    <!-- BEGIN: Slide Over Footer -->
                                                    <div class="modal-footer w-full absolute bottom-0">
                                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                                        <button type="button" class="btn btn-primary w-20">Send</button>
                                                    </div>
                                                    <!-- END: Slide Over Footer -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Slide Over Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Header & Footer Slide Over -->
        </div>
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Notification</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Notification -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Notification</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-textual-notification" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-textual-notification" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="basic-non-sticky-notification-content" class="toastify-content hidden flex flex-col sm:flex-row">
                                <div class="font-medium">Yay! Updates Published!</div>
                                <a class="font-medium text-primary dark:text-slate-400 mt-1 sm:mt-0 sm:ml-40" href="">Review Changes</a>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="basic-non-sticky-notification-toggle" class="btn btn-primary mr-1">Show Non Sticky Notification</button>
                            <button id="basic-sticky-notification-toggle" class="btn btn-primary mt-2 sm:mt-0">Show Sticky Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-textual-notification-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-textual-notification-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Notification Content -->
                                        <div id="basic-non-sticky-notification-content" class="toastify-content hidden flex">
                                            <div class="font-medium">Yay! Updates Published!</div>
                                            <a class="font-medium text-primary dark:text-slate-400 mt-1 sm:mt-0 sm:ml-40" href="">Review Changes</a>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="basic-non-sticky-notification-toggle" class="btn btn-primary mr-1">Show Non Sticky Notification</button>
                                        <button id="basic-sticky-notification-toggle" class="btn btn-primary mt-2 sm:mt-0">Show Sticky Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-basic-textual-notification-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-textual-notification-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Basic non sticky notification
                                        $("#basic-non-sticky-notification-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#basic-non-sticky-notification-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: 3000,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                backgroundColor: "white",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });

                                        // Basic sticky notification
                                        $("#basic-sticky-notification-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#basic-non-sticky-notification-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                backgroundColor: "white",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Notification -->
            <!-- BEGIN: Success Notification -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Success Notification</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#success-notification" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="success-notification" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="success-notification-content" class="toastify-content hidden flex">
                                <i class="text-success" data-feather="check-circle"></i>
                                <div class="ml-4 mr-4">
                                    <div class="font-medium">Message Saved!</div>
                                    <div class="text-slate-500 mt-1">The message will be sent in 5 minutes.</div>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="success-notification-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-success-notification-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-success-notification-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Notification Content -->
                                        <div id="success-notification-content" class="toastify-content hidden flex">
                                            <i class="text-success" data-feather="check-circle"></i>
                                            <div class="ml-4 mr-4">
                                                <div class="font-medium">Message Saved!</div>
                                                <div class="text-slate-500 mt-1">The message will be sent in 5 minutes.</div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="success-notification-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-success-notification-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-success-notification-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Success notification
                                        $("#success-notification-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#success-notification-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Success Notification -->
            <!-- BEGIN: Notification With Actions -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Actions</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#notification-with-actions" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-actions" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-actions-content" class="toastify-content hidden flex">
                                <i data-feather="hard-drive"></i>
                                <div class="ml-4 mr-4">
                                    <div class="font-medium">Storage Removed!</div>
                                    <div class="text-slate-500 mt-1">The server will restart in 30 seconds, don't make<br> changes during the update process!</div>
                                    <div class="font-medium flex mt-1.5">
                                        <a class="text-primary dark:text-slate-400" href="">Restart Now</a>
                                        <a class="text-slate-500 ml-3" href="">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-actions-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-actions-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-actions-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-actions-content" class="toastify-content hidden flex">
                                            <i data-feather="hard-drive"></i>
                                            <div class="ml-4 mr-4">
                                                <div class="font-medium">Storage Removed!</div>
                                                <div class="text-slate-500 mt-1">The server will restart in 30 seconds, don\'t make<br> changes during the update process!</div>
                                                <div class="font-medium flex mt-1.5">
                                                    <a class="text-primary dark:text-slate-400" href="">Restart Now</a>
                                                    <a class="text-slate-500 ml-3" href="">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-actions-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-actions-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-actions-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Notification with actions
                                        $("#notification-with-actions-toggle").on("click", function () {
                                            Toastify({
                                                node: $("#notification-with-actions-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- END: Notification With Actions -->
            <!-- BEGIN: Notification With Avatar -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Avatar</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#notification-with-avatar" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-avatar" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-avatar-content" class="toastify-content hidden flex">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                </div>
                                <div class="ml-4 sm:mr-28">
                                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                                    <div class="text-slate-500 mt-1">See you later! 😃😃😃</div>
                                </div>
                                <a data-dismiss="notification" class="absolute top-0 bottom-0 right-0 flex items-center px-6 border-l border-slate-200/60 dark:border-darkmode-400 font-medium text-primary dark:text-slate-400" href="javascript:;">Reply</a>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-avatar-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-avatar-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-avatar-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-avatar-content" class="toastify-content hidden flex">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                <img alt="" src="' . asset('dist/images/' . $fakers[0]['photos'][0]) . '">
                                            </div>
                                            <div class="ml-4 sm:mr-28">
                                                <div class="font-medium">' . $fakers[0]['users'][0]['name'] . '</div>
                                                <div class="text-slate-500 mt-1">See you later! 😃😃😃</div>
                                            </div>
                                            <a data-dismiss="notification" class="absolute top-0 bottom-0 right-0 flex items-center px-6 border-l border-slate-200/60 dark:border-darkmode-400 font-medium text-primary dark:text-slate-400" href="javascript:;">Reply</a>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-avatar-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-avatar-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-avatar-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Notification with avatar
                                        $("#notification-with-avatar-toggle").on("click", function () {
                                            // Init toastify
                                            let avatarNotification = Toastify({
                                                node: $("#notification-with-avatar-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: false,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();

                                            // Close notification event
                                            cash(avatarNotification.toastElement)
                                                .find(\'[data-dismiss="notification"]\')
                                                .on("click", function () {
                                                    avatarNotification.hideToast();
                                                });
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notification With Avatar -->
            <!-- BEGIN: Notification With Split Buttons -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Split Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#notification-with-split-buttons" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-split-buttons" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-split-buttons-content" class="toastify-content hidden flex">
                                <div class="sm:mr-40">
                                    <div class="font-medium">Introducing new theme</div>
                                    <div class="text-slate-500 mt-1">Release version 2.3.3</div>
                                </div>
                                <div class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                    <a class="flex-1 flex items-center justify-center px-6 font-medium text-primary dark:text-slate-400 border-b border-slate-200/60 dark:border-darkmode-400" href="javascript:;">View Details</a>
                                    <a data-dismiss="notification" class="flex-1 flex items-center justify-center px-6 font-medium text-slate-500" href="javascript:;">Dismiss</a>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-split-buttons-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-split-buttons-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-split-buttons-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-split-buttons-content" class="toastify-content hidden flex">
                                            <div class="sm:mr-40">
                                                <div class="font-medium">Introducing new theme</div>
                                                <div class="text-slate-500 mt-1">Release version 2.3.3</div>
                                            </div>
                                            <div class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400">
                                                <a class="flex-1 flex items-center justify-center px-6 font-medium text-primary dark:text-slate-400 border-b border-slate-200/60 dark:border-darkmode-400" href="javascript:;">View Details</a>
                                                <a data-dismiss="notification" class="flex-1 flex items-center justify-center px-6 font-medium text-slate-500" href="javascript:;">Dismiss</a>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-split-buttons-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-split-buttons-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-split-buttons-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Notification with split buttons
                                        $("#notification-with-split-buttons-toggle").on("click", function () {
                                            // Init toastify
                                            let splitButtonsNotification = Toastify({
                                                node: $("#notification-with-split-buttons-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: false,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();

                                            // Close notification event
                                            cash(splitButtonsNotification.toastElement)
                                                .find(\'[data-dismiss="notification"]\')
                                                .on("click", function () {
                                                    splitButtonsNotification.hideToast();
                                                });
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notification With Split Buttons -->
            <!-- BEGIN: Notification With Buttons Below -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Notification With Buttons Below</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#notification-with-buttons-below" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="notification-with-buttons-below" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Notification Content -->
                            <div id="notification-with-buttons-below-content" class="toastify-content hidden flex">
                                <i data-feather="file-text"></i>
                                <div class="ml-4 mr-5 sm:mr-20">
                                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                                    <div class="text-slate-500 mt-1">Sent you new documents.</div>
                                    <div class="mt-2.5">
                                        <a class="btn btn-primary py-1 px-2 mr-2" href="">Preview</a>
                                        <a class="btn btn-outline-secondary py-1 px-2" href="">Download</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification Content -->
                            <!-- BEGIN: Notification Toggle -->
                            <button id="notification-with-buttons-below-toggle" class="btn btn-primary">Show Notification</button>
                            <!-- END: Notification Toggle -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-notification-with-buttons-below-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-buttons-below-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Notification Content -->
                                        <div id="notification-with-buttons-below-content" class="toastify-content hidden flex">
                                            <i data-feather="file-text"></i>
                                            <div class="ml-4 mr-5 sm:mr-20">
                                                <div class="font-medium">' . $fakers[0]['users'][0]['name'] . '</div>
                                                <div class="text-slate-500 mt-1">Sent you new documents.</div>
                                                <div class="mt-2.5">
                                                    <a class="btn btn-primary py-1 px-2 mr-2" href="">Preview</a>
                                                    <a class="btn btn-outline-secondary py-1 px-2" href="">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="notification-with-buttons-below-toggle" class="btn btn-primary">Show Notification</button>
                                        <!-- END: Notification Toggle -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-notification-with-buttons-below-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-notification-with-buttons-below-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Notification with buttons below
                                        $("#notification-with-buttons-below-toggle").on("click", function () {
                                            // Init toastify
                                            Toastify({
                                                node: $("#notification-with-buttons-below-content")
                                                    .clone()
                                                    .removeClass("hidden")[0],
                                                duration: -1,
                                                newWindow: true,
                                                close: true,
                                                gravity: "top",
                                                position: "right",
                                                stopOnFocus: true,
                                            }).showToast();
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notification With Buttons Below -->
        </div>
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Accordion</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Accordion -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Accordion</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-accordion" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-accordion" class="p-5">
                    <div class="preview">
                        <div id="faq-accordion-1" class="accordion">
                            <div class="accordion-item">
                                <div id="faq-accordion-content-1" class="accordion-header">
                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-3" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                        How To Troubleshoot Common HTTP Error Codes
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-4" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                        An Introduction to Securing your Linux VPS
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-accordion" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-accordion" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div id="faq-accordion-1" class="accordion">
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-1" class="accordion-header">
                                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-2" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-3" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                                        How To Troubleshoot Common HTTP Error Codes
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-4" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                                        An Introduction to Securing your Linux VPS
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Accordion -->
        <!-- BEGIN: Boxed Accordion -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Boxed Accordion</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#boxed-accordion" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="boxed-accordion" class="p-5">
                    <div class="preview">
                        <div id="faq-accordion-2" class="accordion accordion-boxed">
                            <div class="accordion-item">
                                <div id="faq-accordion-content-1" class="accordion-header">
                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-3" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                        How To Troubleshoot Common HTTP Error Codes
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="faq-accordion-content-4" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                        An Introduction to Securing your Linux VPS
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-2">
                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-boxed-accordion" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-boxed-accordion" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div id="faq-accordion-2" class="accordion accordion-boxed">
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-1" class="accordion-header">
                                                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                                        OpenSSL Essentials: Working with SSL Certificates, Private Keys
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-2" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                                        Understanding IP Addresses, Subnets, and CIDR Notation
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-3" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                                        How To Troubleshoot Common HTTP Error Codes
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div id="faq-accordion-content-4" class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                                        An Introduction to Securing your Linux VPS
                                                    </button>
                                                </div>
                                                <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-2">
                                                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Boxed Accordion -->
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Buttons</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Button -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-button" class="p-5">
                    <div class="preview">
                        <button class="btn btn-primary w-24 mr-1 mb-2">Primary</button>
                        <button class="btn btn-secondary w-24 mr-1 mb-2">Secondary</button>
                        <button class="btn btn-success w-24 mr-1 mb-2">Success</button>
                        <button class="btn btn-warning w-24 mr-1 mb-2">Warning</button>
                        <button class="btn btn-pending w-24 mr-1 mb-2">Pending</button>
                        <button class="btn btn-danger w-24 mr-1 mb-2">Danger</button>
                        <button class="btn btn-dark w-24 mr-1 mb-2">Dark</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-primary w-24 mr-1 mb-2">Primary</button>
                                        <button class="btn btn-secondary w-24 mr-1 mb-2">Secondary</button>
                                        <button class="btn btn-success w-24 mr-1 mb-2">Success</button>
                                        <button class="btn btn-warning w-24 mr-1 mb-2">Warning</button>
                                        <button class="btn btn-pending w-24 mr-1 mb-2">Pending</button>
                                        <button class="btn btn-danger w-24 mr-1 mb-2">Danger</button>
                                        <button class="btn btn-dark w-24 mr-1 mb-2">Dark</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Button -->
            <!-- BEGIN: Button Size -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Button Sizes</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#button-size" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="button-size" class="p-5">
                    <div class="preview">
                        <div>
                            <button class="btn btn-sm btn-primary w-24 mr-1 mb-2">Small</button>
                            <button class="btn btn-primary w-24 mr-1 mb-2">Medium</button>
                            <button class="btn btn-lg btn-primary w-24 mr-1 mb-2">Large</button>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-sm btn-secondary w-24 mr-1 mb-2">Small</button>
                            <button class="btn btn-secondary w-24 mr-1 mb-2">Medium</button>
                            <button class="btn btn-lg btn-secondary w-24 mr-1 mb-2">Large</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-size" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-button-size">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <button class="btn btn-sm btn-primary w-24 mr-1 mb-2">Small</button>
                                            <button class="btn btn-primary w-24 mr-1 mb-2">Medium</button>
                                            <button class="btn btn-lg btn-primary w-24 mr-1 mb-2">Large</button>
                                        </div>
                                        <div class="mt-5">
                                            <button class="btn btn-sm btn-secondary w-24 mr-1 mb-2">Small</button>
                                            <button class="btn btn-secondary w-24 mr-1 mb-2">Medium</button>
                                            <button class="btn btn-lg btn-secondary w-24 mr-1 mb-2">Large</button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Button Size -->
            <!-- BEGIN: Button Link -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Links</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#link-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="link-button" class="p-5">
                    <div class="preview">
                        <a href="" class="btn btn-primary w-24 inline-block mr-1 mb-2">Link</a>
                        <a href="" class="btn btn-secondary w-24 inline-block mr-1 mb-2">Button</a>
                        <a href="" class="btn btn-success w-24 inline-block mr-1 mb-2">Input</a>
                        <a href="" class="btn btn-warning w-24 inline-block mr-1 mb-2">Submit</a>
                        <a href="" class="btn btn-pending w-24 inline-block mr-1 mb-2">Pending</a>
                        <a href="" class="btn btn-danger w-24 inline-block mr-1 mb-2">Reset</a>
                        <a href="" class="btn btn-dark w-24 inline-block mr-1 mb-2">Metal</a>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-link-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-link-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <a href="" class="btn btn-primary w-24 inline-block mr-1 mb-2">Link</a>
                                        <a href="" class="btn btn-secondary w-24 inline-block mr-1 mb-2">Button</a>
                                        <a href="" class="btn btn-success w-24 inline-block mr-1 mb-2">Input</a>
                                        <a href="" class="btn btn-warning w-24 inline-block mr-1 mb-2">Submit</a>
                                        <a href="" class="btn btn-pending w-24 inline-block mr-1 mb-2">Pending</a>
                                        <a href="" class="btn btn-danger w-24 inline-block mr-1 mb-2">Reset</a>
                                        <a href="" class="btn btn-dark w-24 inline-block mr-1 mb-2">Metal</a>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Button Link -->
            <!-- BEGIN: Elevated Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Elevated Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#elevated-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="elevated-button" class="p-5">
                    <div class="preview">
                        <div>
                            <button class="btn btn-elevated-primary w-24 mr-1 mb-2">Primary</button>
                            <button class="btn btn-elevated-secondary w-24 mr-1 mb-2">Secondary</button>
                            <button class="btn btn-elevated-success w-24 mr-1 mb-2">Success</button>
                            <button class="btn btn-elevated-warning w-24 mr-1 mb-2">Warning</button>
                            <button class="btn btn-elevated-pending w-24 mr-1 mb-2">Pending</button>
                            <button class="btn btn-elevated-danger w-24 mr-1 mb-2">Danger</button>
                            <button class="btn btn-elevated-dark w-24 mr-1 mb-2">Dark</button>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-elevated-rounded-primary w-24 mr-1 mb-2">Primary</button>
                            <button class="btn btn-elevated-rounded-secondary w-24 mr-1 mb-2">Secondary</button>
                            <button class="btn btn-elevated-rounded-success w-24 mr-1 mb-2">Success</button>
                            <button class="btn btn-elevated-rounded-warning w-24 mr-1 mb-2">Warning</button>
                            <button class="btn btn-elevated-rounded-pending w-24 mr-1 mb-2">Pending</button>
                            <button class="btn btn-elevated-rounded-danger w-24 mr-1 mb-2">Danger</button>
                            <button class="btn btn-elevated-rounded-dark w-24 mr-1 mb-2">Dark</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-elevated-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-elevated-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <button class="btn btn-elevated-primary w-24 mr-1 mb-2">Primary</button>
                                            <button class="btn btn-elevated-secondary w-24 mr-1 mb-2">Secondary</button>
                                            <button class="btn btn-elevated-success w-24 mr-1 mb-2">Success</button>
                                            <button class="btn btn-elevated-warning w-24 mr-1 mb-2">Warning</button>
                                            <button class="btn btn-elevated-pending w-24 mr-1 mb-2">Pending</button>
                                            <button class="btn btn-elevated-danger w-24 mr-1 mb-2">Danger</button>
                                            <button class="btn btn-elevated-dark w-24 mr-1 mb-2">Dark</button>
                                        </div>
                                        <div class="mt-5">
                                            <button class="btn btn-elevated-rounded-primary w-24 mr-1 mb-2">Primary</button>
                                            <button class="btn btn-elevated-rounded-secondary w-24 mr-1 mb-2">Secondary</button>
                                            <button class="btn btn-elevated-rounded-success w-24 mr-1 mb-2">Success</button>
                                            <button class="btn btn-elevated-rounded-warning w-24 mr-1 mb-2">Warning</button>
                                            <button class="btn btn-elevated-rounded-pending w-24 mr-1 mb-2">Pending</button>
                                            <button class="btn btn-elevated-rounded-danger w-24 mr-1 mb-2">Danger</button>
                                            <button class="btn btn-elevated-rounded-dark w-24 mr-1 mb-2">Dark</button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Elevated Button -->
            <!-- BEGIN: Social Media Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Social Media Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#social-media-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="social-media-button" class="p-5">
                    <div class="preview">
                        <div class="flex flex-wrap">
                            <button class="btn btn-facebook w-32 mr-2 mb-2">
                                <i data-feather="facebook" class="w-4 h-4 mr-2"></i> Facebook
                            </button>
                            <button class="btn btn-twitter w-32 mr-2 mb-2">
                                <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter
                            </button>
                            <button class="btn btn-instagram w-32 mr-2 mb-2">
                                <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram
                            </button>
                            <button class="btn btn-linkedin w-32 mr-2 mb-2">
                                <i data-feather="linkedin" class="w-4 h-4 mr-2"></i> Linkedin
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-social-media-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-social-media-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-facebook w-32 mr-2 mb-2">
                                            <i data-feather="facebook" class="w-4 h-4 mr-2"></i> Facebook
                                        </button>
                                        <button class="btn btn-twitter w-32 mr-2 mb-2">
                                            <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter
                                        </button>
                                        <button class="btn btn-instagram w-32 mr-2 mb-2">
                                            <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram
                                        </button>
                                        <button class="btn btn-linkedin w-32 mr-2 mb-2">
                                            <i data-feather="linkedin" class="w-4 h-4 mr-2"></i> Linkedin
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Social Media Button -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Outline Button -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Outline Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#outline-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="outline-button" class="p-5">
                    <div class="preview">
                        <button class="btn btn-outline-primary w-24 inline-block mr-1 mb-2">Primary</button>
                        <button class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2">Secondary</button>
                        <button class="btn btn-outline-success w-24 inline-block mr-1 mb-2">Success</button>
                        <button class="btn btn-outline-warning w-24 inline-block mr-1 mb-2">Warning</button>
                        <button class="btn btn-outline-pending w-24 inline-block mr-1 mb-2">Pending</button>
                        <button class="btn btn-outline-danger w-24 inline-block mr-1 mb-2">Danger</button>
                        <button class="btn btn-outline-dark w-24 inline-block mr-1 mb-2">Dark</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-outline-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-outline-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-outline-primary w-24 inline-block mr-1 mb-2">Primary</button>
                                        <button class="btn btn-outline-secondary w-24 inline-block mr-1 mb-2">Secondary</button>
                                        <button class="btn btn-outline-success w-24 inline-block mr-1 mb-2">Success</button>
                                        <button class="btn btn-outline-warning w-24 inline-block mr-1 mb-2">Warning</button>
                                        <button class="btn btn-outline-pending w-24 inline-block mr-1 mb-2">Pending</button>
                                        <button class="btn btn-outline-danger w-24 inline-block mr-1 mb-2">Danger</button>
                                        <button class="btn btn-outline-dark w-24 inline-block mr-1 mb-2">Dark</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Outline Button -->
            <!-- BEGIN: Loading Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Loading State Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#loading-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="loading-button" class="p-5">
                    <div class="preview">
                        <button class="btn btn-primary mr-1 mb-2">
                            Saving <i data-loading-icon="oval" data-color="white" class="w-4 h-4 ml-2"></i>
                        </button>
                        <button class="btn btn-success mr-1 mb-2">
                            Adding <i data-loading-icon="spinning-circles" data-color="white" class="w-4 h-4 ml-2"></i>
                        </button>
                        <button class="btn btn-warning mr-1 mb-2">
                            Loading <i data-loading-icon="three-dots" data-color="1a202c" class="w-4 h-4 ml-2"></i>
                        </button>
                        <button class="btn btn-danger mr-1 mb-2">
                            Deleting <i data-loading-icon="puff" data-color="white" class="w-4 h-4 ml-2"></i>
                        </button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-loading-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-loading-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-primary mr-1 mb-2">
                                            Saving <i data-loading-icon="oval" data-color="white" class="w-4 h-4 ml-2"></i>
                                        </button>
                                        <button class="btn btn-success mr-1 mb-2">
                                            Adding <i data-loading-icon="spinning-circles" data-color="white" class="w-4 h-4 ml-2"></i>
                                        </button>
                                        <button class="btn btn-warning mr-1 mb-2">
                                            Loading <i data-loading-icon="three-dots" data-color="1a202c" class="w-4 h-4 ml-2"></i>
                                        </button>
                                        <button class="btn btn-danger mr-1 mb-2">
                                            Deleting <i data-loading-icon="puff" data-color="white" class="w-4 h-4 ml-2"></i>
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Loading Button -->
            <!-- BEGIN: Rounded Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Rounded Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#rounded-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="rounded-button" class="p-5">
                    <div class="preview">
                        <button class="btn btn-rounded-primary w-24 mr-1 mb-2">Primary</button>
                        <button class="btn btn-rounded-secondary w-24 mr-1 mb-2">Secondary</button>
                        <button class="btn btn-rounded-success w-24 mr-1 mb-2">Success</button>
                        <button class="btn btn-rounded-warning w-24 mr-1 mb-2">Warning</button>
                        <button class="btn btn-rounded-pending w-24 mr-1 mb-2">Pending</button>
                        <button class="btn btn-rounded-danger w-24 mr-1 mb-2">Danger</button>
                        <button class="btn btn-rounded-dark w-24 mr-1 mb-2">Dark</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-rounded-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-rounded-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-rounded-primary w-24 mr-1 mb-2">Primary</button>
                                        <button class="btn btn-rounded-secondary w-24 mr-1 mb-2">Secondary</button>
                                        <button class="btn btn-rounded-success w-24 mr-1 mb-2">Success</button>
                                        <button class="btn btn-rounded-warning w-24 mr-1 mb-2">Warning</button>
                                        <button class="btn btn-rounded-pending w-24 mr-1 mb-2">Pending</button>
                                        <button class="btn btn-rounded-danger w-24 mr-1 mb-2">Danger</button>
                                        <button class="btn btn-rounded-dark w-24 mr-1 mb-2">Dark</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Rounded Button -->
            <!-- BEGIN: Soft Color Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Soft Color Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-9">Show example code</label>
                        <input id="show-example-9" data-target="#softcolor-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="softcolor-button" class="p-5">
                    <div class="preview">
                        <button class="btn btn-rounded btn-primary-soft w-24 mr-1 mb-2">Primary</button>
                        <button class="btn btn-rounded btn-secondary-soft w-24 mr-1 mb-2">Secondary</button>
                        <button class="btn btn-rounded btn-success-soft w-24 mr-1 mb-2">Success</button>
                        <button class="btn btn-rounded btn-warning-soft w-24 mr-1 mb-2">Warning</button>
                        <button class="btn btn-rounded btn-pending-soft w-24 mr-1 mb-2">Pending</button>
                        <button class="btn btn-rounded btn-danger-soft w-24 mr-1 mb-2">Danger</button>
                        <button class="btn btn-rounded btn-dark-soft w-24 mr-1 mb-2">Dark</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-softcolor-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-softcolor-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-rounded btn-primary-soft w-24 mr-1 mb-2">Primary</button>
                                        <button class="btn btn-rounded btn-secondary-soft w-24 mr-1 mb-2">Secondary</button>
                                        <button class="btn btn-rounded btn-success-soft w-24 mr-1 mb-2">Success</button>
                                        <button class="btn btn-rounded btn-warning-soft w-24 mr-1 mb-2">Warning</button>
                                        <button class="btn btn-rounded btn-pending-soft w-24 mr-1 mb-2">Pending</button>
                                        <button class="btn btn-rounded btn-danger-soft w-24 mr-1 mb-2">Danger</button>
                                        <button class="btn btn-rounded btn-dark-soft w-24 mr-1 mb-2">Dark</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Soft Color Button -->
            <!-- BEGIN: Icon Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Icon Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-10">Show example code</label>
                        <input id="show-example-10" data-target="#icon-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-button" class="p-5">
                    <div class="preview">
                        <div class="flex flex-wrap">
                            <button class="btn btn-primary w-32 mr-2 mb-2">
                                <i data-feather="activity" class="w-4 h-4 mr-2"></i> Activity
                            </button>
                            <button class="btn btn-secondary w-32 mr-2 mb-2">
                                <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Hard Drive
                            </button>
                            <button class="btn btn-success w-32 mr-2 mb-2">
                                <i data-feather="calendar" class="w-4 h-4 mr-2"></i> Calendar
                            </button>
                            <button class="btn btn-warning w-32 mr-2 mb-2">
                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                            </button>
                            <button class="btn btn-pending w-32 mr-2 mb-2">
                                <i data-feather="download" class="w-4 h-4 mr-2"></i> Pending
                            </button>
                            <button class="btn btn-danger w-32 mr-2 mb-2">
                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Trash
                            </button>
                            <button class="btn btn-dark w-32 mr-2 mb-2">
                                <i data-feather="image" class="w-4 h-4 mr-2"></i> Image
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-primary w-32 mr-2 mb-2">
                                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> Activity
                                        </button>
                                        <button class="btn btn-secondary w-32 mr-2 mb-2">
                                            <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Hard Drive
                                        </button>
                                        <button class="btn btn-success w-32 mr-2 mb-2">
                                            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> Calendar
                                        </button>
                                        <button class="btn btn-warning w-32 mr-2 mb-2">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                                        </button>
                                        <button class="btn btn-pending w-32 mr-2 mb-2">
                                            <i data-feather="download" class="w-4 h-4 mr-2"></i> Pending
                                        </button>
                                        <button class="btn btn-danger w-32 mr-2 mb-2">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Trash
                                        </button>
                                        <button class="btn btn-dark w-32 mr-2 mb-2">
                                            <i data-feather="image" class="w-4 h-4 mr-2"></i> Image
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon Button -->
            <!-- BEGIN: Icon Only Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Icon Only Buttons</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-11">Show example code</label>
                        <input id="show-example-11" data-target="#icon-only-button" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-only-button" class="p-5">
                    <div class="preview">
                        <button class="btn btn-primary mr-1 mb-2">
                            <i data-feather="activity" class="w-5 h-5"></i>
                        </button>
                        <button class="btn btn-secondary mr-1 mb-2">
                            <i data-feather="hard-drive" class="w-5 h-5"></i>
                        </button>
                        <button class="btn btn-success mr-1 mb-2">
                            <i data-feather="calendar" class="w-5 h-5"></i>
                        </button>
                        <button class="btn btn-warning mr-1 mb-2">
                            <i data-feather="share-2" class="w-5 h-5"></i>
                        </button>
                        <button class="btn btn-pending mr-1 mb-2">
                            <i data-feather="download" class="w-5 h-5"></i>
                        </button>
                        <button class="btn btn-danger mr-1 mb-2">
                            <i data-feather="trash" class="w-5 h-5"></i>
                        </button>
                        <button class="btn btn-dark mr-1 mb-2">
                            <i data-feather="image" class="w-5 h-5"></i>
                        </button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-only-button" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-only-button" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <button class="btn btn-primary mr-1 mb-2">
                                            <i data-feather="activity" class="w-5 h-5"></i>
                                        </button>
                                        <button class="btn btn-secondary mr-1 mb-2">
                                            <i data-feather="hard-drive" class="w-5 h-5"></i>
                                        </button>
                                        <button class="btn btn-success mr-1 mb-2">
                                            <i data-feather="calendar" class="w-5 h-5"></i>
                                        </button>
                                        <button class="btn btn-warning mr-1 mb-2">
                                            <i data-feather="share-2" class="w-5 h-5"></i>
                                        </button>
                                        <button class="btn btn-pending mr-1 mb-2">
                                            <i data-feather="download" class="w-5 h-5"></i>
                                        </button>
                                        <button class="btn btn-danger mr-1 mb-2">
                                            <i data-feather="trash" class="w-5 h-5"></i>
                                        </button>
                                        <button class="btn btn-dark mr-1 mb-2">
                                            <i data-feather="image" class="w-5 h-5"></i>
                                        </button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon Only Button -->
        </div>
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Alert</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Alert -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-secondary show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-success show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-warning show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-pending show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-danger show mb-2" role="alert">Awesome simple alert</div>
                        <div class="alert alert-dark show mb-2" role="alert">Awesome simple alert</div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-alert" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="alert alert-primary show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-secondary show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-success show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-warning show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-pending show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-danger show mb-2" role="alert">Awesome simple alert</div>
                                        <div class="alert alert-dark show mb-2" role="alert">Awesome simple alert</div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Icon Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#icon-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-secondary show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-success show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-warning show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-pending show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-danger show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-dark show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-alert" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="alert alert-primary show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-secondary show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-success show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-warning show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-pending show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-danger show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-dark show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Additional Content Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#additional-content-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="additional-content-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-secondary show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-success show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-warning show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-pending show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-danger show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-dark show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-additional-content-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-additional-content-alert" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="alert alert-primary show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-secondary show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-success show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-warning show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-pending show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-danger show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-dark show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Awesome alert with additional info</div>
                                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Alert -->
        <!-- BEGIN: Icon & Dismiss Alert -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Icon & Dismiss Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#icon-dismiss-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-dismiss-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-pending alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-dark alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-dismiss-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-dismiss-alert" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-pending alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-dark alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Outline Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#outline-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="outline-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-outline-primary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-secondary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-success alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-warning alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-pending alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-danger alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-dark alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-feather="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-outline-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-outline-alert" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="alert alert-outline-primary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-secondary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-success alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-warning alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-pending alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-danger alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-dark alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-feather="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Soft Color Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#softcolor-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="softcolor-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-secondary-soft show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-success-soft show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-warning-soft show flex items-center mb-2" role="alert">
                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-pending-soft show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                        <div class="alert alert-dark-soft show flex items-center mb-2" role="alert">
                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-softcolor-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-softcolor-alert" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-secondary-soft show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-success-soft show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-warning-soft show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-pending-soft show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                        <div class="alert alert-dark-soft show flex items-center mb-2" role="alert">
                                            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Awesome alert with icon
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Icon & Dismiss Alert -->
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Progressbar</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Progressbar -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Progressbar</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-progressbar" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-progressbar" class="p-5">
                    <div class="preview">
                        <div class="progress">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-progressbar" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-progressbar" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="progress">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Progressbar with Label</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#progressbar-label" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="progressbar-label" class="p-5">
                    <div class="preview">
                        <div class="progress h-4">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="progress h-4 mt-3">
                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                        <div class="progress h-4 mt-3">
                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-label" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-progressbar-label" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="progress h-4">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress h-4 mt-3">
                                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">60%</div>
                                        </div>
                                        <div class="progress h-4 mt-3">
                                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">70%</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Progressbar -->
        <!-- BEGIN: Progressbar Height -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Progressbar Height</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#progressbar-height" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="progressbar-height" class="p-5">
                    <div class="preview">
                        <div class="progress h-1">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress h-3 mt-3">
                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-height" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-progressbar-height" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="progress h-1">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress h-3 mt-3">
                                            <div class="progress-bar w-3/4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Progressbar Color</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#progressbar-color" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="progressbar-color" class="p-5">
                    <div class="preview">
                        <div class="progress">
                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-3/4 bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar w-3/4 bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-progressbar-color" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-progressbar-color" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="progress">
                                            <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-3/4 bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-3/4 bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Progressbar Height -->
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tooltip</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Tooltip -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-tooltip" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-tooltip" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Tooltip -->
            <!-- BEGIN: On CLick Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">On Click Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#on-click-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="on-click-tooltip" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-on-click-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-on-click-tooltip" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: On CLick Tooltip -->
            <!-- BEGIN: Light Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Light Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#light-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="light-tooltip" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-light-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-light-tooltip" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Light Tooltip -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Custom Content Tooltip -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Custom Tooltip Content</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#custom-content-preview-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="custom-content-preview-tooltip" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Custom Tooltip Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                        <!-- END: Custom Tooltip Toggle -->
                        <!-- BEGIN: Custom Tooltip Content -->
                        <div class="tooltip-content">
                            <div id="custom-content-tooltip" class="relative flex items-center py-1">
                                <div class="w-12 h-12 image-fit">
                                    <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium dark:text-slate-200 leading-relaxed">{{ $fakers[0]['users'][0]['name'] }}</div>
                                    <div class="text-slate-500 dark:text-slate-400">Bootstrap 4 HTML Admin Template</div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Custom Tooltip Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-custom-content-preview-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-custom-content-preview-tooltip" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Custom Tooltip Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" data-tooltip-content="#custom-content-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                        <!-- END: Custom Tooltip Toggle -->
                                        <!-- BEGIN: Custom Tooltip Content -->
                                        <div class="tooltip-content">
                                            <div id="custom-content-tooltip" class="relative flex items-center py-1">
                                                <div class="w-12 h-12 image-fit">
                                                    <img alt="" class="rounded-full" src="' . asset('dist/images/' . $fakers[0]['photos'][0]) . '">
                                                </div>
                                                <div class="ml-4 mr-auto">
                                                    <div class="font-medium dark:text-slate-200 leading-relaxed">' . $fakers[0]['users'][0]['name'] . '</div>
                                                    <div class="text-slate-500 dark:text-slate-400">Bootstrap 4 HTML Admin Template</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Custom Tooltip Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Custom Content Tooltip -->
            <!-- BEGIN: Chart Tooltip -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Chart Tooltip</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#chart-preview-tooltip" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="chart-preview-tooltip" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Custom Tooltip Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-theme="light" data-tooltip-content="#chart-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                        </div>
                        <!-- END: Custom Tooltip Toggle -->
                        <!-- BEGIN: Custom Tooltip Content -->
                        <div class="tooltip-content">
                            <div id="chart-tooltip" class="py-1">
                                <div class="font-medium dark:text-slate-200">Net Worth</div>
                                <div class="flex items-center mt-2 sm:mt-0">
                                    <div class="mr-2 w-20 flex dark:text-slate-500 dark:text-slate-400">
                                        USP: <span class="ml-auto font-medium text-success">+23%</span>
                                    </div>
                                    <div class="w-24 sm:w-32 lg:w-56">
                                        <canvas class="simple-line-chart-1" data-random="true" height="30"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Custom Tooltip Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-chart-preview-tooltip" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-chart-preview-tooltip" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Custom Tooltip Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-theme="light" data-tooltip-content="#chart-tooltip" data-trigger="click" class="tooltip btn btn-primary" title="This is awesome tooltip example!">Show Tooltip</a>
                                        </div>
                                        <!-- END: Custom Tooltip Toggle -->
                                        <!-- BEGIN: Custom Tooltip Content -->
                                        <div class="tooltip-content">
                                            <div id="chart-tooltip" class="py-1">
                                                <div class="font-medium dark:text-slate-200">Net Worth</div>
                                                <div class="flex items-center mt-2 sm:mt-0">
                                                    <div class="mr-2 w-20 flex dark:text-slate-500 dark:text-slate-400">
                                                        USP: <span class="ml-auto font-medium text-success">+23%</span>
                                                    </div>
                                                    <div class="w-24 sm:w-32 lg:w-56">
                                                        <canvas class="simple-line-chart-1" data-random="true" height="30"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Custom Tooltip Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Chart Tooltip -->
        </div>
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Dropdown</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Basic Dropdown -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Dropdown</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-dropdown" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-dropdown" class="p-5">
                    <div class="preview">
                        <div class="flex justify-center">
                            <div class="dropdown">
                                <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-dropdown" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-dropdown" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="" class="dropdown-item">New Dropdown</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">Delete Dropdown</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Header & Footer Dropdown</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#header-footer-dropdown" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="header-footer-dropdown" class="p-5">
                    <div class="preview">
                        <div class="flex justify-center">
                            <div class="dropdown">
                                <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                <div class="dropdown-menu w-56">
                                    <ul class="dropdown-content">
                                        <li>
                                            <h6 class="dropdown-header">Export Options</h6>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="activity" class="w-4 h-4 mr-2"></i> English
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="box" class="w-4 h-4 mr-2"></i>
                                                Indonesia
                                                <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="layout" class="w-4 h-4 mr-2"></i> English
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <div class="flex p-1">
                                                <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                                <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-footer-dropdown" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-header-footer-dropdown" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn btn-primary" aria-expanded="false">Show Dropdown</button>
                                            <div class="dropdown-menu w-56">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <h6 class="dropdown-header">Export Options</h6>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="activity" class="w-4 h-4 mr-2"></i> English
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="box" class="w-4 h-4 mr-2"></i>
                                                            Indonesia
                                                            <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="layout" class="w-4 h-4 mr-2"></i> English
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <div class="flex p-1">
                                                            <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                                            <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Icon Dropdown</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#icon-dropdown" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-dropdown" class="p-5">
                    <div class="preview">
                        <div class="flex justify-center">
                            <div class="dropdown">
                                <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                <div class="dropdown-menu w-48">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Dropdown
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Dropdown
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-dropdown" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-dropdown" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                            <div class="dropdown-menu w-48">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Dropdown
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Dropdown
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Programmatically Show/Hide Dropdown</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#programmatically-show-hide-dropdown" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="programmatically-show-hide-dropdown" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <!-- BEGIN: Show Modal Toggle -->
                            <button id="programmatically-show-dropdown" class="btn btn-primary w-40 mr-1 mb-2">Show</button>
                            <!-- END: Show Modal Toggle -->
                            <!-- BEGIN: Hide Modal Toggle -->
                            <button id="programmatically-hide-dropdown" class="btn btn-primary w-40 mr-1 mb-2">Hide</button>
                            <!-- END: Hide Modal Toggle -->
                            <!-- BEGIN: Toggle Modal Toggle -->
                            <button id="programmatically-toggle-dropdown" class="btn btn-primary w-40 mr-1 mb-2">Toggle</button>
                            <!-- END: Toggle Modal Toggle -->
                            <!-- BEGIN: Dropdown Content -->
                            <div id="programmatically-dropdown" class="dropdown inline-block">
                                <button class="dropdown-toggle btn btn-primary w-40 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Example Dropdown</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END: Dropdown Content -->
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-programmatically-show-hide-dropdown-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-dropdown-html" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Show Modal Toggle -->
                                        <button id="programmatically-show-dropdown" class="btn btn-primary w-40 mr-1 mb-2">Show</button>
                                        <!-- END: Show Modal Toggle -->
                                        <!-- BEGIN: Hide Modal Toggle -->
                                        <button id="programmatically-hide-dropdown" class="btn btn-primary w-40 mr-1 mb-2">Hide</button>
                                        <!-- END: Hide Modal Toggle -->
                                        <!-- BEGIN: Toggle Modal Toggle -->
                                        <button id="programmatically-toggle-dropdown" class="btn btn-primary w-40 mr-1 mb-2">Toggle</button>
                                        <!-- END: Toggle Modal Toggle -->
                                        <!-- BEGIN: Dropdown Content -->
                                        <div class="dropdown inline-block">
                                            <button class="dropdown-toggle btn btn-primary w-40 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown" id="programmatically-dropdown">Example Dropdown</button>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="" class="dropdown-item">New Dropdown</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">Delete Dropdown</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END: Dropdown Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-programmatically-show-hide-dropdown-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-programmatically-show-hide-dropdown-js" class="source-preview">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        // Show dropdown
                                        const el = document.querySelector("#programmatically-dropdown");
                                        const dropdown = tailwind.Dropdown.getOrCreateInstance(el);
                                        dropdown.show();

                                        // Hide dropdown
                                        const el = document.querySelector("#programmatically-dropdown");
                                        const dropdown = tailwind.Dropdown.getOrCreateInstance(el);
                                        dropdown.hide();

                                        // Toggle dropdown
                                        const el = document.querySelector("#programmatically-dropdown");
                                        const dropdown = tailwind.Dropdown.getOrCreateInstance(el);
                                        dropdown.toggle();
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Dropdown with close button</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#button-dropdown" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="button-dropdown" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <div class="dropdown inline-block" data-tw-placement="bottom-start">
                                <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter Dropdown <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="dropdown-content">
                                        <div class="p-2">
                                            <div>
                                                <div class="text-xs">From</div>
                                                <input type="text" class="form-control mt-2 flex-1" placeholder="example@gmail.com"/>
                                            </div>
                                            <div class="mt-3">
                                                <div class="text-xs">To</div>
                                                <input type="text" class="form-control mt-2 flex-1" placeholder="example@gmail.com"/>
                                            </div>
                                            <div class="flex items-center mt-3">
                                                <button data-dismiss="dropdown" class="btn btn-secondary w-32 ml-auto">Close</button>
                                                <button class="btn btn-primary w-32 ml-2">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-button-dropdown" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-button-dropdown" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <div class="dropdown inline-block" data-tw-placement="bottom-start">
                                                <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">
                                                    Filter Dropdown <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-content">
                                                        <div class="p-2">
                                                            <div>
                                                                <div class="text-xs">From</div>
                                                                <input type="text" class="form-control mt-2 flex-1" placeholder="example@gmail.com"/>
                                                            </div>
                                                            <div class="mt-3">
                                                                <div class="text-xs">To</div>
                                                                <input type="text" class="form-control mt-2 flex-1" placeholder="example@gmail.com"/>
                                                            </div>
                                                            <div class="flex items-center mt-3">
                                                                <button data-dismiss="dropdown" class="btn btn-secondary w-32 ml-auto">Close</button>
                                                                <button class="btn btn-primary w-32 ml-2">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Basic Dropdown -->
        <!-- BEGIN: Header & Footer Dropdown -->
        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Scrolled Dropdown</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#scrolled-dropdown" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="scrolled-dropdown" class="p-5">
                    <div class="preview">
                        <div class="flex justify-center">
                            <div class="dropdown">
                                <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li>
                                            <a href="" class="dropdown-item">January</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">February</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">March</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">June</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">July</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-scrolled-dropdown" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-scrolled-dropdown" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content overflow-y-auto h-32">
                                                    <li>
                                                        <a href="" class="dropdown-item">January</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">February</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">March</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">June</a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">July</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Header & Icon Dropdown</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#header-icon-dropdown" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="header-icon-dropdown" class="p-5">
                    <div class="preview">
                        <div class="flex justify-center">
                            <div class="dropdown">
                                <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <div class="dropdown-header">Export Tools</div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="external-link" class="w-4 h-4 mr-2"></i> Excel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> CSV
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="archive" class="w-4 h-4 mr-2"></i> PDF
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header-icon-dropdown" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-header-icon-dropdown" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-tw-toggle="dropdown">Show Dropdown</button>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <div class="dropdown-header">Export Tools</div>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="external-link" class="w-4 h-4 mr-2"></i> Excel
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> CSV
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="dropdown-item">
                                                            <i data-feather="archive" class="w-4 h-4 mr-2"></i> PDF
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Dropdown Placement</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#dropdown-placement" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="dropdown-placement" class="p-5">
                    <div class="preview">
                        <div class="text-center">
                            <div class="dropdown inline-block" data-tw-placement="top-start">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Top Start</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="top">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Top</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="top-end">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Top End</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="right-start">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Right Start</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="right">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Right</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="right-end">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Right End</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="bottom-end">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Bottom End</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="bottom">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Bottom</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="dropdown inline-block"
                                data-tw-placement="bottom-start"
                                >
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Bottom Start</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="left-start">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Left Start</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="left">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Left</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown inline-block" data-tw-placement="left-end">
                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Left End</button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">New Dropdown</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-dropdown-placement" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-dropdown-placement" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="text-center">
                                            <div class="dropdown inline-block" data-tw-placement="top-start">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Top Start</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="top">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Top</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="top-end">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Top End</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="right-start">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Right Start</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="right">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Right</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="right-end">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Right End</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="bottom-end">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Bottom End</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="bottom">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Bottom</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="dropdown inline-block"
                                                data-tw-placement="bottom-start"
                                                >
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Bottom Start</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="left-start">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Left Start</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="left">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Left</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="dropdown inline-block" data-tw-placement="left-end">
                                                <button class="dropdown-toggle btn btn-primary w-32 mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">Left End</button>
                                                <div class="dropdown-menu w-40">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="" class="dropdown-item">New Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="dropdown-item">Delete Dropdown</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Header & Footer Dropdown -->
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Typography</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: HEADING -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Heading</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#heading" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="heading" class="p-5">
                    <div class="preview">
                        <div>
                            <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                            <h2 class="text-3xl font-medium leading-none mt-3">h2. Heading 2</h2>
                            <h3 class="text-2xl font-medium leading-none mt-3">h3. Heading 3</h3>
                            <h4 class="text-xl font-medium leading-none mt-3">h4. Heading 4</h4>
                            <h5 class="text-lg font-medium leading-none mt-3">h5. Heading 5</h5>
                            <h6 class="font-medium leading-none mt-3">h6. Heading 6</h6>
                        </div>
                        <div class="mt-5">
                            <h1 class="text-4xl text-primary font-medium leading-none">h1. Heading 1</h1>
                            <h2 class="text-3xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">h2. Heading 2</h2>
                            <h3 class="text-2xl text-success font-medium leading-none mt-3">h3. Heading 3</h3>
                            <h4 class="text-xl text-warning font-medium leading-none mt-3">h4. Heading 4</h4>
                            <h5 class="text-lg text-danger font-medium leading-none mt-3">h5. Heading 5</h5>
                            <h6 class="text-slate-500 font-medium leading-none mt-3">h6. Heading 6</h6>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-heading" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-heading" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                                            <h2 class="text-3xl font-medium leading-none mt-3">h2. Heading 2</h2>
                                            <h3 class="text-2xl font-medium leading-none mt-3">h3. Heading 3</h3>
                                            <h4 class="text-xl font-medium leading-none mt-3">h4. Heading 4</h4>
                                            <h5 class="text-lg font-medium leading-none mt-3">h5. Heading 5</h5>
                                            <h6 class="font-medium leading-none mt-3">h6. Heading 6</h6>
                                        </div>
                                        <div class="mt-5">
                                            <h1 class="text-4xl text-primary font-medium leading-none">h1. Heading 1</h1>
                                            <h2 class="text-3xl text-slate-600 dark:text-slate-500 font-medium leading-none mt-3">h2. Heading 2</h2>
                                            <h3 class="text-2xl text-success font-medium leading-none mt-3">h3. Heading 3</h3>
                                            <h4 class="text-xl text-warning font-medium leading-none mt-3">h4. Heading 4</h4>
                                            <h5 class="text-lg text-danger font-medium leading-none mt-3">h5. Heading 5</h5>
                                            <h6 class="text-slate-500 font-medium leading-none mt-3">h6. Heading 6</h6>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: HEADING -->
            <!-- BEGIN: TEXT SETTINGS -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Text Settings</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#text-settings" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="text-settings" class="p-5">
                    <div class="preview">
                        <div>
                            <div class="font-normal">Example text</div>
                            <div class="font-medium">Example medium text</div>
                            <div class="font-semibold">Example semibold text</div>
                            <div class="font-bold">Example bolder text</div>
                            <div class="font-extrabold">Example boldest text</div>
                        </div>
                        <div class="mt-5">
                            <div class="uppercase">Example uppercase text</div>
                            <div class="lowercase">Example lowercase text</div>
                            <div class="capitalize">Example capitalized text</div>
                            <div class="normal-case">Example cursive text</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-text-settings" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-text-settings" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <div class="font-normal">Example text</div>
                                            <div class="font-medium">Example medium text</div>
                                            <div class="font-semibold">Example semibold text</div>
                                            <div class="font-bold">Example bolder text</div>
                                            <div class="font-extrabold">Example boldest text</div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="uppercase">Example uppercase text</div>
                                            <div class="lowercase">Example lowercase text</div>
                                            <div class="capitalize">Example capitalized text</div>
                                            <div class="normal-case">Example cursive text</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: TEXT SETTINGS -->
            <!-- BEGIN: COMMON ELEMENTS -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Common Elements</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#common-elements" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="common-elements" class="p-5">
                    <div class="preview">
                        <div>You can use the mark tag to <mark class="p-1 bg-yellow-200">highlight</mark> text.</div>
                        <del class="block mt-1">This line of text is meant to be treated as deleted text.</del>
                        <s class="block mt-1">This line of text is meant to be treated as no longer accurate.</s>
                        <ins class="block mt-1">This line of text is meant to be treated as an addition to the document.</ins>
                        <u class="block mt-1">This line of text will render as underlined</u>
                        <small class="block mt-1">This line of text is meant to be treated as fine print.</small>
                        <strong class="block mt-1">This line rendered as bold text.</strong>
                        <em class="block mt-1">This line rendered as italicized text.</em>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-common-elements" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-common-elements" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>You can use the mark tag to <mark class="p-1 bg-yellow-200">highlight</mark> text.</div>
                                        <del class="block mt-1">This line of text is meant to be treated as deleted text.</del>
                                        <s class="block mt-1">This line of text is meant to be treated as no longer accurate.</s>
                                        <ins class="block mt-1">This line of text is meant to be treated as an addition to the document.</ins>
                                        <u class="block mt-1">This line of text will render as underlined</u>
                                        <small class="block mt-1">This line of text is meant to be treated as fine print.</small>
                                        <strong class="block mt-1">This line rendered as bold text.</strong>
                                        <em class="block mt-1">This line rendered as italicized text.</em>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: COMMON ELEMENTS -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: BADGES -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Badges</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#badge" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="badge" class="p-5">
                    <div class="preview">
                        <div class="font-medium">Basic Badge</div>
                        <div class="mt-2">
                            <span class="text-xs px-1 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="text-xs px-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="text-xs px-1 rounded-full bg-success text-white mr-1">3</span>
                            <span class="text-xs px-1 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="text-xs px-1 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="text-xs px-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-6">Badge Sizes</div>
                        <div class="mt-3">
                            <span class="px-2 py-1 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="px-2 py-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-2 py-1 rounded-full bg-success text-white mr-1">3</span>
                            <span class="px-2 py-1 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="px-2 py-1 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="px-2 py-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="mt-4">
                            <span class="px-3 py-2 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-3 py-2 rounded-full bg-success text-white mr-1">3</span>
                            <span class="px-3 py-2 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="px-3 py-2 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="px-3 py-2 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="mt-6">
                            <span class="px-4 py-3 rounded-full bg-primary text-white mr-1">1</span>
                            <span class="px-4 py-3 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-4 py-3 rounded-full bg-success text-white mr-1">3</span>
                            <span class="px-4 py-3 rounded-full bg-warning text-white mr-1">4</span>
                            <span class="px-4 py-3 rounded-full bg-danger text-white mr-1">5</span>
                            <span class="px-4 py-3 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-10">Square Badge</div>
                        <div class="mt-2">
                            <span class="text-xs px-1 bg-primary text-white mr-1">1</span>
                            <span class="text-xs px-1 border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="text-xs px-1 bg-success text-white mr-1">3</span>
                            <span class="text-xs px-1 bg-warning text-white mr-1">4</span>
                            <span class="text-xs px-1 bg-danger text-white mr-1">5</span>
                            <span class="text-xs px-1 bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                        </div>
                        <div class="font-medium mt-6">Outline Badge</div>
                        <div class="mt-4">
                            <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1">1</span>
                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                            <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1">3</span>
                            <span class="px-3 py-2 rounded-full border border-warning text-warning dark:border-warning mr-1">4</span>
                            <span class="px-3 py-2 rounded-full border border-danger text-danger dark:border-danger mr-1">5</span>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-badge" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-badge" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="font-medium">Basic Badge</div>
                                        <div class="mt-2">
                                            <span class="text-xs px-1 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="text-xs px-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="text-xs px-1 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="text-xs px-1 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="text-xs px-1 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="text-xs px-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-6">Badge Sizes</div>
                                        <div class="mt-3">
                                            <span class="px-2 py-1 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="px-2 py-1 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-2 py-1 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="px-2 py-1 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="px-2 py-1 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="px-2 py-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="mt-4">
                                            <span class="px-3 py-2 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-3 py-2 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="px-3 py-2 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="px-3 py-2 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="px-3 py-2 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="mt-6">
                                            <span class="px-4 py-3 rounded-full bg-primary text-white mr-1">1</span>
                                            <span class="px-4 py-3 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-4 py-3 rounded-full bg-success text-white mr-1">3</span>
                                            <span class="px-4 py-3 rounded-full bg-warning text-white mr-1">4</span>
                                            <span class="px-4 py-3 rounded-full bg-danger text-white mr-1">5</span>
                                            <span class="px-4 py-3 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-10">Square Badge</div>
                                        <div class="mt-2">
                                            <span class="text-xs px-1 bg-primary text-white mr-1">1</span>
                                            <span class="text-xs px-1 border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="text-xs px-1 bg-success text-white mr-1">3</span>
                                            <span class="text-xs px-1 bg-warning text-white mr-1">4</span>
                                            <span class="text-xs px-1 bg-danger text-white mr-1">5</span>
                                            <span class="text-xs px-1 bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300 mr-1">6</span>
                                        </div>
                                        <div class="font-medium mt-6">Outline Badge</div>
                                        <div class="mt-4">
                                            <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1">1</span>
                                            <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1">2</span>
                                            <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1">3</span>
                                            <span class="px-3 py-2 rounded-full border border-warning text-warning dark:border-warning mr-1">4</span>
                                            <span class="px-3 py-2 rounded-full border border-danger text-danger dark:border-danger mr-1">5</span>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BADGES -->
            <!-- BEGIN: SEPARATOR -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Separator</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#separator" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="separator" class="p-5">
                    <div class="preview">
                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 border-dashed"></div>
                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 mt-5"></div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-separator" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-separator" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 border-dashed"></div>
                                        <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 mt-5"></div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: SEPARATOR -->
            <!-- BEGIN: Devider -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Devider</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#devider" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="devider" class="p-5">
                    <div class="preview">
                        <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
                            <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">or</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-devider" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-devider" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
                                            <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">or</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Devider -->
            <!-- BEGIN: Links -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Links</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#link" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="link" class="p-5">
                    <div class="preview">
                        <div>
                            <a href="" class="text-primary block font-normal">Example text</a>
                            <a href="" class="text-primary block font-medium">Example medium text</a>
                            <a href="" class="text-primary block font-semibold">Example semibold text</a>
                            <a href="" class="text-primary block font-bold">Example bolder text</a>
                            <a href="" class="text-primary block font-extrabold">Example boldest text</a>
                        </div>
                        <div class="mt-5">
                            <a href="" class="text-primary block">Primary state</a>
                            <a href="" class="text-slate-600 dark:text-slate-500 block">Secondary state</a>
                            <a href="" class="text-success block">Success state</a>
                            <a href="" class="text-warning block">Warning state</a>
                            <a href="" class="text-danger block">Danger state</a>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-link" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-link" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <a href="" class="text-primary block font-normal">Example text</a>
                                            <a href="" class="text-primary block font-medium">Example medium text</a>
                                            <a href="" class="text-primary block font-semibold">Example semibold text</a>
                                            <a href="" class="text-primary block font-bold">Example bolder text</a>
                                            <a href="" class="text-primary block font-extrabold">Example boldest text</a>
                                        </div>
                                        <div class="mt-5">
                                            <a href="" class="text-primary block">Primary state</a>
                                            <a href="" class="text-slate-600 dark:text-slate-500 block">Secondary state</a>
                                            <a href="" class="text-success block">Success state</a>
                                            <a href="" class="text-warning block">Warning state</a>
                                            <a href="" class="text-danger block">Danger state</a>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Links -->
        </div>
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Feather Icons</h2>
    </div>
    <!-- BEGIN: Icon List -->
    <div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="activity" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">activity</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="airplay" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">airplay</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="alert-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">alert-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="alert-octagon" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">alert-octagon</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="alert-triangle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">alert-triangle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="align-center" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">align-center</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="align-justify" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">align-justify</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="align-left" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">align-left</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="align-right" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">align-right</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="anchor" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">anchor</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="archive" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">archive</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="at-sign" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">at-sign</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="award" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">award</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="aperture" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">aperture</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="bar-chart" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">bar-chart</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="bar-chart-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">bar-chart-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="battery" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">battery</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="battery-charging" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">battery-charging</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="bell" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">bell</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="bell-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">bell-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="bluetooth" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">bluetooth</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="book-open" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">book-open</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="book" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">book</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="bookmark" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">bookmark</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="box" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">box</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="briefcase" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">briefcase</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="calendar" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">calendar</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="camera" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">camera</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="cast" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">cast</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="clipboard" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">clipboard</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="clock" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">clock</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="cloud-drizzle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">cloud-drizzle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="cloud-lightning" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">cloud-lightning</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="cloud-rain" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">cloud-rain</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="cloud-snow" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">cloud-snow</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="cloud" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">cloud</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="codepen" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">codepen</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="codesandbox" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">codesandbox</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="code" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">code</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="coffee" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">coffee</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="columns" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">columns</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="command" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">command</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="compass" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">compass</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="copy" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">copy</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-down-left" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-down-left</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-down-right" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-down-right</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-left-down" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-left-down</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-left-up" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-left-up</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-right-down" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-right-down</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-right-up" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-right-up</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-up-left" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-up-left</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="corner-up-right" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">corner-up-right</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="cpu" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">cpu</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="credit-card" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">credit-card</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="crop" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">crop</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="crosshair" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">crosshair</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="database" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">database</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="delete" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">delete</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="disc" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">disc</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="dollar-sign" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">dollar-sign</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="droplet" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">droplet</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="edit" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">edit</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="edit-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">edit-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="edit-3" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">edit-3</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="eye" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">eye</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="eye-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">eye-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="external-link" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">external-link</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="facebook" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">facebook</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="fast-forward" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">fast-forward</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="figma" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">figma</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="file-minus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">file-minus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="file-plus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">file-plus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="file-text" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">file-text</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="film" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">film</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="filter" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">filter</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="flag" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">flag</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="folder-minus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">folder-minus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="folder-plus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">folder-plus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="folder" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">folder</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="framer" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">framer</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="frown" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">frown</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="gift" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">gift</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="git-branch" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">git-branch</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="git-commit" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">git-commit</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="git-merge" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">git-merge</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="git-pull-request" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">git-pull-request</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="github" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">github</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="gitlab" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">gitlab</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="globe" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">globe</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="hard-drive" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">hard-drive</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="hash" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">hash</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="headphones" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">headphones</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="heart" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">heart</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="help-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">help-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="hexagon" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">hexagon</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="home" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">home</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="image" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">image</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="inbox" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">inbox</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="instagram" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">instagram</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="key" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">key</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="layers" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">layers</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="layout" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">layout</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="link" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">link</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="link-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">link-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="linkedin" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">linkedin</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="list" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">list</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="lock" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">lock</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="log-in" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">log-in</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="log-out" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">log-out</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="mail" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">mail</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="map-pin" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">map-pin</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="map" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">map</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="maximize" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">maximize</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="maximize-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">maximize-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="meh" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">meh</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="menu" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">menu</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="message-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">message-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="message-square" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">message-square</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="mic-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">mic-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="mic" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">mic</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="minimize" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">minimize</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="minimize-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">minimize-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="minus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">minus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="monitor" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">monitor</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="moon" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">moon</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="more-horizontal" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">more-horizontal</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="more-vertical" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">more-vertical</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="mouse-pointer" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">mouse-pointer</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="move" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">move</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="music" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">music</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="navigation" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">navigation</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="navigation-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">navigation-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="octagon" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">octagon</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="package" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">package</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="paperclip" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">paperclip</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="pause" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">pause</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="pause-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">pause-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="pen-tool" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">pen-tool</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="percent" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">percent</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="phone-call" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">phone-call</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="phone-forwarded" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">phone-forwarded</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="phone-incoming" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">phone-incoming</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="phone-missed" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">phone-missed</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="phone-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">phone-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="phone-outgoing" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">phone-outgoing</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="phone" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">phone</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="play" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">play</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="pie-chart" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">pie-chart</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="play-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">play-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="plus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">plus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="plus-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">plus-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="plus-square" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">plus-square</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="pocket" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">pocket</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="power" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">power</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="printer" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">printer</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="radio" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">radio</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="refresh-cw" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">refresh-cw</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="refresh-ccw" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">refresh-ccw</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="repeat" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">repeat</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="rewind" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">rewind</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="rotate-ccw" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">rotate-ccw</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="rotate-cw" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">rotate-cw</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="rss" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">rss</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="save" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">save</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="scissors" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">scissors</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="search" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">search</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="send" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">send</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="settings" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">settings</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="share-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">share-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="shield" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">shield</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="shield-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">shield-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="shopping-bag" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">shopping-bag</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="shopping-cart" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">shopping-cart</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="shuffle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">shuffle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="skip-back" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">skip-back</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="skip-forward" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">skip-forward</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="slack" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">slack</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="slash" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">slash</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="sliders" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">sliders</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="smartphone" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">smartphone</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="smile" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">smile</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="speaker" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">speaker</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="star" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">star</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="stop-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">stop-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="sun" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">sun</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="sunrise" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">sunrise</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="sunset" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">sunset</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="tablet" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">tablet</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="tag" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">tag</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="target" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">target</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="terminal" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">terminal</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="thermometer" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">thermometer</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="thumbs-down" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">thumbs-down</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="thumbs-up" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">thumbs-up</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="toggle-left" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">toggle-left</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="toggle-right" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">toggle-right</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="tool" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">tool</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="trash" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">trash</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="trash-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">trash-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="triangle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">triangle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="truck" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">truck</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="tv" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">tv</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="twitch" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">twitch</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="twitter" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">twitter</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="type" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">type</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="umbrella" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">umbrella</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="unlock" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">unlock</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="user-check" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">user-check</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="user-minus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">user-minus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="user-plus" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">user-plus</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="user-x" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">user-x</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="user" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">user</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="users" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">users</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="video-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">video-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="video" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">video</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="voicemail" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">voicemail</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="volume" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">volume</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="volume-1" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">volume-1</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="volume-2" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">volume-2</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="volume-x" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">volume-x</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="watch" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">watch</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="wifi-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">wifi-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="wifi" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">wifi</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="wind" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">wind</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="x-circle" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">x-circle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="x-octagon" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">x-octagon</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="x-square" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">x-square</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="x" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">x</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="youtube" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">youtube</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="zap-off" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">zap-off</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="zap" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">zap</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="zoom-in" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">zoom-in</div>
        </div>
        <div class="col-span-6 sm:col-span-3 lg:col-span-2 xl:col-span-1">
            <i data-feather="zoom-out" class="block mx-auto"></i>
            <div class="text-center text-xs mt-2">zoom-out</div>
        </div>
    </div>
    <!-- END: Icon List -->


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">SVG Loaders</h2>
    </div>
    <!-- BEGIN: Icon List -->
    <div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="audio" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">audio</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="ball-triangle" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">ball-triangle</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="bars" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">bars</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="circles" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">circles</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="grid" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">grid</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="hearts" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">hearts</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="oval" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">oval</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="puff" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">puff</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="rings" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">rings</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="spinning-circles" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">spinning-circles</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="tail-spin" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">tail-spin</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="three-dots" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">three-dots</div>
        </div>
    </div>
    <!-- END: Icon List -->


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Form</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Input</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#input" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="regular-form-1" class="form-label">Input Text</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-2" class="form-label">Rounded</label>
                            <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Rounded">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">With Help</label>
                            <input id="regular-form-3" type="text" class="form-control" placeholder="With help">
                            <div class="form-help">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-4" class="form-label">Password</label>
                            <input id="regular-form-4" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-5" class="form-label">Disabled</label>
                            <input id="regular-form-5" type="text" class="form-control" placeholder="Disabled" disabled>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label for="regular-form-1" class="form-label">Input Text</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-2" class="form-label">Rounded</label>
                                            <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Rounded">
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-3" class="form-label">With Help</label>
                                            <input id="regular-form-3" type="text" class="form-control" placeholder="With help">
                                            <div class="form-help">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-4" class="form-label">Password</label>
                                            <input id="regular-form-4" type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-5" class="form-label">Disabled</label>
                                            <input id="regular-form-5" type="text" class="form-control" placeholder="Disabled" disabled>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input -->
            <!-- BEGIN: Input Sizing -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Input Sizing</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#input-sizing" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-sizing" class="p-5">
                    <div class="preview">
                        <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                        <input type="text" class="form-control mt-2" placeholder="Default input" aria-label="default input example">
                        <input type="text" class="form-control form-control-sm mt-2" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-sizing" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-sizing" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                        <input type="text" class="form-control mt-2" placeholder="Default input" aria-label="default input example">
                                        <input type="text" class="form-control form-control-sm mt-2" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Sizing -->
            <!-- BEGIN: Input Groups -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Input Groups</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#input-groups" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-groups" class="p-5">
                    <div class="preview">
                        <div class="input-group">
                            <div id="input-group-email" class="input-group-text">@</div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="input-group-email">
                        </div>
                        <div class="input-group mt-2">
                            <input type="text" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="input-group-price">
                            <div id="input-group-price" class="input-group-text">.00</div>
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" placeholder="Price" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-text">.00</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-groups" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-groups" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="input-group">
                                            <div id="input-group-email" class="input-group-text">@</div>
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="input-group-email">
                                        </div>
                                        <div class="input-group mt-2">
                                            <input type="text" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="input-group-price">
                                            <div id="input-group-price" class="input-group-text">.00</div>
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-text">@</div>
                                            <input type="text" class="form-control" placeholder="Price" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-text">.00</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Groups -->
            <!-- BEGIN: Input State -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Input State</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#input-state" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-state" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="input-state-1" class="form-label">Input Success</label>
                            <input id="input-state-1" type="text" class="form-control border-success" placeholder="Input text">
                            <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            </div>
                            <div class="text-success mt-2">Strong password</div>
                        </div>
                        <div class="mt-3">
                            <label for="input-state-2" class="form-label">Input Warning</label>
                            <input id="input-state-2" type="text" class="form-control border-warning" placeholder="Input text">
                            <div class="text-warning mt-2">Attempting to reconnect to server...</div>
                        </div>
                        <div class="mt-3">
                            <label for="input-state-3" class="form-label">Input Error</label>
                            <input id="input-state-3" type="text" class="form-control border-danger" placeholder="Input text">
                            <div class="text-danger mt-2">This field is required</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-state" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-state" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label for="input-state-1" class="form-label">Input Success</label>
                                            <input id="input-state-1" type="text" class="form-control border-success" placeholder="Input text">
                                            <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                                <div class="col-span-3 h-full rounded bg-success"></div>
                                                <div class="col-span-3 h-full rounded bg-success"></div>
                                                <div class="col-span-3 h-full rounded bg-success"></div>
                                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                                            </div>
                                            <div class="text-success mt-2">Strong password</div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-state-2" class="form-label">Input Warning</label>
                                            <input id="input-state-2" type="text" class="form-control border-warning" placeholder="Input text">
                                            <div class="text-warning mt-2">Attempting to reconnect to server...</div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-state-3" class="form-label">Input Error</label>
                                            <input id="input-state-3" type="text" class="form-control border-danger" placeholder="Input text">
                                            <div class="text-danger mt-2">This field is required</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input State -->
            <!-- BEGIN: Select Options -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Select Options</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#select-options" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="select-options" class="p-5">
                    <div class="preview">
                        <div class="flex flex-col sm:flex-row items-center">
                            <select class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                            <select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-select-options" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-select-options" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="flex flex-col sm:flex-row items-center">
                                            <select class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                            <select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Select Options -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Vertical Form</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#vertical-form" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="vertical-form-1" class="form-label">Email</label>
                            <input id="vertical-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Password</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="form-check mt-5">
                            <input id="vertical-form-3" class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="vertical-form-3">Remember me</label>
                        </div>
                        <button class="btn btn-primary mt-5">Login</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-vertical-form" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Email</label>
                                            <input id="vertical-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mt-3">
                                            <label for="vertical-form-2" class="form-label">Password</label>
                                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                                        </div>
                                        <div class="form-check mt-5">
                                            <input id="vertical-form-3" class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" for="vertical-form-3">Remember me</label>
                                        </div>
                                        <button class="btn btn-primary mt-5">Login</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Form -->
            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Horizontal Form</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#horizontal-form" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="horizontal-form" class="p-5">
                    <div class="preview">
                        <div class="form-inline">
                            <label for="horizontal-form-1" class="form-label sm:w-20">Email</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="form-inline mt-5">
                            <label for="horizontal-form-2" class="form-label sm:w-20">Password</label>
                            <input id="horizontal-form-2" type="password" class="form-control" placeholder="secret">
                        </div>
                        <div class="form-check sm:ml-20 sm:pl-5 mt-5">
                            <input id="horizontal-form-3" class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="horizontal-form-3">Remember me</label>
                        </div>
                        <div class="sm:ml-20 sm:pl-5 mt-5">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-horizontal-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-horizontal-form" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="form-inline">
                                            <label for="horizontal-form-1" class="form-label sm:w-20">Email</label>
                                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="form-inline mt-5">
                                            <label for="horizontal-form-2" class="form-label sm:w-20">Password</label>
                                            <input id="horizontal-form-2" type="password" class="form-control" placeholder="secret">
                                        </div>
                                        <div class="form-check sm:ml-20 sm:pl-5 mt-5">
                                            <input id="horizontal-form-3" class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" for="horizontal-form-3">Remember me</label>
                                        </div>
                                        <div class="sm:ml-20 sm:pl-5 mt-5">
                                            <button class="btn btn-primary">Login</button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Horizontal Form -->
            <!-- BEGIN: Inline Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Inline Form</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#inline-form" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="inline-form" class="p-5">
                    <div class="preview">
                        <div class="grid grid-cols-12 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Input inline 1" aria-label="default input inline 1">
                            <input type="text" class="form-control col-span-4" placeholder="Input inline 2" aria-label="default input inline 2">
                            <input type="text" class="form-control col-span-4" placeholder="Input inline 3" aria-label="default input inline 3">
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-inline-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-inline-form" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-4" placeholder="Input inline 1" aria-label="default input inline 1">
                                            <input type="text" class="form-control col-span-4" placeholder="Input inline 2" aria-label="default input inline 2">
                                            <input type="text" class="form-control col-span-4" placeholder="Input inline 3" aria-label="default input inline 3">
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Inline Form -->
            <!-- BEGIN: Checkbox & Switch -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Checkbox & Switch</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-9">Show example code</label>
                        <input id="show-example-9" data-target="#checkbox-switch" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="checkbox-switch" class="p-5">
                    <div class="preview">
                        <div>
                            <label>Vertical Checkbox</label>
                            <div class="form-check mt-2">
                                <input id="checkbox-switch-1" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-1">Chris Evans</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="checkbox-switch-2" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-2">Liam Neeson</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="checkbox-switch-3" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-3">Daniel Craig</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Checkbox</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-4">Chris Evans</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-5">Liam Neeson</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="checkbox-switch-6" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-6">Daniel Craig</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Switch</label>
                            <div class="mt-2">
                                <div class="form-check form-switch">
                                    <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="checkbox-switch-7">Default switch checkbox input</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-checkbox-switch" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-checkbox-switch" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Vertical Checkbox</label>
                                            <div class="form-check mt-2">
                                                <input id="checkbox-switch-1" class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label" for="checkbox-switch-1">Chris Evans</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="checkbox-switch-2" class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label" for="checkbox-switch-2">Liam Neeson</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="checkbox-switch-3" class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label" for="checkbox-switch-3">Daniel Craig</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Horizontal Checkbox</label>
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                    <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="">
                                                    <label class="form-check-label" for="checkbox-switch-4">Chris Evans</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                                    <label class="form-check-label" for="checkbox-switch-5">Liam Neeson</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="checkbox-switch-6" class="form-check-input" type="checkbox" value="">
                                                    <label class="form-check-label" for="checkbox-switch-6">Daniel Craig</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Switch</label>
                                            <div class="mt-2">
                                                <div class="form-check form-switch">
                                                    <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                    <label class="form-check-label" for="checkbox-switch-7">Default switch checkbox input</label>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Checkbox & Switch -->
            <!-- BEGIN: Radio Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Radio</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-10">Show example code</label>
                        <input id="show-example-10" data-target="#radio" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="radio" class="p-5">
                    <div class="preview">
                        <div>
                            <label>Vertical Radio Button</label>
                            <div class="form-check mt-2">
                                <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans">
                                <label class="form-check-label" for="radio-switch-1">Chris Evans</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                                <label class="form-check-label" for="radio-switch-2">Liam Neeson</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="radio-switch-3" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-daniel-craig">
                                <label class="form-check-label" for="radio-switch-3">Daniel Craig</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Radio Button</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input id="radio-switch-4" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                    <label class="form-check-label" for="radio-switch-4">Chris Evans</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="radio-switch-5" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                    <label class="form-check-label" for="radio-switch-5">Liam Neeson</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="radio-switch-6" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-daniel-craig">
                                    <label class="form-check-label" for="radio-switch-6">Daniel Craig</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-radio" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-radio" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Vertical Radio Button</label>
                                            <div class="form-check mt-2">
                                                <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans">
                                                <label class="form-check-label" for="radio-switch-1">Chris Evans</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-2">Liam Neeson</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="radio-switch-3" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-daniel-craig">
                                                <label class="form-check-label" for="radio-switch-3">Daniel Craig</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Horizontal Radio Button</label>
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                    <input id="radio-switch-4" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                                    <label class="form-check-label" for="radio-switch-4">Chris Evans</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="radio-switch-5" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                                    <label class="form-check-label" for="radio-switch-5">Liam Neeson</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="radio-switch-6" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-daniel-craig">
                                                    <label class="form-check-label" for="radio-switch-6">Daniel Craig</label>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Radio Button -->
        </div>
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Datepicker</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Datepicker -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Date Picker</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-datepicker" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-datepicker" class="p-5">
                    <div class="preview">
                        <input type="text" class="datepicker form-control w-56 block mx-auto" data-single-mode="true">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-datepicker" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-datepicker" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input type="text" class="datepicker form-control w-56 block mx-auto" data-single-mode="true">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Datepicker -->
            <!-- BEGIN: Input Group -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Input Group</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#input-group-datepicker" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-group-datepicker" class="p-5">
                    <div class="preview">
                        <div class="relative w-56 mx-auto">
                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                <i data-feather="calendar" class="w-4 h-4"></i>
                            </div>
                            <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-group-datepicker" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-group-datepicker" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="relative w-56 mx-auto">
                                            <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400">
                                                <i data-feather="calendar" class="w-4 h-4"></i>
                                            </div>
                                            <input type="text" class="datepicker form-control pl-12" data-single-mode="true">
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Group -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Daterange Picker -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Date Range Picker</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#daterangepicker" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="daterangepicker" class="p-5">
                    <div class="preview">
                        <input type="text" data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-daterangepicker" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-daterangepicker" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input type="text" data-daterange="true" class="datepicker form-control w-56 block mx-auto">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Daterange Picker -->
            <!-- BEGIN: Modal Datepicker -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Modal Date Picker</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#modal-datepicker" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="modal-datepicker" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Show Modal Toggle -->
                        <div class="text-center">
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#datepicker-modal-preview" class="btn btn-primary">Show Modal</a>
                        </div>
                        <!-- END: Show Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="datepicker-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- BEGIN: Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="font-medium text-base mr-auto">Filter by Date</h2>
                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                        </button>
                                        <div class="dropdown sm:hidden">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                            </a>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="javascript:;" class="dropdown-item">
                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Modal Header -->
                                    <!-- BEGIN: Modal Body -->
                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-datepicker-1" class="form-label">From</label>
                                            <input type="text" id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true">
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-datepicker-2" class="form-label">To</label>
                                            <input type="text" id="modal-datepicker-2" class="datepicker form-control" data-single-mode="true">
                                        </div>
                                    </div>
                                    <!-- END: Modal Body -->
                                    <!-- BEGIN: Modal Footer -->
                                    <div class="modal-footer text-right">
                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                        <button type="button" class="btn btn-primary w-20">Submit</button>
                                    </div>
                                    <!-- END: Modal Footer -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-modal-datepicker" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-modal-datepicker" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Show Modal Toggle -->
                                        <div class="text-center">
                                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#datepicker-modal-preview" class="btn btn-primary">Show Modal</a>
                                        </div>
                                        <!-- END: Show Modal Toggle -->
                                        <!-- BEGIN: Modal Content -->
                                        <div id="datepicker-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- BEGIN: Modal Header -->
                                                    <div class="modal-header">
                                                        <h2 class="font-medium text-base mr-auto">Filter by Date</h2>
                                                        <button class="btn btn-outline-secondary hidden sm:flex">
                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                        </button>
                                                        <div class="dropdown sm:hidden">
                                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                                                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                                            </a>
                                                            <div class="dropdown-menu w-40">
                                                                <ul class="dropdown-content">
                                                                    <li>
                                                                        <a href="javascript:;" class="dropdown-content">
                                                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Modal Header -->
                                                    <!-- BEGIN: Modal Body -->
                                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-datepicker-1" class="form-label">From</label>
                                                            <input type="text" id="modal-datepicker-1" class="datepicker form-control" data-single-mode="true">
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-datepicker-2" class="form-label">To</label>
                                                            <input type="text" id="modal-datepicker-2" class="datepicker form-control" data-single-mode="true">
                                                        </div>
                                                    </div>
                                                    <!-- END: Modal Body -->
                                                    <!-- BEGIN: Modal Footer -->
                                                    <div class="modal-footer text-right">
                                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                                        <button type="button" class="btn btn-primary w-20">Submit</button>
                                                    </div>
                                                    <!-- END: Modal Footer -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Modal Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Modal Datepicker -->
        </div>
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tom Select</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Select -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Basic Select</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#basic-select" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-select" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Basic Select -->
                        <div>
                            <label>Basic</label>
                            <div class="mt-2">
                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option value="2">Johnny Deep</option>
                                    <option value="3">Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </select>
                            </div>
                        </div>
                        <!-- END: Basic Select -->
                        <!-- BEGIN: Nested Select -->
                        <div class="mt-3">
                            <label>Nested</label>
                            <div class="mt-2">
                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                    <optgroup label="American Actors">
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </optgroup>
                                    <optgroup label="American Actresses">
                                        <option value="1">Scarlett Johansson</option>
                                        <option value="2">Jessica Alba</option>
                                        <option value="3">Jennifer Lawrence</option>
                                        <option value="4">Emma Stone</option>
                                        <option value="5">Angelina Jolie</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- END: Nested Select -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-select" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-select" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Basic Select -->
                                        <div>
                                            <label>Basic</label>
                                            <div class="mt-2">
                                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                                    <option value="1">Leonardo DiCaprio</option>
                                                    <option value="2">Johnny Deep</option>
                                                    <option value="3">Robert Downey, Jr</option>
                                                    <option value="4">Samuel L. Jackson</option>
                                                    <option value="5">Morgan Freeman</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- END: Basic Select -->
                                        <!-- BEGIN: Nested Select -->
                                        <div class="mt-3">
                                            <label>Nested</label>
                                            <div class="mt-2">
                                                <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                                    <optgroup label="American Actors">
                                                        <option value="1">Leonardo DiCaprio</option>
                                                        <option value="2">Johnny Deep</option>
                                                        <option value="3">Robert Downey, Jr</option>
                                                        <option value="4">Samuel L. Jackson</option>
                                                        <option value="5">Morgan Freeman</option>
                                                    </optgroup>
                                                    <optgroup label="American Actresses">
                                                        <option value="1">Scarlett Johansson</option>
                                                        <option value="2">Jessica Alba</option>
                                                        <option value="3">Jennifer Lawrence</option>
                                                        <option value="4">Emma Stone</option>
                                                        <option value="5">Angelina Jolie</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- END: Nested Select -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Select -->
            <!-- BEGIN: Multiple Select -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Multiple Select</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#multiple-select" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="multiple-select" class="p-5">
                    <div class="preview">
                        <select data-placeholder="Select your favorite actors" class="tom-select w-full" multiple>
                            <option value="1" selected>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-multiple-select" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-multiple-select" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <select data-placeholder="Select your favorite actors" class="tom-select w-full" multiple>
                                            <option value="1" selected>Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3" selected>Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Multiple Select -->
            <!-- BEGIN: Header -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Header</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#header" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="header" class="p-5">
                    <div class="preview">
                        <select data-placeholder="Select your favorite actors" data-header="Actors" class="tom-select w-full" multiple>
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2" selected>Johnny Deep</option>
                            <option value="3" selected>Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5" selected>Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-header" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-header" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <select data-placeholder="Select your favorite actors" data-header="Actors" class="tom-select w-full" multiple>
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option value="2" selected>Johnny Deep</option>
                                            <option value="3" selected>Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5" selected>Morgan Freeman</option>
                                        </select>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Header -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input Group -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Input Group</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#input-group" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-group" class="p-5">
                    <div class="preview">
                        <div class="flex">
                            <div class="z-30 rounded-l w-10 flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400 -mr-1">@</div>
                            <select class="tom-select w-full">
                                <option value="1">Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option value="3">Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </select>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-group" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-group" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="flex">
                                            <div class="z-30 rounded-l w-10 flex items-center justify-center bg-slate-100 border text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400 -mr-1">@</div>
                                            <select class="tom-select w-full">
                                                <option value="1">Leonardo DiCaprio</option>
                                                <option value="2">Johnny Deep</option>
                                                <option value="3">Robert Downey, Jr</option>
                                                <option value="4">Samuel L. Jackson</option>
                                                <option value="5">Morgan Freeman</option>
                                            </select>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Group -->
            <!-- BEGIN: Disabled -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Disabled</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#disabled" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="disabled" class="p-5">
                    <div class="preview">
                        <select class="tom-select w-full" disabled>
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-disabled" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-disabled" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <select class="tom-select w-full" disabled>
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3">Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Disabled -->
            <!-- BEGIN: Disabled Option -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Disabled Option</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#disabled-option" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="disabled-option" class="p-5">
                    <div class="preview">
                        <select class="tom-select w-full">
                            <option value="1" disabled>Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4" disabled>Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-disabled-option" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-disabled-option" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <select class="tom-select w-full">
                                            <option value="1" disabled>Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3">Robert Downey, Jr</option>
                                            <option value="4" disabled>Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </select>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Disabled Option -->
        </div>
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Dropzone</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Single File Upload -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Single File Upload</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#single-file-upload" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="single-file-upload" class="p-5">
                    <div class="preview">
                        <form data-single="true" action="/file-upload" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-slate-500">
                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-single-file-upload" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-single-file-upload" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form data-single="true" action="/file-upload" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-slate-500">
                                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                </div>
                                            </div>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Single File Upload -->
            <!-- BEGIN: Multiple File Upload -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Multiple File Upload</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#multiple-file-upload" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="multiple-file-upload" class="p-5">
                    <div class="preview">
                        <form action="/file-upload" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple/>
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-slate-500">
                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-multiple-file-upload" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-multiple-file-upload" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form action="/file-upload" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple/>
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-slate-500">
                                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                </div>
                                            </div>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Multiple File Upload -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: File Type Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">File Type Validation</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#file-type-validation" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="file-type-validation" class="p-5">
                    <div class="preview">
                        <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-slate-500">
                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-file-type-validation" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-file-type-validation" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-slate-500">
                                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                </div>
                                            </div>
                                        </form>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: File Type Validation -->
        </div>
    </div>

    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Classic Editor -->
        <div class="col-span-12">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Classic Editor</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#classic-editor" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="classic-editor">
                    <div class="preview">
                        <div class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-classic-editor" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-classic-editor">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

                                        $(".editor").each(function () {
                                            const el = this;
                                            ClassicEditor.create(el).catch((error) => {
                                                console.error(error);
                                            });
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Classic Editor -->
    </div>

    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Inline Editor -->
        <div class="col-span-12">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Inline Editor</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#inline-editor" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="inline-editor">
                    <div class="preview">
                        <div class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-inline-editor" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-inline-editor">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        import InlineEditor from "@ckeditor/ckeditor5-build-inline";

                                        $(".editor").each(function () {
                                            const el = this;
                                            InlineEditor.create(el).catch((error) => {
                                                console.error(error);
                                            });
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Inline Editor -->
    </div>

    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Balloon Editor -->
        <div class="col-span-12">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Balloon Editor</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#balloon-editor" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="balloon-editor">
                    <div class="preview">
                        <div class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-balloon-editor" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-balloon-editor">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        import BalloonEditor from "@ckeditor/ckeditor5-build-balloon";

                                        $(".editor").each(function () {
                                            const el = this;
                                            BalloonEditor.create(el).catch((error) => {
                                                console.error(error);
                                            });
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Balloon Editor -->
    </div>

    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Balloon Block Editor -->
        <div class="col-span-12">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Balloon Block Editor</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#balloon-block-editor" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="balloon-block-editor">
                    <div class="preview">
                        <div class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-balloon-block-editor" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-balloon-block-editor">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        import BalloonBlockEditor from "@ckeditor/ckeditor5-build-balloon-block";

                                        $(".editor").each(function () {
                                            const el = this;
                                            BalloonBlockEditor.create(el).catch((error) => {
                                                console.error(error);
                                            });
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Balloon Block Editor -->
    </div>
    <div class="flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Document Editor -->
        <div class="col-span-12">
            <div class="box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Document Editor</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#document-editor" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div class="p-5" id="document-editor">
                    <div class="preview">
                        <div class="editor document-editor">
                            <div class="document-editor__toolbar"></div>
                            <div class="document-editor__editable-container">
                                <div class="document-editor__editable">
                                    <p>Content of the editor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-document-editor-html" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-document-editor-html">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="editor document-editor">
                                            <div class="document-editor__toolbar"></div>
                                            <div class="document-editor__editable-container">
                                                <div class="document-editor__editable">
                                                    <p>Content of the editor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                        <button data-target="#copy-document-editor-js" class="copy-code btn py-1 px-2 btn-outline-secondary mt-5">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre class="source-preview" id="copy-document-editor-js mt-5">
                                <code class="javascript text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        import DocumentEditor from "@ckeditor/ckeditor5-build-decoupled-document";

                                        $(".editor").each(function () {
                                            const el = this;
                                            DocumentEditor.create($(el).find(".document-editor__editable")[0])
                                                .then((editor) => {
                                                    $(el)
                                                        .closest(".editor")
                                                        .find(".document-editor__toolbar")
                                                        .append(editor.ui.view.toolbar.element);
                                                })
                                                .catch((error) => {
                                                    console.error(error);
                                                });
                                        });
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Document Editor -->
    </div>








    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Validation</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Implementation</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#form-validation" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="form-validation" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Validation Form -->
                        <form class="validate-form">
                            <div class="input-form">
                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 2 characters</span>
                                </label>
                                <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="John Legend" minlength="2" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                    Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span>
                                </label>
                                <input id="validation-form-2" type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row">
                                    Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 6 characters</span>
                                </label>
                                <input id="validation-form-3" type="password" name="password" class="form-control" placeholder="secret" minlength="6" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-4" class="form-label w-full flex flex-col sm:flex-row">
                                    Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, integer only & maximum 3 characters</span>
                                </label>
                                <input id="validation-form-4" type="number" name="age" class="form-control" placeholder="21" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">
                                    Profile URL <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Optional, URL format</span>
                                </label>
                                <input id="validation-form-5" type="url" name="url" class="form-control" placeholder="https://google.com">
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row">
                                    Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 10 characters</span>
                                </label>
                                <textarea id="validation-form-6" class="form-control" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Register</button>
                        </form>
                        <!-- END: Validation Form -->
                        <!-- BEGIN: Success Notification Content -->
                        <div
                            id="success-notification-content"
                            class="toastify-content hidden flex"
                        >
                            <i class="text-success" data-feather="check-circle"></i>
                            <div class="ml-4 mr-4">
                            <div class="font-medium">Registration success!</div>
                            <div class="text-slate-500 mt-1">
                                Please check your e-mail for further info!
                            </div>
                            </div>
                        </div>
                        <!-- END: Success Notification Content -->
                        <!-- BEGIN: Failed Notification Content -->
                        <div
                            id="failed-notification-content"
                            class="toastify-content hidden flex"
                        >
                            <i class="text-danger" data-feather="x-circle"></i>
                            <div class="ml-4 mr-4">
                            <div class="font-medium">Registration failed!</div>
                            <div class="text-slate-500 mt-1">
                                Please check the fileld form.
                            </div>
                            </div>
                        </div>
                        <!-- END: Failed Notification Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-form-validation" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-form-validation" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Validation Form -->
                                        <form class="validate-form">
                                            <div class="input-form">
                                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                                    Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 2 characters</span>
                                                </label>
                                                <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="John Legend" minlength="2" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                                    Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span>
                                                </label>
                                                <input id="validation-form-2" type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row">
                                                    Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 6 characters</span>
                                                </label>
                                                <input id="validation-form-3" type="password" name="password" class="form-control" placeholder="secret" minlength="6" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-4" class="form-label w-full flex flex-col sm:flex-row">
                                                    Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, integer only & maximum 3 characters</span>
                                                </label>
                                                <input id="validation-form-4" type="number" name="age" class="form-control" placeholder="21" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">
                                                    Profile URL <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Optional, URL format</span>
                                                </label>
                                                <input id="validation-form-5" type="url" name="url" class="form-control" placeholder="https://google.com">
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row">
                                                    Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 10 characters</span>
                                                </label>
                                                <textarea id="validation-form-6" class="form-control" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-5">Register</button>
                                        </form>
                                        <!-- END: Validation Form -->
                                        <!-- BEGIN: Success Notification Content -->
                                        <div
                                            id="success-notification-content"
                                            class="toastify-content hidden flex"
                                        >
                                            <i class="text-success" data-feather="check-circle"></i>
                                            <div class="ml-4 mr-4">
                                            <div class="font-medium">Registration success!</div>
                                            <div class="text-slate-500 mt-1">
                                                Please check your e-mail for further info!
                                            </div>
                                            </div>
                                        </div>
                                        <!-- END: Success Notification Content -->
                                        <!-- BEGIN: Failed Notification Content -->
                                        <div
                                            id="failed-notification-content"
                                            class="toastify-content hidden flex"
                                        >
                                            <i class="text-danger" data-feather="x-circle"></i>
                                            <div class="ml-4 mr-4">
                                            <div class="font-medium">Registration failed!</div>
                                            <div class="text-slate-500 mt-1">
                                                Please check the fileld form.
                                            </div>
                                            </div>
                                        </div>
                                        <!-- END: Failed Notification Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Form Validation -->
        </div>
    </div>


@section('script')
    {{--
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
    <script src="{{ mix('dist/js/ckeditor-inline.js') }}"></script>
    <script src="{{ mix('dist/js/ckeditor-balloon.js') }}"></script>
    <script src="{{ mix('dist/js/ckeditor-balloon-block.js') }}"></script>
    <script src="{{ mix('dist/js/ckeditor-document.js') }}"></script>--}}


@endsection

</section>


