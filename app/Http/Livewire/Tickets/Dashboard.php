<?php

namespace App\Http\Livewire\Tickets;

use App\Http\Livewire\Table;

use App\SupportTicket;
use Livewire\Component;

class Dashboard extends Table
{
       /** @var string */
       public $sortField = 'question';
        /** @var array */
        protected $updatesQueryString = [
            'perPage',
            'sortField',
            'sortDirection',
            'search',
        ];
    // public function render()
    // {
    //     return view('livewire.tickets.dashboard');
    // }
        /**
     * Render the component view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $users = SupportTicket::orderBy($this->sortField,$this->sortDirection)->paginate($this->perPage);


        return view('livewire.tickets.dashboard', ['users' => $users]);
    }
     /**
     * Delete user.
     *
     * @param  string  $userId
     * @return void
     */
    public function destroy($id)
    {
        $user = SupportTicket::findOrFail($id);

        $user->delete();

    }
}
