<section>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Récupération des Données</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Choisir un fichier de sauvegarde</h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col justify-center">

                        {{--<div class="flex-1 mt-6 xl:mt-0">
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
                        </div>--}}

                                        <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="flex ">

                                                    <i data-feather="database" class="w-16 h-16 border-r border-slate-200 mr-2"></i>
                                                    <div>
                                                        <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                        <div class="text-slate-500">
                                                            This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </form>
                                    

                            {{--<div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <i data-feather="database" class="w-full h-full"></i>

                                   
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full">Choisir un fichier</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                            --}}
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            
        </div>
    </div>
</section>
