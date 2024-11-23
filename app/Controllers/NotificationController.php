<?php

namespace App\Controllers;

use App\Models\NotificationModel;

class NotificationController extends BaseController
{
    protected $notificationModel;

    public function __construct()
    {
        $this->notificationModel = new NotificationModel();
    }

    // Fetch all notifications for the logged-in user
    public function getNotifications()
    {
        $userId = session()->get('user_id');
        $notifications = $this->notificationModel
                              ->where('user_id', $userId)
                              ->orderBy('created_at', 'DESC')
                              ->findAll();

        return $this->response->setJSON($notifications);
    }

    // Mark all notifications as read
    public function markAllAsRead()
    {
        $userId = session()->get('user_id');
        $this->notificationModel
             ->where('user_id', $userId)
             ->where('is_read', 0)
             ->set(['is_read' => 1])
             ->update();

        return $this->response->setStatusCode(200)->setJSON(['message' => 'All notifications marked as read.']);
    }
}
