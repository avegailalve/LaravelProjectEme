<div class="flex flex-col items-center items-center">

     <H1 class ="text-center text-3xl">{{$counter}}</H1>
     <div>
     <button wire:click="decrement" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Decrement</button>
     <button wire:click="increment" class="px-4 py-2 bg-blue-500 text-white rounded">Increment</button>
    </div>
</div>    