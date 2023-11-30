<div class="mt-5">
    <div class="text-center pb-10">
        <input class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-900 sm:text-sm sm:leading-6"
         type="text"
          wire:model.blur="name"
           wire:mouseenter="save"
          />
         <span  x-data class="absolute -ml-6 mt-2 text-red">
            <span x-text="$wire.name.length"></span>
         </span>
         <x-tasks.button :text="$button" :click="'save'"/>

    </div>




    @foreach ($tasks as $task)
        <x-tasks.task :task="$task" />
    @endforeach
</div>
