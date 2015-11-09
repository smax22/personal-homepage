<?php
namespace App\Http\Contracts;

interface ContactMessageRepositoryInterface {
    public function createContact($contact_data);

    public function markAsRead($id);

    public function getAllContactMessages($only_unread = false);

    public function getContactMessage($id);
}