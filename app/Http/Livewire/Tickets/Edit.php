<?php

namespace App\Http\Livewire\Tickets;

use App\SupportTicket;
use Illuminate\Http\Request;
use Livewire\Component;

class Edit extends Component
{
    public $question;
    public $action;
    public $SupportTicket;

    public function mount(Request $request, SupportTicket $SupportTicket = null)
    {
        $this->routeName = $request->route()->getName();
        // dd($SupportTicket);
        if ($SupportTicket->id === null) {
            $this->action = 'store';

            return;
        }

        $this->action = 'update';
        $this->SupportTicket = $SupportTicket;
        $this->question = $SupportTicket->question;
    }

    /**
     * Render the component view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.tickets.edit');
    }
    /**
     * Update existing user.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $this->SupportTicket->update([
            'question' => $this->question,
        ]);

        return redirect()->route('tickets');
    }
        /**
     * Store new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $user = SupportTicket::create([
            'question' => $this->question,
        ]);

        return redirect()->route('tickets');
    }
}
