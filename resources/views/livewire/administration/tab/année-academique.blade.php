<div >
    <div id="create-session-card" class="intro-y box lg:mt-5">
        <div class="flex items-center text-lg p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Créer Une Session</h2>
        </div>
        <div class="p-5">
            <div class="mb-3 text-danger text-lg ">
                <i data-feather="alert-triangle" class="w-6 h-6 mr-2 float-left"></i> Créez Une Session par Année Scolaire. La derniére Session créée sera considérée comme l'Année Scolaire la plus récente
            </div>
            <div class="mt-3">
                <input type="text" class="form-control" placeholder="2021-2022">
            </div>
            <button type="button" class="btn btn-outline-success mt-4"><i data-feather="check" class="w-4 h-4 mr-2"></i> Créer</button>
        </div>
    </div>
    <div id="change-session-card" class="intro-y box lg:mt-5">
        <div class="flex items-center text-lg p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Changer De Session</h2>
        </div>
        <div class="p-5">
            <div class="mb-3 text-danger text-lg ">
                <i data-feather="alert-triangle" class="w-6 h-6 mr-2 float-left"></i> Ne faites ceci que pour parcourir les données d'une Année Scolaire Précedente
            </div>
            <div class="mt-3">
                <select  data-search="true" class="tom-select w-full">
                    <option value="2019-2020">2019-2020</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>

                </select>
            </div>
            <button type="button" class="btn btn-outline-success mt-4"><i data-feather="refresh-cw" class="w-4 h-4 mr-2"></i> Changer</button>
        </div>
    </div>
    <div id="create-semester-card" class="intro-y box lg:mt-5">
        <div class="flex items-center text-lg p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Créer Une Periode (Trimestre/Semestre) Pour l'année en cours</h2>
        </div>
        <div class="p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <div class="mt-3">
                <label for="new-period-name" class="form-label">Nom de la période</label>
                <input id="new-period-name" type="text" class="form-control" placeholder="1er Trimestre">
            </div>
            <div class="mt-3">
                <label for="new-period-range" class="form-label">Durée de la Période</label>
                <input id="new-period-range" class="datepicker form-control" type="text" data-daterange="true">
            </div>
            <button type="button" class="btn btn-outline-success mt-4"><i data-feather="check" class="w-4 h-4 mr-2"></i> Créer</button>
        </div>
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <button class="btn btn-outline-secondary relative justify-start rounded-full pr-12" data-tw-toggle="modal" data-tw-target="#button-slide-over-preview">
                Voir les periodes pour l'année en cours
                <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                    <i data-feather="plus-circle" class="w-6 h-6 float-left"></i>
                </span>
            </button>
            <div id="button-slide-over-preview" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <a data-tw-dismiss="modal" href="javascript:;">
                            <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                        </a>
                        <div class="modal-header p-5">
                            <h2 class="font-medium text-base mr-auto">Periodes pour l'année en cours 
                                <button class="btn btn-rounded-primary w-24 mr-1 mb-2 whitespace-nowrap">2021-2022</button>
                            </h2>
                        </div>
                        <div class="modal-body">
                            
                                    
                                        <div class="overflow-x-auto">
                                            <table class="table table-striped table-bordered table-hover">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
