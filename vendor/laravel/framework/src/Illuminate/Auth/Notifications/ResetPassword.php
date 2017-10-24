<?php

namespace Illuminate\Auth\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Assunto do email')
            ->greeting('Ol&aacute;!')
            ->line('Voc&ecirc; est&aacute; recebendo este e-mail porque n&oacute;s recebemos uma requisi&ccedil;&atilde;o para sua conta.')
            ->action('Reset Password', url(config('localhost:8000/').route('password.reset', $this->token, false)))
            ->line('Se voc&ecirc; n&atilde;o requisitou uma redefini&ccedil;&atilde; de senha, nenhuma a&ccedil;&atilde;o &eacute; necess&aacute;ria.');
    }
}

/*
    //substituir depois

    return (new MailMessage)
            ->subject('Assunto do email')
            ->greeting('Ol&aacute;!')
            ->line('Voc&ecirc; est&aacute; recebendo este e-mail porque n&oacute;s recebemos uma requisi&ccedil;&atilde;o para sua conta.')
            ->action('Reset Password', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('Se voc&ecirc; n&atilde;o requisitou uma redefini&ccedil;&atilde; de senha, nenhuma a&ccedil;&atilde;o &eacute; necess&aacute;ria.');
*/