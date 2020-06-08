<div>
    <div class="flex flex-col flex-auto bg-card  rounded overflow-hidden bg-white shadow-lg">
        <div class="p-6">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                  <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                    Tickets
                  </h2>
                  <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
                    <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mr-6">
                      <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                      </svg>
                      Full-time
                    </div>
                    
                  </div>
                </div>
                <div class="mt-5 flex lg:mt-0 lg:ml-4">
                  
              
                  <span class="sm:ml-3 shadow-sm rounded-md">
                    <a href="/tickets/new" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out">
                        <svg class="-ml-1 mr-2 h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                          </svg>
                      Agregar
                    </a>
                  </span>
              
                  
                </div>
              </div>
        </div>
        <x-tables.table>

            <x-slot name="thead_tfoot">
                <tr>
                    <th
                        class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                        #
                    </th>
                    <th
                        class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                        <a href="#" wire:click.prevent="sortBy('question')" data-turbolinks="false">question</a>
                        <x-tables.sort-by :sortField="$sortField" :sortDirection="$sortDirection" field="question" />
                    </th>


                    <th
                        class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                        Edit
                    </th>
                    <th
                        class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                        Delete
                    </th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                @forelse($users as $user)
                <tr class="@if($loop->odd) odd @endif">
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-700">
                        {{ $loop->iteration }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-700">
                        {{ $user->question }}</td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-700">
                        <a href="{{ route('tickets.edit', $user) }}"><span class="fas fa-edit"></a></span>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-700">
                    
                    <button type="button" class="btn btn-light" @wire:click="destroy({{$user->id}} )"><span class='fa fa-times'></span></button>
                        
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No results.</td>
                </tr>
                @endforelse
            </x-slot>

        </x-tables.table>
    </div>
</div>