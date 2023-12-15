<div class="mt-5">
    <div class="text-center pb-10">
        <input class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-900 sm:text-sm sm:leading-6"
         type="text"
          wire:model.blur="form.name"
           wire:keyup.enter="save"
          />

         <span  x-data class="absolute -ml-6 mt-2 text-red">
            <span x-text="$wire.form.name.length"></span>
         </span>
         <x-tasks.button :text="$button" :click="'save'"/>
         <div class="text-red-500">@error('form.name') {{ $message }} @enderror</div>

    </div>

    <livewire:tasks.task-list lazy/>

</div>
