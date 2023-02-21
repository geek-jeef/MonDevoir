<section>
  {{debug($settings)}}

  {{--
  @section('styles')
    <style type="text/css">
      .gu-mirror {
        position: fixed !important;
        margin: 0 !important;
        z-index: 9999 !important;
        opacity: .8;
        -ms-filter: "alpha(opacity=80)";
        filter: alpha(opacity=80)
      }

      .gu-hide {
        display: none !important
      }

      .gu-unselectable {
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important
      }

      .gu-transit {
        opacity: .2;
        -ms-filter: "alpha(opacity=20)";
        filter: alpha(opacity=20)
      }

      .gu-mirror {
        position: fixed !important;
        margin: 0 !important;
        z-index: 9999 !important
      }

      .gu-hide {
        display: none !important
      }

      .gu-unselectable {
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important
      }

      .gu-transit {
        box-shadow: inset 0 0 2px #fefefed1;
        -webkit-backdrop-filter: saturate(200%) blur(30px);
        backdrop-filter: saturate(200%) blur(30px);
        background-color: rgba(255, 255, 255, .8) !important;
        box-shadow: inset 0 0 1px 1px rgba(254, 254, 254, .9), 0 20px 27px 0 rgba(0, 0, 0, .05) !important
      }

      .drag_handler {
        background: #fff;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        position: relative;
        float: left;
        top: -3px;
        margin-right: 4px
      }

      .drag_handler:hover {
        cursor: move
      }

      .drag_handler_icon {
        position: relative;
        display: block;
        background: #000;
        width: 24px;
        height: 2px;
        top: 12px;
        transition: .5s ease-in-out
      }

      .drag_handler_icon:before, .drag_handler_icon:after {
        background: #000;
        content: '';
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        transition: .5s ease-in-out
      }

      .drag_handler_icon:before {
        top: 6px
      }

      .drag_handler_icon:after {
        bottom: 6px
      }

      .dark .kanban-board {
        background: #111322;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12)
      }

      .dark .kanban-board .card-header {
        background: 0 0
      }

      .dark .kanban-board p {
        color: #fff !important;
        opacity: .6
      }

      .dark .kanban-item {
        background: 0 0 !important;
        border: 1px solid
      }

      .dark .kanban-title-board {
        color: #fff !important
      }

      .kanban-container {
        position: relative;
        box-sizing: border-box;
        width: auto
      }

      .kanban-container * {
        box-sizing: border-box
      }

      .kanban-container:after {
        clear: both;
        display: block;
        content: ""
      }

      .kanban-board {
        position: relative;
        float: left;
        background: #e9ecef;
        transition: all .3s cubic-bezier(.23, 1, .32, 1);
        border-radius: .75rem
      }

      .kanban-board.disabled-board {
        opacity: .3
      }

      .kanban-board.is-moving.gu-mirror {
        transform: rotate(3deg)
      }

      .kanban-board.is-moving.gu-mirror .kanban-drag {
        overflow: hidden;
        padding-right: 50px
      }

      .kanban-board header {
        font-size: 16px;
        padding: 20px
      }

      .kanban-board header .kanban-title-board {
        font-weight: 600;
        margin: 0;
        padding: 0;
        display: inline;
        color: #344767
      }

      .kanban-board header .kanban-title-button {
        float: right
      }

      .kanban-board .kanban-drag {
        min-height: 200px;
        padding: 20px
      }

      .kanban-board:after {
        clear: both;
        display: block;
        content: ""
      }

      .kanban-item {
        background: #fff;
        padding: 15px;
        margin-bottom: 20px;
        transition: all .3s cubic-bezier(.23, 1, .32, 1)
      }

      .kanban-item img.w-full {
        border-radius: .25rem
      }

      .kanban-item:hover {
        cursor: move
      }

      .kanban-item:last-child {
        margin: 0
      }

      .kanban-item.is-moving.gu-mirror {
        transform: rotate(3deg);
        height: auto !important
      }
    </style>
  @endsection

  @section('script')
    <script src="{{ mix('dist/js/jkanban.js') }}" ></script>
    <script src="{{ mix('dist/js/dragula.js') }}" ></script>

    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event){
        (function() {
          if (document.getElementById("myKanban")) {
            var KanbanTest = new jKanban({
              element: "#myKanban",
              gutter: "10px",
              //widthBoard: "450px",
              click: el => {
                let jkanbanInfoModal = document.getElementById("jkanban-info-modal");
                let jkanbanInfoModalTaskId = document.querySelector("#jkanban-info-modal #jkanban-task-id");
                let jkanbanInfoModalTaskTitle = document.querySelector("#jkanban-info-modal #jkanban-task-title");
                let jkanbanInfoModalTaskAssignee = document.querySelector("#jkanban-info-modal #jkanban-task-assignee");
                let jkanbanInfoModalTaskDescription = document.querySelector("#jkanban-info-modal #jkanban-task-description");
                let taskId = el.getAttribute("data-eid");
                let taskTitle = el.querySelector('p.text').innerHTML;
                let taskAssignee = el.getAttribute("data-assignee");
                let taskDescription = el.getAttribute("data-description");
                jkanbanInfoModalTaskId.value = taskId;
                jkanbanInfoModalTaskTitle.value = taskTitle;
                jkanbanInfoModalTaskAssignee.value = taskAssignee;
                jkanbanInfoModalTaskDescription.value = taskDescription;
              },
              buttonClick: function(el, boardId) {
                if (document.querySelector("[data-id='" + boardId + "'] .itemform") === null) {
                  var formItem = document.createElement("form");
                  formItem.setAttribute("class", "itemform");
                  formItem.innerHTML = `<div class="mb-4">
                      <textarea class="min-h-unset box-border focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" rows="2" autofocus></textarea>
                      </div>
                      <div class="box-border mb-4">
                          <button type="submit" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft .mod bg-lime shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Add</button>
                          <button type="button" id="kanban-cancel-item" class="inline-block px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft .mod bg-red shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 mr-2 float-right">Cancel</button>
                      </div>`;
                  KanbanTest.addForm(boardId, formItem);
                  formItem.addEventListener("submit", function(e) {
                    e.preventDefault();
                    var text = e.target[0].value;
                    let newTaskId = "_" + text.toLowerCase().replace(/ /g, "_") + boardId;
                    KanbanTest.addElement(boardId, {
                      id: newTaskId,
                      title: text,
                      class: ["rounded-lg"]
                    });
                    formItem.parentNode.removeChild(formItem);
                  });
                  document.getElementById("kanban-cancel-item").onclick = function() {
                    formItem.parentNode.removeChild(formItem);
                  };
                }
              },
              addItemButton: true,
              boards: [{
                id: "_backlog",
                title: "Backlog",
                item: [{
                  id: "_task_1_title_id",
                  title: '<p class="text mb-0" data-target="#jkanban-info-modal" data-toggle="modal">Click me to change title</p>',
                  class: ["rounded-lg"]
                }, {
                  id: "_task_2_title_id",
                  title: '<p class="text mb-0">Drag me to "In progress" section</p>',
                  class: ["rounded-lg"]
                }, {
                  id: "_task_do_something_id",
                  title: '<img src="../../assets/img/office-dark.jpg" class="w-full"><span class="mt-4 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-fuchsia">Pending</span><p class="text mt-2">Website Design: New cards for blog section and profile details</p><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-size-sm leadint-tight"></i><span class="text-size-sm leading-tight">3</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Audrey Love"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class="w-full !rounded-circle"></a></div></div>',
                  assignee: "Done Joe",
                  description: "This task's description is for something, but not for anything",
                  class: ["rounded-lg"]
                }, ]
              }, {
                id: "_progress",
                title: "In progress",
                item: [{
                  id: "_task_3_title_id",
                  title: '<span class="mt-2 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-orange">Errors</span><p class="text mt-2">Fix Firefox errors</p><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-sm"></i><span class="text-sm">11</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class="w-full !rounded-circle"></a></div></div>',
                  class: ["rounded-lg"]
                }, {
                  id: "_task_4_title_id",
                  title: '<span class="mt-2 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-cyan">Updates</span><p class="text mt-2">Argon Dashboard PRO - Angular 11</p><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-sm"></i><span class="text-sm">3</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-5.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class="w-full !rounded-circle"></a></div></div>',
                  class: ["rounded-lg"]
                }, {
                  id: "_task_do_something_4_id",
                  title: '<img src="../../assets/img/meeting.jpg" class="w-full"><span class="mt-3 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-cyan">Updates</span><p class="text mt-2">Vue 3 Updates</p><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-sm"></i><span class="text-sm">9</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Audrey Love"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class="w-full !rounded-circle"></a></div></div>',
                  assignee: "Done Joe",
                  description: "This task's description is for something, but not for anything",
                  class: ["rounded-lg"]
                }]
              }, {
                id: "_working",
                title: "In review",
                item: [{
                  id: "_task_do_something_2_id",
                  title: '<span class="mt-2 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-orange">In Testing</span><p class="text mt-2">Responsive Changes</p><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-sm"></i><span class="text-sm">11</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-2.jpg" class="w-full !rounded-circle"></a></div></div>',
                  assignee: "Done Joe",
                  description: "This task's description is for something, but not for anything",
                  class: ["rounded-lg"]
                }, {
                  id: "_task_run_id",
                  title: '<span class="mt-2 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-lime">In review</span><p class="text mt-2 mb-1">Change images dimension</p><div class="flex-1-0"><div class="h-0.75 text-size-xs flex overflow-visible rounded-lg bg-gray-200 mb-4 "><div class="transition-width duration-600 ease-soft rounded-1 -mt-0.4 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap bg-lime-500 text-center text-white " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div></div></div><div class="flex"><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-3.jpg" class="w-full !rounded-circle"></a></div></div>',
                  assignee: "Done Joe",
                  description: "This task's description is for something, but not for anything",
                  class: ["rounded-lg"]
                }, {
                  id: "_task_do_something_3_id",
                  title: '<span class="mt-2 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-cyan">In Review</span><p class="text mt-2 mb-1">Update Links</p><div class="flex-1-0"><div class="h-0.75 text-size-xs flex overflow-visible rounded-lg bg-gray-200 mb-4 "><div class="transition-width duration-600 ease-soft rounded-1 -mt-0.4 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap bg-cyan-500 text-center text-white " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div></div></div><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-sm"></i><span class="text-sm">6</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jana Lucie"><img alt="Image placeholder" src="../../assets/img/team-5.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Mike Alis"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class="w-full !rounded-circle"></a></div></div>',
                  assignee: "Done Joe",
                  description: "This task's description is for something, but not for anything",
                  class: ["rounded-lg"]
                }]
              }, {
                id: "_done",
                title: "Done",
                item: [{
                  id: "_task_all_right_id",
                  title: '<img src="../../assets/img/home-decor-1.jpg" class="w-full"><span class="mt-3 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-lime">Done</span><p class="text mt-2">Redesign for the home page</p><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-sm"></i><span class="text-sm">8</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Jessica Rowland"><img alt="Image placeholder" src="../../assets/img/team-5.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Audrey Love"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class="w-full !rounded-circle"></a></div></div>',
                  assignee: "Done Joe",
                  description: "This task's description is for something, but not for anything",
                  class: ["rounded-lg"]
                }, {
                  id: "_task_ok_id",
                  title: '<span class="mt-2 py-1.8-em px-3-em text-size-xxs-em rounded-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white .mod bg-lime">Done</span><p class="text mt-2">Schedule winter campaign</p><div class="flex"><div> <i class="fa fa-paperclip mr-1 text-sm"></i><span class="text-sm">2</span></div><div class="ml-auto"><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Michael Laurence"><img alt="Image placeholder" src="../../assets/img/team-1.jpg" class="w-full !rounded-circle"></a><a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-2 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-toggle="tooltip" data-original-title="Michael Lewis"><img alt="Image placeholder" src="../../assets/img/team-4.jpg" class="w-full !rounded-circle"></a></div></div>',
                  assignee: "Done Joe",
                  description: "This task's description is for something, but not for anything",
                  class: ["rounded-lg"]
                }]
              }]
            });
            var addBoardDefault = document.getElementById("jkanban-add-new-board");
            addBoardDefault.addEventListener("click", function() {
              let newBoardName = document.getElementById("jkanban-new-board-name").value;
              let newBoardId = "_" + newBoardName.toLowerCase().replace(/ /g, "_");
              KanbanTest.addBoards([{
                id: newBoardId,
                title: newBoardName,
                item: []
              }]);
              document.querySelector('#new-board-modal').classList.remove('show');
              document.querySelector('body').classList.remove('modal-open');
              document.querySelector('.modal-backdrop').remove();
            });
            var updateTask = document.getElementById("jkanban-update-task");
            updateTask.addEventListener("click", function() {
              let jkanbanInfoModalTaskId = document.querySelector("#jkanban-info-modal #jkanban-task-id");
              let jkanbanInfoModalTaskTitle = document.querySelector("#jkanban-info-modal #jkanban-task-title");
              let jkanbanInfoModalTaskAssignee = document.querySelector("#jkanban-info-modal #jkanban-task-assignee");
              let jkanbanInfoModalTaskDescription = document.querySelector("#jkanban-info-modal #jkanban-task-description");
              KanbanTest.replaceElement(jkanbanInfoModalTaskId.value, {
                title: jkanbanInfoModalTaskTitle.value,
                assignee: jkanbanInfoModalTaskAssignee.value,
                description: jkanbanInfoModalTaskDescription.value
              });
              jkanbanInfoModalTaskId.value = jkanbanInfoModalTaskId.value;
              jkanbanInfoModalTaskTitle.value = jkanbanInfoModalTaskTitle.value;
              jkanbanInfoModalTaskAssignee.value = jkanbanInfoModalTaskAssignee.value;
              jkanbanInfoModalTaskDescription.value = jkanbanInfoModalTaskDescription.value;
              document.querySelector('#jkanban-info-modal').classList.remove('show');
              document.querySelector('body').classList.remove('modal-open');
              document.querySelector('.modal-backdrop').remove();
            });
          }
        })();
      });
    </script>
  @endsection
  <livewire:test.element />
    <x-input.auto-complete />

  --}}

<style>
  @import url('http://fonts.cdnfonts.com/css/trade-gothic-lt-std');
</style>

{{--
 <div class="flex justify-center text-xl mt-8 mx-auto font-amnesty font-roboto">
   <div class="flex gap-1 px-3 py-2" style="font-family: 'Trade Gothic LT Std'; color: #231f20;">
    <div class="self-end font-amnesty font-bold text-8xl" style="line-height: 5rem; margin-right: 5px;">md</div>
    <div class="self-end">
      <svg version="1.0" xmlns="http://www.w3.org/2000/svg" style="height: 4.5rem; width: auto; rotate: 15deg"
       width="640.000000pt" height="1280.000000pt" viewBox="0 0 640.000000 1280.000000"
       preserveAspectRatio="xMidYMid meet">
      <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
      fill="#ff9800" stroke="none">
      <path d="M5506 12785 c-11 -8 -26 -15 -34 -15 -21 0 -81 -30 -147 -73 -198
      -131 -490 -438 -900 -945 -55 -68 -111 -138 -125 -157 -14 -18 -79 -105 -145
      -193 -235 -313 -447 -615 -658 -937 -51 -77 -94 -144 -96 -150 -2 -5 -33 -55
      -69 -110 -36 -55 -80 -124 -99 -152 -51 -79 -160 -258 -279 -458 -58 -99 -115
      -192 -125 -207 -11 -15 -19 -29 -19 -32 0 -2 -21 -40 -46 -83 -59 -98 -274
      -484 -274 -490 0 -2 -17 -35 -39 -71 -81 -139 -481 -934 -481 -955 0 -3 -23
      -54 -50 -113 -28 -60 -55 -118 -59 -129 -5 -11 -16 -36 -24 -55 -14 -32 -39
      -89 -71 -165 -58 -136 -86 -206 -203 -510 -8 -22 -19 -49 -24 -60 -22 -53
      -185 -539 -204 -610 -19 -70 -52 -190 -71 -255 -36 -127 -110 -427 -124 -505
      -4 -22 -17 -87 -29 -145 -11 -58 -25 -127 -31 -155 -11 -54 -32 -192 -50 -320
      -6 -44 -15 -108 -21 -141 -5 -34 -9 -80 -9 -102 0 -39 -28 -273 -33 -279 -2
      -1 -59 53 -127 120 -127 125 -314 267 -350 267 -31 0 -25 -20 33 -106 221
      -332 357 -626 421 -915 10 -41 16 -93 14 -114 -3 -36 -6 -40 -38 -47 -67 -15
      -199 2 -405 53 -105 26 -116 23 -68 -23 75 -69 242 -169 365 -217 36 -14 36
      -31 -1 -31 -72 0 -237 -71 -387 -167 -110 -70 -144 -97 -144 -113 0 -16 59 -8
      130 17 53 20 126 40 220 62 126 30 329 36 369 11 11 -6 9 -20 -8 -66 -12 -33
      -40 -115 -63 -184 -22 -69 -44 -134 -48 -145 -5 -11 -16 -45 -26 -75 -9 -30
      -20 -64 -25 -75 -4 -11 -14 -42 -23 -70 -9 -27 -42 -131 -74 -230 -33 -99 -76
      -234 -96 -300 -21 -66 -48 -151 -61 -190 -12 -38 -35 -110 -50 -160 -15 -49
      -40 -130 -55 -180 -39 -125 -87 -279 -107 -345 -8 -30 -19 -66 -24 -80 -4 -14
      -19 -65 -34 -115 -15 -49 -31 -101 -35 -115 -5 -14 -16 -52 -25 -85 -9 -33
      -21 -71 -25 -85 -4 -14 -16 -52 -25 -85 -10 -33 -21 -69 -25 -80 -8 -23 -39
      -126 -51 -170 -4 -16 -15 -54 -23 -84 -23 -77 -21 -91 11 -91 19 0 40 14 74
      50 55 59 56 60 155 395 15 50 36 117 47 150 10 33 26 85 33 115 8 30 33 114
      55 185 22 72 45 144 50 160 17 55 91 289 109 345 9 30 41 129 70 220 29 91 67
      210 85 265 18 55 45 138 59 185 15 47 33 101 41 120 8 19 26 76 41 125 15 50
      30 97 35 105 4 8 19 53 34 100 14 47 30 94 34 105 14 34 33 89 38 110 2 11 8
      29 13 40 5 11 11 29 13 40 3 11 34 103 70 205 35 102 78 228 96 280 18 52 36
      104 41 115 4 11 15 43 25 70 9 28 20 59 25 70 5 11 10 29 13 40 3 11 24 72 47
      135 23 63 61 169 85 235 23 66 62 172 85 235 23 63 48 135 57 160 8 25 21 59
      28 75 8 17 20 50 29 75 8 25 27 77 42 115 14 39 35 95 46 125 11 30 25 69 32
      85 7 17 19 46 26 65 13 36 40 109 83 220 14 36 35 92 47 125 13 33 28 74 35
      90 7 17 19 48 28 70 26 69 89 229 102 260 7 17 27 68 45 115 17 47 38 99 45
      115 7 17 25 62 40 100 15 39 34 86 42 105 19 46 27 66 49 120 10 25 33 78 51
      118 18 41 33 79 33 86 0 6 4 16 9 21 4 6 22 44 39 85 58 144 130 315 150 360
      11 25 54 126 97 225 42 99 82 194 90 210 21 48 65 146 87 195 11 25 30 68 43
      95 12 28 30 68 40 90 22 51 77 169 119 260 81 171 116 246 116 250 0 2 63 134
      141 292 78 158 166 340 196 403 107 226 246 493 424 817 15 26 38 70 53 97 14
      27 30 54 35 60 4 6 28 47 51 91 42 77 239 413 285 485 12 19 55 89 96 155 40
      66 77 125 81 130 5 6 32 46 60 90 57 91 156 236 229 340 27 39 57 81 66 95 61
      90 381 510 389 510 8 0 -18 -43 -50 -84 -123 -157 -431 -623 -621 -941 -42
      -71 -88 -148 -102 -170 -38 -62 -163 -276 -163 -280 0 -2 -22 -42 -50 -90 -27
      -48 -50 -89 -50 -91 0 -4 -111 -204 -130 -234 -5 -8 -27 -49 -49 -90 -21 -41
      -56 -106 -76 -145 -106 -201 -436 -861 -467 -935 -20 -47 -94 -209 -166 -361
      -150 -318 -182 -388 -182 -394 0 -3 -17 -42 -39 -88 -21 -45 -45 -98 -54 -117
      -8 -19 -30 -66 -47 -105 -18 -38 -40 -90 -50 -115 -10 -25 -33 -79 -52 -120
      -19 -41 -40 -91 -47 -110 -8 -19 -22 -53 -31 -75 -17 -37 -49 -111 -70 -160
      -4 -11 -20 -46 -34 -78 -14 -32 -26 -60 -26 -63 0 -3 -11 -29 -24 -57 -13 -29
      -31 -71 -39 -94 -9 -23 -25 -61 -36 -85 -10 -24 -42 -99 -69 -168 -28 -69 -67
      -165 -88 -215 -20 -49 -59 -146 -87 -215 -27 -69 -53 -134 -58 -145 -5 -11
      -56 -144 -114 -295 -58 -151 -110 -284 -114 -295 -5 -11 -26 -65 -46 -120 -21
      -55 -48 -127 -60 -160 -13 -33 -30 -80 -39 -105 -8 -25 -27 -76 -42 -115 -14
      -38 -41 -113 -60 -165 -19 -52 -38 -104 -43 -115 -5 -11 -22 -56 -36 -100 -15
      -44 -33 -93 -40 -110 -7 -16 -25 -64 -38 -105 -14 -41 -44 -127 -67 -190 -23
      -63 -50 -140 -60 -170 -10 -30 -44 -127 -75 -215 -31 -88 -69 -198 -85 -245
      -16 -47 -34 -98 -40 -115 -33 -92 -130 -396 -130 -409 0 -8 21 -30 48 -49 71
      -53 144 -133 204 -222 64 -95 89 -108 81 -43 -12 101 -87 255 -168 346 -31 35
      -42 53 -33 56 7 3 99 7 203 11 184 5 215 9 395 41 230 41 461 134 625 252 175
      126 407 422 331 422 -8 0 -17 -4 -20 -9 -15 -24 -128 -89 -191 -111 -80 -26
      -315 -42 -315 -21 0 6 8 11 18 11 10 0 22 4 27 9 6 5 51 30 100 55 50 26 99
      52 110 59 182 111 310 210 409 318 62 66 181 222 210 274 9 17 25 44 35 60 68
      114 87 165 60 165 -6 0 -42 -27 -81 -60 -151 -131 -386 -263 -538 -302 -226
      -59 -372 -76 -523 -60 -63 7 -132 12 -153 12 -36 1 -38 2 -20 15 10 8 44 19
      75 26 70 14 270 79 336 109 116 52 286 141 352 184 39 25 74 46 77 46 4 0 37
      22 75 50 38 27 74 50 80 50 6 0 11 4 11 8 0 4 23 25 51 46 104 77 286 246 365
      337 83 96 234 298 316 424 86 132 165 274 269 485 44 91 85 174 89 185 5 11
      21 47 35 80 15 33 34 78 42 100 8 22 24 60 35 85 11 25 27 62 34 83 7 20 20
      52 28 70 32 71 152 427 161 480 8 42 1 45 -48 23 -106 -47 -367 -123 -367
      -107 0 8 41 32 114 70 152 78 368 268 489 431 120 161 194 300 171 322 -3 4
      -56 -20 -117 -52 -126 -66 -209 -99 -314 -124 -98 -24 -110 -16 -33 22 241
      118 430 280 570 487 56 84 165 304 230 465 12 30 26 64 30 75 30 74 74 209
      102 317 17 67 3 78 -52 43 -54 -34 -149 -77 -225 -103 -126 -41 -243 -72 -276
      -72 -30 0 -20 8 81 61 176 93 311 199 418 328 152 182 398 593 594 991 42 85
      85 175 96 200 48 110 124 295 143 352 12 35 25 68 29 73 4 6 10 21 13 35 3 14
      17 68 32 120 48 172 62 244 90 460 34 267 7 586 -68 795 -57 156 -119 247
      -266 387 -102 97 -214 168 -265 168 -12 0 -31 7 -42 15 -12 9 -42 14 -79 14
      -37 0 -67 -5 -79 -14z"/>
      </g>
      </svg>
    </div>
   </div>
 </div>
--}}


</section>

