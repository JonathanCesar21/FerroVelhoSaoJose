<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Controller
{
    
    private $nome;
    private $email;
    private $mensagem;

    public function __construct(Request $request)
    {
        $this->nome = $request->nome;
        $this->email = $request->email;
        $this->mensagem = $request->mensagem;
    }

    public function sendMail()
    {
        $data = array(
            'nome' =>  $this->nome,
            'email' =>  $this->email,
            'mensagem' =>  $this->mensagem
            
        );

        Mail::to(config('mail.from.address') )
            ->send( new SendMail($data) );

        return back()
                ->with('success', 'Obrigado por nos contactar');
        
    }

}
