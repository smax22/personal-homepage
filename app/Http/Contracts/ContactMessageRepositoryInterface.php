<?php
namespace App\Http\Contracts;

interface ContactMessageRepositoryInterface {
    public function createContact($contact_data);

    public function markAsRead($id);
}