<div>
  <div class="flex flex-col flex-auto bg-card  rounded overflow-hidden bg-white shadow-lg p-6">

    <form class="w-full max-w-sm" method="POST" wire:submit.prevent="{{ $action }}">
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Question
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
            id="inline-full-name" type="text" wire:model="question" value="{{$question}}">
        </div>
      </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button
            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
            type="submit">
            Guardar
          </button>
        </div>
      </div>
    </form>
  </div>
</div>