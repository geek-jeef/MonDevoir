<section>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Liste du personnel</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{route('personnel.create')}}" class="btn btn-outline-primary relative justify-start rounded-full pr-12 "> Ajouter du Personnel
              <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                <x-icon name="plus" class="w-6 h-6" solid />
              </span>
            </a>
        </div>
    </div>



    <livewire:personnel.vue.liste-personnel />

</section>