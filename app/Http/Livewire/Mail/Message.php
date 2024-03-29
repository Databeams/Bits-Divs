<?php

namespace App\Http\Livewire\Mail;

use Livewire\Component;

use App\Mail\Message as Msg;
use Illuminate\Support\Facades\Mail;

class Message extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public $confirm = "Skicka";

    public function send()
    {
        Mail::to("joakim@bitsanddivs.com")->send(new Msg($this->name, $this->email, $this->phone, $this->message));
        $this->confirm = "Meddelande skickat!";
    }

    public function render()
    {
        return view('livewire.mail.message');
    }
}
