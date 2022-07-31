<?php

namespace Mlk\User\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SendEmailToUserNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'title' => 'Send email to user',
            'message' => 'toplearn course is best',
            'url' => route('home.index'),
        ];
    }
}
