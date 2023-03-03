<section>
    <h2 class="intro-y text-lg font-medium mt-10">Data List Layout</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Add New Product</button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">IMAGES</th>
                        <th class="whitespace-nowrap">PRODUCT NAME</th>
                        <th class="text-center whitespace-nowrap">STOCK</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (array_slice($fakers, 0, 9) as $faker)
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                            </td>
                            <td class="text-center">{{ $faker['stocks'][0] }}</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                    <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
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
    <!-- END: Delete Confirmation Modal -->

     <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Product Name</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                </div>
                <div class="mt-3">
                    <label for="crud-form-2" class="form-label">Category</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2" multiple>
                        <option value="1" selected>Sport & Outdoor</option>
                        <option value="2">PC & Laptop</option>
                        <option value="3" selected>Smartphone & Tablet</option>
                        <option value="4">Photography</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="crud-form-3" class="form-label">Quantity</label>
                    <div class="input-group">
                        <input id="crud-form-3" type="text" class="form-control" placeholder="Quantity" aria-describedby="input-group-1">
                        <div id="input-group-1" class="input-group-text">pcs</div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="crud-form-4" class="form-label">Weight</label>
                    <div class="input-group">
                        <input id="crud-form-4" type="text" class="form-control" placeholder="Weight" aria-describedby="input-group-2">
                        <div id="input-group-2" class="input-group-text">grams</div>
                    </div>
                </div>
                <div class="mt-3">
                    <label class="form-label">Price</label>
                    <div class="sm:grid grid-cols-3 gap-2">
                        <div class="input-group">
                            <div id="input-group-3" class="input-group-text">Unit</div>
                            <input type="text" class="form-control" placeholder="Unit" aria-describedby="input-group-3">
                        </div>
                        <div class="input-group mt-2 sm:mt-0">
                            <div id="input-group-4" class="input-group-text">Wholesale</div>
                            <input type="text" class="form-control" placeholder="Wholesale" aria-describedby="input-group-4">
                        </div>
                        <div class="input-group mt-2 sm:mt-0">
                            <div id="input-group-5" class="input-group-text">Bulk</div>
                            <input type="text" class="form-control" placeholder="Bulk" aria-describedby="input-group-5">
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="form-switch mt-2">
                        <input type="checkbox" class="form-check-input">
                    </div>
                </div>
                <div class="mt-3">
                    <label>Description</label>
                    <div class="mt-2">
                        <div class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
    <h2 class="intro-y text-lg font-medium mt-10">Users Layout</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Add New User</button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Add Group
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Send Message
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach (array_slice($fakers, 0, 10) as $faker)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['jobs'][0] }}</div>
                        </div>
                        <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Facebook">
                                <i class="w-3 h-3 fill-current" data-feather="facebook"></i>
                            </a>
                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Twitter">
                                <i class="w-3 h-3 fill-current" data-feather="twitter"></i>
                            </a>
                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Linked In">
                                <i class="w-3 h-3 fill-current" data-feather="linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                            <div class="flex text-slate-500 text-xs">
                                <div class="mr-auto">Progress</div>
                                <div>20%</div>
                            </div>
                            <div class="progress h-1 mt-2">
                                <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
                        <button class="btn btn-outline-secondary py-1 px-2">Profile</button>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>

    <h2 class="intro-y text-lg font-medium mt-10">Users Layout</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Add New User</button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Add Group
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Send Message
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach ($fakers as $faker)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['jobs'][0] }}</div>
                        </div>
                        <div class="flex mt-4 lg:mt-0">
                            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
                            <button class="btn btn-outline-secondary py-1 px-2">Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- BEGIN: Users Layout -->
        <!-- END: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>

    <h2 class="intro-y text-lg font-medium mt-10">Users Layout</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Add New User</button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Add Group
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Send Message
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach (array_slice($fakers, 0, 9) as $faker)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                <div class="box">
                    <div class="flex items-start px-5 pt-5">
                        <div class="w-full flex flex-col lg:flex-row items-center">
                            <div class="w-16 h-16 image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                            </div>
                            <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                                <a href="" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                                <div class="text-slate-500 text-xs mt-0.5">{{ $faker['jobs'][0] }}</div>
                            </div>
                        </div>
                        <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-content">
                                    <a href="" class="dropdown-item">
                                        <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
                                    </a>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center lg:text-left p-5">
                        <div>{{ $faker['news'][0]['short_content'] }}</div>
                        <div class="flex items-center justify-center lg:justify-start text-slate-500 mt-5">
                            <i data-feather="mail" class="w-3 h-3 mr-2"></i> {{ $faker['users'][0]['email'] }}
                        </div>
                        <div class="flex items-center justify-center lg:justify-start text-slate-500 mt-1">
                            <i data-feather="instagram" class="w-3 h-3 mr-2"></i> {{ $faker['users'][0]['name'] }}
                        </div>
                    </div>
                    <div class="text-center lg:text-right p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
                        <button class="btn btn-outline-secondary py-1 px-2">Profile</button>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
                        <i class="w-4 h-4 text-white" data-feather="camera"></i>
                    </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                        <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{ $fakers[0]['users'][0]['email'] }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram {{ $fakers[0]['users'][0]['name'] }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter {{ $fakers[0]['users'][0]['name'] }}
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Sales Growth</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    <div class="mr-2 w-20 flex">
                        USP: <span class="ml-3 font-medium text-success">+23%</span>
                    </div>
                    <div class="w-3/4 overflow-auto">
                        <canvas class="simple-line-chart-1" height="50"></canvas>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:justify-start">
                    <div class="mr-2 w-20 flex">
                        STP: <span class="ml-3 font-medium text-danger">-2%</span>
                    </div>
                    <div class="w-3/4 overflow-auto">
                        <canvas class="simple-line-chart-2" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <ul
            class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
            role="tablist"
        >
            <li id="dashboard-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 active"
                    data-tw-target="#dashboard"
                    aria-controls="dashboard"
                    aria-selected="true"
                    role="tab"
                >
                    Dashboard
                </a>
            </li>
            <li id="account-and-profile-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4"
                    data-tw-target="#account-and-profile"
                    aria-controls="account-and-profile"
                    aria-selected="false"
                    role="tab"
                >
                    Account & Profile
                </a>
            </li>
            <li id="activities-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4"
                    data-tw-target="#activities"
                    aria-controls="activities"
                    aria-selected="false"
                    role="tab"
                >
                    Activities
                </a>
            </li>
            <li id="tasks-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4"
                    data-tw-target="#tasks"
                    aria-controls="tasks"
                    aria-selected="false"
                    role="tab"
                >
                    Tasks
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Profile Info -->
    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Top Categories</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="plus" class="w-4 h-4 mr-2"></i> Add Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Wordpress Template</a>
                                <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">6.5k</div>
                                    <div class="bg-success/20 text-success rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Bootstrap HTML Template</a>
                                <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">2.5k</div>
                                    <div class="bg-pending/10 text-pending rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Tailwind HTML Template</a>
                                <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">3.4k</div>
                                    <div class="bg-primary/10 text-primary rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Categories -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-controls="work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-controls="latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: General Statistic -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">General Statistics</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML
                        </button>
                    </div>
                    <div class="grid grid-cols-1 2xl:grid-cols-7 gap-6 p-5">
                        <div class="2xl:col-span-2">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Net Worth</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-success">+23%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Sales</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-danger">-5%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Profit</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-danger">-10%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Products</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-success">+55%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:col-span-5 w-full">
                            <div class="flex justify-center mt-8">
                                <div class="flex items-center mr-5">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span>Product Profit</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-slate-300 rounded-full mr-3"></div>
                                    <span>Author Sales</span>
                                </div>
                            </div>
                            <div class="mt-8">
                                <canvas id="stacked-bar-chart-1" height="130"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Statistic -->
            </div>
        </div>
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                        <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{ $fakers[0]['users'][0]['email'] }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram {{ $fakers[0]['users'][0]['name'] }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter {{ $fakers[0]['users'][0]['name'] }}
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">201</div>
                    <div class="text-slate-500">Orders</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">1k</div>
                    <div class="text-slate-500">Purchases</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">492</div>
                    <div class="text-slate-500">Reviews</div>
                </div>
            </div>
        </div>
        <ul
            class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
            role="tablist"
        >
            <li id="profile-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center active"
                    data-tw-target="#profile"
                    aria-controls="profile"
                    aria-selected="true"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="user"></i> Profile
                </a>
            </li>
            <li id="account-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#account"
                    aria-controls="account"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="shield"></i> Account
                </a>
            </li>
            <li id="change-password-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#change-password"
                    aria-controls="change-password"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="lock"></i> Change Password
                </a>
            </li>
            <li id="settings-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#settings"
                    aria-controls="settings"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="settings"></i> Settings
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Profile Info -->
    <div class="tab-content mt-5">
        <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Latest Uploads -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Uploads</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">All Files</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">All Files</button>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Documentation</a>
                                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--file">
                                    <div class="file__icon__file-name text-xs">MP3</div>
                                </a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Celine Dion - Ashes</a>
                                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--empty-directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Resources</a>
                                <div class="text-slate-500 text-xs mt-0.5">0 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Uploads -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-controls="work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-controls="latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: New Products -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">New Products</h2>
                        <button data-carousel="new-products" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-products" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div id="new-products" class="tiny-slider py-5">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['news'][0]['short_content'] }}</div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                                            <div class="text-slate-500">Orders</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][1] }}k</div>
                                            <div class="text-slate-500">Purchases</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                                            <div class="text-slate-500">Reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-slate-500">Date of Release</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                        <button class="btn btn-secondary w-20 ml-2">Details</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: New Products -->
                <!-- BEGIN: New Authors -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">New Authors</h2>
                        <button data-carousel="new-authors" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-authors" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div id="new-authors" class="tiny-slider py-5">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ $faker['users'][0]['name'] }}</a>
                                            <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['jobs'][0] }}</div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                        <div class="flex items-center">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                                                <i class="w-3 h-3 fill-current" data-feather="facebook"></i>
                                            </a>
                                            {{ $faker['users'][0]['email'] }}
                                        </div>
                                        <div class="flex items-center mt-2">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                                                <i class="w-3 h-3 fill-current" data-feather="twitter"></i>
                                            </a>
                                            {{ $faker['users'][0]['name'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-slate-500">Joined Date</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                        <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: New Authors -->
            </div>
        </div>
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
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
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Email Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Social Networks
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Tax Information
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
            <div class="intro-y box p-5 bg-primary text-white mt-5">
                <div class="flex items-center">
                    <div class="font-medium text-lg">Important Update</div>
                    <div class="text-xs bg-white dark:bg-primary dark:text-white text-slate-700 px-1 rounded-md ml-auto">New</div>
                </div>
                <div class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                <div class="font-medium flex mt-5">
                    <button type="button" class="btn py-1 px-2 border-white text-white dark:text-slate-300 dark:bg-darkmode-400 dark:border-darkmode-400">Take Action</button>
                    <button type="button" class="btn py-1 px-2 border-transparent text-white dark:border-transparent ml-auto">Dismiss</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Announcement -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Announcement</h2>
                        <button data-carousel="announcement" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="announcement" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="announcement">
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Announcement -->
                <!-- BEGIN: Projects -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Projects</h2>
                        <button data-carousel="projects" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="projects" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="projects">
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Projects -->
                <!-- BEGIN: Today Schedules -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Today Schedules</h2>
                        <button data-carousel="today-schedule" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="today-schedule" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="today-schedule">
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Today Schedules -->
                <!-- BEGIN: Top Products -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Top Products</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <ul class="nav nav-boxed-tabs justify-center flex-col sm:flex-row" role="tablist">
                            <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0 active"
                                    data-tw-target="#top-products-laravel"
                                    aria-controls="top-products-laravel"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    <i data-feather="box" class="block w-6 h-6 mb-2 mx-auto"></i> Laravel
                                </a>
                            </li>
                            <li id="top-products-symfony-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0"
                                    data-tw-target="#top-products-symfony"
                                    aria-controls="top-products-symfony"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    <i data-feather="inbox" class="block w-6 h-6 mb-2 mx-auto"></i> Symfony
                                </a>
                            </li>
                            <li id="top-products-bootstrap-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0"
                                    data-tw-target="#top-products-bootstrap"
                                    aria-controls="top-products-bootstrap"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    <i data-feather="activity" class="block w-6 h-6 mb-2 mx-auto"></i> Bootstrap
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-8">
                            <div id="top-products-laravel" class="tab-pane active" role="tabpanel" aria-labelledby="top-products-laravel-tab">
                                <div class="flex flex-col sm:flex-row items-center">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Wordpress Template</a>
                                        <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+20%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center mt-5">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Laravel Template</a>
                                        <div class="text-slate-500 mt-1">PHP, Mysql</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+55%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-2/3 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center mt-5">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Tailwind HTML Template</a>
                                        <div class="text-slate-500 mt-1">HTML, CSS, JS</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+40%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Products -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-controls="work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Review</div>
                                        <div>70%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-4/5 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-controls="latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">11:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: General Statistics -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">General Statistics</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block sm:hidden" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <button class="dropdown-toggle btn btn-outline-secondary font-normal hidden sm:flex" aria-expanded="false" data-tw-toggle="dropdown">
                                Export <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                            </button>
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
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row items-center">
                            <div class="flex flex-wrap sm:flex-nowrap mr-auto">
                                <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span>Author Sales</span>
                                </div>
                                <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span>Product Profit</span>
                                </div>
                            </div>
                            <div class="dropdown mt-3 sm:mt-0 mr-auto sm:mr-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Month <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
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
                        <div class="report-chart mt-8">
                            <canvas id="report-line-chart" height="130"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END: General Statistics -->
            </div>
        </div>
    </div>

    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">Wizard Layout</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="flex justify-center">
            <button class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">1</button>
            <button class="intro-y w-10 h-10 rounded-full btn bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400 text-slate-500 mx-2">2</button>
            <button class="intro-y w-10 h-10 rounded-full btn bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400 text-slate-500 mx-2">3</button>
        </div>
        <div class="px-5 mt-10">
            <div class="font-medium text-center text-lg">Setup Your Account</div>
            <div class="text-slate-500 text-center mt-2">To start off, please enter your username, email address and password.</div>
        </div>
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="font-medium text-base">Profile Settings</div>
            <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-1" class="form-label">From</label>
                    <input id="input-wizard-1" type="text" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-2" class="form-label">To</label>
                    <input id="input-wizard-2" type="text" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">Subject</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="Important Meeting">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">Has the Words</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-5" class="form-label">Doesn't Have</label>
                    <input id="input-wizard-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-6" class="form-label">Size</label>
                    <select id="input-wizard-6" class="form-select">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button class="btn btn-secondary w-24">Previous</button>
                    <button class="btn btn-primary w-24 ml-2">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Wizard Layout -->

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Wizard Layout</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="px-5 sm:px-20">
            <div class="intro-x flex items-center">
                <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
                <div class="font-medium text-base ml-3">Create New Account</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">2</button>
                <div class="text-base text-slate-600 dark:text-slate-500 ml-3">Setup Your Profile</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">3</button>
                <div class="text-base text-slate-600 dark:text-slate-500 ml-3">Setup Your Business Details</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">4</button>
                <div class="text-base text-slate-600 dark:text-slate-500 ml-3">Setup Billing Account</div>
            </div>
            <div class="intro-x flex items-center mt-5">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">5</button>
                <div class="text-base text-slate-600 dark:text-slate-500 ml-3">Finalize your purchase</div>
            </div>
        </div>
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="font-medium text-base">Profile Settings</div>
            <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-1" class="form-label">From</label>
                    <input id="input-wizard-1" type="text" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-2" class="form-label">To</label>
                    <input id="input-wizard-2" type="text" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">Subject</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="Important Meeting">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">Has the Words</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-5" class="form-label">Doesn't Have</label>
                    <input id="input-wizard-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-6" class="form-label">Size</label>
                    <select id="input-wizard-6" class="form-select">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button class="btn btn-secondary w-24">Previous</button>
                    <button class="btn btn-primary w-24 ml-2">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Wizard Layout -->

    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">Wizard Layout</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="relative before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
                <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Create New Account</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">2</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Setup Your Profile</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">3</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Setup Your Business Details</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">4</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Setup Billing Account</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">5</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Finalize your purchase</div>
            </div>
        </div>
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="font-medium text-base">Profile Settings</div>
            <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-1" class="form-label">From</label>
                    <input id="input-wizard-1" type="text" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-2" class="form-label">To</label>
                    <input id="input-wizard-2" type="text" class="form-control" placeholder="example@gmail.com">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-3" class="form-label">Subject</label>
                    <input id="input-wizard-3" type="text" class="form-control" placeholder="Important Meeting">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-4" class="form-label">Has the Words</label>
                    <input id="input-wizard-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-5" class="form-label">Doesn't Have</label>
                    <input id="input-wizard-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <label for="input-wizard-6" class="form-label">Size</label>
                    <select id="input-wizard-6" class="form-select">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button class="btn btn-secondary w-24">Previous</button>
                    <button class="btn btn-primary w-24 ml-2">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Wizard Layout -->

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Blog Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Add New Post</button>
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
                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Post
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="download" class="w-4 h-4 mr-2"></i> Download Post
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        @foreach (array_slice($fakers, 0, 9) as $faker)
            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                    <div class="w-10 h-10 flex-none image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                    </div>
                    <div class="ml-3 mr-auto">
                        <a href="" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                        <div class="flex text-slate-500 truncate text-xs mt-0.5">
                            <a class="text-primary inline-block truncate" href="">{{ $faker['products'][0]['category'] }}</a> <span class="mx-1">•</span> {{ $faker['formatted_times'][0] }}
                        </div>
                    </div>
                    <div class="dropdown ml-3">
                        <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-vertical" class="w-4 h-4"></i>
                        </a>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="h-40 2xl:h-56 image-fit">
                        <img alt="" class="rounded-md" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                    </div>
                    <a href="" class="block font-medium text-base mt-5">{{ $faker['news'][0]['title'] }}</a>
                    <div class="text-slate-600 dark:text-slate-500 mt-2">{{ $faker['news'][0]['short_content'] }}</div>
                </div>
                <div class="flex items-center px-5 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip" title="Bookmark">
                        <i data-feather="bookmark" class="w-3 h-3"></i>
                    </a>
                    <div class="intro-x flex mr-2">
                        <div class="intro-x w-8 h-8 image-fit">
                            <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][0]) }}" title="{{ $faker['users'][0]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][1]) }}" title="{{ $faker['users'][1]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][2]) }}" title="{{ $faker['users'][2]['name'] }}">
                        </div>
                    </div>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto tooltip" title="Share">
                        <i data-feather="share-2" class="w-3 h-3"></i>
                    </a>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="Download PDF">
                        <i data-feather="share" class="w-3 h-3"></i>
                    </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-full flex text-slate-500 text-xs sm:text-sm">
                        <div class="mr-2">
                            Comments: <span class="font-medium">{{ $faker['totals'][0] }}</span>
                        </div>
                        <div class="mr-2">
                            Views: <span class="font-medium">{{ $faker['totals'][1] }}k</span>
                        </div>
                        <div class="ml-auto">
                            Likes: <span class="font-medium">{{ $faker['totals'][2] }}k</span>
                        </div>
                    </div>
                    <div class="w-full flex items-center mt-3">
                        <div class="w-8 h-8 flex-none image-fit mr-3">
                            <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="flex-1 relative text-slate-600">
                            <input type="text" class="form-control form-control-rounded border-transparent bg-slate-100 pr-10" placeholder="Post a comment...">
                            <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-feather="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="shopping-cart" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month">
                                                33% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                    <div class="text-base text-slate-500 mt-1">Item Sales</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="credit-card" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                    <div class="text-base text-slate-500 mt-1">New Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                    <div class="text-base text-slate-500 mt-1">Total Products</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="user" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                    <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col xl:flex-row xl:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">$15,000</div>
                                    <div class="mt-0.5 text-slate-500">This Month</div>
                                </div>
                                <div class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5"></div>
                                <div>
                                    <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                                    <div class="mt-0.5 text-slate-500">Last Month</div>
                                </div>
                            </div>
                            <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li><a href="" class="dropdown-item">PC & Laptop</a></li>
                                        <li><a href="" class="dropdown-item">Smartphone</a></li>
                                        <li><a href="" class="dropdown-item">Electronic</a></li>
                                        <li><a href="" class="dropdown-item">Photography</a></li>
                                        <li><a href="" class="dropdown-item">Sport</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Weekly Top Seller -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="font-medium xl:ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="font-medium xl:ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span>
                                <span class="font-medium xl:ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="font-medium xl:ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="font-medium xl:ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span>
                                <span class="font-medium xl:ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 xl:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">Target Sales</div>
                                    <div class="text-slate-500 mt-1">300 Sales</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">320 Followers</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">New Products</div>
                                    <div class="text-slate-500 mt-1">1450 Products</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">180 Campaign</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                                        </td>
                                        <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="">
                                                    <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                </a>
                                                <a class="flex items-center text-danger" href="">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                        </div>
                                        <div class="{{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[8]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][0]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][1]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][2]) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[7]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[6]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                            <a href="" class="ml-auto text-primary truncate flex items-center">
                                <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-feather="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">April</div>
                                        <i data-feather="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                        <div class="py-0.5 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>


    <div class="intro-y news xl:w-3/5 p-5 box mt-8">
        <!-- BEGIN: Blog Layout -->
        <h2 class="intro-y font-medium text-xl sm:text-2xl">{{ $fakers[0]['news'][0]['title'] }}</h2>
        <div class="intro-y text-slate-600 dark:text-slate-500 mt-3 text-xs sm:text-sm">
            {{ $fakers[0]['dates'][0] }} <span class="mx-1">•</span> <a class="text-primary" href="">{{ $fakers[0]['products'][0]['category'] }}</a> <span class="mx-1">•</span> 7 Min read
        </div>
        <div class="intro-y mt-6">
            <div class="news__preview image-fit">
                <img alt="" class="rounded-md" src="{{ asset('dist/images/' . $fakers[0]['images'][0]) }}">
            </div>
        </div>
        <div class="intro-y flex relative pt-16 sm:pt-6 items-center pb-6">
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip" title="Bookmark">
                <i data-feather="bookmark" class="w-3 h-3"></i>
            </a>
            <div class="intro-x flex mr-3">
                <div class="intro-x w-8 h-8 sm:w-10 sm:h-10 image-fit">
                    <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}" title="{{ $fakers[0]['users'][0]['name'] }}">
                </div>
                <div class="intro-x w-8 h-8 sm:w-10 sm:h-10 image-fit -ml-4">
                    <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $fakers[0]['photos'][1]) }}" title="{{ $fakers[0]['users'][1]['name'] }}">
                </div>
                <div class="intro-x w-8 h-8 sm:w-10 sm:h-10 image-fit -ml-4">
                    <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $fakers[0]['photos'][2]) }}" title="{{ $fakers[0]['users'][2]['name'] }}">
                </div>
            </div>
            <div class="absolute sm:relative -mt-12 sm:mt-0 w-full flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm">
                <div class="intro-x mr-1 sm:mr-3">
                    Comments: <span class="font-medium">{{ $fakers[0]['totals'][0] }}</span>
                </div>
                <div class="intro-x mr-1 sm:mr-3">
                    Views: <span class="font-medium">{{ $fakers[0]['totals'][1] }}k</span>
                </div>
                <div class="intro-x sm:mr-3 ml-auto">
                    Likes: <span class="font-medium">{{ $fakers[0]['totals'][2] }}k</span>
                </div>
            </div>
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto sm:ml-0 tooltip" title="Share">
                <i data-feather="share-2" class="w-3 h-3"></i>
            </a>
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="Download PDF">
                <i data-feather="share" class="w-3 h-3"></i>
            </a>
        </div>
        <div class="intro-y text-justify leading-relaxed">
            <p class="mb-5">{{ $fakers[1]['news'][0]['content'] }}</p>
            <p class="mb-5">{{ $fakers[2]['news'][0]['content'] }}</p>
            <p>{{ $fakers[3]['news'][0]['content'] }}</p>
        </div>
        <div class="intro-y flex text-xs sm:text-sm flex-col sm:flex-row items-center mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="flex items-center">
                <div class="w-12 h-12 flex-none image-fit">
                    <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>, Author
                    <div class="text-slate-500">Senior Frontend Engineer</div>
                </div>
            </div>
            <div class="flex items-center text-slate-600 dark:text-slate-500 sm:ml-auto mt-5 sm:mt-0">
                Share this post:
                <a href="" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Facebook">
                    <i class="w-3 h-3 fill-current" data-feather="facebook"></i>
                </a>
                <a href="" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Twitter">
                    <i class="w-3 h-3 fill-current" data-feather="twitter"></i>
                </a>
                <a href="" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Linked In">
                    <i class="w-3 h-3 fill-current" data-feather="linkedin"></i>
                </a>
            </div>
        </div>
        <!-- END: Blog Layout -->
        <!-- BEGIN: Comments -->
        <div class="intro-y mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="text-base sm:text-lg font-medium">2 Responses</div>
            <div class="news__input relative mt-5">
                <i data-feather="message-circle" class="w-5 h-5 absolute my-auto inset-y-0 ml-6 left-0 text-slate-500"></i>
                <textarea class="form-control border-transparent bg-slate-100 pl-16 py-6 resize-none" rows="1" placeholder="Post a comment..."></textarea>
            </div>
        </div>
        <div class="intro-y mt-5 pb-10">
            <div class="pt-5">
                <div class="flex">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center">
                            <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                            <a href="" class="ml-auto text-xs text-slate-500">Reply</a>
                        </div>
                        <div class="text-slate-500 text-xs sm:text-sm">{{ $fakers[0]['formatted_times'][0] }}</div>
                        <div class="mt-2">{{ $fakers[0]['news'][0]['short_content'] }}</div>
                    </div>
                </div>
            </div>
            <div class="mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <div class="flex">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][1]) }}">
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center">
                            <a href="" class="font-medium">{{ $fakers[0]['users'][1]['name'] }}</a>
                            <a href="" class="ml-auto text-xs text-slate-500">Reply</a>
                        </div>
                        <div class="text-slate-500 text-xs sm:text-sm">{{ $fakers[1]['formatted_times'][0] }}</div>
                        <div class="mt-2">{{ $fakers[1]['news'][0]['short_content'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Comments -->
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Pricing Layout</h2>
    </div>
    <!-- BEGIN: Pricing Layout -->
    <div class="intro-y box flex flex-col lg:flex-row mt-5">
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="credit-card" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Basic Plan</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 35
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y border-b border-t lg:border-b-0 lg:border-t-0 flex-1 p-5 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16">
            <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Business</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Enterprise</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
    </div>
    <!-- END: Pricing Layout -->
    <!-- BEGIN: Pricing Layout -->
    <div class="intro-y box flex flex-col lg:flex-row mt-5">
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="activity" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Basic Plan</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 35
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y border-b border-t lg:border-b-0 lg:border-t-0 flex-1 px-5 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16">
            <i data-feather="box" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Business</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="send" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Enterprise</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
    </div>
    <!-- END: Pricing Layout -->

    <h2 class="intro-y text-2xl font-medium mt-10 text-center mr-auto">Best Price & Services</h2>
    <!-- BEGIN: Pricing Tab -->
    <div class="intro-y flex justify-center mt-6">
        <ul
            class="
                pricing-tabs
                nav nav-pills
                w-auto box
                rounded-full
                mx-auto
                overflow-hidden
            "
            role="tablist"
        >
            <li id="layout-1-monthly-fees-tab" class="nav-item flex-1" role="presentation">
                <button
                    class="nav-link w-32 lg:w-40 py-2 lg:py-3 active"
                    data-tw-toggle="pill"
                    data-tw-target="#layout-1-monthly-fees"
                    type="button"
                    role="tab"
                    aria-controls="layout-1-monthly-fees"
                    aria-selected="true"
                >
                    Monthly Fees
                </button>
            </li>
            <li id="layout-1-annual-fees-tab" class="nav-item flex-1" role="presentation">
                <button
                    class="nav-link w-32 lg:w-40 py-2 lg:py-3"
                    data-tw-toggle="pill"
                    data-tw-target="#layout-1-annual-fees"
                    type="button"
                    role="tab"
                    aria-controls="layout-1-annual-fees"
                    aria-selected="false"
                >
                    Annual Fees
                </button>
            </li>
        </ul>
    </div>
    <!-- END: Pricing Tab -->
    <!-- BEGIN: Pricing Content -->
    <div class="flex mt-10">
        <div class="tab-content">
            <div id="layout-1-monthly-fees" class="tab-pane flex flex-col lg:flex-row active" role="tabpanel" aria-labelledby="layout-1-monthly-fees-tab">
                <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                    <div class="font-medium text-lg">Monthly Product Pricing</div>
                    <div class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
            </div>
            <div id="layout-1-annual-fees" class="tab-pane flex flex-col lg:flex-row" role="tabpanel" aria-labelledby="layout-1-annual-fees-tab">
                <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                    <div class="font-medium text-lg">Annual Product Pricing</div>
                    <div class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 40
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 90
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Pricing Content -->
    <div class="intro-y box mt-20 px-8 py-12">
        <h2 class="intro-y text-2xl font-medium text-center mr-auto">Best Price & Services</h2>
        <!-- BEGIN: Pricing Tab -->
        <div class="intro-y flex justify-center mt-6">
            <ul
                class="
                    pricing-tabs
                    nav nav-pills
                    w-auto box
                    rounded-full
                    mx-auto
                    overflow-hidden
                "
                role="tablist"
            >
                <li id="layout-2-monthly-fees-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-32 lg:w-40 py-2 lg:py-3 active"
                        data-tw-toggle="pill"
                        data-tw-target="#layout-2-monthly-fees"
                        type="button"
                        role="tab"
                        aria-controls="layout-2-monthly-fees"
                        aria-selected="true"
                    >
                        Monthly Fees
                    </button>
                </li>
                <li id="layout-2-annual-fees-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-32 lg:w-40 py-2 lg:py-3"
                        data-tw-toggle="pill"
                        data-tw-target="#layout-2-annual-fees"
                        type="button"
                        role="tab"
                        aria-controls="layout-2-annual-fees"
                        aria-selected="false"
                    >
                        Annual Fees
                    </button>
                </li>
            </ul>
        </div>
        <!-- END: Pricing Tab -->
        <!-- BEGIN: Pricing Content -->
        <div class="flex mt-10">
            <div class="tab-content">
                <div id="layout-2-monthly-fees" class="tab-pane flex flex-col lg:flex-row active" role="tabpanel" aria-labelledby="layout-2-monthly-fees-tab">
                    <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                        <div class="font-medium text-lg">Monthly Product Pricing</div>
                        <div class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                            <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="intro-y flex-1 border-t border-b lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16 lg:ml-8">
                        <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Business</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                    <div class="intro-y flex-1 py-16">
                        <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                </div>
                <div id="layout-2-annual-fees" class="tab-pane flex flex-col lg:flex-row" role="tabpanel" aria-labelledby="layout-2-annual-fees-tab">
                    <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                        <div class="font-medium text-lg">Annual Product Pricing</div>
                        <div class="mt-3 lg:text-justify text-slate-600">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                            <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="intro-y flex-1 border-t border-b lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16 lg:ml-8">
                        <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Business</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                    <div class="intro-y flex-1 py-16">
                        <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 210
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Pricing Content -->
    </div>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Invoice Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
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
                                <i data-feather="file" class="w-4 h-4 mr-2"></i> Export Word
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="file" class="w-4 h-4 mr-2"></i> Export PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-primary font-semibold text-3xl">INVOICE</div>
                <div class="mt-2">
                    Receipt <span class="font-medium">#1923195</span>
                </div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
            <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                <div>
                    <div class="text-base text-slate-500">Client Details</div>
                    <div class="text-lg font-medium text-primary mt-2">Arnold Schwarzenegger</div>
                    <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                    <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
                </div>
                <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                    <div class="text-base text-slate-500">Payment to</div>
                    <div class="text-lg font-medium text-primary mt-2">Left4code</div>
                    <div class="mt-1">left4code@gmail.com</div>
                </div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">QTY</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">PRICE</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Icewall HTML Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">2</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$50</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">React Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right w-32">3</td>
                            <td class="text-right w-32">$25</td>
                            <td class="text-right w-32 font-medium">$75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-slate-500">Bank Transfer</div>
                <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Total Amount</div>
                <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                <div class="mt-1">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Invoice Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-content">
                        <a href="" class="dropdown-item">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export Word
                        </a>
                        <a href="" class="dropdown-item">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="flex flex-col lg:flex-row pt-10 px-5 sm:px-20 sm:pt-20 lg:pb-20 text-center sm:text-left">
            <div class="font-semibold text-primary text-3xl">INVOICE</div>
            <div class="mt-20 lg:mt-0 lg:ml-auto lg:text-right">
                <div class="text-xl text-primary font-medium">Left4code</div>
                <div class="mt-1">left4code@gmail.com</div>
                <div class="mt-1">8023 Amerige Street Harriman, NY 10926.</div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row border-b px-5 sm:px-20 pt-10 pb-10 sm:pb-20 text-center sm:text-left">
            <div>
                <div class="text-base text-slate-500">Client Details</div>
                <div class="text-lg font-medium text-primary mt-2">Arnold Schwarzenegger</div>
                <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
            </div>
            <div class="mt-10 lg:mt-0 lg:ml-auto lg:text-right">
                <div class="text-base text-slate-500">Receipt</div>
                <div class="text-lg text-primary font-medium mt-2">#1923195</div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">QTY</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">PRICE</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Icewall HTML Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">2</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$50</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">React Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right w-32">3</td>
                            <td class="text-right w-32">$25</td>
                            <td class="text-right w-32 font-medium">$75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-slate-500">Bank Transfer</div>
                <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Total Amount</div>
                <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                <div class="mt-1">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: FAQ Menu -->
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10 border-2 border-primary dark:border-primary">
            <i data-feather="shield" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Single Application</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-feather="send" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Multi Application</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-feather="trending-up" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Custom License</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">
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
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-2" class="accordion p-5">
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
                        <div id="faq-accordion-content-4" class="accordion-header" >
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
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-3" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-4" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-13" aria-expanded="true" aria-controls="faq-accordion-collapse-13">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-13" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-14" aria-expanded="false" aria-controls="faq-accordion-collapse-14">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-15" aria-expanded="false" aria-controls="faq-accordion-collapse-15">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-16" aria-expanded="false" aria-controls="faq-accordion-collapse-16">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="p-5">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Trem of Use
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Author Fees
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Product Review
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Privacy Policy
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">About Our Products</h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">
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
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Related License</h2>
                </div>
                <div id="faq-accordion-2" class="accordion p-5">
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
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Single Application License</h2>
                </div>
                <div id="faq-accordion-3" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>



    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="px-4 pb-3 pt-5">
                    <a class="flex rounded-lg items-center px-4 py-2 bg-primary text-white font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">About Our Products</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Related License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Single Application License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Multi Application License</div>
                    </a>
                </div>
                <div class="px-4 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center px-4 py-2" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Trem of Use</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Author Fees</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Product Review</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Privacy Policy</div>
                    </a>
                </div>
                <div class="px-4 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center px-4 py-2" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">About Our Products</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Related License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Single Application License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Multi Application License</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">About Our Products</h2>
                </div>
                <div id="faq-accordion-1" class="accordion accordion-boxed p-5">
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
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Single Application License</h2>
                </div>
                <div id="faq-accordion-2" class="accordion accordion-boxed p-5">
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
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Multi Application License</h2>
                </div>
                <div id="faq-accordion-3" class="accordion accordion-boxed p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Change Password</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
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
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Email Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Social Networks
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Tax Information
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Change Password -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Change Password</h2>
                </div>
                <div class="p-5">
                    <div>
                        <label for="change-password-form-1" class="form-label">Old Password</label>
                        <input id="change-password-form-1" type="password" class="form-control" placeholder="Input text">
                    </div>
                    <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">New Password</label>
                        <input id="change-password-form-2" type="password" class="form-control" placeholder="Input text">
                    </div>
                    <div class="mt-3">
                        <label for="change-password-form-3" class="form-label">Confirm New Password</label>
                        <input id="change-password-form-3" type="password" class="form-control" placeholder="Input text">
                    </div>
                    <button type="button" class="btn btn-primary mt-4">Change Password</button>
                </div>
            </div>
            <!-- END: Change Password -->
        </div>
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Update Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
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
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Email Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Social Networks
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Tax Information
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Display Information</h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Display Name</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['name'] }}" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2" class="form-label">Nearest MRT Station</label>
                                        <select id="update-profile-form-2" data-search="true" class="tom-select w-full">
                                            <option value="1">Admiralty</option>
                                            <option value="2">Aljunied</option>
                                            <option value="3">Ang Mo Kio</option>
                                            <option value="4">Bartley</option>
                                            <option value="5">Beauty World</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <label for="update-profile-form-3" class="form-label">Postal Code</label>
                                        <select id="update-profile-form-3" data-search="true" class="tom-select w-full">
                                            <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                            <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                            <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                            <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                            <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Phone Number</label>
                                        <input id="update-profile-form-4" type="text" class="form-control" placeholder="Input text" value="65570828">
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="update-profile-form-5" class="form-label">Address</label>
                                        <textarea id="update-profile-form-5" class="form-control" placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary w-20 mt-3">Save</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                    <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-feather="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Personal Information</h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label for="update-profile-form-6" class="form-label">Email</label>
                                <input id="update-profile-form-6" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['email'] }}" disabled>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-7" class="form-label">Name</label>
                                <input id="update-profile-form-7" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['name'] }}" disabled>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-8" class="form-label">ID Type</label>
                                <select id="update-profile-form-8" class="form-select">
                                    <option>IC</option>
                                    <option>FIN</option>
                                    <option>Passport</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-9" class="form-label">ID Number</label>
                                <input id="update-profile-form-9" type="text" class="form-control" placeholder="Input text" value="357821204950001">
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3 xl:mt-0">
                                <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                <input id="update-profile-form-10" type="text" class="form-control" placeholder="Input text" value="65570828">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-11" class="form-label">Address</label>
                                <input id="update-profile-form-11" type="text" class="form-control" placeholder="Input text" value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-12" class="form-label">Bank Name</label>
                                <select id="update-profile-form-12" data-search="true" class="tom-select w-full">
                                    <option value="1">SBI - STATE BANK OF INDIA</option>
                                    <option value="1">CITI BANK - CITI BANK</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-13" class="form-label">Bank Account</label>
                                <input id="update-profile-form-13" type="text" class="form-control" placeholder="Input text" value="DBS Current 011-903573-0">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="button" class="btn btn-primary w-20 mr-auto">Save</button>
                        <a href="" class="text-danger flex items-center">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete Account
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>




@section('script')
    {{--<script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>--}}
@endsection

</section>
