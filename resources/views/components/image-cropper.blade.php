@props([
  'model' => 'photo' ,
  'width' => 200 ,
  'height' => 300,
])
<div 
  x-data="{
    showCroppie: false,
    isUploading: false,
    model : @js($model) ,
    sizeWidth : @js($width),
    sizeHeight : @js($height),
    uploadComplete: false,
    hasImage:  false,
    originalSrc: '',
    croppie: {},
    updatePreview() {
      var reader,
        files = this.$refs.input.files;

      reader = new FileReader();

      reader.onload = (e) => {
        this.showCroppie = true;
        this.originalSrc = e.target.result;
        this.bindCroppie(e.target.result);
      };

      reader.readAsDataURL(files[0]);
    },
    init() {
      try {
        this.croppie = new Croppie(this.$refs.croppie, {
          viewport: { width: this.sizeWidth , height: this.sizeHeight, }, 
          boundary: { width: this.sizeWidth , height: this.sizeHeight },
          showZoomer: true,
          enableResize: true
        });                  
      } catch(e) {
          console.log('erreur');
          console.log(e);
      }

    },
    clearPreview() {
      this.$refs.input.value = null;
      this.showCroppie = false;
    },
    swap() {
      this.$refs.input.value = null;
      this.showCroppie = false;
      this.hasImage = false;
      this.$refs.result.src = '';
      //update som kind of array
      this.$refs.submitButton.classList = 'btn btn-primary w-full hidden';

    },
    edit() {
      this.$refs.input.value = null;
      this.showCroppie = true;
      this.hasImage = false;
      this.$refs.result.src = '';
      this.bindCroppie(this.originalSrc); //this.$refs.result.src //or some array value
      //update som kind of array
    },
    saveCroppie() {
      this.croppie
        .result({
          type: 'base64',
          size: 'viewport'
        })
        .then((croppedImage) => {
          console.log('croppedImage');

          this.$refs.result.src = croppedImage;
          this.showCroppie = false;
          this.hasImage = true;
          //update some kind of array

          
          function urltoFile(url, filename, mimeType){
            return (fetch(url)
              .then(function(res){return res.arrayBuffer();})
              .then(function(buf){return new File([buf], filename,{type:mimeType});})
            );
          }
    
          return urltoFile(croppedImage, 'hello.png','image/png');
          
        }).then((myFile) => {


          @this.upload(
            this.model,
            myFile,
            finishCallback = (uploadedFilename) => {

              this.$refs.submitButton.classList = 'btn btn-primary w-full';
              this.$refs.progress.classList = 'progress hidden';
            },
            errorCallback = () => {},
            progressCallback = (event) => {
              this.$refs.progress.classList = 'progress';


              this.$refs.progress.value = event.detail.progress;
              console.log(this.$refs.progress.value);
            }
          );

          /*console.log('finalInput');
          console.log(this.$refs.final);
          console.log(this.$refs.final.files);

          const dataTransfer = new DataTransfer();
          dataTransfer.items.add(myFile);
          this.$refs.final.files = dataTransfer.files;

          console.log(this.$refs.final.files);*/
        }

        );
    },
    bindCroppie(src) {
      setTimeout(() => {
        //avoid problems with croppie container not being visible when binding
        this.croppie.bind({
          url: src
        });
      }, 400);
    }
  }"
  >
  <div x-show="!showCroppie && !hasImage" wire:ignore>
    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
      <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto flex justify-center">
        <x-icon name="photograph" class="rounded-md text-primary h-40" />
      </div>
      <div class="mx-auto cursor-pointer relative mt-5">
        <input type="file" accept="image/*" class="w-full h-full top-0 left-0 absolute opacity-0" x-ref="input" x-on:change="updatePreview()" x-on:dragover="$el.classList.add('active')" x-on:dragleave="$el.classList.remove('active')" x-on:drop="$el.classList.remove('active')" >

        <button type="button" class="btn btn-primary w-full">Changer</button>
      </div>
    </div>
  </div>

  <div x-show="showCroppie" wire:ignore>
    <div id="header-footer-modal-preview" class="modal overflow-y-auto p-5" x-bind:class="showCroppie ? 'show' : ''" tabindex="-1" aria-hidden="false" style=" margin-top: 0px; margin-left: 0px; z-index: 10000;width: 100%;
      height: auto;
      position: absolute;">
      <div class="modal-dialog" style="margin: 0px;width: 100%">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="font-medium text-base mr-auto">Image</h2>
          </div>
          <div class="modal-body">
            <div class="mx-auto">
              <img src alt x-ref="croppie" class="display-block w-full" style="height: {{$height}}px;width: {{$width}}px;">
            </div>
            <div class="py-2 flex justify-between items-center">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" x-on:click="clearPreview()">Supprimer</button>
            <button type="button" class="btn btn-primary" x-on:click="saveCroppie()">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div x-show="!showCroppie && hasImage">
    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
      <div class="cursor-pointer flex justify-center mx-auto relative zoom-in" style="width: fit-content;"  wire:ignore>
        <img src alt x-ref="result" class="rounded-md" style="max-height: 200px;width: auto;" >
        <div title="Modifier?"  class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-info left-0 top-0 -ml-2 -mt-2" x-on:click="edit()">
          <x-icon name="pencil" class="w-4 h-4" />
        </div>
        <div title="Supprimer?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2" x-on:click="swap()">
          <x-icon name="x" class="w-4 h-4" />
        </div>
      </div>
      <div class="mx-auto cursor-pointer relative mt-5">
        <progress class="progress progress-bar" max="100" x-ref="progress"></progress>
        <button type="submit" x-ref="submitButton" class="btn btn-primary w-full hidden">Enregistrer</button>
      </div>
    </div>
  </div> 
</div>